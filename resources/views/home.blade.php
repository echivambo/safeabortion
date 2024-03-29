@extends('admin.layout.layout')


@section('content')
    {!! \ConsoleTVs\Charts\Facades\Charts::styles() !!}


    <style>
        body {
            background: #22222226;
        }

    </style>

<div class="container">
    <!-- Page Content -->

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4> </div>
    </div>
    <!-- row -->

    <!--row -->
    <div class="row">

        <div class="col-md-4">
            {!! $clinica->render() !!}
        </div>

    </div>

    <hr>

    <div class="row">

    </div>


</div>
    <script>
        window.location.replace("{{route('abortion-counselling.index')}}");
    </script>

    {!! \ConsoleTVs\Charts\Facades\Charts::scripts() !!}
    {!! $chart->script() !!}



@endsection
