<?php

namespace App\Http\Controllers;
use App\Models\forTshirtShop;
use Illuminate\Http\Request;

class ForTshirtShopController extends Controller
{
    public function index()
    {
        return view('welcome',['list'=>forTshirtShop::all()],
    );
    }

    public function saveList(Request $req)
    {
        $todoObj = new forTshirtShop();
        $todoObj->BN = $req->batchNo;
        $todoObj->Quanity = $req->quantity;
        $todoObj->dateOfManifacture = $req->manDate;
        $todoObj->status = $req->quality;
        $todoObj->remark = $req->remark;
        $todoObj->save();
        return redirect('/');
    }
    public function delete($id)
    {
       $todoObj = forTshirtShop::find($id);
       $todoObj->delete();
       return redirect('/');

    }
    public function edit($id)
    {
        $data = forTshirtShop::find($id);
        return view('edit',['value'=>$data]);
    }
    public function updateData(Request $req)
    {
        $todoObj = forTshirtShop::find($req->id);
        $todoObj->BN = $req->batchNo;
        $todoObj->Quanity = $req->quantity;
        $todoObj->dateOfManifacture = $req->manDate;
        $todoObj->status = $req->quality;
        $todoObj->remark = $req->remark;
        $todoObj->save();
        return redirect('/');
    }
}
