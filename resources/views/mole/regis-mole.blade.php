@extends('main')
@section('content')

<section id="contact" class="contact-team mt-5 mb-6">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>PENDAFTARAN TEAM MOBILE LEGEND</h2>
        </div>

        <div class="row mb-3 d-flex justify-content-center">
                <div class="col-lg d-flex align-items-stretch">
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

                        <div class="d-flex justify-content-center">
                            <img src="{{ URL('/assets/img/qr.jpg') }}" width="30%" alt="">
                        </div>
                    </div>
            </div>
        </div>
        
        <div class="row mb-5 d-flex justify-content-center">
            <div class="col-lg mt-5 mt-lg-0 d-flex align-items-stretch">
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
                    
                    <form action="mole-regis" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h2 style="text-align: center" class="mt-3 mb-3">Data Team</h2>
                                
                                <div class="form-group">
                                    <label for="nama_team">Nama Team</label>
                                    <input type="text" name="nama_team" class="form-control" id="nama_team" value="{{ old('nama_team') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="bukti">Bukti Pembayaran (.jpg .jpeg. png)</label>
                                    <input type="file" class="form-control" name="bukti" id="bukti" value="{{ old('bukti') }}" placeholder="File berupa gambar .jpeg .jpg .png" required>
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo Team (.jpg .jpeg. png)</label>
                                    <input type="file" class="form-control" name="logo" id="logo" value="{{ old('logo') }}" placeholder="File berupa gambar .jpeg .jpg .png" required>
                                </div>
                                
                                <div class="mb-5">
                                    @if ($slot >= '63')
                                        <label for="slot">Slot</label></br>
                                        <select name="slot" id="slot" class="form-select">
                                            <option value="1">1</option>
                                        </select>
                                    @else
                                        <label for="slot">Slot</label></br>
                                        <select name="slot" id="slot" class="form-select">
                                            <option value="1">Single Slot (1) - Biaya Pendaftaran : IDR 100.000</option>
                                            <option value="2">Double Slot (2) - Biaya Pendaftaran : IDR 200.000</option>
                                        </select>
                                    @endif
        
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h2 style="text-align: center" class="mt-3 mb-5">Ketua Team</h2>
                                            <div class="form-group col-md-6">
                                                <label for="nama">Nama Lengkap</label>
                                                <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}" placeholder="Contoh : Alex" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nick">Nickname</label>
                                                <input type="text" class="form-control" name="nick" id="nick" value="{{ old('nick') }}" placeholder="Contoh : Alex" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="idserver">Server</label>
                                                <input type="text" name="idserver" class="form-control" id="idserver" value="{{ old('idserver') }}" 
                                                placeholder="Contoh : 38238181(2059)" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nohp">No Hp</label>
                                                <input type="tel" class="form-control" name="nohp" id="nohp" value="{{ old('nohp') }}" placeholder="Contoh : 081234567890" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Contoh : alex12@gmail.com" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat') }}" placeholder="Contoh : Denpasar, Bali" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="foto" class="form-label">Foto Peserta (.jpg .jpeg .png)</label>
                                                <input type="file" name="foto" class="form-control" id="foto" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="ttd">Tanda Tangan (.jpg .jpeg .png)</label>
                                                <input type="file" class="form-control" name="ttd" id="ttd" required>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mt-4">
                                <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <h2 style="text-align: center" class="mt-3 mb-5">Player 2</h2>
                                        <div class="form-group col-md-6">
                                            <label for="nama2">Nama Lengkap</label>
                                            <input type="text" name="nama2" class="form-control" id="nama2" id="nama" value="{{ old('nama2') }}" placeholder="Contoh : Alex" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nick2">Nickname</label>
                                            <input type="text" class="form-control" name="nick2" id="nick2" value="{{ old('nick2') }}" placeholder="Contoh : Alex" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="idserver2">Server</label>
                                            <input type="text" name="idserver2" class="form-control" id="idserver2" value="{{ old('idserver2') }}" placeholder="Contoh : 38238181(2059)" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nohp2">No Hp</label>
                                            <input type="tel" class="form-control" name="nohp2" id="nohp2" value="{{ old('nohp2') }}" placeholder="Contoh : 38238181(2059)" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email2">Email</label>
                                            <input type="email" class="form-control" name="email2" id="email2" value="{{ old('email2') }}" placeholder="Contoh : alex12@gmail.com" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="alamat2">Alamat</label>
                                            <input type="text" class="form-control" name="alamat2" id="alamat2" value="{{ old('alamat2') }}" placeholder="Contoh : Denpasar, Bali" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="foto2" class="form-label"> Foto Peserta (.jpg .jpeg .png)</label>
                                            <input type="file" name="foto2" class="form-control" id="foto2" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ttd2" class="form-label">Tanda Tangan (.jpg .jpeg .png)</label>
                                            <input type="file" class="form-control" name="ttd2" id="ttd2" required>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-sm-6 mt-4">
                                <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <h2 style="text-align: center" class="mt-3 mb-5">Player 3</h2>
                                        <div class="form-group col-md-6">
                                            <label for="nama3">Nama Lengkap</label>
                                            <input type="text" name="nama3" class="form-control" id="nama3" value="{{ old('nama3') }}" placeholder="Contoh : Alex" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nick3">Nickname</label>
                                            <input type="text" class="form-control" name="nick3" id="nick3" value="{{ old('nick3') }}" placeholder="Contoh : Alex" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="idserver3">Server</label>
                                            <input type="text" name="idserver3" class="form-control" id="idserver3" value="{{ old('idserver3') }}" placeholder="Contoh : 38238181(2059)" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nohp3">No Hp</label>
                                            <input type="tel" class="form-control" name="nohp3" id="nohp3" value="{{ old('nohp3') }}" placeholder="Contoh : 081234567890" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email3">Email</label>
                                            <input type="email" class="form-control" name="email3" id="email3" value="{{ old('email3') }}" placeholder="Contoh : alex12@gmail.com" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="alamat3">Alamat</label>
                                            <input type="text" class="form-control" name="alamat3" id="alamat3" value="{{ old('alamat3') }}" placeholder="Contoh : Denpasar, Bali" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="foto3">Foto Peserta (.jpg .jpeg .png)</label>
                                            <input type="file" name="foto3" class="form-control" id="foto3" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ttd3">Tanda Tangan (.jpg .jpeg .png)</label>
                                            <input type="file" class="form-control" name="ttd3" id="ttd3" required>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <h2 style="text-align: center" class="mt-3 mb-5">Player 4</h2>
                                        <div class="form-group col-md-6">
                                            <label for="nama4">Nama Lengkap</label>
                                            <input type="text" name="nama4" class="form-control" id="nama4" value="{{ old('nama4') }}" placeholder="Contoh : Alex" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nick4">Nickname</label>
                                            <input type="text" class="form-control" name="nick4" id="nick4" value="{{ old('nick4') }}" placeholder="Contoh : Alex"s required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="idserver4">Server</label>
                                            <input type="text" name="idserver4" class="form-control" id="idserver4" value="{{ old('idserver4') }}" placeholder="Contoh : 38238181(2059)" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nohp4">No Hp</label>
                                            <input type="tel" class="form-control" name="nohp4" id="nohp4" value="{{ old('nohp4') }}" placeholder="Contoh : 081234567890" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email4">Email</label>
                                            <input type="email" class="form-control" name="email4" id="email4" value="{{ old('email4') }}" placeholder="Contoh : alex12@gmail.com" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="alamat4">Alamat</label>
                                            <input type="text" class="form-control" name="alamat4" id="alamat4" value="{{ old('alamat4') }}" placeholder="Contoh : Denpasar, Bali" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="foto4">Foto Peserta (.jpg .jpeg .png)</label>
                                            <input type="file" name="foto4" class="form-control" id="foto4" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ttd4">Tanda Tangan (.jpg .jpeg .png)</label>
                                            <input type="file" class="form-control" name="ttd4" id="ttd4" required>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-sm-6 mt-4">
                                <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <h2 style="text-align: center" class="mt-3 mb-5">Player 5</h2>
                                        <div class="form-group col-md-6">
                                            <label for="nama5">Nama Lengkap</label>
                                            <input type="text" name="nama5" class="form-control" id="nama5" value="{{ old('nama5') }}" placeholder="Contoh : Alex" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nick5">Nickname</label>
                                            <input type="text" class="form-control" name="nick5" id="nick5" value="{{ old('nick5') }}" placeholder="Contoh : Alex" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="idserver5">Server</label>
                                            <input type="text" name="idserver5" class="form-control" id="idserver5" value="{{ old('idserver5') }}" placeholder="Contoh : 38238181(2059)" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nohp5">No Hp</label>
                                            <input type="tel" class="form-control" name="nohp5" id="nohp5" value="{{ old('nohp5') }}" placeholder="Contoh : 081234567890" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email5">Email</label>
                                            <input type="email" class="form-control" name="email5" id="email5" value="{{ old('email5') }}" placeholder="Contoh : alex12@gmail.com" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="alamat5">Alamat</label>
                                            <input type="text" class="form-control" name="alamat5" id="alamat5" value="{{ old('alamat5') }}" placeholder="Contoh : Denpasar, Bali" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="foto5">Foto Peserta (.jpg .jpeg .png)</label>
                                            <input type="file" name="foto5" class="form-control" id="foto5" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ttd5">Tanda Tangan (.jpg .jpeg .png)</label>
                                            <input type="file" class="form-control" name="ttd5" id="ttd5" required>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <h2 style="text-align: center" class="mt-3 mb-5">Cadangan 1</h2>
                                        <div class="form-group col-md-6">
                                            <label for="nama6">Nama Lengkap</label>
                                            <input type="text" name="nama6" class="form-control" id="nama6" value="{{ old('nama6') }}" placeholder="Contoh : Alex" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nick6">Nickname</label>
                                            <input type="text" class="form-control" name="nick6" id="nick6" value="{{ old('nick6') }}" placeholder="Contoh : Alex" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="idserver6">Server</label>
                                            <input type="text" name="idserver6" class="form-control" id="idserver6" value="{{ old('idserver6') }}" placeholder="Contoh : 38238181(2059)" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nohp6">No Hp</label>
                                            <input type="tel" class="form-control" name="nohp6" id="nohp6" value="{{ old('nohp6') }}" placeholder="Contoh : 081234567890" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email6">Email</label>
                                            <input type="email" class="form-control" name="email6" id="email6" value="{{ old('email6') }}" placeholder="Contoh : alex12@gmail.com" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="alamat6">Alamat</label>
                                            <input type="text" class="form-control" name="alamat6" id="alamat6" value="{{ old('alamat6') }}" placeholder="Contoh : Denpasar, Bali" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="foto6">Foto Peserta (.jpg .jpeg .png)</label>
                                            <input type="file" name="foto6" class="form-control" id="foto6" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ttd6">Tanda Tangan (.jpg .jpeg .png)</label>
                                            <input type="file" class="form-control" name="ttd6" id="ttd6" >
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="row mt-4">
                            <div class="col">
                                <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <h2 style="text-align: center" class="mt-3 mb-5">Cadangan 2</h2>
                                        <div class="form-group col-md-6">
                                            <label for="nama7">Nama Lengkap</label>
                                            <input type="text" name="nama7" class="form-control" id="nama7" value="{{ old('nama7') }}" placeholder="Contoh : Alex" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nick7">Nickname</label>
                                            <input type="text" class="form-control" name="nick7" id="nick7" value="{{ old('nick7') }}" placeholder="Contoh : Alex" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="idserver7">Server</label>
                                            <input type="text" name="idserver7" class="form-control" id="idserver7" value="{{ old('idserver7') }}" placeholder="Contoh : 38238181(2059)" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nohp7">No Hp</label>
                                            <input type="tel" class="form-control" name="nohp7" id="nohp7" value="{{ old('nohp7') }}" placeholder="Contoh : 081234567890" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email7">Email</label>
                                            <input type="email" class="form-control" name="email7" id="email7" value="{{ old('email7') }}" placeholder="Contoh : alex12@gmail.com" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="alamat7">Alamat</label>
                                            <input type="text" class="form-control" name="alamat7" id="alamat7" value="{{ old('alamat7') }}" placeholder="Contoh : Denpasar, Bali" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="foto7">Foto Peserta (.jpg .jpeg .png)</label>
                                            <input type="file" name="foto7" class="form-control" id="foto7" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ttd7">Tanda Tangan (.jpg .jpeg .png)</label>
                                            <input type="file" class="form-control" name="ttd7" id="ttd7" >
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                        </div> 

                        <div class="btn-loader text-center mt-4">
                            <button type="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
  </section><!-- End Contact Section -->

  <script>
    $('form[action="mole-regis"]').on('submit', function () {
        $(this).find('button[type="submit"]').prop('disabled', true);
    })
  </script>

@endsection