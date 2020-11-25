<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ModelRequest;
use App\Models\Brand;
use App\Models\Modell;
use Mcamara\LaravelLocalization\LaravelLocalization;


class ModelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $models = Modell::all();
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
        $lang = \LaravelLocalization::getCurrentLocale();
        $brands = Brand::pluck("name_$lang",'id')->toArray();
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
        Modell::create($request->all());
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
        $model = Modell::findOrFail($id);
        $lang = \LaravelLocalization::getCurrentLocale();
        $brands = Brand::pluck("name_$lang",'id')->toArray();
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
        $model = Modell::findOrFail($id);
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
        $model = Modell::findOrFail($id);
        if($model->repairedCars()->count()) {
            return response()->json('not-delete');
        }
        $model->delete();
        return response()->json('delete');
    }

}


