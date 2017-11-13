@extends('layouts.app')



@section('content')
<div class="container">
  <form action="{{ route('instansi.update', $instansi) }}" class="" method="post">
   {{ csrf_field() }}
   {{ method_field('PATCH') }}
    <div class="form-group" >
      <label for="">Instansi</label>
      <input type="text" name="name_instansi" placeholder="Instansi Name" class="form-control" value="{{ $instansi->name_instansi }}"/>
      
    </div>

    <div class="form-group">
      <label for="">Deskripsi</label>
      <textarea  name="deskripsi" placeholder="Add Deskripsi" rows="5" class="form-control" placeholder="Post Content">{{ $instansi->deskripsi }}</textarea>
    
    </div>
    <div class="form-group">
      <input type="submit" value="Save" class="btn btn-primary">
    </div>
  </form>
</div>

@endsection