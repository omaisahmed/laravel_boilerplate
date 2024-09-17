<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;
// use App\Models\Role;

// class SearchController extends Controller
// {
//     public function search(Request $request)
//     {
//         $query = $request->input('query');

//         $users = User::where('name', 'LIKE', "%{$query}%")
//                     ->orWhere('email', 'LIKE', "%{$query}%")
//                     ->get(['id', 'name', 'email']);

//         $roles = Role::where('name', 'LIKE', "%{$query}%")
//                     ->get(['id', 'name']);

//         $results = [];

//         foreach ($users as $user) {
//             $results[] = [
//                 'type' => 'User',
//                 'name' => $user->name,
//                 'link' => route('users.index')
//             ];
//         }

//         foreach ($roles as $role) {
//             $results[] = [
//                 'type' => 'Role',
//                 'name' => $role->name,
//                 'link' => route('roles.index')
//             ];
//         }

//         return response()->json($results);
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = strtolower($request->input('query'));

        $models = [
            'user' => route('users.index'),
        ];

        $results = [];

        foreach ($models as $modelName => $link) {
            if (str_contains($modelName, $query)) {
                $results[] = [
                    'type' => ucfirst($modelName),
                    'name' => ucfirst($modelName),
                    'link' => $link
                ];
            }
        }

        return response()->json($results);
    }
}

