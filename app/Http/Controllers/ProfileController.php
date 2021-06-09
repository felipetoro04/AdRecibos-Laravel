<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Resources\ProfileResource;


class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::orderBy('id')->get();
        return ProfileResource::collection($profiles);
    }
    public function show(Profile $profile)
    {
        return new ProfileResource($profile);
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
        $profile = Profile::create($data);
        return new ProfileResource($profile);
    }

    public function update(Profile $profile)
    {
        $data = $this->validateRequest();
        $profile->update($data);
        return new ProfileResource($profile);
    }
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return \response()->noContent();
    }
}