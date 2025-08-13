<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Session;
use App\Models\Student; 
use App\Models\Instructor; 
use App\Models\Batch;
use Exception;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {   
        abort_if(!auth()->user()->can('users.view'),403,__('User does not have the right permissions.'));

        $users = User::paginate(10);
        // dd($users->toArray());
        return view('users.index',compact('users'));
    }

    public function create()
    {
        abort_if(!auth()->user()->can('users.create'),403,__('User does not have the right permissions.'));
        $roles = Role::all();
        $batches =Batch::all();
        return view('users.create', compact('roles', 'batches'));
    }
    public function store(Request $request)
    {
        // try {
            abort_if(!auth()->user()->can('users.create'), 403, 'User does not have the right permissions.');
            $rules = [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'avatar' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
                'role' => ['required'],
                'mobile' => ['nullable', 'string', 'max:20'],
                'dob' => ['nullable', 'date'],
                'gender' => ['nullable', 'in:male,female,other'],
                'address' => ['nullable', 'string'],
                'pin_code' => ['nullable', 'string', 'max:10'],
                'country_id' => ['nullable', 'integer', 'exists:countries,id'],
                'state_id' => ['nullable', 'integer', 'exists:states,id'],
                'city_id' => ['nullable', 'integer', 'exists:cities,id'],
            ];
            if ($request->role === 'instructor') {
                $rules['specialty'] = ['required', 'string'];
                $rules['instructor_bio'] = ['nullable', 'string'];
            } elseif ($request->role === 'student') {
                $rules['batch_id'] = ['nullable', 'integer', 'exists:batches,id'];
                $rules['student_bio'] = ['nullable', 'string'];
            }
            $validatedData = $request->validate($rules);
            $avatarName = null;
            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
                $avatarPath = public_path('/images/');
                $avatar->move($avatarPath, $avatarName);
            }
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'avatar' => $avatarName,
                'mobile' => $validatedData['mobile'] ?? null,
                'dob' => $validatedData['dob'] ?? null,
                'gender' => $validatedData['gender'] ?? null,
                'address' => $validatedData['address'] ?? null,
                'pin_code' => $validatedData['pin_code'] ?? null,
                'country_id' => $validatedData['country_id'] ?? null,
                'state_id' => $validatedData['state_id'] ?? null,
                'city_id' => $validatedData['city_id'] ?? null,
            ]);
            $user->syncRoles($validatedData['role']);
            if ($validatedData['role'] === 'student') {
                Student::create([
                    'user_id' => $user->id,
                    'batch_id' => $validatedData['batch_id'] ?? null,
                    'student_bio' => $validatedData['student_bio'] ?? null,
                ]);
            } elseif ($validatedData['role'] === 'instructor') {
                Instructor::create([
                    'user_id' => $user->id,
                    'specialty' => $validatedData['specialty'] ?? null,
                    'instructor_bio' => $validatedData['instructor_bio'] ?? null,
                ]);
            }
            return redirect()->route('users.index')->with('success', 'User created successfully!');
        // } catch (ValidationException $e) {
        //     return redirect()->back()->withErrors($e->errors())->withInput();
        // } catch (Exception $e) {
        //     \Log::error('User creation failed: ' . $e->getMessage());
        //     return redirect()->route('users.index')->with('error', 'User creation failed. Please try again.');
        // }
    }
    public function stores(Request $request){
        abort_if(!auth()->user()->can('users.create'), 403, 'User does not have the right permissions.');
        
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
            'role' => ['required'],
            'mobile' => ['nullable', 'string', 'max:20'],
            'dob' => ['nullable', 'date'],
            'gender' => ['nullable', 'in:male,female,other'],
            'address' => ['nullable', 'string'],
            'pin_code' => ['nullable', 'string', 'max:10'],
            'country_id' => ['nullable', 'integer', 'exists:countries,id'],
            'state_id' => ['nullable', 'integer', 'exists:states,id'],
            'city_id' => ['nullable', 'integer', 'exists:cities,id'],
        ];
        if ($request->role === 'instructor') {
            $rules['specialty'] = ['required', 'string'];
        } elseif ($request->role === 'student') {
            $rules['batch_id'] = ['nullable', 'integer', 'exists:batches,id'];
        }
        $validatedData = $request->validate($rules);

        // dd($validatedData);
         if (request()->has('avatar')) {
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
        }

        $user =  User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'avatar' => $avatarName,
            'mobile' => $validatedData['mobile'] ?? null,
            'dob' => $validatedData['dob'] ?? null,
            'gender' => $validatedData['gender'] ?? null,
            'address' => $validatedData['address'] ?? null,
            'pin_code' => $validatedData['pin_code'] ?? null,
            'country_id' => $validatedData['country_id'] ?? null,
            'state_id' => $validatedData['state_id'] ?? null,
            'city_id' => $validatedData['city_id'] ?? null,
        ]);

        $user->syncRoles($request->role);

        if ($request->role === 'student') {
            Student::create([
                'user_id' => $user->id,
                'batch_id' => $validatedData['batch_id'] ?? null,
                'student_bio' => $validatedData['student_bio'] ?? null,
            ]);
        } elseif ($request->role === 'instructor') {
            Instructor::create([
                'user_id' => $user->id,
                'specialty' => $validatedData['specialty'] ?? null,
                'instructor_bio' => $validatedData['instructor_bio'] ?? null,
            ]);
        }
        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    public function edit($id)
    {   
        abort_if(!auth()->user()->can('users.edit'),403,__('User does not have the right permissions.'));
        $user = User::find($id);
        $roles = Role::all();
        $batches =Batch::all();
        $countries=[];
        $states=[];
        $cities=[];
         return view('users.edit',compact('user','countries','states','cities','roles','batches'));
    }

    public function update(Request $request, $id){
        try {
            abort_if(!auth()->user()->can('users.edit'), 403, 'User does not have the right permissions.');
            $user = User::findOrFail($id);
            $oldRole = $user->getRoleNames()->first();
            
            $rules = [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
                    'password' => ['nullable', 'string', 'min:8', 'confirmed'],
                    'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
                    'role' => ['required'],
                    'mobile' => ['nullable', 'string', 'max:20'],
                    'dob' => ['nullable', 'date'],
                    'gender' => ['nullable', 'in:male,female,other'],
                    'address' => ['nullable', 'string'],
                    'pin_code' => ['nullable', 'string', 'max:10'],
                    'country_id' => ['nullable', 'integer', 'exists:countries,id'],
                    'state_id' => ['nullable', 'integer', 'exists:states,id'],
                    'city_id' => ['nullable', 'integer', 'exists:cities,id'],
                ];
            if ($request->role === 'instructor') {
                $rules['specialty'] = ['required', 'string'];
                $rules['instructor_bio'] = ['nullable', 'string'];
            } elseif ($request->role === 'student') {
                $rules['batch_id'] = ['nullable', 'integer', 'exists:batches,id'];
                $rules['student_bio'] = ['nullable', 'string'];
            }
            $validatedData = $request->validate($rules);

            DB::beginTransaction();

            $userData = [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'mobile' => $validatedData['mobile'] ?? null,
                'dob' => $validatedData['dob'] ?? null,
                'gender' => $validatedData['gender'] ?? null,
                'address' => $validatedData['address'] ?? null,
                'pin_code' => $validatedData['pin_code'] ?? null,
                'country_id' => $validatedData['country_id'] ?? null,
                'state_id' => $validatedData['state_id'] ?? null,
                'city_id' => $validatedData['city_id'] ?? null,
            ];

            if ($request->hasFile('avatar')) {
                if ($user->avatar && File::exists(public_path('images/' . $user->avatar))) {
                    File::delete(public_path('images/' . $user->avatar));
                }
                $avatarName = time() . '.' . $request->file('avatar')->getClientOriginalExtension();
                $request->file('avatar')->move(public_path('images/'), $avatarName);
                $userData['avatar'] = $avatarName;
            }
            if (!empty($validatedData['password'])) {
                $userData['password'] = Hash::make($validatedData['password']);
            }
            $user->update($userData);
            $user->syncRoles($validatedData['role']);

            if ($oldRole !== $validatedData['role']) {
                if ($oldRole === 'student') {
                    $user->student()->delete();
                } elseif ($oldRole === 'instructor') {
                    $user->instructor()->delete();
                }
            }
            if ($validatedData['role'] === 'student') {
                Student::updateOrCreate(
                    ['user_id' => $user->id],
                    [
                        'batch_id' => $validatedData['batch_id'] ?? null,
                        'student_bio' => $validatedData['student_bio'] ?? null,
                    ]
                );
            } elseif ($validatedData['role'] === 'instructor') {
                Instructor::updateOrCreate(
                    ['user_id' => $user->id],
                    [
                        'specialty' => $validatedData['specialty'] ?? null,
                        'instructor_bio' => $validatedData['instructor_bio'] ?? null,
                    ]
                );
            }
            DB::commit();


            return redirect()->route('users.index')->with('success', 'User updated successfully!');
        } catch (ValidationException $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            DB::rollBack();
            \Log::error('User update failed: ' . $e->getMessage());
            return redirect()->route('users.index')->with('error', 'User update failed. Please try again.');
        }
    }

    public function destroy($id)
    {
        abort_if(!auth()->user()->can('users.delete'),403,__('User does not have the right permissions.'));
        $user = User::findOrFail($id);
        if ($user->avatar && File::exists(public_path('images/' . $user->avatar))) {
            File::delete(public_path('images/' . $user->avatar));
        }
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }

    public function updateStatus(Request $request, User $user)
    {
        abort_if(!auth()->user()->can('users.edit'), 403, 'User does not have the right permissions.');
        $validatedData = $request->validate([
            'status' => ['required', 'boolean'],
        ]);
        $user->status = $validatedData['status'];
        $user->save();
        return response()->json(['message' => 'User status updated successfully!', 'status' => $user->status]);
    }

    public function students()
    {
        abort_if(!auth()->user()->can('users.view'), 403, 'User does not have the right permissions.');
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'student');
        })->paginate(10);
        return view('users.students', compact('users'));
    }

    public function instructors()
    {
        abort_if(!auth()->user()->can('users.view'), 403, 'User does not have the right permissions.');
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'instructor');
        })->paginate(10);
        return view('users.instructors', compact('users'));
    }
}
