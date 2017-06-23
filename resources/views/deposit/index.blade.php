@extends('master')

@section('content')
<br>
  <a href="/dolladeposit/create" type="text" class="btn  btn-primary">Add</a>
<table class="table">
    <tr>
        <td>#</td>
        <td>Username</td>
        <td>Balance</td>
        <td>BankDeposit</td>
        <td>AccountNumberdeposit</td>
        <td>AccountNamedeposit</td>
        <td>DateTime</td>
        <td>ChannelDeposit</td>
        <td>Tel.</td>
        <td>Opinion</td>
        <td>Action</td>
    </tr>
    @foreach($deposit as $d)
    <tr>
        
        <td>{{ $d->id }}</td>
        <td>{{ $d->username }}</td>
        <td>{{ $d->balance }}</td>
        <td>{{ $d->bankdeposit }}</td>
        <td>{{ $d->accountnumberdeposit }}</td>
        <td>{{ $d->accontnamedeposit }}</td>
        <td>{{ $d->datetime }}</td>
        <td>{{ $d->channeldeposit }}</td>
        <td>{{ $d->tel }}</td>
        <td>{{ $d->opinion }}</td>
        <td><a href="/dolladeposit/{{ $d->id }}/edit" class="btn btn-default">Edit</a></td>{{-- ต้องส่งตัวแปร id ไปด้วย --}}
    </tr>
      @endforeach
</table>
    
@endsection