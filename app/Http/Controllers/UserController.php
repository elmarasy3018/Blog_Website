<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{

    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->userRepository->getAll()
        ]);
    }
}
