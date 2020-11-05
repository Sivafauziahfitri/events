<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-teal-900 border-bottom">
            <h3 class="my-0 mr-md-auto font-weight-normal">
                Event
            </h3>
            <nav class="my-2 my-md-0 mr-md-3">
                <a href="" class="p-2 text-dark">Login</a>
                <a href="" class="p-2 text-dark">Register</a>
            </nav>
        </div>
        <div class="nav-scroller bg-white shadow-sm">
            <nav class="nav nav-underline ml-4 py-2">
            <a href="{{route('users.Kegiatan.index')}}" class="nav-link"> <h6 class="text-muted">Kegiatan</h6></a>
                <a href="" class="nav-link"> <h6 class="text-muted">Daftar</h6></a>
            </nav>
        </div>
        <div class="jumbotron" style="background-image: url('banner/undraw_events_2p66.png')">
            <div class="container">
                <h3 class="text-center">Aplikasi Management Kegiatan</h3>
                <h1 class="display-3 text-center">ABV</h1>
            </div>
        </div>
        <div class="container py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{ asset('banner/undraw_step_to_the_sun_nxqq.png') }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Manage Event</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet qui eligendi aperiam distinctio reprehenderit repellat veritatis enim consequuntur beatae amet deserunt neque, exercitationem mollitia quam quae cupiditate excepturi. Non, veniam.</p>
                                </div>
                            </div>
                        </div> <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{ asset('banner/undraw_upload_image_iwej.png') }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Manage Register</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, deserunt nostrum doloribus repudiandae molestias, totam natus veritatis illo repellat aperiam animi rerum, est quaerat vitae ut quas voluptates quisquam ex.</p>
                                </div>
                            </div>
                        </div> <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{ asset('banner/undraw_schedule_pnbk.png') }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Schedule Event</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, deserunt nostrum doloribus repudiandae molestias, totam natus veritatis illo repellat aperiam animi rerum, est quaerat vitae ut quas voluptates quisquam ex.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="container py-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white">
                        <li class="breadcrumb-item active" aria-current="page">Kegiatan</li>
                    </ol>
                </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-0">
                                <img src="{{ asset('banner/undraw_fitness_stats_sht6.png') }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Kegiatan Non-active</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, deserunt nostrum doloribus repudiandae molestias, totam natus veritatis illo repellat aperiam animi rerum, est quaerat vitae ut quas voluptates quisquam ex.</p>
                                    <button type="submit" class="btn btn-outline-info btn-lg btn-block" disabled>Daftar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0">
                                <img src="{{ asset('banner/undraw_check_boxes_m3d0 (1).png') }}" alt="" class="card-img-top rounded-circle">
                                <div class="card-body">
                                    <h3>Kegiatan Active</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, deserunt nostrum doloribus repudiandae molestias, totam natus veritatis illo repellat aperiam animi rerum, est quaerat vitae ut quas voluptates quisquam ex.</p>
                                    <button class="btn btn-outline-success btn-lg btn-block" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Coming soon
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>