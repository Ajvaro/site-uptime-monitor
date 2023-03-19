<?php

namespace App\Models\User\Services;

use App\Models\User\User;
use App\Repositories\Eloquent\User\UserRepositoryContract;
use Illuminate\Support\Facades\Hash;

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
    public function create(array $data): User
    {
        $data = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ];

        return $this->userRepository->create($data);
    }
}
