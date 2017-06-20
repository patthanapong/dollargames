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

<form action="/dolladeposit" method="POST">
    {{ csrf_field() }}
    <input type="text" name="username" class="form-control" placeholder="username"><br>

    <input type="text" name="balance" class="form-control" placeholder="balance"><br>

    <input type="text" name="bankdeposit" class="form-control" placeholder="bankdeposit"><br>

    <input type="text" name="accountnumberdeposit" class="form-control" placeholder="accountnumberdeposit"><br>

    <input type="text" name="accontnamedeposit" class="form-control" placeholder="accontnamedeposit"><br>

    <input type="text" class="form-control"  name="datetime" id="dateInput" placeholder="datetime"><br>

    <input type="text" name="channeldeposit" class="form-control" placeholder="channeldeposit"><br>

    <input type="text" name="tel" class="form-control" placeholder="tel"><br>

    <input type="text" name="opinion" class="form-control" placeholder="opinion"><br>

    <input type="submit"  class="btn btn-primary" value="Save">
    <input type="reset"  class="btn btn-danger" value="Cancel">
</form>
    
@endsection