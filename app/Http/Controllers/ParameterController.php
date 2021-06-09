<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use Illuminate\Http\Request;
use App\Http\Resources\ParameterResource;

class ParameterController extends Controller
{
    public function index()
    {
        $parameters = Parameter::orderBy('id')->get();
        return ParameterResource::collection($parameters);
    }
    public function show(Parameter $parameter)
    {
        return new ParameterResource($parameter);
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
        $parameter = Parameter::create($data);
        return new ParameterResource($parameter);
    }

    public function update(Parameter $parameter)
    {
        $data = $this->validateRequest();
        $parameter->update($data);
        return new ParameterResource($parameter);
    }
    public function destroy(Parameter $parameter)
    {
        $parameter->delete();
        return \response()->noContent();
    }
}