<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('articles')->insert([
            'id' =>'1',
            'title' => 'Is there a link between blood infections and colorectal cancer?',
            'description' => 'New research has found a link between blood infections due to anaerobic bacteria and colorectal cancer. This finding may help with future cancer screenings.',
            'content' => 'Colorectal cancer occurs in the colon or the rectum. According to the Centers for Disease Control and Prevention (CDC), it is the third most common type of cancer in the United States. Around 90% of cases occur in people aged 50 years or older.

As well as age, risk factors include a family history of colorectal cancer, some genetic syndromes, obesity, a lack of exercise, a diet low in fruit and vegetables, and inflammatory bowel disease.

Anaerobic bacteria, unlike aerobic bacteria, do not require oxygen in order to function. They are a normal part of the human body, existing in various locations, including the gut.

They usually do not cause infections, but when they do, it is most often in the area that the bacteria inhabit.

The authors of the new study note that previous research had linked specific types of anaerobic bacteria with colorectal cancer. The researchers wanted to further explore this link through a large-scale study. 

-------------------------------------------
The study took place in two regions of Denmark between 2007 and 2016. It involved over 2 million participants.

For the analysis, the team gathered data on 45,760 blood infections, including information about the type of pathogens present in the participants’ bloodstreams.

The authors then compared this information with data from the Danish Colorectal Cancer Group Database. In particular, they looked for new cases of colorectal cancer, especially those that developed following a blood infection from any of the bacteria already associated with colorectal cancer.

Of the 45,760 people who had a bacterial blood infection, 492 (1.1%) later developed colorectal cancer. Of these, 241 (0.5%) were within the first year of the bacterial blood infection.

The researchers matched each of these people by age and sex to a control group of five people who had not had a blood infection.

---------------------------------
The study authors found that anaerobic bacterial blood infections were associated with a significant increase in the risk of colorectal cancer.

For example, those who had a Clostridium septicum infection were 42 times more likely to develop colorectal cancer within the next year.

Only 0.5% of the control group, who had not had a bacterial infection, developed colorectal cancer, compared with 20.8% of those who had a C. septicum infection.

As the study authors conclude in their paper: “In this large scale cohort study, it was found that, in [people] with blood infections caused by selected anaerobic bacteria, the risk of developing colorectal cancer was increased by up to 42 times compared with [people] with blood infections caused by aerobic bacteria such as [Escherichia coli] or [Staphylococcus aureus] or negative controls.”

-----------------------------------------

Study co-author Dr. Ulrik Justesen, from Odense University Hospital in Denmark, notes that although there was a clear link between anaerobic bacterial infections of the blood and colorectal cancer, it was not clear what the causal relationship was between them.

In Dr. Justesen’s words: “At this stage, we are not sure if the bacteria are directly causing cases of colorectal cancer, or if the blood infection with these bacteria is itself caused by the cancer. It’s an example of the question ‘Is this the chicken or the egg?’”

Looking ahead, Dr. Justesen and team want to gain more detail on bacteria in people with cancer.

He says: “Our follow-up research of this study will focus on the specific bacteria from [people with cancer] to see if we can identify specific characteristics that could be implicated in cancer development. If this is the case, it could be of great importance when it comes to screening and treatment of colorectal cancer.”

This may mean that screening for colorectal cancer could be more effective. According to Dr. Justesen, “With regards to screening, if we saw these high risk bacteria in combination with advanced age, then it would definitely be worth screening the [person] for colorectal cancer.”

Although the results are interesting, this research is awaiting presentation at a scientific conference. Therefore, details about the full methodology and results are not yet available.

The researchers have not yet written a full paper, and the results have not gone through peer review. Because of this, it is not possible to scrutinize the findings in full.',
            'image' => '20200602165207.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);




        DB::table('articles')->insert([
            'id' =>'2',
            'title' => 'Using convalescent blood to treat COVID-19: The whys and hows',
            'description' => 'Some researchers and doctors have started using plasma from people recovering from COVID-19 to treat others who have developed the disease. Medical News Today spoke to Dr. Arturo Casadevall, from Johns Hopkins University, to learn more about this approach.',
            'content' => 'All data and statistics are based on publicly available data at the time of publication. Some information may be out of date. Visit our coronavirus hub and follow our live updates page for the most recent information on the COVID-19 outbreak.

In the search for an effective treatment for COVID-19, an old method of fighting infectious diseases has recently resurfaced: transfusions with convalescent plasma. Plasma is a component of blood.

This method has a simple premise. The blood of people who have recovered from an infection contains antibodies. Antibodies are molecules that have learned to recognize and fight the pathogens, such as viruses, that have caused disease.

Doctors can separate plasma, one of the blood components that contain such antibodies, and administer it to people whose bodies are currently fighting an infectious disease. This can help their immune systems reject the pathogen more efficiently.

Recently, researchers and healthcare professionals have been looking into the possibility of using this method to treat people with COVID-19, the respiratory disease caused by the SARS-CoV-2 virus.

In the United States, a group of researchers and doctors from 57 institutions, including Johns Hopkins University, the Albert Einstein College of Medicine, and the Icahn School of Medicine at Mount Sinai, are investigating and applying convalescent plasma therapy for COVID-19.

This is a concerted initiative — called the “National COVID-19 Convalescent Plasma Project” — born after the publication of a viewpoint paper in The Journal of Clinical Investigation in March, 2020.

The paper argued for the potential merits of passive antibody therapy in the treatment of COVID-19. It was authored by immunologists Dr. Arturo Casadevall, chair of the Molecular Microbiology & Immunology Department at Johns Hopkins Bloomberg School of Public Health, and Dr. Liise-anne Pirofski, professor of Infectious Diseases in the Department of Medicine at the Albert Einstein College of Medicine.

To understand more about convalescent plasma therapy, its merits, its risks, and its current use in COVID-19 treatments, Medical News Today recently spoke to Dr. Casadevall.

Here is what he told us, alongside more information on the current state of convalescent plasma therapy.',
            'image' => '20200602170218.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('articles')->insert([
            'id' =>'3',
            'title' => 'Sleep calculator: How much sleep do you need?',
            'description' => 'To get into a good sleep routine, a person can start by figuring out exactly how much sleep they need. Then, they can determine when they should be going to bed and waking up for optimal health.',
            'content' => 'Though there are general guidelines, some people need more sleep than others, due to their lifestyle, any health conditions, and their genetic makeup.

The National Sleep Foundation (NSF) recommend that people of different ages get the following amounts of sleep every 24 hours:

1- newborns (0–3 months): 14–17 hours

2- infants (4–11 months): 12–15 hours

3- toddlers (1–2 years): 11–14 hours

4- preschoolers (3–5 years): 10–13 hours

5- school-age children (6–13 years): 9–11 hours

6- teenagers (14–17 years): 8–10 hours

7- younger adults (18–25 years): 7–9 hours

8- adults (26–64 years): 7–9 hours
older adults (65 years and above): 7–8 hours

Sleep cycles

To be properly rested, the body must go through several sleep cycles per night, including rapid eye movement (REM) sleep and non-REM sleep.

The stages of sleep include:

Stage 1 non-REM: This lasts for only a few minutes. Breathing, heart rate, and brain waves begin to slow.

Stage 2 non-REM: This stage occurs before the body enters deep sleep. The muscles relax even more, and body temperature drops.

Stage 3 non-REM: A person needs to reach this stage of deep sleep to feel rested, and it lasts longer in the first half of the night. Breathing and heart rate slow to their lowest levels.

REM sleep: Within 90 minutes of falling asleep, a person enters REM sleep. The brain becomes more active, the most dreaming occurs, and the arms and legs become temporarily paralyzed.

If the body does not go through these stages several times a night, the person may wake feeling fatigued and unfocused.',
            'image' => '20200602173041.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);



//
//
//        DB::table('articles')->insert([
//            'title' => '',
//            'description' => '',
//            'content' => '',
//            'image' => '',
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//
//
//        DB::table('articles')->insert([
//            'title' => '',
//            'description' => '',
//            'content' => '',
//            'image' => '',
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//
//

    }


}
