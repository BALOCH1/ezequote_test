@extends('layouts.app')
@section('stylesheet')
    <link href="{{ asset('css/form-basic.css') }}" rel="stylesheet">
    @endsection
@section('navbarr')
    <a class="navbar-brand" href="{{ url('/create-project') }}">
        New Project
    </a>
    <a class="navbar-brand" style="padding-left: 50px" href="{{ url('/projects') }}">
        Projects
    </a>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading ">
                        <h2 style="text-align: center">Create A New Project </h2>
                    </div>

                <div class="panel-body">
                    <div class="main-content">


                        <form class="form-basic" method="post" action="/projects">
                            {{csrf_field()}}


                            <div class="form-row">
                                <label>
                                    <span>Project Name</span>
                                    <input type="text" name="name" required value="{{old('name')}}">
                                </label>
                                @if($errors->has('name'))
                                    @include('errors/list', ['name' => 'name'])
                                    @endif
                            </div>

                            <div class="form-row">
                                <label>
                                    <span>Project Type</span>
                                    <select  name="type" required>
                                        <option value="" disabled selected>Please select a project type</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                        <option>Other</option>
                                    </select>
                                </label>
                                @if($errors->has('type'))
                                    @include('errors/list', ['name' => 'type'])
                                @endif
                            </div>
                            <h4>
                                <span>Services (Check At Least 1)</span>
                            </h4>
                            <div class="form-row">
                                <label>

                                    <div class="row alert alert-info" style="margin: 0;">
                                        <label>
                                            <span>Detailing</span>
                                            <input type="checkbox" name="services[]" value="1">
                                        </label>
                                        <label>
                                            <span>Estimating</span>
                                            <input type="checkbox" name="services[]" value="2">
                                        </label>
                                        <label>
                                            <span>Design</span>
                                            <input type="checkbox" name="services[]" value="3">
                                        </label>
                                        <label>
                                            <span>Construction</span>
                                            <input type="checkbox" name="services[]" value="4">
                                        </label><label>
                                            <span>Review</span>
                                            <input type="checkbox" name="services[]" value="5">
                                        </label><label>
                                            <span>Inspection</span>
                                            <input type="checkbox" name="services[]" value="6">
                                        </label>

                                    </div>
                                </label>
                                @if($errors->has('services'))
                                    @include('errors/list', ['name' => 'services'])
                                @endif
                            </div>

                            <div class="form-row">
                                <label>
                                    <span>Comments</span>
                                    <textarea name="comments" placeholder="Any additional comments?"> {{old('comments')}}</textarea>
                                </label>
                            </div>

                            <div class="form-row">
                                <label>
                                    <span><b>Terms and Conditions</b></span>
                                    <input type="checkbox" name="IAgree" required @if((old('IAgree'))) checked @endif>
                                    <label>I agree</label>
                                </label>
                                @if($errors->has('IAgree'))
                                    @include('errors/list', ['name' => 'IAgree'])
                                @endif

                            </div>


                            <div class="form-row">
                                <button class="btn btn-primary" type="submit">Create Project</button>
                            </div>

                        </form>



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
