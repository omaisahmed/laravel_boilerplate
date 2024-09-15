<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $routeName = $this->route()->getName();

        switch ($routeName) {
            case 'users.store':
                return [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'role' => 'required',
                ];

            case 'users.update':
                return [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $this->route('id')],
                    'password' => ['nullable', 'string', 'min:8', 'confirmed'],
                    'role' => 'required',
                ];

            default:
                return [];
        }
    }
}
