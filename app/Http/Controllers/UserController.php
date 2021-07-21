<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index()
    {
        
        $users = User::orderBy('id')->get();
        return UserResource::collection($users);
        
    }
    public function show(User $user)
    {
        return new UserResource($user);
    }
    public function validateRequest()
    {
        return request()->validate([
            'idTypeDoc' => 'required',
            'numberDoc '=> 'required',
            'name' => 'required',
            'idTypeSex' => 'required',
            'age' => 'required',
            'email' => ['required', 'unique:users,email'],
            'password' => 'required',
            'idProfile' => 'required',
             
            ]);
    }

    public function store(User $user)
    {
        
        $data = request()->all();
        $user = User::create($data);
        return new UserResource($user);
    
    }

    public function update(User $user)
    {
        $data = request()->all();
        $user->update($data);
        return new UserResource($user);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return response()->noContent();
    }

    public function auth()
    {  
        
        $request = request()->all();

        $user = User::where('email', $request['email'])->where('password', $request['password'])->first();

        if($user!= null){
            return $user;
        }else{
            return response()->noContent();
        }

       
    }
}