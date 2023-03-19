<?php

namespace App\Models\User\Services;

use App\Models\User\User;
use App\Repositories\Eloquent\User\UserRepositoryContract;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

/**
 * Class UserService
 */
class UserService
{
    public function __construct(private readonly UserRepositoryContract $userRepository)
    {
    }

    /**
     * @return User
     */
    public function create(array $data)
    {
        Validator::validate($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $data = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ];

        return $this->userRepository->create($data);
    }
}
