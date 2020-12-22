@extends('/layout/base')

@section('content')

<div class="container-fluid">
    <div class="panel">
        <div class="panel-heading">
            <div class="row">
                <h3 class="panel-title">Tabel Penduduk Usia Produktif</h3>
            </div>
        </div>
        <div class="panel-body">
            <a class="btn btn-primary" data-toggle="modal" data-target="#Modal" href="">Tambah Kartu Keluarga</a>
            <br>
            <br>
            <table id='example' class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>No. Kartu Keluarga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penduduk as $p)   
                        @if (\Carbon\Carbon::parse($p->tanggal_lahir)->age >= 15 && \Carbon\Carbon::parse($p->tanggal_lahir)->age <= 64)
                        <tr>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->nik}}</td>
                            <td>{{$p->kartu_keluarga->no}}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{route('penduduk.show', [$p->id])}}">detail</a>
                                <a class="btn btn-warning" href="{{route('penduduk.edit', [$p->id])}}">edit</a>
                                <a class="btn btn-danger" href="{{route('penduduk.destroy', [$p->id])}}">hapus</a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <div class="row">
                <h3 class="panel-title">Tabel Berdasarkan Nagari</h3>
            </div>
        </div>
        <div class="panel-body">
            <a class="btn btn-primary" data-toggle="modal" data-target="#Modal" href="">Tambah Kartu Keluarga</a>
            <br>
            <br>
            <table id='example2' class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nagari</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>No. Kartu Keluarga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penduduk as $p)   
                        <tr>
                            <td>{{$p->kartu_keluarga->jorong->nagari->nama}}</td>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->nik}}</td>
                            <td>{{$p->kartu_keluarga->no}}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{route('penduduk.show', [$p->id])}}">detail</a>
                                <a class="btn btn-warning" href="{{route('penduduk.edit', [$p->id])}}">edit</a>
                                <a class="btn btn-danger" href="{{route('penduduk.destroy', [$p->id])}}">hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <div class="row">
                <h3 class="panel-title">Penduduk yang memiliki level pendidikan SMP ke bawah per nagari</h3>
            </div>
        </div>
        <div class="panel-body">
            <a class="btn btn-primary" data-toggle="modal" data-target="#Modal" href="">Tambah Kartu Keluarga</a>
            <br>
            <br>
            <table id='example3' class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nagari</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>No. Kartu Keluarga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penduduk as $p)
                        @if ($p->level_pendidikan_id <= 4)    
                            <tr>
                                <td>{{$p->kartu_keluarga->jorong->nagari->nama}}</td>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->nik}}</td>
                                <td>{{$p->kartu_keluarga->no}}</td>
                                <td class="text-center">
                                    <a class="btn btn-info" href="{{route('penduduk.show', [$p->id])}}">detail</a>
                                    <a class="btn btn-warning" href="{{route('penduduk.edit', [$p->id])}}">edit</a>
                                    <a class="btn btn-danger" href="{{route('penduduk.destroy', [$p->id])}}">hapus</a>
                                </td>
                            </tr>
                        @endif   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



    @include('kartu_keluarga/addmodal')
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );

    $(document).ready(function() {
        $('#example2').DataTable();
    } );

    $(document).ready(function() {
        $('#example3').DataTable();
    } );
</script>
@endsection