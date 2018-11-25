@extends('layouts.app')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <div class="card">
        <div class="card-header">
            Edit {{$mount->name}}
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <form enctype="multipart/form-data" method="POST" action="{{route('mounts.update',['id' => $mount->id])}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Mount Name</label>
                    <input type="text" class="form-control" value="{{$mount->name}}" name="name"
                           placeholder="Camera name">
                </div>
                <div class="form-group">
                    <label for="cover">Mount Cover</label>
                    <div class="form-group">
                        <small class="text-muted">Current Photo</small>
                    </div>
                    <div class="form-group">
                        @if($mount->imageCover)
                            <img src="{{asset('storage/' . $mount->imageCover)}}" width="96px">
                        @endif
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="imageCover">
                            <label class="custom-file-label" for="inputGroupFile02"
                                   aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah cover</small>
                </div>
                <div class="form-group">
                    <label for="cover">Mount 1</label>
                    <div class="form-group">
                        <small class="text-muted">Current Photo</small>
                    </div>
                    <div class="form-group">
                        @if($mount->image1)
                            <img src="{{asset('storage/' . $mount->image1)}}" width="96px">
                        @endif
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="image1">
                            <label class="custom-file-label" for="inputGroupFile02"
                                   aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah cover</small>
                </div>
                <div class="form-group">
                    <label for="cover">Mount image2</label>
                    <div class="form-group">
                        <small class="text-muted">Current Photo</small>
                    </div>
                    <div class="form-group">
                        @if($mount->image2)
                            <img src="{{asset('storage/' . $mount->image2)}}" width="96px">
                        @endif
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="image2">
                            <label class="custom-file-label" for="inputGroupFile02"
                                   aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah cover</small>
                </div>
                <div class="form-group">
                    <label for="cover">Mount image3</label>
                    <div class="form-group">
                        <small class="text-muted">Current Photo</small>
                    </div>
                    <div class="form-group">
                        @if($mount->image3)
                            <img src="{{asset('storage/' . $mount->image3)}}" width="96px">
                        @endif
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="image3">
                            <label class="custom-file-label" for="inputGroupFile02"
                                   aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah cover</small>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control">{{$mount->desc}}
                </textarea>
                </div>
                <div class="form-group">
                    <label for="locations">Mount Location</label>
                    <select class="form-control" name="locations" id="locations"></select>
                </div>
                <div class="form-group">
                    <label for="height">Height</label>
                    <input type="text" class="form-control" value="{{$mount->height}}" name="height"
                    >
                </div>
                <div class="form-group">
                    <label for="terms">Mount Terms</label>
                    <textarea name="terms" id="terms" class="form-control">{{$mount->terms}}
                </textarea>
                </div>

                <div class="form-group">
                    <label for="">Mount Link</label>
                    <input type="text" name="link" value="{{$mount->link}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mount Waktu Tempuh</label>
                        <input type="text" name="waktu" value="{{$mount->waktu}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mount Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="number" name="price" class="form-control" value="{{$mount->price}}">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" value="PUBLISH">Update</button>
            </form>
        </div>
    </div>
@endsection
@section('footer-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $('#inputGroupFile02').on('change', function (e) {
            var fileName = e.target.files[0].name;
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
    <script>
        $('#locations').select2({
            ajax: {
                url: '{{ route('ajax.search') }}',
                processResults: function (data) {
                    return {
                        results: data.map(function (item) {
                            console.log(item);
                            return {
                                id: item.id, text: item.name
                            }

                        })
                    }
                }
            }
        });
        var locations = {!! $mount->location_id !!}
        locations.forEach(function (location) {
            var option = new Option(location.name, location.id, true, true);
            $('#locations').append(option).trigger('change');
        });
    </script>
@endsection