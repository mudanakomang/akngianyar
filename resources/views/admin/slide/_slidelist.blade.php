@extends('admin.index')
@section('manage_slidelist')

<h3 class=" col-lg-10 text-center">Daftar Slider</h3>
    
    <table class="table table-responsive table-hover">
        <thead>
            <th>#</th>
            <th>Header</th>
            <th>Keterangan</th>
            <th>Gambar</th>
        </thead>
        <tbody>
            @foreach($sliders as $key=>$slider)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $slider->header }}</td>
                    <td>{{ $slider->keterangan }}</td>
                    <td><img src="{{ asset('images/slides').'/'.$slider->gambar }}" width="50%" alt="{{ $slider->gambar }}"></td>
                </tr>
                @endforeach
        
        </tbody>
    </table>
    @endsection