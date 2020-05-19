<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <link href="{{ URL::asset('/admin/css/app.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{url('/')}}/admin/css/custom.min.css" rel="stylesheet">

    @stack('stylesheets')
    <style>
        .ui-state-default {
            cursor: pointer;
        }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('admin.layouts.menu.menu')
            <div class="right_col" role="main">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{url('/')}}/admin/js/app.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="{{url('/')}}/admin/js/widgets.js"></script>
    @stack('scripts_lib')
    @stack('scripts')
    <script src="{{url('/')}}/admin/js/custom.js"></script>
</body>
</html>