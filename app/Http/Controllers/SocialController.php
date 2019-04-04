<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Session;

use Illuminate\Support\Facades\Auth;


class SocialController extends Controller
{
    public function redirect($provider)
    {
     return Socialite::driver($provider)->redirect();
    }


    public function Callback($provider)

        {
            $userSocial =   Socialite::driver($provider)->user();
            $users       =   User::where(['email' => $userSocial->getEmail()])->first();
                    if($users){
                                Auth::login($users);
                                return redirect('/');
                            }else{
                    $user = User::create([
                                    'name'          => $userSocial->getName(),
                                    'email'         => $userSocial->getEmail(),
                                    'image'         => $userSocial->getAvatar(),
                                    'provider_id'   => $userSocial->getId(),
                                    'provider'      => $provider,
                                ]);

                                Session::flash('success','you are successfully Logged in.');

                            return redirect()->back();
                            }
        }
}
