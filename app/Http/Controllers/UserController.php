<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Services\UserService;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    // Display a listing of the users
    public function index()
    {
        $data['users'] = User::with('role')->orderBy('id', 'Desc')->get();
        return view('users.index', $data);
    }

    // Show the form for creating a new user
    public function create()
    {
        $data['roles'] = Role::all();
        return view('users.create', $data);
    }

    // Store a newly created user in storage
    public function store(UserRequest $request)
    {
        $response = $this->userService->storeUser($request);
        return response()->json($response);
    }

    // Show the form for editing the specified user
    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);
        $data['roles'] = Role::all();
        return view('users.edit', $data);
    }

    // Update the specified user in storage
    public function update(UserRequest $request, $id)
    {
        $response = $this->userService->updateUser($request, $id);
        return response()->json($response);
    }

    // Remove the specified user from storage
    public function delete($id)
    {
        $response = $this->userService->deleteUser($id);
        return response()->json($response);
    }
}
