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
    <input type="text" name="username" class="form-control" placeholder="username"><br>

    <label for="username">balance</label>
    <input type="text" name="balance" class="form-control" placeholder="balance"><br>

    <label for="username">bankwithdrawal</label>
    <input type="text" name="bankwithdrawal" class="form-control" placeholder="bankwithdrawal"><br>

    <label for="username">accountnumberwithdrawal</label>
    <input type="text" name="accountnumberwithdrawal" class="form-control" placeholder="accountnumberwithdrawal"><br>

    <label for="username">accountnamewithdrawal</label>
    <input type="text" name="accountnamewithdrawal" class="form-control" placeholder="accountnamewithdrawal"><br>

    <label for="username">datetime</label>
    <input type="text" class="form-control"  name="datetime" id="dateInput" placeholder="datetime"><br>

    <label for="username">channelwithdraw</label>
    <input type="text" name="channelwithdraw" class="form-control" placeholder="channelwithdraw"><br>
    
    <label for="username">tel</label>
    <input type="text" name="tel" class="form-control" placeholder="tel"><br>

    <label for="username">opinion</label>
    <input type="text" name="opinion" class="form-control" placeholder="opinion"><br>

    <input type="submit"  class="btn btn-primary" value="Save">
    <input type="reset"  class="btn btn-danger" value="Cancel">
</form>
    
@endsection