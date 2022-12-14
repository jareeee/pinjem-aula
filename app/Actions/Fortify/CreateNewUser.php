<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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
            'full_name' => ['required', 'string'],
            'username' => ['required', 'string', 'max:15'],
            'no_telepon' => ['required', 'phone:id'],
            'email' => [
                'required',
                'string',
                'email:dns',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'full_name' => $input['full_name'],
            'username' => $input['username'],
            'no_telepon' => $input['no_telepon'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
