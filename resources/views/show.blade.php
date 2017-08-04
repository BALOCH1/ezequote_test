@extends('layouts.app')
@section('navbarr')
    <a class="navbar-brand" href="{{ url('/projects') }}">
        Projects
    </a>
    <a class="navbar-brand" style="padding-left: 50px" href="{{ url('/create-project') }}">
        New Projects
    </a>
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="text-align: center">Project Details</h4>
                    </div>

                    <div class="panel-body">
                        <div class="main-content">

                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>Project Name</th>
                                    <th>Project Type</th>
                                    <th>Project Services</th>
                                    <th>Project Comments</th>
                                </tr>
                                @for($i = 0; $i<count($projects);$i++)
                                    <tr>
                                        <td>{{$projects[$i]->name}}</td>
                                        <td>{{$projects[$i]->type}}</td>
                                        <td>
                                            <ul>
                                            @foreach($services[$i] as $service)
                                                <li>{{$service->name}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        @if(count($projects[$i]->comments))
                                            <td>{{$projects[$i]->comments}}</td>
                                            @else
                                            <td></td>
                                            @endif
                                    </tr>
                                    @endfor
                                {{--<tr class="info">--}}
                                    {{--<td>1</td>--}}
                                    {{--<td>Wheat</td>--}}
                                    {{--<td>Good</td>--}}
                                    {{--<td>200 Bags</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="danger">--}}
                                    {{--<td>2</td>--}}
                                    {{--<td>Rice</td>--}}
                                    {{--<td>Good</td>--}}
                                    {{--<td>250 Bags</td>--}}
                                {{--<tr class="warning">--}}
                                    {{--<td>3</td>--}}
                                    {{--<td>Sugar</td>--}}
                                    {{--<td>Good</td>--}}
                                    {{--<td>200 Bags</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="active">--}}
                                    {{--<td>3</td>--}}
                                    {{--<td>Sugar</td>--}}
                                    {{--<td>Good</td>--}}
                                    {{--<td>200 Bags</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="success">--}}
                                    {{--<td>3</td>--}}
                                    {{--<td>Sugar</td>--}}
                                    {{--<td>Good</td>--}}
                                    {{--<td><li>yi</li><li>yi</li><li>yi</li><li>yi</li><li>yi</li></td>--}}
                                {{--</tr>--}}
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection