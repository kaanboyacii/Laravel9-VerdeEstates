<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=service::all();
        return view('admin.service.index',[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new service();
        $data->user_id = $request->user_id;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->address = $request->address;
        $data->price = $request->price;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service,$id)
    {
        $data=service::find($id);
        return view('admin.service.show',[
            'data'=> $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service,$id)
    {
        $data=service::find($id);
        return view('admin.service.edit',[
            'data'=> $data,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service,$id)
    {
        $data=service::find($id);
        $data->user_id = $request->user_id;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->address = $request->address;
        $data->price = $request->price;
        $data->status = $request->status;
        if($request->file('image')){
             $data->image= $request->file('image')->store('images');
         }
        $data->save();
        return redirect('admin/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service,$id)
    {
        $data=service::find($id);
        Storage::delete("$data->image");
        $data->delete();
        return redirect('admin/service');

    }
}
