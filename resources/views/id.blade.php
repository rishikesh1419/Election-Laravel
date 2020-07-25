<html>
    <head>
    <title>{{config('app.name', 'Election Commission')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script type='text/javascript' src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    </head>

    <body>
        <div class="container">
            <h3>Election Commission</h3>
            <h3>Mumbai Region</h3>
            <h2>Voter ID</h2>
            <div class="card mb-3" style="max-width: 700px; margin-bottom: 20px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="photo/{{ $voter->id }}" class="card-img" alt="Voter photo">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $voter->gname." ".$voter->mname." ".$voter->lname }} <a href="{{ action('VotersController@getId', $voter->id)}}" class="btn btn-primary" style="float: right;">Get ID</a></h5>
                      <p class="card-text">Aadhaar No. {{ $voter->aadhaar }} <br/> Date of Birth: {{ $voter->dob }} <br/>Husband/Father: {{ $voter->fname }}</p>
                      <p class="card-text">Address: {{ $voter->address1 . ", " . $voter->pincode }}</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </body>
</html>


