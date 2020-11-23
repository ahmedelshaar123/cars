<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ModelRequest;
use App\Models\Brand;
use App\Models\Model;


class ModelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $models = Model::all();
        $brands = Brand::all();
        return view('admin.models.index', compact('models', 'brands'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('admin.models.create', compact('brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ModelRequest $request
     * @return void
     */
    public function store(ModelRequest $request)
    {
        Model::create($request->all());
        session()->flash('key', trans('admin.added'));
        return redirect(route('models.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $model = Model::findOrFail($id);
        $brands = Brand::all();
        return view('admin.models.edit', compact('model', 'brands'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param ModelRequest $request
     * @param int $id
     * @return void
     */
    public function update(ModelRequest $request, $id)
    {
        $model = Model::findOrFail($id);
        $model->update($request->all());
        session()->flash('key', trans('admin.edited'));
        return redirect(route('models.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Model::destroy($id);
        return response()->json('delete');
    }

}


