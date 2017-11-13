@extends('layouts.app')


@section('content')
@if (count($results))
<div class="x_panel green white-text">Hasil pencarian : <b>{{$query}}</b></div>
<div class="container">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                <tr class="heading black">
                <th  scope="col">No</th>
                <th scope="col">Items</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @php
            $no=1;
            @endphp 
            @foreach( $results as $result)
                <tr>
                <th scope="row">@php echo $no++ @endphp</th>
                <td>{{$result->name_instansi}}</td>
                <td>{{$result->deskripsi}}</td>
                <td>
                    <button class="btn btn-info"><a href="{{ route('instansi.edit', $result )}}">edit</a></button>
                    <form action="{{ route('instansi.destroy',$result)}}" method='post'class=''>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit">Hapus</button>  
                </form>
                </td>

                </tr>
                @endforeach
            </tbody>
        </table>
            
    </div>
</div>


</div>

{{ $results->render() }}

@else
<div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan </div>
@endif


@endsection