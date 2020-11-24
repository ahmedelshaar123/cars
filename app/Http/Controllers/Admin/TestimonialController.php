<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\TestimonialRequest;
use App\Models\Testimonial;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        $lang = \LaravelLocalization::getCurrentLocale();
        $job = 'job_'.$lang;
        return view('admin.testimonials.index', compact('testimonials', 'job'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.testimonials.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TestimonialRequest $request
     * @return void
     */
    public function store(TestimonialRequest $request)
    {
        $testimonial = Testimonial::create($request->all());
        makeImage($request->file('image'), 'uploads/testimonials', $testimonial);
        session()->flash('key', trans('admin.added'));
        return redirect(route('testimonials.index'));

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
        $testimonial = Testimonial::findOrFail($id);
        $lang = \LaravelLocalization::getCurrentLocale();
        $job = 'job_'.$lang;
        return view('admin.testimonials.edit', compact('testimonial', 'job'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param TestimonialRequest $request
     * @param int $id
     * @return void
     */
    public function update(TestimonialRequest $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($request->all());
        if ($request->hasFile('image')) {
            makeImage($request->file('image'), 'uploads/testimonials', $testimonial);

        }
        session()->flash('key', trans('admin.edited'));
        return redirect(route('testimonials.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        unlink($testimonial->photo->path);
        $testimonial->photo()->delete();
        $testimonial->delete();
        return response()->json('delete');

    }

}


