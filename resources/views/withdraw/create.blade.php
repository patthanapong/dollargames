@extends('master')

@section('content')
  <script type="text/javascript">
    $(function(){
    	$("#dateInput").datetimepicker({
        dateFormat: 'yy-mm-dd',
        timeFormat: 'HH:mm:ss'
    	});
    });

    </script>

<h3>This is create</h3>

<form action="/dollawithdraw" method="POST">
    {{ csrf_field() }}
    <label for="username">username</label>
    <input type="text" name="username" class="form-control" placeholder="username" value="{{ old('username') }}">
    <p>{{ $errors->first('username') }}</p>

    <label for="username">balance</label>
    <input type="text" name="balance" class="form-control" placeholder="balance" value="{{ old('balance') }}">
    <p>{{ $errors->first('balance') }}</p>

    <label for="username">bankwithdrawal</label>
    <input type="text" name="bankwithdrawal" class="form-control" placeholder="bankwithdrawal" value="{{ old('bankwithdrawal') }}">
    <p>{{ $errors->first('bankwithdrawal') }}</p>

    <label for="username">accountnumberwithdrawal</label>
    <input type="text" name="accountnumberwithdrawal" class="form-control" placeholder="accountnumberwithdrawal" value="{{ old('accountnumberwithdrawal') }}">
    <p>{{ $errors->first('accountnumberwithdrawal') }}</p>

    <label for="username">accountnamewithdrawal</label>
    <input type="text" name="accountnamewithdrawal" class="form-control" placeholder="accountnamewithdrawal" value="{{ old('accountnamewithdrawal') }}">
    <p>{{ $errors->first('accountnamewithdrawal') }}</p>

    <label for="username">datetime</label>
    <input type="text" class="form-control"  name="datetime" id="dateInput" placeholder="datetime" value="{{ old('datetime') }}">
    <p>{{ $errors->first('datetime') }}</p>

    <label for="username">channelwithdraw</label>
    <input type="text" name="channelwithdraw" class="form-control" placeholder="channelwithdraw" value="{{ old('channelwithdraw') }}">
    <p>{{ $errors->first('channelwithdraw') }}</p>
    
    <label for="username">tel</label>
    <input type="text" name="tel" class="form-control" placeholder="tel" value="{{ old('tel') }}">
    <p>{{ $errors->first('tel') }}</p>

    <label for="username">opinion</label>
    <input type="text" name="opinion" class="form-control" placeholder="opinion" value="{{ old('opinion') }}">
    <p>{{ $errors->first('opinion') }}</p>

    <input type="submit"  class="btn btn-primary" value="Save">
    <input type="reset"  class="btn btn-danger" value="Cancel">
</form>
    
@endsection