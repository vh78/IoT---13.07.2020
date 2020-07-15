@extends('layouts.app')

@section('content')
<!--Hero section-->

<section id="hero pt">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-4">Welcome to device's system!</h1>
                    <i class="fa fa-check" aria-hidden="true" style="font-size:80px ;margin-left:45%;"></i>
                    <p id="first">You are login successfully.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End of the section-->

<!--section about-->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Your opportunities</h2>
                <p class="lead">This is a great place to talk about this system.</p>
            </div>
        </div>
    </div>
</section>
<!--end-->

<!-- Footer -->
<footer class="py-4 bg-dark">
    <div class="container">
        <p class="text-center text-white">Copyright &copy; Devices system 2020</p>
    </div>
</footer>
<!--End-->
@endsection