@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Mountain</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <form action="{{route('mounts.index')}}">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Filter by Products name"
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
                    <a href="{{route('mounts.create')}}" class="btn btn-primary">
                        New Mountain
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
                            <th><b>Cover</b></th>
                            <th><b>Photo1</b></th>
                            <th><b>Photo2</b></th>
                            <th><b>Photo3</b></th>
                            <th><b>Actions</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mounts as $mount)
                            <tr>
                                <td>{{$mount->name}}</td>
                                <td>
                                    @if($mount->imageCover)
                                        <img src="{{asset('storage/'.$mount->imageCover)}}" alt="camera logo" width="48px">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    @if($mount->image_1)
                                        <img src="{{asset('storage/'.$mount->image_1)}}" alt="camera logo" width="48px">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    @if($mount->image_2)
                                        <img src="{{asset('storage/'.$mount->image_2)}}" alt="camera logo" width="48px">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    @if($mount->image_3)
                                        <img src="{{asset('storage/'.$mount->image_3)}}" alt="camera logo" width="48px">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('mounts.edit',['id'=>$mount->id])}}"
                                       class="btn btn-info btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="10">
                                {{$mounts->appends(Request::all())->links()}}
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection