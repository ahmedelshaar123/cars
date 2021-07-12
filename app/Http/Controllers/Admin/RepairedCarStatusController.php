<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RepairedCarStatusRequest;
use App\Models\RepairedCar;


class RepairedCarStatusController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:repaired-car-status-edit', ['only' => ['edit','update']]);
    }

    public function update(RepairedCarStatusRequest $request, $id) {
        $repairedCar = RepairedCar::findOrFail($id);
        $repairedCar->update(['status'=> $request->status]);
        session()->flash('key', trans('admin.edited'));
        return back();

    }
}
