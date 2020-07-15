@extends('layouts.app')

@section('content')

<head>
    <link href="http://iot.test/css/forms.css" rel="stylesheet">
</head>

<body>
    <!--Add device section-->
    <!--This is a form with which we can create a new device.-->
    <section id="device">
        <div class="container">
            <div class="add-device pt-5 mt-5 mb-4 py-4 px-2">
                <h1 class="text-center">Add new device</h1>
                <div class="row px-2 py-5">
                    <div class="col-12 col-sm-12 col-md-6">

                        <form method="post" action="{{url('devices')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class=" form-group ">
                                <label>Device name</label>
                                <input type="text " class="form-control " placeholder="Enter name"  name="name">
                            </div>
                            <div class="form-group ">
                                <label>Device type</label>
                                <input type="text " class="form-control " placeholder="Enter type of device"  name="type">
                            </div>
                            <div class="form-group ">
                                <label>Device description</label>
                                <input type="text " class="form-control " placeholder="Enter description for device"  name="description">
                            </div>
                            <button type="submit " class="btn btn-primary ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of section-->
    <!-- Footer -->
    <footer class="py-4 bg-dark ">
        <div class="container ">
            <p class="text-center text-white ">Copyright &copy; System of devices 2020</p>
        </div>
    </footer>
    <!--End-->
</body>
@endsection