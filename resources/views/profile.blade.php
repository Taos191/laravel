@extends('layouts.layout')
@section('title','Update Profile')

@section('content')

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">@yield('title')</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                    @if(Session::get('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif

                    <form action="{{url('profile-edit/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <img src="/uploads/profile/{{ Auth::user()->avatar}}" class="img-fluid" style="max-width: 100px;" >
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <span class="text-danger">@error('fullname'){{$message}} @enderror</span>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Full Name</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Full Name" value="{{ Auth::user()->name}}">
                                    <span class="text-danger">@error('fullname'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email}}">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>

@endsection