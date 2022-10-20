<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InvetoryType;

class InvetoryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inv_type = InvetoryType::all();

        return view('admin.invetorytype.index',[
            'invetory_types' =>  $inv_type,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.invetorytype.create',[
            'invetoryType' => '',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required','complekt' => 'required']);

        InvetoryType::create(['title' => $request->title,'complekt'=>$request->complekt]);
        //flash()->overlay('Category created successfully');

        return redirect('/admin/invetory_type');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo  $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InvetoryType $invetoryType)
    {
        return view('admin.invetorytype.edit', compact('invetoryType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, ['title' => 'required']);


        $in_type =InvetoryType::findOrFail($id);

        $in_type->update([
            'title'=>$request->title,
            'complekt'=>$request->complekt
        ]);

        return redirect('/admin/invetory_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $in_type =InvetoryType::findOrFail($id);
        $in_type->delete();
        return redirect('/admin/invetory_type');
    }
}
