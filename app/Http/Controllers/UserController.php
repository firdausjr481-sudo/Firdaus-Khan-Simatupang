<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');

        $users = User::when($keyword, function ($query, $keyword) {
            return $query->where('name', 'LIKE', "%$keyword%")
                         ->orWhere('email', 'LIKE', "%$keyword%");
        })
        ->orderBy('id')
        ->paginate(5);

        return view('pages.users.IndexUser', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('pages.users.detailuser', compact('user'));
    }

    public function create()
    {
        return view('pages.users.CreateUser');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);

        return redirect('/users')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.users.EditUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => "required|email|max:255|unique:users,email,$id",
        //     'password' => 'nullable|string|min:8|confirmed',
        // ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);
        // dd($user);
        return redirect('/users')->with('success', 'User updated successfully.');
    }

    public function delete($id) 
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('success', 'User deleted successfully.');
    }
}
