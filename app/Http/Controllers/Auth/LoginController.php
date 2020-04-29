<?php



namespace App\Http\Controllers\Auth;

use Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;



class LoginController extends Controller

{



    use AuthenticatesUsers;



    protected $redirectTo = '/home';

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest')->except('logout');

    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function login(Request $request)

    {

        $input = $request->all();



        $this->validate($request, [

            'username' => 'required',

            'password' => 'required',

        ]);



        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))

        {
        $username=auth()->user()->username;
         if ($username=='admin'){

        return redirect()->route('admin');;
        }

        else{

        return redirect()->route('user',$username);}

        }
        else{

            return redirect()->route('login')

                ->with('error','Email-Address And Password Are Wrong.');

        }



    }
    //function for redirecting from logout page to home page
     public function logout() {
          Auth::logout();
          return redirect('/home');
        }

    //function for redirect to user url home page
        function route($name, $parameters = [], $absolute = true)
        {
            return app('url')->route($name, $parameters, $absolute);
        }
}



