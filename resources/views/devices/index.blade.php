@extends('layouts.app')
@section('content')
<head>

<!--<link rel = "stylesheet" type="text/css" href="{{ asset('style.css')}}">-->
<link href="http://iot.test/css/style.css" rel="stylesheet">
</head>
<body>
<!--Section for device-->
<!--Devices table for show all device in the system-->
<section id="devices">
    <div class="container">
        <div class="device pt-5 mt-5 mb-4 py-4 pr-2 pl-1">
            <a href="{{ route('devices.create') }}"> <button class="btn btn-primary">Add device</button></a>
            <div class="row px-2 py-5">
                <div class="col-12 col-sm-12 col-md-12 ">
                    <table class="table">
                        <thead class="table-primary ">
                            <th>#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Sensors</th>
                        </thead>
                        <tbody>
                            @foreach($devices as $device)
                            <tr>
                                <th scope="row">{{ $device->id }}</th>
                                <td>{{ $device->name }}</td>
                                <td>{{ $device->type }}</td>
                                <td>{{ $device->description }}</td>
                                <td>{{ $device->sensors->count() }}</td>
                            </tr>
                            @endforeach
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End-->

 <!-- Footer -->
 <footer class="py-4  bg-dark">
        <div class="container">
            <p class="text-center text-white ">Copyright &copy; System of devices 2020</p>
        </div>
    </footer>
    <!--End-->
</body>
@endsection