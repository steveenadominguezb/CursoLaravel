@extends('app')

@section('content')
<form action="{{ route('usuario-update', ['id' => $usuario->id]) }}" method="POST">
  @method('PATCH')
    @csrf
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success')}}</h6>
    @endif

    @error('name')
        <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{ $usuario->name }}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection)