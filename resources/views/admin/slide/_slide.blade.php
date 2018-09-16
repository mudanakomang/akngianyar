@extends('admin.index')
@section('manage_slide')


        <h3 class=" col-lg-10 text-center">Form Slider</h3>
        @if($action=='create')
            {{ Form::model($slider,['route'=>'slider.store','files'=>'true','class'=>'form-horizontal']) }}
            @else
            {{ Form::model($slider,['action'=>['route'=>'slider.update','id'=>$slider->id],'method'=>'PATCH','files'=>'true','class'=>'form-horizontal']) }}
        @endif
            <div class="form-group col-lg-10">
                {{ Form::label('header','Header') }}
                {{ Form::text('header',null,['class'=>'form-control','placeholder'=>'Header pada Slider']) }}
            </div>
            <div class="form-group col-lg-10">
                {{ Form::label('keterangan','Header') }}
                {{ Form::textarea('keterangan',null,['class'=>'form-control','rows'=>2,'placeholder'=>'Keterangan pada Slider']) }}
            </div>
        <div class="form-group col-lg-10">
            {{ Form::label('gambar','Gambar') }}
            {{ Form::file('gambar',['class'=>'form-control-file']) }}
        </div>
        <div class="form-group col-lg-10">
            {{ Form::submit('Simpan',['class'=>'btn btn-default']) }}
        </div>

        {{ Form::close() }}

    @endsection