<?php

namespace App\Http\Controllers;

use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders=Slider::orderBy('created_at','desc')->take(3)->get();
        return view('admin.slide._slidelist',['sliders'=>$sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $slider=new Slider();
        return view('admin.slide._slide',['slider'=>$slider,'action'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(Carbon::now()->format('YmdHi'));
      //  dd(public_path().'/images/slides');
        $slider=new Slider();
        $slider->header=$request->header;
        $slider->keterangan=$request->keterangan;
        if($request->hasFile('gambar')){
            $file=$request->file('gambar');
            $filename='slide-'.Carbon::now('Asia/Makassar')->format('YmdHi').'.'.$file->getClientOriginalExtension();
            $slider->gambar=$filename;
            $file->move(public_path().'/'.'images/slides',$filename);

        }
        $slider->save();
        return redirect('admin/slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
