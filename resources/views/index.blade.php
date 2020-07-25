@extends('layouts.app')

@section('content')
<div style='margin-bottom: 70px; margin-top: 70px;'>
  @include('layouts.messages')
<div class="jumbotron text-center">

    <h1>Election Commission</h1>
    <h3>Mumbai Region</h3>
    {{-- <a href="/notes" class="btn btn-primary">View Notes</a> --}}
    {{-- <a href="/notes/create" class="btn btn-success">Create Note</a> --}}

</div>

<div class="row">
    <div class="col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">New Voter Registration</h5>
          <p class="card-text">Register with Aadhaar number and exercise your right to vote!</p>
          <a href="/register" class="btn btn-primary">Register</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Get Voter ID</h5>
          <p class="card-text">Search for your voter ID if already registered!</p>
          <a href="/search" class="btn btn-primary">Search</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection