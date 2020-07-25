@extends('layouts.app')

@section('content')

<div class='container w-75' style='margin-bottom: 70px; margin-top: 70px;'>
    @include('layouts.messages')
    {!! Form::open(['action' => 'VotersController@store', 'method' => "POST", 'files' => true, 'enctype' => 'multipart/form-data' ]) !!}
    {!! Form::token() !!}
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('gname', 'First/Given Name')}}
            {{Form::text('gname', '', ["placeholder"=>'First/Given Name', "class"=>"form-control"])}}

        </div>
        <div class="form-group col-md-6">
            {{Form::label('mname', 'Middle Name')}}
            {{Form::text('mname', '', ["placeholder"=>'Middle Name', "class"=>"form-control"])}}

        </div>
    </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::label('lname', 'Last Name')}}
                {{Form::text('lname', '', ["placeholder"=>'Last Name', "class"=>"form-control"])}}
    
            </div>
            <div class="form-group col-md-6">

                {{Form::label('fname', 'Father\'s/Husband\'s Full Name')}}
                {{Form::text('fname', '', ["placeholder"=>'Father\'s/Husband\'s Full Name', "class"=>"form-control"])}}
      
            </div>
        </div>




        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::label('dob', 'Date of Birth')}}
                {{Form::date('dob', '', ["class"=>"form-control"])}}
    
            </div>
            <div class="form-group col-md-6">

                {{Form::label('aadhaar', 'Aadhaar No.')}}
                {{Form::text('aadhaar', '', ["placeholder"=>'Aadhaar No.', "class"=>"form-control"])}}
    
            </div>
        </div>


        <div class="form-group">

            {{Form::label('address1', 'Address')}}
            {{Form::text('address1', '', ["placeholder"=>'Address', "class"=>"form-control"])}}

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">

                {{Form::label('pincode', 'Pincode')}}
                {{Form::text('pincode', '', ["placeholder"=>'Pincode', "class"=>"form-control"])}}
    
            </div>
            <div class="form-group col-md-6">

                {{Form::label('photo', 'Photo (JPEG/JPG - Max 200KB)')}}
                {{Form::file('photo', ["class"=>"form-control"])}}
    
            </div>
        </div>

        <div style='text-align: center;'>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>


    {!! Form::close() !!}
</div>

@endsection