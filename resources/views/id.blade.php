<html>
    <head>
    <title>Election Commission</title>
    {{-- <link rel="stylesheet" href="{{url('/css/app.css')}}"> --}}
    <style>
      body {
        text-align: center;
      }
      img{
    max-height:200px;
    max-width:200px;
    height:auto;
    width:auto;
}
    </style>
    </head>

    <body>
        <div>
            <h3 style="margin:auto;">Election Commission</h3><br/>
            <h3  style="margin:auto;">Mumbai Region</h3><br/>
            <h2>Voter ID</h2>
          
            <div style="max-width: 700px; margin-bottom: 20px;">
                <div>
                  <div>
                    <img src="{{url('/photo').'/'.$voter->id}}" alt="Votar photo">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ ucwords( $voter->gname." ".$voter->mname." ".$voter->lname )}}</h5>
                      <p class="card-text">Aadhaar No. {{ $voter->aadhaar }} <br/> Date of Birth: {{ $voter->dob }} <br/>Husband/Father: {{ ucwords( $voter->fname) }}</p>
                      <p class="card-text">Address: {{ ucwords($voter->address1 . ", " . $voter->pincode) }}</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </body>
</html>


