@extends('layouts.nav')

@section('title')
    FAQ

@endsection


@section('cont')





    <head>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/w1style.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

        <div class="planchooser">
            <div class="row">
                <div class="col-12 plan">
                    <h1>Workout Plan - Easy</h1>
                </div>
            </div>
        </div>
        <div class="whole">
            <div class="excercise">
                <div class="text">
                    <h2>High Stepping</h2>
                    magnam dolorem, sit soluta quam id quasi dolore quia asperiores quae.
                    Eveniet quas ratione, cumque reiciendis mollitia deserunt asperiores
                    alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                    sapiente architecto illum ipsam explicabo nulla dicta praesentium,
                    exercitationem distinctio blanditiis assumenda iusto quis molestiae
                    quidem, numquam cupiditate quo accusantium deserunt pariatur!
                    <p><b>Duration: 30seconds</b></p>
                    <p><a href="#"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\highstepping.gif" alt="cat" />
                </div>
            </div>

            <div class="excercise">
                <div class="text">
                    <h2>Mountain Climber</h2>
                    magnam dolorem, sit soluta quam id quasi dolore quia asperiores quae.
                    Eveniet quas ratione, cumque reiciendis mollitia deserunt asperiores
                    alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                    sapiente architecto illum ipsam explicabo nulla dicta praesentium,
                    exercitationem distinctio blanditiis assumenda iusto quis molestiae
                    quidem, numquam cupiditate quo accusantium deserunt pariatur!
                    <p><b>Duration: 30seconds</b></p>
                    <p><a href="#"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\mountainclimber.gif" alt="cat" />
                </div>
            </div>
            <div class="excercise">
                <div class="text">
                    <h2>Flutter Kicks</h2>
                    magnam dolorem, sit soluta quam id quasi dolore quia asperiores quae.
                    Eveniet quas ratione, cumque reiciendis mollitia deserunt asperiores
                    alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                    sapiente architecto illum ipsam explicabo nulla dicta praesentium,
                    exercitationem distinctio blanditiis assumenda iusto quis molestiae
                    quidem, numquam cupiditate quo accusantium deserunt pariatur!
                    <p><b>Repeat: 10 times</b></p>
                    <p><a href="#"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\flutterkicks.gif" alt="cat" />
                </div>
            </div>
            <div class="excercise">
                <div class="text">
                    <h2>Bicycle Crunch</h2>
                    magnam dolorem, sit soluta quam id quasi dolore quia asperiores quae.
                    Eveniet quas ratione, cumque reiciendis mollitia deserunt asperiores
                    alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                    sapiente architecto illum ipsam explicabo nulla dicta praesentium,
                    exercitationem distinctio blanditiis assumenda iusto quis molestiae
                    quidem, numquam cupiditate quo accusantium deserunt pariatur!
                    <p><b>Repeat: 10 times</b></p>
                    <p><a href="#"> Video Link</a></p>
                </div>
                <div class="image">
                    <img src="images\Workout\bicyclecrunch.gif" alt="cat" />
                </div>
            </div>
            <div class="finish">
                <a href="..\index.html"><button>Finish</button></a>
            </div>
        </div>
    </body>

    </html>
