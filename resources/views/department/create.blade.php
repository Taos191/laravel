@extends('layouts.layout')
@section('title','Add Department')

@section('content')

<div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Department</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="add-department" method="post">
                        
                        @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="mb-1"><strong>Department Name</strong></label>
                                    <input type="text" name="department" class="form-control input-default">
                                    <span class="text-danger">@error('department'){{$message}} @enderror</span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Department Parent</label>
                                    <div class="dropdown bootstrap-select form-control default-select">
                                        <select name="parent" id="inputState" class="form-control default-select" tabindex="-98">
                                            <option value="">Choose...</option>
                                            @foreach ($department as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Add</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>

@endsection