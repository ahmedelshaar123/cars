<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $services = Service::all();
        $lang = \LaravelLocalization::getCurrentLocale();
        $features = 'features_'.$lang;
        return view('admin.services.index', compact('services', 'features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceRequest $request
     * @return void
     */
    public function store(ServiceRequest $request)
    {
        $service = Service::create($request->all());

        makeImages($request->file('image'), $service);
        session()->flash('key', trans('admin.added'));
        return redirect(route('services.index'));

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
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceRequest $request
     * @param int $id
     * @return void
     */
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->update($request->all());
        if($request->hasFile('image')) {
            foreach ($service->photos as $photo) {
                unlink($photo->path);
//              $photo->delete();
            }
            $service->photos()->delete();

            makeImages($request->file('image'), $service);
        }
        session()->flash('key', trans('admin.edited'));
        return redirect(route('services.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        foreach ($service->photos as $photo) {
            unlink($photo->path);
        }
        $service->photos()->delete();
        $service->delete();
        return response()->json('delete');

    }

}


