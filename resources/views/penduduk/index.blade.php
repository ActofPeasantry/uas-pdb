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
            <a class="btn btn-primary" href="{{route('penduduk.create')}}">Tambah Penduduk</a>
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
                    @endforeach
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