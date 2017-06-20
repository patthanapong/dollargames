@extends('master')

@section('content')
<h3>Login</h3>
<form action="/login" method="POST">
{{ csrf_field() }}
<input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="username">
<input type="text" name="password" class="form-control" value="{{ old('password') }}" placeholder="password">

<input type="submit"  class="btn btn-primary" value="Login">
<input type="reset"  class="btn btn-danger" value="Cancel">


</form>
    
@endsection