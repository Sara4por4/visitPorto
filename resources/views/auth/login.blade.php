<!DOCTYPE HTML>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/admin/css/login.css">

</head>

<body>
    <div class="wallpaper"></div>

    <div id="box">
        <h1>{{config('app.name')}}</h1>

        <form name="user_login_form" id="login_form" method="post" action="{{route('login')}}">
            {{ csrf_field() }}

            <input type="text" name="email" maxlength="200" value="{{old('email')}}" placeholder="Utilizador" autocomplete="off">
            <input type="password" name="password" maxlength="20" placeholder="Password" autocomplete="off">

            <input type="submit" value="entrar">
            <input type="hidden" name="op" value="login">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </form>

    </div>

    </body>
</html>
