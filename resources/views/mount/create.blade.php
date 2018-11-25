@extends('layouts.app')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <div class="card">
        <div class="card-header">
            <h1>New Mountain</h1>
        </div>
        <div class="card-body">
            <div class="col-md-8">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <form enctype="multipart/form-data" class="bg-white p-3" action="{{route('mounts.store')}}"
                      method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Mount Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Mount Description</label>
                        <textarea name="desc" id="" class="form-control"
                                  placeholder="Give Description about this Mountain"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Mount ticket Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="number" name="price" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Height</label>
                        <div class="input-group">
                            <input type="text" name="height" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Terms</label>
                        <div class="input-group">
                            <textarea name="terms" id="" class="form-control" placeholder="isi cui"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <select name="location_id" id="locations" class="form-control">
                            <option selected>Choose...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Mount Cover</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="imageCover">
                                <label class="custom-file-label" for="inputGroupFile02"
                                       aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Mount Image 1</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="image_1">
                                <label class="custom-file-label" for="inputGroupFile02"
                                       aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Mount Image 2</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="image_2">
                                <label class="custom-file-label" for="inputGroupFile02"
                                       aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Mount Image 3</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="image_3">
                                <label class="custom-file-label" for="inputGroupFile02"
                                       aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Save" >
                    </div>
                </form>
            </div>
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
        swal(
            'Category Created',
            '{{session('status')}}',
            'success'
        )
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
    </script>
@endsection