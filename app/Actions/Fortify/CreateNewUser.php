<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

use App\Models\UserProfile;
use App\Models\UserStatus;

use Illuminate\Support\Str;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $user = User::create([
            'public_id' => Str::uuid(),
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        UserProfile::create([
            'public_id' => $user->public_id,
            'user_id' => $user->id,
            'birthday' => $input['birthday'],
            'gender' => $input['gender'],
            'privacy_setting' => 'Public',
            'is_application_user' => '1',
            'affiliate_code' => Str::random(8)
        ]);

        UserStatus::create([
            'user_id' => $user->id,
            'status' => 'Offline',
        ]);

        return $user;
    }
}
