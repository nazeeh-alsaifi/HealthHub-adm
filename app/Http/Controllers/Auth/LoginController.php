<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Use Alert;

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
     * @param Request $request
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */

    public function login(Request $request)

    {
        $input = $request->all();

        $this->validate($request, [

            'username' => 'required',

            'password' => 'required',

        ]);


        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
            $username = auth()->user()->username;
             toast('you have logged in successfully','success');
            return redirect()->route('member', $username);

        } else {
            toast('login has failed! Please try again','error');
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');

        }


    }

    public function logout()
    {
        Auth::logout();
        toast('you have logged out successfully','success');
        return redirect()->route('home');
    }
}



