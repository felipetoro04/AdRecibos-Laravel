<?php


namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\ReceiptResource;
use App\Http\Resources\UserResource;



class ReceiptController extends Controller
{
    public function index()
    {
        $receipts = Receipt::orderBy('id')->get();
        return ReceiptResource::collection($receipts);
    }
    public function show(Receipt $receipt)
    {
        return new ReceiptResource($receipt);
    }
    public function validateRequest()
    {
        return request()->validate([
            'idEnterprice'=> 'required|integer|min:1',
            'numberReceipt'=> 'required|integer|min:1',
            'issueDate'=> 'required',
            'expirationDate'=> 'required',
            'amountPayable'=> 'required|integer|min:1',
            'idStatus'=> 'required|integer|min:1',
            'idUser'=> 'required|integer|min:1',

        ]);
    }
    public function store()
    {
        $data = $this ->validateRequest();
        $receipt = Receipt::create($data);
        return new ReceiptResource($receipt);
    }
    public function update(Receipt $receipt)
    {
        $data = $this->validateRequest();
        $receipt->update($data);
        return new ReceiptResource($receipt);
    }
    public function destroy(Receipt $receipt)
    {
        $receipt->delete();
        return response()->noContent();
    }
}