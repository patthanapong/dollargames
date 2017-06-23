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

<h3>This is Edit</h3>
    
<form action="/dolladeposit/{{ $deposit->id }}" method="POST">{{-- ต้องส่งตัวแปร id ไปด้วย --}}
    {{ csrf_field() }}
    
    {{ method_field('PUT') }}
    <label for="username">username</label>
    <input type="text" name="username" class="form-control" placeholder="username" value="{{ $deposit->username }}"><br>
    
    <label for="balance">balance</label>
    <input type="text" name="balance" class="form-control" placeholder="balance" value="{{ $deposit->balance }}"><br>

    <label for="bankdeposit">bankdeposit</label>   
    <input type="text" name="bankdeposit" class="form-control" placeholder="bankdeposit" value="{{ $deposit->bankdeposit }}"><br>

    <label for="accountnumberdeposit">accountnumberdeposit</label>
    <input type="text" name="accountnumberdeposit" class="form-control" placeholder="accountnumberdeposit" value="{{ $deposit->accountnumberdeposit }}"><br>

    <label for="accontnamedeposit">accontnamedeposit</label>
    <input type="text" name="accontnamedeposit" class="form-control" placeholder="accontnamedeposit" value="{{ $deposit->accontnamedeposit }}"><br>

    <label for="datetime">datetime</label>
    <input type="text" class="form-control"  name="datetime" id="dateInput" placeholder="datetime" value="{{ $deposit->datetime }}"><br>

    <label for="channeldeposit">channeldeposit</label>
    <input type="text" name="channeldeposit" class="form-control" placeholder="channeldeposit" value="{{ $deposit->channeldeposit }}"><br>

    <label for="tel">tel</label>
    <input type="text" name="tel" class="form-control" placeholder="tel" value="{{ $deposit->tel }}"><br>

    <label for="opinion">opinion</label>
    <input type="text" name="opinion" class="form-control" placeholder="opinion" value="{{ $deposit->opinion }}"><br>

    <input type="submit"  class="btn btn-primary" value="Save">
    <input type="reset"  class="btn btn-danger" value="Cancel">
</form>
    
@endsection