<?php
namespace App\Providers\CustomUserProvider;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use App\Models\Szerelo;
use App\Models\Munkafelvevo;
use Illuminate\Support\Facades\Log;


class CustomUserProvider implements UserProvider
{
    public function retrieveByCredentials(array $credentials)
    {
        Log::debug('Inside CustomUserProvider');
        // First, try to find the user in the 'szerelo' table
        $user = Szerelo::where('azonosito', $credentials['azonosito'])->first();

        // If not found, check the 'munkafelvevo' table
        if(!$user) {
            $user = Munkafelvevo::where('azonosito', $credentials['azonosito'])->first();

        }

        return $user;
    }
    // ... (Rest of your CustomUserProvider class) ...

    public function retrieveById($identifier)
    {
        // Assuming 'azonosito' is the unique identifier, implement your logic to 
        // fetch a user from either table based on their identifier 
    }

    public function retrieveByToken($identifier, $token) 
    {
        // If you are not using token-based remember me functionality, you can 
        // likely leave this with a default implementation
        return null;  
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        // Update the user's remember_token if applicable, otherwise leave default
        $user->setRememberToken($token);
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        // This likely works already if you're using Laravel's default Hash methods
        $passwordMatches = Hash::check($credentials['jelszo'], $user->getAuthPassword());
        return $passwordMatches;
    } 


}
