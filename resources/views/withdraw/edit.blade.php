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
<form action="/dollawithdraw/{{ $withdraw->id }}" method="POST">{{-- ต้องส่งตัวแปร id ไปด้วย --}}
    {{ csrf_field() }}
    
    {{ method_field('PUT') }}
    <label for="username">username</label>
    <input type="text" name="username" class="form-control" placeholder="username" value="{{ $withdraw->username }}"><br>
    
    <label for="balance">balance</label>
    <input type="text" name="balance" class="form-control" placeholder="balance" value="{{ $withdraw->balance }}"><br>

    <label for="bankwithdrawal">bankwithdraw</label>   
    <input type="text" name="bankwithdrawal" class="form-control" placeholder="bankwithdrawal" value="{{ $withdraw->bankwithdrawal }}"><br>

    <label for="accountnumberwithdrawal">accountnumberwithdrawal</label>
    <input type="text" name="accountnumberwithdrawal" class="form-control" placeholder="accountnumberwithdrawal" value="{{ $withdraw->accountnumberwithdrawal }}"><br>

    <label for="accountnamewithdrawal">accountnamewithdrawal</label>
    <input type="text" name="accountnamewithdrawal" class="form-control" placeholder="accountnamewithdrawal" value="{{ $withdraw->accountnamewithdrawal }}"><br>

    <label for="datetime">datetime</label>
    <input type="text" class="form-control"  name="datetime" id="dateInput" placeholder="datetime" value="{{ $withdraw->datetime }}"><br>

    <label for="channelwithdraw">channelwithdraw</label>
    <input type="text" name="channelwithdraw" class="form-control" placeholder="channelwithdraw" value="{{ $withdraw->channelwithdraw }}"><br>

    <label for="tel">tel</label>
    <input type="text" name="tel" class="form-control" placeholder="tel" value="{{ $withdraw->tel }}"><br>

    <label for="opinion">opinion</label>
    <input type="text" name="opinion" class="form-control" placeholder="opinion" value="{{ $withdraw->opinion }}"><br>

    <input type="submit"  class="btn btn-primary" value="Save">
    <input type="reset"  class="btn btn-danger" value="Cancel">
</form>


@endsection