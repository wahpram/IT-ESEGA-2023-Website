@extends('main')
@section('content')
{{ $numer = 1 }}

<section id="tabel" class="tabel">
    <div class="container" data-aos="fade-up">

        <div class="section-title mt-5">
            <h1>LIST TEAM</h1>
        </div>

        <div class="row content">
            <div class="table-responsive-xl">
                <table class="table">
                    <thead class="thead-gold">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Team</th>
                    </tr>
                    </thead>
    
                    <tbody>
                    @foreach ($valo as $list)
                        <tr>
                            <th scope="row">{{ $numer++ }}</th>
                            <td>{{ $list->nama_team }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
@endsection