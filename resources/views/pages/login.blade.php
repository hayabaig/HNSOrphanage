@include('layouts.app')
<head>
    <title>Login</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div id="main">
    <h2>Welcome to your login screen</h2>
    <div class="form-group">
            {{Form::label('pass','Pass ID')}}
            {{Form::text('pass','', ['placeholder'=>'Enter your pass ID'])}}
        </div>
            {{Form::submit('Submit',['class'=>'button'])}}
        {!! Form::close() !!}

        <a href="/register">Register</a>
        