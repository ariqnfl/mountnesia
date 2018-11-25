@extends('global')
@section('content')
    <div class="container">
        <div class="row">
            <!--<div class="col-sm-1 p-2"></div>-->
            <div class="col-sm-6 p-2">
                <div class="card  w-100 pb-4 mr-5">
                    <div class="card-header">
                        <h5>Detail Pemesanan</h5>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label class="mt-2" for="tgl">Tanggal Mendaki</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="mt-2" for="Nama">Nama</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Handphone</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tickets</label>
                                <div class="input-group">
                                    <input id="tiket" type="number" name="stock" max="4" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text form-control">pcs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Asuransi</label> <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-light" data-toggle="modal"
                                        data-target="#exampleModal">
                                    Detail
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Asuransi</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Sebelum mengajukan aplikasi pendaftaran Asuransi, pastikan Anda telah
                                                membaca syarat & ketentuan sebagai berikut:
                                                <ol>
                                                    <li>
                                                        Pengguna setuju untuk mengikuti setiap proses selama pengajuan
                                                        Asuransi sesuai dengan sistem yang ditentukan oleh Mountnesia
                                                        dan mitra penyedia Asuransi.
                                                    </li>
                                                    <li>
                                                        Pengguna setuju untuk memberikan data yang sudah diinput ke
                                                        sistem Mountnesia ke mitra penyedia asuransi terkait.
                                                    </li>
                                                    <li>
                                                        Pengguna setuju untuk menghormati keputusan dari mitra penyedia
                                                        Asuransi.
                                                    </li>
                                                    <li>
                                                        Pengguna setuju dengan syarat & ketentuan dari mitra penyedia
                                                        Asuransi.
                                                    </li>
                                                    <li>
                                                        Penyetujuan/penolakan pengajuan Asuransi akan diinfokan oleh
                                                        mitra penyedia Asuransi kepada pihak Mountnesia.
                                                    </li>
                                                </ol>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <select class="form-control" name="">
                                    <option selected>...</option>
                                    <option value="">Ya</option>
                                    <option value="">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Guider</label>
                                <select class="form-control" name="">
                                    <option selected>...</option>
                                    <option value="">Ya</option>
                                    <option value="">Tidak</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 p-2"></div>
            <div class="col-sm-4 p-2">
                <div class="card sticky">
                    <div class="card-header">
                        <h5>Detail Perjalanan</h5>
                    </div>
                    <div class="card-body">
                        <center>
                            <div class="col-9 image-item">
                                <img class="img-thumbnail" style="width: 300px;"
                                     src="{{asset('storage/'.$mount->image_1)}}">
                            </div>
                            <br>
                            <h4 class="text-dark">{{$mount->name}} Trip</h4>
                            <h5><b>Rp .{{$mount->price}}</b></h5>
                            <br>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger w-100" data-toggle="modal"
                                    data-target="#exampleModal1">
                                Detail Transfer
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Detail Transfer</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Waktu pembayaran tiket berlaku 24 jam setelah Calon Pendaki melakukan
                                            Pendaftaran Booking Online dan dibayarkan melalui transfer ke Rekening Bank
                                            ABC Cabang Bandung dengan Nomor Rekening 019 123 3214 atas nama PT.
                                            Mountnesia
                                        </div>
                                        <p>
                                            Saat melakukan transfer pembayaran pendakian, diwajibkan menuliskan nomor
                                            kode booking anda pada Berita, jika melakukan pembayaran melalui setoran
                                            tunai melalui Bank;
                                        </p>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-warning w-100" onclick="yangatas()">Konfirmasi</button>
                        </center>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-danger">Special Offer!</h5>
                    </div>
                    <div class="card-body">
                        <center>
                            <h3>{{$mount->name}} Trip with 2 Tent</h3>
                            <h5>Only Rp.200.000 !</h5>
                            <button type="button" name="button" class="btn btn-danger w-100" onclick="diklik()">Ambil
                            </button>
                        </center>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-dark">Sewa Alat</h5>
                    </div>
                    <br>
                    <div class="card-body">
                        <div class="col-md-8"></div>
                        <div class="form-group mr-1 row ml-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text col-sm-1 pl-2">
                                        <input class="mr-1" type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                    <div class="input-group-text col-sm-4">
                                        <span> Tenda Besar</span>
                                    </div>
                                    <input type="number" min="1" aria-label="Text input with checkbox">
                                    <div class="input-group-text">
                                        <span> pcs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mr-1 row ml-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text col-sm-1 pl-2">
                                        <input class="mr-4" type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                    <div class="input-group-text col-sm-4">
                                        <span> Kompor</span>
                                    </div>
                                    <input type="number" min="1" aria-label="Text input with checkbox">
                                    <div class="input-group-text">
                                        <span> pcs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mr-1 row ml-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text col-sm-1 pl-2">
                                        <input class="mr-1" type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                    <div class="input-group-text col-sm-4">
                                        <span>Sleeping Bag</span>
                                    </div>
                                    <input type="number" min="1" aria-label="Text input with checkbox">
                                    <div class="input-group-text">
                                        <span> pcs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mr-1 row ml-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text col-sm-1 pl-2">
                                        <input class="mr-5" type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                    <div class="input-group-text col-sm-4">
                                        <span> Senter</span>
                                    </div>
                                    <input type="number" min="1" aria-label="Text input with checkbox">
                                    <div class="input-group-text">
                                        <span> pcs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mr-1 row ml-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text col-sm-1 pl-2">
                                        <input class="mr-5" type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                    <div class="input-group-text col-sm-4">
                                        <span> Matras</span>
                                    </div>
                                    <input type="number" min="1" aria-label="Text input with checkbox">
                                    <div class="input-group-text">
                                        <span> pcs</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" name="button" class="btn btn-danger w-100" onclick="nani()">Pesan
                        </button>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script type="text/javascript">
        function diklik() {

            swal({
                title: "Berhasil!",
                text: "Anda Berhasil Mengambil Penawaran Ini!",
                icon: "success",
                button: "OK",
            });
        }
        function nani() {

            swal({
                title: "Berhasil!",
                text: "Anda Berhasil Menyewa Peralatan Ini!",
                icon: "success",
                button: "OK",
            });
        }

        function yangatas() {
            swal({
                title: "Berhasil",
                text: "Konfirmasi Berhasil!",
                icon: "success",
                button: "OK"
            });
        }
    </script>
@endsection