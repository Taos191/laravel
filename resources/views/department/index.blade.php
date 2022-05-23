@extends('layouts.layout')
@section('title','Department')

@section('content')

<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@yield('title')</h4>
                    </div>
                    
                    <div class="card-body">
                    @if(Session::get('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        <div class="table-responsive">
                         
                            <table id="example3" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Department</th>
                                        <th>Parent</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            <tbody>
                            
                            @foreach ($department as $key => $row)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->parent}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ url('department-employee/'.$row->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-users"></i></a>
                                            <a href="{{ url('department-delete/'.$row->id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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