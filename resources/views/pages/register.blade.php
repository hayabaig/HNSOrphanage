@include('layouts.app')
<head>
    <title>Register</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div id="main">
    <h2>Welcome to your register screen</h2>
    {!! Form::open(['action'=>'StaffController@store','method'=>'STAFF']) !!}
    <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','', ['placeholder'=>'Enter your name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email','Enter your email address')}}
            {{Form::text('email','', ['placeholder'=>'xyz@abc.com'])}}
        </div>
        <div class="form-group">
                {{Form::label('contactnum','Enter your contact number')}}
                {{Form::text('contactnum','', ['placeholder'=>'03xx-xxxxxxx'])}}
        </div>
        <div class="form-group">
                {{Form::label('address','Enter your address')}}
                {{Form::text('address','', ['placeholder'=>''])}}
        </div>
        {{Form::submit('Submit',['class'=>'button'])}}
        {!! Form::close() !!}

        <a href="/register">Register</a>
        