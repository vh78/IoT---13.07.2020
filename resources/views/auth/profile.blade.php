@extends('layouts.app')

@section('content')

<head>

    <!--<link rel = "stylesheet" type="text/css" href="{{ asset('style.css')}}">-->
    <link href="http://iot.test/css/profile.css" rel="stylesheet">
</head>

<body>
    <section>
        <div class="container">
            <div class="emp-profile pt-5 mt-5 mb-4 py-4 px-2">
                <div class="btn-group" role="group">
                    <a href="edit.html"><button type="button" class="btn btn-primary">Edit</button></a>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
                <hr>
                <div class="row px-2 py-5">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="../images/profile.jpg" with="150px" height="130px" alt="No image" class="rounded" />
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-head mb-3 mt-3">
                            <h5>
                            {{ Auth::user()->name }} 
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-tab">
                            <div>
                                <label>User Id</label>
                                <p> {{ Auth::user()->id }} </p>
                                <label>Name</label>
                                <p> {{ Auth::user()->name }} </p>
                                <label>Email</label>
                                <p> {{ Auth::user()->email }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="text-center text-white">Copyright &copy; System of devices 2020</p>
        </div>
    </footer>
    <!--End-->
</body>
@endsection