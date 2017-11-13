@extends('layouts.app')



@section('content')
<div class="container">
  <form action="{{ route('instansi.store') }}" class="" method="post">
   {{ csrf_field() }}
    <div class="form-group has-feedback{{ $errors->has('name_instansi')? 'has-error':''}}">
      <label for="">Instansi</label>
      <input type="text" name="name_instansi" placeholder="Instansi Name" class="form-control" value="{{ old('name_instansi') }}"/>
      @if ($errors->has('name_instansi'))
      <span class="help-block">
        <p>{{ $errors->first('name_instansi') }}</p>
      </span>
      @endif
    </div>

    <div class="form-group has-feedback{{ $errors->has('deskripsi')? 'has-error':''}}">
      <label for="">Deskripsi</label>
      <textarea  name="deskripsi" placeholder="Add Deskripsi" rows="5" class="form-control" value="{{ old('deskripsi') }}" placeholder="Post Content"></textarea>
      @if ($errors->has('deskripsi'))
      <span class="help-block">
        <p>{{ $errors->first('deskripsi') }}</p>
      </span>
      @endif
    </div>
    <div class="form-group">
      <input type="submit" value="Save" class="btn btn-primary">
    </div>
  </form>
</div>

@endsection