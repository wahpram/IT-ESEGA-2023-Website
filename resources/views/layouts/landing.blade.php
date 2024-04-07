@extends('main')
@section('content')
    <section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex justify-content-center mb-5">
                    <img src="{{ URL('/assets/file/IT-ESEGA heading.png') }}" alt="" width="70%">
                </div>
                {{-- <h1>IT-ESEGA</h1> --}}
                {{-- <h2 style="font-size: 170%">REBIRTH OF THE CHAMPION</h2> --}}
                <P>IT-ESEGA adalah event tahunan yang diadakan oleh Himpunan Mahasiswa Teknologi Informasi Universitas Udayana yang bertujuan untuk mempertandingkan 2 cabang permainan eSports, yaitu Mobile Legends dan Valorant. Event ini diadakan sebagai wadah bagi gamers dari setiap kalangan untuk bersaing dan mengasah kemampuan mereka di bidang esports. dan melalui IT-ESEGA, diharapkan akan lahir atlet eSports berbakat yang bisa bersaing di ajang kompetisi esports tingkat nasional maupun internasional.</P>
                <div class="d-flex justify-content-center justify-content-center">
                    <a href="#regis" class="btn-get-started scrollto">Register Now !</a>
                </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="/assets/img/logo-full.png" class="img-fluid animated" alt="" >
            </div>
        </div>
    </div>

    </section><!-- End Hero -->

    <main id="main">
        <section id="regis" class="regis">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Registration</h2>
              </div>
      
              <div class="row content">
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <img src="{{ URL('/assets/file/Logo Valorant.png') }}" alt="" width="30%">
                    </div>
                    <h1 class="d-flex justify-content-center">
                        VALORANT
                    </h1>
                  <div class="d-flex">
                      <ul class="list-inline mx-auto justify-content-center">
                          <li>64 SLOTS</li>
                          <li>SINGLE SLOT</li>
                          <li>NATIONAL COMPETITION</li>
                          <li>JULY 1st, 2nd, 8th, 9th</li>
                          <li>ONLINE</li>
                      </ul>
                  </div>
                  <div class="d-flex justify-content-center">
                      <a href="/valo-page" class="btn-learn-more">Register!</a>
                  </div>
                </div>
      
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <div class="d-flex justify-content-center">
                        <img src="{{ URL('/assets/file/Logo ML.png') }}" alt="" width="30%">
                    </div>
                    <h1 class="d-flex justify-content-center">
                        MOBILE LEGEND
                    </h1>
                    <div class="d-flex">
                        <ul class="list-inline mx-auto justify-content-center">
                            <li>64 SLOTS</li>
                            <li>DOUBLE SLOT</li>
                            <li>NATIONAL COMPETITION</li>
                            <li>JULY 15th, 16th, 22nd</li>
                            <li>ONLINE</li>
                        </ul>
                    </div>
                  <div class="d-flex justify-content-center">
                      <a href="/mole-page" class="btn-learn-more">Register!</a>
                  </div>
                </div>
              </div>
      
            </div>
        </section><!-- End Regis Section -->
        
        <section id="video" class="video">
            <div class="container" data-aos="fade-up">
      
                <div class="section-title">
                    <h2>HOW TO REGISTER</h2>
                </div>
      
                <div class="row content">
                    <div class="d-flex justify-content-center">
                        <iframe width="760" height="415" src="https://www.youtube.com/embed/MeSQDIqtq1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
      
            </div>
        </section><!-- End About Us Section -->


        <section id="maskot" class="maskot">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>IT-ESEGA 2023's MASCOT</h2>
              </div>
      
              <div class="row content">
                <div class="col-lg-6 float-left">
                  <div class="d-flex justify-content-center">
                    <img src="{{ URL('/assets/img/Maskot2.png') }}" width="500px" alt="">
                  </div>
                </div>
      
                <div class="col-lg-5 pt-4 pt-lg-0 float-right">
                  <h1 class="paksi d-flex justify-content-start mt-5">
                      PAKSI
                  </h1>
                  <h1 class="jayandaru d-flex justify-content-end">
                      JAYANDARU
                  </h1>
                  <div class="d-flex mt-3">
                      <p>
                        Paksi Jayandaru adalah nama dari maskot IT-ESEGA yang melambangkan semangat juang yang tak kenal lelah dalam meraih kemenangan. Dengan nama yang berasal dari bahasa Sanskerta yang berarti "peraih kemenangan", Paksi Jayandaru berarti burung yang memiliki ambisi yang membaja dan selalu berusaha untuk menjadi yang terbaik dalam segala hal yang dilakukan. Sebagai simbol keberanian dan semangat juang, maskot Paksi Jayandaru melambangkan untuk tidak mudah menyerah dalam menghadapi rintangan dan untuk terus berusaha dalam meraih tujuan dan 
                        kemenangan yang kita inginkan.
                      </p>
                  </div>
                </div>
              </div>
      
            </div>
        </section><!-- End About Us Section -->


        <section id="video" class="video">
            <div class="container" data-aos="fade-up">
      
                <div class="section-title">
                    <h2>TEASER IT-ESEGA 2023</h2>
                </div>
      
                <div class="row content">
                    <div class="d-flex justify-content-center">
                        <iframe width="760" height="415" src="https://www.youtube.com/embed/lQ1s5DA_cMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
      
            </div>
        </section><!-- End About Us Section -->


        {{-- <section id="journey" class="journey">
            <div class="container" data-aos="fade-up">
      
                <div class="section-title">
                    <h2>IT-ESEGA JOURNEY</h2>
                </div>
      
                <div class="row content">
                    <div class="d-flex justify-content-center">
                        <iframe width="760" height="415" src="https://www.youtube.com/embed/cL0WKd7rRzI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
      
            </div>
        </section><!-- End About Us Section --> --}}

        <section id="terms" class="terms">
            <div class="container" data-aos="fade-up">
      
                <div class="section-title">
                    <h2>TERMS OF SERVICE</h2>
                </div>

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. Seluruh pertandingan mengharuskan ketentuan menghidupkan kamera (webcam) selama perlombaan berlangsung dengan alasan pengecekan kondusifitas saat permainan berlangsung dan memperlihatkan pemain saat sedang melakukan live streaming.</li>
                        <li class="list-group-item">2. Jika terjadi hal yang tidak diinginkan dan membuat kemungkinan lomba dibatalkan maka kami selaku panitia berhak membatalkan pertandingan dengan uang pendaftaran akan dikembalikan sepenuhnya kepada peserta.</li>
                        <li class="list-group-item">3. Panitia berhak mengganti/memberikan rules tambahan dalam pertandingan.</li>
                        <li class="list-group-item">4. Keputusan panitia tidak dapat diganggu gugat.</li>
                    </ul>
                </div>
            </div>
        </section><!-- End About Us Section -->


        <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
  
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>
  
            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Persyaratan pendaftaran? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Peserta merupakan masyarakat umum yang memiliki minat dalam bidang esports, bersedia mengikuti peraturan yang berlaku, serta tentunya siap untuk menjadi pemain dan bermain dalam pertandingan di IT - ESEGA 2023! Pastikan pembayaran pendaftaran telah dibayarkan secara penuh agar dapat di-approve oleh panitia.
                            </p>
                        </div>
                    </li>
    
                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Tahapan Pendaftaran? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Setelah melakukan pendaftaran, mohon menunggu invitation ke grup oleh panitia.
                        </p>
                        </div>
                    </li>
    
                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Prosedur pertandingan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Hanya pemain yang telah terdaftar yang bisa mengikuti pertandingan. Semua tim harus menjunjung tinggi sportifitas dan semangat fairplay. Anggota tim harus membaca dan siap mengikuti regulasi peraturan yang telah ditetapkan saat turnamen. Penggunaan program illegal dalam bentuk apapun akan dikenakan hukuman ban ID secara permanen dan device.
                        </p>
                        </div>
                    </li>
    
                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Sistem Pertandingan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Sistem permainan IT-ESEGA 2023 dilakukan dengan metode pertandingan online atau daring. Jadi untuk kedua cabang pertandingan baik Valorant maupun Mobile Legend pastikan koneksi yang kalian pakai memadai dan stabil dari tempat masing-masing !
                        </p>
                        </div>
                    </li>
    
                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Jadwal pertandingan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Jadwal pertandingan dan informasi lainnya mengenai kegiatan dapat dilihat pada bagian registrasi !
                        </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="600">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Kenapa harus ikut IT-ESEGA? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Selain karena IT-ESEGA adalah salah satu lomba esports terbesar di Bali yang diselenggarakan oleh Himpunan Mahasiswa Teknologi Informasi Universitas Udayana, IT-ESEGA juga sudah terselenggara dengan sukses dari tahun ke tahun. Alasannya belum lengkap ? Prizepool kita juga besar loh!, jadi apalagi yang kalian tunggu? yuk ikutan IT-ESEGA 2023 !
                        </p>
                        </div>
                    </li>

                </ul>
          </div>
        </div>
    </section>

    <section id="contact-person" class="contact-person section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>CONTACT PERSON</h2>
            </div>

            <div class="row">
                <div class="col-sm mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-whatsapp"></i></div>
                        <h4><a href="https://api.whatsapp.com/send/?phone=6285885290085&text&type=phone_number&app_absent=0">Satya Ariya (Humas)</a></h4>
                        <p>+62 858-8529-0085</p>
                    </div>
                </div>

                
                <div class="col-sm mt-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-whatsapp"></i></div>
                        <h4><a href="https://api.whatsapp.com/send/?phone=6281353609732&text&type=phone_number&app_absent=0">Ricardo Dirk Anderson (Lomba)</a></h4>
                        <p>+62 813-5360-9732</p>
                    </div>
                </div>
                
                <div class="col-sm my-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-whatsapp"></i></div>
                        <h4><a href="https://api.whatsapp.com/send/?phone=6281337803028&text&type=phone_number&app_absent=0">Cleon Kalea</a></h4>
                        <p>+62 813-3780-3028</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    </main>
@endsection