@extends('/layout/base')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Detail Kartu Keluarga</h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label for="marital" class="form-control-label">Nama Jorong</label>
            <input type="text" value="{{$kk->jorong->nama}}" class="form-control" readonly>
            {{-- <select name="jorong" id="jorong" class='form-control' disabled>
                @foreach ($jorong as $j)
                    <option value="{{$j->id}}" data-tag="{{$j->nagari_id}}">{{$j->nama}}</option>
                @endforeach
            </select> --}}
        </div>
    
        <div class="form-group">
            <label class="form-label" for="tanggal_pencatatan">Tanggal Pencatatan</label>
            <input type="date" id="tanggal_pencatatan" name="tanggal_pencatatan" class='form-control' value="{{$kk->tanggal_pencatatan}}" readonly>
        </div>
    
        <div class="form-group">
            <label class="form-label" for="no">Nomor Kartu Keluarga</label>
            <input type="number" id="no" name="no" class='form-control' value="{{$kk->no}}" placeholder="Masukkan Nomor" readonly>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-heading">
        <div class="row">
            <h3 class="panel-title">List Keluarga</h3>
        </div>
    </div>
    <div class="panel-body">
        <table id='example' class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>tempat_lahir</th>
                    <th>agama</th>
                    <th>jenis_kelamin</th>
                    {{-- <th class="text-center">Aksi</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    {{-- @foreach ($kartu_keluarga as $kk)    
                        <td>{{$kk->no}}</td>
                        <td>{{$kk->jorong->nama}}</td>
                        <td>{{$kk->tanggal_pencatatan}}</td>
                        <td class="text-center">
                            <a class="btn btn-info" href="{{route('kartu_keluarga.show', [$kk->id])}}">detail</a>
                            <a class="btn btn-warning" href="{{route('kartu_keluarga.show', [$kk->id])}}">edit</a>
                            <a class="btn btn-danger">hapus</a>
                        </td>
                    @endforeach --}}
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection

