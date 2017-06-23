@extends('master')

@section('content')
    
<h3>Form Register</h3>
<form action="/register" method="POST">
{{ csrf_field() }}
    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
    <p>{{ $errors->first('name') }}</p>

    <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="username">
    <p>{{ $errors->first('username') }}</p>

    <input type="text" name="password" class="form-control" value="{{ old('password') }}" placeholder="password">
    <p>{{ $errors->first('paasword') }}</p>


    <input  type="radio" name="status" value="user"> User
    <input  type="radio" name="status" value="operater"> Operater
    <br>

    <input type="submit"  class="btn btn-primary" value="Save">
    <input type="reset"  class="btn btn-danger" value="Cancel">
</form>
@endsection