@extends('layouts.app')

@section('content')

<head>
    <link href="http://iot.test/css/forms.css" rel="stylesheet">
</head>

<body>
    <!--Add sensor section-->
    <!--This is a form with which we can create a new sensor.-->
    <section id="sensor">
        <div class="container">
            <div class="add-sensor pt-5 mt-5 mb-4 py-4 px-2">
                <h1 class="text-center">Add new sensor</h1>
                <div class="row px-2 py-5">
                    <div class="col-12 col-sm-12 col-md-6">
                        <form method="post" action="{{url('sensors')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class=" form-group ">
                                <label>Sensor name</label>
                                <input type="text " class="form-control " placeholder="Enter name" name="name">
                            </div>
                            <div class="form-group ">
                                <label>Sensor type</label>
                                <input type="text " class="form-control " placeholder="Enter type of sensor" name="type">
                            </div>
                            <div class="form-group ">
                                <label>Sensor description</label>
                                <input type="text " class="form-control " placeholder="Enter description for sensor" name="description">
                            </div>
                            <div class="form-group ">
                                <label>Device name</label>
                                <select class="form-control">
                                    <option>Samsung</option>
                                    <option>Acer</option>
                                </select>
                            </div>
                            <button type="submit " class="btn btn-primary ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of this section-->


    <!-- Footer -->
    <footer class="py-4 bg-dark ">
        <div class="container ">
            <p class="text-center text-white ">Copyright &copy; System of devices 2020</p>
        </div>
    </footer>
    <!--End-->
</body>
@endsection