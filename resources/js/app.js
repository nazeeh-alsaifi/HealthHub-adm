/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

// let the code inside this if run only if the url has home in it
let url = window.location.href;
if(url.indexOf('home') !== -1) {


//slidershow script

    slides = document.querySelector(".slider").children;


    prev = document.querySelector(".prev");

    next = document.querySelector(".next");

    indicator = document.querySelector(".indicator");

    index = 0;

    prev.addEventListener("click", function () {
        prevSlide();
        updateCircleIndicator();
        resetTimer();
    })

    next.addEventListener("click", function () {
        nextSlide();
        updateCircleIndicator();
        resetTimer();
    })

// ----create circle indicator----

    function circleIndicator() {

        for (let i = 0; i < slides.length; i++) {
            div = document.createElement("div");
            div.innerHTML = i +1;
            div.setAttribute("onclick", "indicateSlide(this)");
            div.id = i;
            if (i == 0) {
                div.className = "active-slide";
            }
            indicator.appendChild(div);
        }

    }

    circleIndicator();
    indicateSlide = function (element) {
        console.log(element.id);
        index = element.id;
        changeSlide();
        updateCircleIndicator();
        resetTimer();
    }

//to update the circle that is active
    function updateCircleIndicator() {
        for (let i = 0; i < indicator.children.length; i++) {
            indicator.children[i].classList.remove("active-slide");
        }
        indicator.children[index].classList.add("active-slide");
    }

    function prevSlide() {
        if (index == 0) {
            index = slides.length - 1;
        } else {
            index--;
        }
        changeSlide();

    }

    function nextSlide() {

        if (index == slides.length - 1) {
            index = 0;
        } else {
            index++;
        }

        changeSlide();
    }

    function changeSlide() {

        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.remove("active-slide");
        }
        slides[index].classList.add("active-slide");
    }

//autoplay slides
    timer = setInterval(autoPlay, 6000);

    function resetTimer() {
        //when click on the indicator or click button ->stop the timer
        clearInterval(timer);
        //start the timer again
        timer = setInterval(autoPlay, 6000);
    }

    function autoPlay() {
        nextSlide();
        updateCircleIndicator();

    }
}
//scroll in the same page script
// Select all links with hashes
$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1700)
                // Callback after animation
                    // Must change focus!

            }
        }
    });


//refresh captcha
$('.btn-refresh').click(function () {
    $.ajax({
        type: 'GET',
        url:  '/refresh_captcha',
        success: function (data) {
            $('.captcha span').html(data);
        }
    });
});

