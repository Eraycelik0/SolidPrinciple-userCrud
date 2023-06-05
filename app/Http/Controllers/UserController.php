<?php
namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $userData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $this->userService->createUser($userData);

        return redirect('/users')->with('success', 'User created successfully.');
    }

    public function show($userId)
    {
        $user = $this->userService->getUserById($userId);

        if (!$user) {
            return redirect('/users')->with('error', 'User not found.');
        }

        return view('users.show', compact('user'));
    }

    public function edit($userId)
    {
        $user = $this->userService->getUserById($userId);

        if (!$user) {
            return redirect('/users')->with('error', 'User not found.');
        }

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $userId)
    {
        $userData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $userId,
            'password' => 'nullable|min:6',
        ]);

        $this->userService->updateUser($userId, $userData);

        return redirect('/users')->with('success', 'User updated successfully.');
    }

    public function destroy($userId)
    {
        $this->userService->deleteUser($userId);

        return redirect('/users')->with('success', 'User deleted successfully.');
    }
}

