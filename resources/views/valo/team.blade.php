@extends('main')
@section('content')

<section id="contact" class="contact-team mt-5 mb-6">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>PENDAFTARAN TEAM VALORANT</h2>
        </div>

        <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="">
                        <p class="gold">BIAYA PENDAFTARAN : IDR 100.000</p>
                        <p>
                            1750002447117
                        </p>
                        <p>
                            BANK MANDIRI
                        </p>
                        <p>
                            a.n. KOMANG AYU AGUNG ARYA APRILIA
                        </p>
                    </div>
                    <img src="{{ URL('/assets/img/qr.jpg') }}" width="100%" alt="">
                </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <div class="form">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="valo-regis" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_team">Nama Team</label>
                            <input type="text" name="nama_team" class="form-control" id="nama_team" value="{{ old('nama_team') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="bukti">Bukti Pembayaran (.jpg .jpeg. png)</label>
                            <input type="file" class="form-control" name="bukti" id="bukti" required>
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo Team (.jpg .jpeg. png)</label>
                            <input type="file" class="form-control" name="logo" id="logo" required>
                        </div>
                        <div class="text-center">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
  </section><!-- End Contact Section -->

  <script>
    $('form[action="valo-regis"]').on('submit', function () {
        $(this).find('button[type="submit"]').prop('disabled', true);
    })
  </script>

@endsection