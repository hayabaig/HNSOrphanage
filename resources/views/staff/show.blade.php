@include('layouts.app')

<a href="/login"><class = "btn btn-default">Go Back To the Login Page</a>
<h2>{{$staff->name}}</h2>
<div>
    Your pass to login is: {{$staff->pass}}
</div>