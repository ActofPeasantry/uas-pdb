@extends('/layout/base')

@section('content')

<div class="container-fluid">
    <div class="panel">
        <div class="panel-heading">
            <div class="row">
                <h3 class="panel-title">Edit Penduduk</h3>
            </div>
        </div>
        <div class="panel-body">
            <form class="post" action="{{route('penduduk.update', [$penduduk->id])}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label class="form-label" for="no">Nama Penduduk</label>
                    <input type="text" id="nama" name="nama" class='form-control' value="{{$penduduk->nama}}">
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="no">NIK</label>
                    <input type="number" id="nik" name="nik" class='form-control' value="{{$penduduk->nik}}">
                </div>

                <div class="form-group">
                    <label class="form-label" for="no">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class='form-control' value="{{$penduduk->tempat_lahir}}">
                </div>

                <div class="form-group">
                    <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class='form-control' value="{{$penduduk->tanggal_lahir}}">
                </div>

                <div class="form-group">
                    <label for="test" class="form-control-label">Agama</label>
                    <select name="agama" id="agama" class='form-control'>
                        <option value="Islam">Islam</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="test" class="form-control-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class='form-control'>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="test" class="form-control-label">Status Keluarga</label>
                    <select name="status_keluarga" id="status_keluarga" class='form-control'>
                        <option value="ayah">ayah</option>
                        <option value="ibu">ibu</option>
                        <option value="anak">anak</option>
                        <option value="orang tua">orang tua</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="test" class="form-control-label">Status Pernikahan</label>
                    <select name="status_keluarga" id="status_keluarga" class='form-control'>
                        <option value="belum menikah">belum menikah</option>
                        <option value="menikah">menikah</option>
                        <option value="janda/duda">janda/duda</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="no">Nama Ayah</label>
                    <input type="text" id="ayah" name="ayah" class='form-control' value="{{$penduduk->ayah}}">
                </div>

                <div class="form-group">
                    <label class="form-label" for="no">Nama Ibu</label>
                    <input type="text" id="ibu" name="ibu" class='form-control' value="{{$penduduk->ibu}}">
                </div>

                <div class="form-group">
                    <label for="keluarga_id" class="form-control-label">Nomor Kartu Keluarga</label>
                    <select name="keluarga_id" id="keluarga_id" class='form-control'>
                        @foreach ($kartu_keluarga as $kk)
                            <option value="{{$kk->id}}">{{$kk->no}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="kewarganegaraan_id" class="form-control-label">Kewarganegaraan</label>
                    <select name="kewarganegaraan_id" id="kewarganegaraan_id" class='form-control'>
                        @foreach ($kewarganegaraan as $ke)
                            <option value="{{$ke->id}}">{{$ke->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="level_pendidikan_id" class="form-control-label">Level Pendidikan</label>
                    <select name="level_pendidikan_id" id="level_pendidikan_id" class='form-control'>
                        @foreach ($level_pendidikan as $lvl)
                            <option value="{{$lvl->id}}">{{$lvl->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="pekerjaan_id" class="form-control-label">Pekerjaan</label>
                    <select name="pekerjaan_id" id="pekerjaan_id" class='form-control'>
                        @foreach ($pekerjaan as $pek)
                            <option value="{{$pek->id}}">{{$pek->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection