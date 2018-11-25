@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Location</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <form action="{{route('location.index')}}">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Filter by Brand name"
                                   value="{{Request::get('name')}}" name="name">
                            <div class="input-group-append">
                                <input type="submit" value="Filter" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-3">
            @if(session('status'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-warning">
                            {{session('status')}}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="{{route('location.create')}}" class="btn btn-primary">
                        New Location
                    </a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><b>Name</b></th>
                            <th><b>Actions</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($locations as $location)
                            <tr>
                                <td>{{$location->name}}</td>
                                <td>
                                    <a href="{{route('location.edit', ['id'=> $location->id])}}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{route('location.destroy',['id' => $location->id])}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="10">
                                {{$locations->appends(Request::all())->links()}}
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection