<?php

namespace App\Http\Controllers;


use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Resources\PermissionResource;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::orderBy('id')->get();
        return PermissionResource::collection($permissions);
    }
    public function show(Permission $permission)
    {
        return new PermissionResource($permission);
    }
    public function validateRequest()
    {
        return request()->validate([
            'type'=> 'required|min:1|max:10',
            'code'=> 'required|min:1|max:10',
            'description'=> 'required|min:1|max:50',
            'value'=> 'required|min:1|max:10',
        ]);
    }

    public function store()
    {
        $data = $this ->validateRequest();
        $permission = Permission::create($data);
        return new PermissionResource($permission);
    }

    public function update(Permission $permission)
    {
        $data = $this->validateRequest();
        $permission->update($data);
        return new PermissionResource($permission);
    }
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return \response()->noContent();
    }
}