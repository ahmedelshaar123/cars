<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\BrandRequest;
use App\Models\Brand;
class BrandController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.brands.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BrandRequest $request
     * @return void
     */
    public function store(BrandRequest $request)
    {
        Brand::create($request->all());
        session()->flash('key', trans('admin.added'));
        return redirect(route('brands.index'));

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
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param BrandRequest $request
     * @param int $id
     * @return void
     */
    public function update(BrandRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());
        session()->flash('key', trans('admin.edited'));
        return redirect(route('brands.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        if($brand->models()->count()) {
            return response()->json('not-delete');
        }
        $brand->delete();
        return response()->json('delete');
    }

}


