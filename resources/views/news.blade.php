<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= $site ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Comfortaa', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .cover-pic {
              width:100%;
              box-shadow: 5px 5px 10px grey;
            }

            .margintop50 {
              margin-top: 50px;
            }

            .margintop25 {
              margin-top: 25px;
            }

            .margintop10 {
              margin-top: 10px;
            }

            .main-heading {
              padding: 15px 0 10px 0;
            }

            .main-heading h1 {
              color: #555555;
            }

        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <?= $name ?>
                </div>

                <div class="links">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/gallery') }}">Gallery</a>
                    <a href="{{ url('/news') }}">Recipies</a>
                    <a href="{{ url('/contact') }}">Contact</a>
                </div>


            </div>

            <div class="container">
                <div class="row">
                @foreach ($recipies as $recipy)

                <div class="col-md-12 margintop50">
                      <div class="main-heading"><h1 class="text-center">{!!html_entity_decode($recipy->name)!!}</h1></div>
                      <img class="cover-pic margintop10" src="{{ $recipy->photo}}" />
                      <div class="margintop10"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; {!!html_entity_decode($recipy->tags)!!}</div>
                </div>

                <div class="col-md-8 margintop25">
                      <h3>Μέθοδος εκτέλεσης</h3>
                      {!!html_entity_decode($recipy->description)!!}

                </div>

                <div class="col-md-4 margintop25">
                    <h3>Συστατικά</h3>
                    {!!html_entity_decode($recipy->ingredients)!!}

                </div>




                @endforeach

              </div>
            </div>

        </div>
    </body>
</html>
