@extends('layouts.app')


@section('content')
<div class="form-group pull-right">
            <div class="input-group">
            <form action="{{ route('instansi.search') }}" method="GET">
                <input type="text" class="form-control" name="q" style="width:250px">
                <span class="input-group-btn">
                <button type="submit" class="btn btn-medium btn-primary pull-right">Cari</button>
                </span>
            </form>
            </div>
            </div>
<button class="btn btn-success"><a href="{{ route('instansi.create')}}">Add Item</a></button>
        
        <table class="table table-bordered">
            <thead>
                <tr class="heading black">
                <th  scope="col">No</th>
                <th scope="col">Items</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
    
            @php
            $no = 1;
            @endphp
            @foreach( $instansis as $instansi)
                <tr>
                <th scope="row">@php echo $no++ @endphp</th>
                <td>{{$instansi->name_instansi}}</td>
                <td>{{$instansi->deskripsi}}</td>
                <td>
                <button class="btn btn-info"><a href="{{ route('instansi.edit', $instansi )}}">edit</a></button>
                <form action="{{ route('instansi.destroy',$instansi)}}" method='post'class=''>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                  <button class="btn btn-danger" type="submit" >Hapus</button>  
                  </form>
                
                </td>

                </tr>
            @endforeach
          
            </tbody>
        </table>

@endsection