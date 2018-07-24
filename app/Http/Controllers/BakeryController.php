<?php

namespace App\Http\Controllers;

use App\Bakery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BakeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Bakery::all();
        return view('admin.bakery.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bakery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Bakery();
        $obj->name = Input::get('name');
        $obj->categoryId = Input::get('categoryId');
        $obj->price = Input::get('price');
        $obj->description = Input::get('description');
        $obj->images = Input::get('images');
        $obj->content = Input::get('content');
        $obj->note = Input::get('note');
        $obj->save();
        return redirect('/admin/bakery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Bakery::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.bakery.show')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Bakery::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.bakery.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Bakery::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->categoryId = Input::get('categoryId');
        $obj->price = Input::get('price');
        $obj->description = Input::get('description');
        $obj->images = Input::get('images');
        $obj->content = Input::get('content');
        $obj->note = Input::get('note');
        $obj->save();
        return redirect('/admin/bakery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Bakery::find($id);
        if ($obj == null) {
            return response('Bakery not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }
}
