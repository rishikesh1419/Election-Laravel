@extends('layouts.app')

@section('content')

<div class='container w-75' style='margin-bottom: 70px; margin-top: 70px;'>
    @include('layouts.messages')
@foreach ($voters as $voter)
<div class="card mb-3" style="max-width: 700px; margin-bottom: 20px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="photo/{{ $voter->id }}" class="card-img" alt="Voter photo">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ ucwords( $voter->gname." ".$voter->mname." ".$voter->lname ) }} <a href="{{ action('VotersController@getId', $voter->id)}}" class="btn btn-primary" style="float: right;">Get ID</a></h5>
        <p class="card-text">Aadhaar No. {{ $voter->aadhaar }} <br/> Date of Birth: {{ $voter->dob }} <br/>Husband/Father: {{ ucwords( $voter->fname) }}</p>
        <p class="card-text">Address: {{ ucwords( $voter->address1 . ", " . $voter->pincode ) }}</p>
      </div>
    </div>
  </div>
</div>    
@endforeach
{{$voters->links()}}

</div>

@endsection