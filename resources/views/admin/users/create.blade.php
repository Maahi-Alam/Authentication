@extends('layouts.admin')


@section('content')


    <h1>Create Users</h1>
    @include('includes.form_error')

    {!! Form::open(['method'=>'post','action'=>'Admin\AdminUsersController@store','files'=>true])!!}


    <div class="form-group">
        {!! Form::label('username','UserName:')!!}
        {!! Form::text('username',null,['class'=>'form-control'])!!}

    </div>
    <div class="form-group">
        {!! Form::label('first_name','First Name:')!!}
        {!! Form::text('first_name',null,['class'=>'form-control'])!!}

    </div>
    <div class="form-group">
        {!! Form::label('last_name','Last Name:')!!}
        {!! Form::text('last_name',null,['class'=>'form-control'])!!}

    </div>


    <div class="form-group">
        {!! Form::label('email','Email:')!!}
        {!! Form::email('email',null,['class'=>'form-control'])!!}

    </div>

    <div class="form-group">
        {!! Form::label('role_id','Role:')!!}
        {!! Form::select('role_id', [''=>'Choose Option'] + $roles , null,['class'=>'form-control']) !!}


    </div>



    <div class="form-group">
        {!! Form::label('is_active','Status')!!}
        {!! Form::select('is_active',array(1=>'Active' , 0=>'Not Active'),0,['class'=>'form-control'])!!}

    </div>



        <div class="form-group">
            {!! Form::label('photo_id','Photo:')!!}
            {!! Form::file('photo_id',null,['class'=>'form-control'])!!}

        </div>








    <div class="form-group">
        {!! Form::label('password','Password')!!}
        {!! Form::password('password',['class'=>'form-control'])!!}

    </div>










    <div class="form-group">

        {!! Form::submit('Create Users',['class'=>'btn btn-primary'])!!}

    </div>

    {!! Form::close()!!}











@endsection