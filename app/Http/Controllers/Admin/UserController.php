<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        $page = "Users";
        $current_user_fullname = "Engy";
        return view('admin.users', compact(['users', 'page', 'current_user_fullname']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = "Add User";
        $current_user_fullname = "Engy";
        return view('admin.AddUser', compact(['page', 'current_user_fullname']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $data['active'] = isset($request->active);
        $data['password'] = Hash::make($request['password']);
        User::create($data);
        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $page = "Edit User";
        $current_user_fullname = "Engy";
        return view('admin.editUser', compact(['user', 'page', 'current_user_fullname']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,id,' . $id,
            'password' => 'nullable|string|min:8',
            'active' => 'required:boolean',
        ]);

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {unset($data['password']);}
        User::where('id', $id)->update($data);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
