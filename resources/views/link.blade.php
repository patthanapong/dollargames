<a href="/">Home</a> /
<a href="/dolladeposit">Deposit</a> /
<a href="/dollawithdraw">WithDraw</a> /
@if(auth()->check())
    <a href="/logout">Logout</a> 
    ( {{ auth()->user()->name}} )
@else
    <a href="/login">Login</a> /
@endif
<a href="/register">Register</a>
<br>
