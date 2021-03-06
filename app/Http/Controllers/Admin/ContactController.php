<?php

namespace App\Http\Controllers\Admin;
use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

    function __construct()
    {
        $this->middleware('permission:contact-list|contact-delete', ['only' => ['index']]);
        $this->middleware('permission:contact-delete', ['only' => ['destroy']]);
    }

  public function index()
  {
      $contacts = Contact::all();
      return view('admin.contacts.index', compact('contacts'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

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

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      Contact::destroy($id);
      return response()->json('delete');


  }

}


