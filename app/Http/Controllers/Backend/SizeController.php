<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(View::exists('backend.size.index')){
            return view('backend.size.index');
        }
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if(Size::whereName($request->name)->first()){
            return 'EXISTS';
         }else{
             $size = new Size();
             $size->name = $request->input('name');
             if($size->save()){
                return 'INSERTED';
             }
         }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return response()->json([
            Size::find($request->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $size = Size::find($request->input('id'));
       $size->name = $request->input('name');
       if($size->save()){
            return response()->json('UPDATED');
        }else{
            return response()->json('NOT_UPDATED');
        }
        return response()->json('NOT_UPDATED');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         if(Size::find($request->input('id'))->delete()){
             return 'DELETED';
         }else{
             return 'NOT_DELETED';
         }
    }

    public function getAllSize()
    {
        return response()->json(
            Size::latest()->get()
        );
    }
}
