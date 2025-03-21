<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                if ($finduser->role) {
                    return $this->redirectBasedOnRole($finduser);
                }
                return redirect()->route('role.selection');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy'),
                    'role' => null,
                    'email_verified_at' => now()
                ]);

                Auth::login($newUser);
                return redirect()->route('role.selection');
            }
        } catch (Exception $e) {
            return redirect('login')->with('error', 'Something went wrong with Google login');
        }
    }

    private function redirectBasedOnRole($user)
    {
        switch ($user->role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'publisher':
                return redirect()->route('publisher.dashboard');
            case 'advertiser':
                return redirect()->route('advertiser.dashboard');
            default:
                return redirect()->route('role.selection');
        }
    }
}