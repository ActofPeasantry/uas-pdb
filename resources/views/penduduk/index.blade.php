@extends('/layout/base')

@section('content')

<div class="container-fluid">
    <div class="panel">
        <div class="panel-heading">
            <div class="row">
                <h3 class="panel-title">Tabel Penduduk</h3>
            </div>
        </div>
        <div class="panel-body">
            <button class="btn btn-primary">Tambah Penduduk</button>
            <br>
            <br>
            <table id='example' class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>No. Kartu Keluarga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>nama</td>
                        <td>nik</td>
                        <td>kk</td>
                        <td class="text-center">
                            <button class="btn btn-info">detail</button>
                            <button class="btn btn-warning">edit</button>
                            <button class="btn btn-danger">hapus</button>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
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