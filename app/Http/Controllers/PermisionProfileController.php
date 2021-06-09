<?php

namespace App\Http\Controllers;

use App\Models\PermisionProfile;
use Illuminate\Http\Request;
use App\Http\Resources\PermisionProfileResource;

class PermisionProfileController extends Controller
{
    public function index()
    {
        $permisionsProfiles = PermisionProfile::orderBy('id')->get();
        return PermisionProfileResource::collection($permisionsProfiles);
    }
    public function show(PermisionProfile $permisionProfile)
    {
        return new PermisionProfileResource($permisionProfile);
    }
    public function validateRequest()
    {
        return request()->validate([
            'idProfile'=> 'required|integer|min:1',
            'idPermission'=> 'required|integer|min:1',  
         ]);
    }

    public function store()
    {
        $data = $this ->validateRequest();
        $permisionProfile = PermisionProfile::create($data);
        return new PermisionProfileResource($permisionProfile);
    }

    public function update(PermisionProfile $permisionProfile)
    {
        $data = $this->validateRequest();
        $permisionsProfiles->update($data);
        return new PermisionProfileResource($permisionsProfiles);
    }
    public function destroy(PermisionProfile $permisionProfile)
    {
        $permisionProfile->delete();
        return \response()->noContent();
    }
}