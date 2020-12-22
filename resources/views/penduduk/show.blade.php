@extends('/layout/base')

@section('content')

<div class="container-fluid">
    <div class="panel">
        <div class="panel-heading">
            <div class="row">
                <h3 class="panel-title">Detail Penduduk</h3>
            </div>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="form-label" for="no">Nama Penduduk</label>
                <input type="text" id="nama" name="nama" class='form-control' value="{{$penduduk->nama}}" readonly>
            </div>
            
            <div class="form-group">
                <label class="form-label" for="no">NIK</label>
                <input type="number" id="nik" name="nik" class='form-control' value="{{$penduduk->nik}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="no">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class='form-control' value="{{$penduduk->tempat_lahir}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class='form-control' value="{{$penduduk->tanggal_lahir}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="agama">Agama</label>
                <input type="text" id="agama" name="agama" class='form-control' value="{{$penduduk->agama}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" id="jenis_kelamin" name="jenis_kelamin" class='form-control' value="{{$penduduk->jenis_kelamin}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="status_pernikahan">Status Keluarga</label>
                <input type="text" id="status_pernikahan" name="status_pernikahan" class='form-control' value="{{$penduduk->status_pernikahan}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="status_keluarga">Status Penikahan</label>
                <input type="text" id="status_keluarga" name="status_keluarga" class='form-control' value="{{$penduduk->status_keluarga}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="ayah">Nama Ayah</label>
                <input type="text" id="ayah" name="ayah" class='form-control' value="{{$penduduk->ayah}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="ibu">Nama Ibu</label>
                <input type="text" id="ibu" name="ibu" class='form-control' value="{{$penduduk->ibu}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="keluarga_id">Nomor Kartu Keluarga</label>
                <input type="text" id="keluarga_id" name="keluarga_id" class='form-control' value="{{$penduduk->kartu_keluarga->no}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="kewarganegaraan_id">Kewarganegaraan</label>
                <input type="text" id="kewarganegaraan_id" name="kewarganegaraan_id" class='form-control' value="{{$penduduk->kewarganegaraan->nama}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="level_pendidikan_id">Level Pendidikan</label>
                <input type="text" id="level_pendidikan_id" name="level_pendidikan_id" class='form-control' value="{{$penduduk->level_pendidikan->nama}}" readonly>
            </div>

            <div class="form-group">
                <label class="form-label" for="pekerjaan_id">Pekerjaan</label>
                <input type="text" id="pekerjaan_id" name="pekerjaan_id" class='form-control' value="{{$penduduk->pekerjaan->nama}}" readonly>
            </div>

        </div>
    </div>
</div>

@endsection