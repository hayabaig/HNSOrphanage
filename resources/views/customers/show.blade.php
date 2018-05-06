@include('layouts.app')

<a href="/customers"><class = "btn btn-default">Go Back</a>
<h2>{{$customers->name}}</h2>
<div>
    {{$customers->address}}
</div>