@extends('app')

@section('content')
<form action="{{ route('usuarios') }}" method="POST">
    @csrf
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success')}}</h6>
    @endif

    @error('name')
        <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($usuarios as $usuario)
        <tr>
            <th scope="row">{{$usuario->id}}</th>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->created_at}}</td>
            <td>{{$usuario->updated_at}}</td>
        </tr>
      @endforeach
  </tbody>
</table>
@endsection)