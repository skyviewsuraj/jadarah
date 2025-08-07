<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserRoleController extends Controller
{
    public function create()
    {
        abort_if(!auth()->user()->can('role.view'),403,__('User does not have the right permissions.'));

        $users = User::all();
        $roles = Role::all();

        return view('roles.assign-role', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
        abort_if(!auth()->user()->can('role.edit'),403,__('User does not have the right permissions.'));

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role'    => 'required|exists:roles,name',
        ]);

        $user = User::findOrFail($request->user_id);
        // dd($request->all(),$user->toArray());

        $user->syncRoles([$request->role]); // Replace existing roles

        return redirect()->back()->with('success', 'Role assigned successfully!');
    }
}
