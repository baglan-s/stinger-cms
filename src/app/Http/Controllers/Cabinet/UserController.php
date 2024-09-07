<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        $userId = $request->user_id;
        $user = $this->userRepository->get($userId, [
            'id', 'name', 'email', 'phone', 'email_verified_at', 'last_name'
        ]);

        return view('pages.personal-account', compact('user'));
    }
}
