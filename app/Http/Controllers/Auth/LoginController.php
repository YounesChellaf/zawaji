<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Permission\Models\Role;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

     protected $redirectTo = '/';
//
//    protected function redirectTo()
//    {
//        return redirect()->back();
//    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }




    public function redirectToFacebookProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFacebookProviderCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();
        if (! User::where('email',$facebookUser->getEmail())->first()){
            $user = User::create([
                'last_name' => $facebookUser->getName(),
                'email' => $facebookUser->getEmail()
            ]);
            $user->assignRole(Role::where('name','client')->get());
        }
        else {
            $user = User::where('email',$facebookUser->getEmail())->first();
        }

        Auth::login($user,true);
        return redirect()->route('zawaji.landing');
    }

    public function redirectToGoogleProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleProviderCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        if (! User::where('email',$googleUser->getEmail())->first()){
            $user = User::create([
                'last_name' => $googleUser->getName(),
                'email' => $googleUser->getEmail()
            ]);
            $user->assignRole(Role::where('name','client')->get());
        }
        else {
            $user = User::where('email',$googleUser->getEmail())->first();
        }
        Auth::login($user,true);
        return redirect()->route('zawaji.landing');
    }
}
