@extends('layouts.app')

@section('content')

<div class='container w-75' style='margin-bottom: 70px; margin-top: 70px;'>
    @include('layouts.messages')
    {!! Form::open(['action' => 'VotersController@results', 'method' => "POST"]) !!}
    {!! Form::token() !!}
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('gname', 'First/Given Name')}}
            {{Form::text('gname', '', ['required', "id"=>'gname', "placeholder"=>'First/Given Name', "class"=>"form-control"])}}

        </div>
        <div class="form-group col-md-6">
            {{Form::label('mname', 'Middle Name')}}
            {{Form::text('mname', '', ['id'=>'mname', "placeholder"=>'Middle Name', "class"=>"form-control"])}}

        </div>
    </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::label('lname', 'Last Name')}}
                {{Form::text('lname', '', ["placeholder"=>'Last Name', "class"=>"form-control"])}}
    
            </div>
            <div class="form-group col-md-6">

                {{Form::label('pincode', 'Pincode')}}
                {{Form::text('pincode', '', ['id'=>'pincode', "placeholder"=>'Pincode', "class"=>"form-control"])}}
    
            </div>
        </div>

        <div style='text-align: center;'>
        {{Form::submit('Search', ['id' => 'searchButton','class' => 'btn btn-primary'])}}
        </div>

    {!! Form::close() !!}

</div>
@endsection