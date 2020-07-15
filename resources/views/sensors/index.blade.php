@extends('layouts.app')
@section('content')

<head>

    <!--<link rel = "stylesheet" type="text/css" href="{{ asset('style.css')}}">-->
    <link href="http://iot.test/css/style.css" rel="stylesheet">
</head>

<body>
    <!--Section for sensors-->
    <!--Sensors table-->
    <!--This table shows all the sensors in the system and the names of the
 devices-->
    <section id="sensors">
        <div class="container">
            <div class="sensor pt-5 mt-5 mb-4 py-4 pr-2 pl-1">
                <a href="{{route('sensors.create')}}"><button class="btn btn-primary">Add sensor</button></a>
                <div class="row px-2 py-5">
                    <div class="col-12 col-sm-12 col-md-12 ">
                        <table class="table">
                            <thead class="table-primary ">
                                <th>#</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Name of device</th>
                            </thead>
                            <tbody>
                                @foreach($sensors as $sensor)
                                <tr>
                                    <th scope="row">{{ $sensor->id }}</th>
                                    <td>{{ $sensor->name }}</td>
                                    <td>{{ $sensor->type }}</td>
                                    <td>{{ $sensor->description }}</td>
                                    <td>{{ $sensor->devices->count()}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of sensors section-->
    <!-- Footer -->
    <footer class="py-4  bg-dark">
        <div class="container">
            <p class="text-center text-white ">Copyright &copy; System of devices 2020</p>
        </div>
    </footer>
    <!--End-->
</body>
@endsection