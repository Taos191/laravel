<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{url('images/favicon.png')}}">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>
<body class="h-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="{{url('')}}"><h3 class="text-center mb-4 text-white">{{str_replace("_"," ",config('app.name'))}}</h3></a>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1 text-white"><strong>Email</strong></label>
                                        <input type="email" name="email" class="form-control" value="{{old('email')}}">
                                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1 text-white"><strong>Password</strong></label>
                                        <input type="password" name="password" class="form-control" required>
                                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-white text-primary btn-block">Login</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="{{url('vendor/global/global.min.js')}}"></script>
    <script src="{{url('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{url('js/custom.min.js')}}"></script>
    <script src="{{url('js/dlabnav-init.js')}}"></script>
</body>
</html>