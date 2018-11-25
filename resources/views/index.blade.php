@extends('global')
@section('content')
    <div id='intro'>
        <div class='cta container'>
            <img alt='Splash' class='splash' src='{{asset('img/mountnesia.png')}}'>
            <br><br><br><br>
            <h1>Explore and Discover with us</h1>
            <br><br>
            <a class='button' href='#'>
                <span>Start your adventure</span>
            </a>
        </div>
    </div>
    <div id='tours'>
        <div class='container'>
            <h2>Where would you like to go?</h2>
            <br><br><br><br>
            <!-- <form action='#'>
              <input id='location' placeholder='Location' type='text'>
              <button class='button' type='submit'>Get Moving</button>
            </form> -->
        </div>
        <ul>
            @foreach($mounts as $mount)
                <li>
                    <a href="{{route('gambar',['id'=>$mount->id])}}">
                        <div>
                            <h3>{{$mount->name}}</h3>
                            <h4>{{$mount->locations->name}}</h4>
                        </div>
                        <img alt="{{$mount->name}}" src="{{asset('storage/'.$mount->imageCover)}}">
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div id='tours'>
        <div class='container'>
            <h2><u>Tips for You </u></h2>
            <br>
        </div> </div>

    <div class='container' id='pricing'>
        <article>
            <h3>16 Tips Untuk Pendaki Pemula</h3>
            <p>Tips ini terdiri dari SSS yakni sebelum, saat, dan sesudah pendakian, biar gampang buat diinget-inget dan (kalo bisa) dipraktekkan.
                Langsung aja, ini dia, 16 Tips Untuk Pendaki Pemula, sudah pasti. Simak cuss!</p>
            <p>1. PERSIAPAN – PELAJARAN – PERENCANAAN
                Jadi, sebelum mendaki gunung ada 3 hal yang wajib banget dilakukan. 3 hal ini masih dalam tahap gak ngapa-ngapain kecuali mikirin. Nah, yaitu persiapan, pelajaran, dan perencanaan. Mari kita breakdown satu-satu:
            </p>
            <p>Persiapan-Adalah saat dimana kamu menyiapkan segala sesuatunya seperti mental yang kuat, niat yang baik, dan</p>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">16 Tips Untuk Pendaki Pemula</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Tips ini terdiri dari SSS yakni sebelum, saat, dan sesudah pendakian, biar gampang buat diinget-inget dan (kalo bisa) dipraktekkan. Langsung aja, ini dia, 16 Tips Untuk Pendaki Pemula, sudah pasti. Simak cuss!</p>
                            <img src="{{asset('img/tips1.jpg')}}" alt="">
                            <p> 1. PERSIAPAN – PELAJARAN – PERENCANAAN Jadi, sebelum mendaki gunung ada 3 hal yang wajib banget dilakukan. 3 hal ini masih dalam tahap gak ngapa-ngapain kecuali mikirin. Nah, yaitu persiapan, pelajaran, dan perencanaan. Mari kita breakdown satu-satu:</p>
                            <p>Persiapan-Adalah saat dimana kamu menyiapkan segala sesuatunya seperti mental yang kuat, niat yang baik, dan izin orang tua yang sudah dikantongi. Niat yang baik tentu aja diperlukan, dimana, niat yang baik ini akan mengantarkan perilaku terbaikmu ketika di gunung nanti.</p>
                            <p>2. ITINERARY
                                Hmm. Sebenernya itinerary sama perencanaan itu gak jauh beda sik. Haha. Tapi ya, kalau itinerary inilah yang jauh lebih matang dari yang tadi. Itinerary ini sifatnya lebih detail.</p>
                            <p>3. LENGKAPI PERALATAN MENDAKI
                                Setelah tau tujuan pendakian dan itinerary, kita akan segera bisa men-define apa-apa saja peralatan yang diperlukan. Yang pasti, peralatan standar pendakian kayak sendal/sepatu gunung yang cocok buat jenis gunung tersebut , tenda, springbed sleeping bag, alat masak, nesting, dan lain selengkapnya yang bisa dibaca di Peralatan Mendaki Gunung. Peralatan mendaki bisa sama bisa berbeda tergantung jenis orang dan jenis gunungnya.</p>
                            <h6>Sumber : <a href="http://www.jalanpendaki.com/guide/16-tips-untuk-pendaki-pemula/">www.jalanpendaki.com</a></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </article>
        <article>
            <h3>5 Alasan yang Buat Naik Gunung Itu Candu</h3>
            <p>Kenapa ya masih aja ada yang mau naik gunung padahal naik gunung itu capek banget? Kenapa ada aja orang yang sampe ketagihan muncak? Enakan di rumah tiduran sambil nonton Youtube. Sebagian orang bakal nanya kayak gitu. Atau kamu jangan-jangan pernah ditanyai kayak gitu bro?</p>
            <p>Kalo iya, berarti sama. Nah, kali ini yuk kita bareng-bareng jawab dan ngejelasin kenapa naik gunung itu nagih padahal cuapeknya minta ampun, hehehe. Siapa tahu abis baca ini, mereka yang nanya malah jadi ikutan ketagihan, hahaha.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">5 Alasan yang Buat Naik Gunung Itu Candu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Kenapa ya masih aja ada yang mau naik gunung padahal naik gunung itu capek banget? Kenapa ada aja orang yang sampe ketagihan muncak? Enakan di rumah tiduran sambil nonton Youtube. Sebagian orang bakal nanya kayak gitu. Atau kamu jangan-jangan pernah ditanyai kayak gitu bro?</p>
                            <img src="{{asset('img/tips2.jpg')}}" alt="">
                            <p>Kalo iya, berarti sama. Nah, kali ini yuk kita bareng-bareng jawab dan ngejelasin kenapa naik gunung itu nagih padahal cuapeknya minta ampun, hehehe. Siapa tahu abis baca ini, mereka yang nanya malah jadi ikutan ketagihan, hahaha.</p>
                            <p>1. Nggak Kayak di Rumah</p>
                            <p>2. Rasa penasaran dan Ingin Disebut Pendaki?</p>
                            <p>3. Banyak Cerita, Terutama di Perjalanannya</p>
                            <p>4. Mengukur Batas Diri</p>
                            <p>5. Banyak Hal Baru</p>
                            <h6>Sumber : <a href="https://www.hipwee.com/list/5-alasan-legendaris-kenapa-naik-gunung-ltu-nggak-bikin-kapok/">www.hipwee.com</a></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </article>
        <article>
            <h3>Cara Packing Carrier Yang Nyaman</h3>
            <p>Packing yang nyaman adalah sebuah kunci pendakian yang hakiki, agar tetap semangat selama di perjalanan.</p>
            <p>Packing carrier gak kayak sembarang taro nesting di paling atas, karena kamu gak mendadak masak pas lagi ada ide di tengah gunung. Atau malah naro sleeping bag di paling atas, karena lo gak tiba-tiba pengen tidur di tengah jalur pendakian disebabkan oleh jalur yang bikin badmood.</p>
            <p>Okay, daripada baper yang gak-gak, mendingan langsung aja yuk gua beberin gimana cara packing keril yang nyaman!</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                Learn More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cara Packing Carrier Yang Nyaman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Packing yang nyaman adalah sebuah kunci pendakian yang hakiki, agar tetap semangat selama di perjalanan.</p>
                            <img src="{{asset('img/tips3.jpg')}}" alt="">
                            <p>Packing carrier gak kayak sembarang taro nesting di paling atas, karena kamu gak mendadak masak pas lagi ada ide di tengah gunung. Atau malah naro sleeping bag di paling atas, karena lo gak tiba-tiba pengen tidur di tengah jalur pendakian disebabkan oleh jalur yang bikin badmood.</p>
                            <p>Okay, daripada baper yang gak-gak, mendingan langsung aja yuk gua beberin gimana cara packing keril yang nyaman!</p>
                            <p>PAKE MATRAS (atau gak)
                                Ini hal pertama yang paling basic ya gaes, menentukan gimana kelanjutan packing carrier. Misal kamu memutuskan buat pake matras, masukin dulu matrasnya, buat melingkar di dalam keril, baru masukin barang-barang.</p>
                            <p>SLEEPING BAG
                                You need to know that, sleeping bag adalah barang paling magerin buat dibawa, TAPI WAJIB. You need to take a note about it. Suka gak suka, sleeping bag wajib dibawa. Meski nyebelin dan magerin.

                                Biasanya, emang ukuran sleeping bag, terutama merk bajakan itu tebelnya naujubillah. Apalagi kalo yang pake bahan dacron. Amit-amit tebelnya.</p>
                            <p>Kalau menerapkan langkah-langkah cara packing carrier di atas, niscaya kamu akan merasa nyaman dan diberikan kenyamanan lahir batin.
                                Tapi ingat, kenyamanan masing-masing orang bisa berbeda, so, karena ini sifatnya cuma saran, jangan kaku-kaku amat, kamu bisa mix and match dengan cara-cara lain di luar sana.</p>
                            <p>Berikut ada Video yang mungkin bermanfaat untuk kalian</p>
                            <iframe width="100%" height="392" src="https://www.youtube.com/embed/7wiU0ohD2ik" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>Terimakasih. Salam Lestari!</p>
                            <h6>Sumber : <a href="http://www.jalanpendaki.com/guide/cara-packing-carrier-yang-nyaman/">www.jalanpendaki.com</a></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endsection