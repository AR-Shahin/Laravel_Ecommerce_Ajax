<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (View::exists('backend.color.index')) {
            return view('backend.color.index');
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
        if (Color::whereName($request->name)->first()) {
            return 'EXISTS';
        } else {
            $color = new Color();
            $color->name = $request->input('name');
            $color->hex = $request->input('hex');
            if ($color->save()) {
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
            Color::find($request->id)
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
        $color = Color::find($request->input('id'));
        $color->name = $request->input('name');
        $color->hex = $request->input('hex');
        if ($color->save()) {
            return response()->json('UPDATED');
        } else {
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
        if (Color::find($request->input('id'))->delete()) {
            return 'DELETED';
        } else {
            return 'NOT_DELETED';
        }
    }

    public function getAllColors()
    {
        return response()->json(
            Color::latest()->get()
        );
    }
}
