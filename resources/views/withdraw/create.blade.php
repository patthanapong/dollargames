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
    <input type="text" name="username" class="form-control" placeholder="username"><br>

    <input type="text" name="balance" class="form-control" placeholder="balance"><br>

    <input type="text" name="bankwithdrawal" class="form-control" placeholder="bankwithdrawal"><br>

    <input type="text" name="accountnumberwithdrawal" class="form-control" placeholder="accountnumberwithdrawal"><br>

    <input type="text" name="accountnamewithdrawal" class="form-control" placeholder="accountnamewithdrawal"><br>

    <input type="text" class="form-control"  name="datetime" id="dateInput" placeholder="datetime"><br>

    <input type="text" name="channelwithdraw" class="form-control" placeholder="channelwithdraw"><br>

    <input type="text" name="tel" class="form-control" placeholder="tel"><br>

    <input type="text" name="opinion" class="form-control" placeholder="opinion"><br>

    <input type="submit"  class="btn btn-primary" value="Save">
    <input type="reset"  class="btn btn-danger" value="Cancel">
</form>
    
@endsection