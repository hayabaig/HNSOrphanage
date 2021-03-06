@include('layouts.app')

<h2>Donations</h2>
<br></br>
<body>Make an online donation for our shelter</body>

{!! Form::open(['action'=>'CustomersController@store','method'=>'CUSTOMER']) !!}
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name','', ['placeholder'=>'Enter your name'])}}
    </div>
    {!! Form::open(['action'=>'CustomersController@store','method'=>'CUSTOMER']) !!}
    <div class="form-group">
        {{Form::label('cnic','CNIC number')}}
        {{Form::text('cnic','', ['placeholder'=>'Enter your CNIC'])}}
    </div>
    <div>
        {{Form::label('contactnum','Contact #')}}
        {{Form::text('contactnum','', ['placeholder'=>'Enter your contact #'])}}
    </div>
    <div>
        {{Form::label('address','House Address')}}
        {{Form::text('address','', ['placeholder'=>'Enter your address'])}}
    </div>
    <div>
        {{Form::label('age','Age')}}
        {{Form::text('age','', ['placeholder'=>'Enter your age'])}}
    </div>
    <div>
        {{Form::label('gender','Gender')}}
        {{Form::text('gender','', ['placeholder'=>'Enter your gender'])}}
    </div>
    {{Form::submit('Submit',['class'=>'button'])}}
{!! Form::close() !!}
