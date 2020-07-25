<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" style="margin-bottom: 15px;">
    <div class="container">
    <a class="navbar-brand" href="/">{{config('app.name', "Election Commission")}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/register">New Voter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/search">Voter ID</a>
            </li>
        </ul>
    </div>
</div>
</nav>