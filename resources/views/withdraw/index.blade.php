@extends('master')

@section('content')
<br>
  <a href="/dollawithdraw/create" type="text" class="btn  btn-primary">Add</a>
<table class="table">
    <tr>
        <td>#</td>
        <td>Username</td>
        <td>Balance</td>
        <td>BankWithDraw</td>
        <td>AccountNumberWithDraw</td>
        <td>AccountNameWithDraw</td>
        <td>DateTime</td>
        <td>ChannelWithDraw</td>
        <td>Tel.</td>
        <td>Opinion</td>
        <td>Action</td>
    </tr>
    @foreach($withdraw as $w)
    <tr>
        <td>{{ $w->id }}</td>
        <td>{{ $w->username }}</td>
        <td>{{ $w->balance }}</td>
        <td>{{ $w->bankwithdrawal }}</td>
        <td>{{ $w->accountnumberwithdrawal }}</td>
        <td>{{ $w->accountnamewithdrawal }}</td>
        <td>{{ $w->datetime }}</td>
        <td>{{ $w->channelwithdraw }}</td>
        <td>{{ $w->tel }}</td>
        <td>{{ $w->opinion }}</td>
        <td><a href="/dollawithdraw/{{ $w->id }}/edit" class="btn btn-default">Edit</a></td>
    </tr>
      @endforeach
</table>
    
@endsection