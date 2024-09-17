<?php

namespace App\Services;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Exception;

class UserService
{
    public function storeUser(UserRequest $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = $request->role_id;
            $user->save();

            return [
                'success' => true,
                'message' => 'User created successfully.',
                'redirect_url' => route('users.index')
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => 'Failed to create user.'
            ];
        }
    }

    public function updateUser(UserRequest $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
            $user->role_id = $request->role_id;
            $user->save();

            return [
                'success' => true,
                'message' => 'User updated successfully.',
                'redirect_url' => route('users.index')
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => 'Failed to update user.'
            ];
        }
    }

    public function deleteUser($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return [
                'success' => true,
                'message' => 'User deleted successfully.'
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => 'Failed to delete user.'
            ];
        }
    }
}
