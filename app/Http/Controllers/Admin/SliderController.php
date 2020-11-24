<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\SliderRequest;
use App\Models\Slider;

class SliderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.sliders.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SliderRequest $request
     * @return void
     */
    public function store(SliderRequest $request)
    {
        $slider = Slider::create($request->all());
        makeImage($request->file('image'), 'uploads/sliders', $slider);
        return redirect(route('sliders.index'));

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
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.edit', compact('slider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param SliderRequest $request
     * @param int $id
     * @return void
     */
    public function update(SliderRequest $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->update($request->all());
        if ($request->hasFile('image')) {
            makeImage($request->file('image'), 'uploads/sliders', $slider);

        }
        session()->flash('key', trans('admin.edited'));
        return redirect(route('sliders.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        unlink($slider->photo->path);
        $slider->photo()->delete();
        $slider->delete();
        return response()->json('delete');

    }

}


