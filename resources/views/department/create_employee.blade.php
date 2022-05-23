@extends('layouts.layout')
@section('title','Add Employee')

@section('content')

<div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Employee</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                    @if(Session::get('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                    <form action="add-employee" method="post">
                        @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Full Name</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                                    <span class="text-danger">@error('fullname'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Department</label>
                                    <div class="dropdown bootstrap-select form-control default-select">
                                        <select name="department" id="inputState" class="form-control default-select" tabindex="-98">
                                            <option selected="">Choose...</option>
                                            @foreach ($department as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>

@endsection