<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\YearRequest;
use App\Models\Year;


class YearController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $years = Year::all();
      return view('admin.years.index', compact('years'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('admin.years.create');

  }

    /**
     * Store a newly created resource in storage.
     *
     * @param YearRequest $request
     * @return void
     */
  public function store(YearRequest $request)
  {
      Year::create($request->all());
      session()->flash('key', trans('admin.added'));
      return redirect(route('years.index'));

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
      $year = Year::findOrFail($id);
      return view('admin.years.edit', compact('year'));

  }

    /**
     * Update the specified resource in storage.
     *
     * @param YearRequest $request
     * @param int $id
     * @return void
     */
  public function update(YearRequest $request, $id)
  {
      $year = Year::findOrFail($id);
      $year->update($request->all());
      session()->flash('key', trans('admin.edited'));
      return redirect(route('years.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      Year::destroy($id);
      return response()->json('delete');
  }

}


