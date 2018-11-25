@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>New Location</h1>
        </div>
        <div class="card-body">
            <div class="col-md-8">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <form enctype="multipart/form-data" class="bg-white p-3" action="{{route('location.store')}}"
                      method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Location Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Create">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection