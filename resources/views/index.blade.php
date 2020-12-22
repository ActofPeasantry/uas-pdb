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
                                <button class="btn btn-info">detail</button>
                                <button class="btn btn-warning">edit</button>
                                <button class="btn btn-danger">hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
  
{{-- <div class="container-fluid">
    <a class="btn btn-primary" data-toggle="modal" data-target="#Modal" href="">Modal</a>

    <div class="modal fade" id="Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
</div> --}}

@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endsection