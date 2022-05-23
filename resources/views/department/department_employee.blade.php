@extends('layouts.layout')
@section('title','Employee by Department')

@section('content')

<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@yield('title')</h4>
                    </div>

                    @if(Session::get('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                    <div class="card-body">
                        <div class="table-responsive">
                         
                            <table id="example3" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>Fullname</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            <tbody>
                              
                            @foreach ($employee as $row)
                                <tr>
                                    <td>{{$row->fullname}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ url('update-employee/'.$row->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="{{ url('delete-employee/'.$row->id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                              
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@endsection