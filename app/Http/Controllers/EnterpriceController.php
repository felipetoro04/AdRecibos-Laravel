<?php

namespace App\Http\Controllers;

use App\Models\Enterprice;
use Illuminate\Http\Request;
use App\Http\Resources\EnterpriceResource;


class EnterpriceController extends Controller
{
    public function index()
    {
        $enterprices = Enterprice::orderBy('id')->get();
        return EnterpriceResource::collection($enterprices);
    }
    public function show(Enterprice $enterprice)
    {
        return new EnterpriceResource($enterprice);
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
        $enterprice = Enterprice::create($data);
        return new EnterpriceResource($enterprice);
    }

    public function update(Enterprice $enterprice)
    {
        $data = $this->validateRequest();
        $enterprice->update($data);
        return new EnterpriceResource($enterprice);
    }
    public function destroy(Enterprice $enterprice)
    {
        $enterprice->delete();
        return \response()->noContent();
    }
}