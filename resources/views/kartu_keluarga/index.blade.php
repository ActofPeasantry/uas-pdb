@extends('/layout/base')

@section('content')

<div class="container-fluid">
    <div class="panel">
        <div class="panel-heading">
            <div class="row">
                <h3 class="panel-title">Tabel Kartu Keluarga</h3>
            </div>
        </div>
        <div class="panel-body">
            <a class="btn btn-primary" data-toggle="modal" data-target="#Modal" href="">Tambah Kartu Keluarga</a>
            <br>
            <br>
            <table id='example' class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jorong</th>
                        <th>Tanggal Pencatatan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($kartu_keluarga as $kk)    
                            <td>{{$kk->no}}</td>
                            <td>{{$kk->jorong->nama}}</td>
                            <td>{{$kk->tanggal_pencatatan}}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{route('kartu_keluarga.show', [$kk->id])}}">detail</a>
                                <a class="btn btn-warning" href="{{route('kartu_keluarga.show', [$kk->id])}}">edit</a>
                                <a class="btn btn-danger">hapus</a>
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


{{-- <div class="container-fluid">

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

    @include('kartu_keluarga/addmodal')
@endsection

@section('javascript')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endsection