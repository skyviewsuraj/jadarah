<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class UserController extends Controller
{
    public function index(Request $request)
    {   
        abort_if(!auth()->user()->can('users.view'),403,__('User does not have the right permissions.'));

        $users = User::get();
        // dd($users->toArray());
        return view('users.index',compact('users'));
    }

    public function create()
    {
        abort_if(!auth()->user()->can('users.create'),403,__('User does not have the right permissions.'));
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request){
        abort_if(!auth()->user()->can('users.create'), 403, 'User does not have the right permissions.');
        
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
            'role' => ['required'],
        ]);
         if (request()->has('avatar')) {
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
        }

        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' =>  $avatarName,
        ]);

        $user->syncRoles($request->role);
        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    public function edit($id)
    {   
        abort_if(!auth()->user()->can('users.edit'),403,__('User does not have the right permissions.'));

        $user = User::find($id);
        dd($user->toArray());
         return view('users.edit',compact('user'));
    }
}
