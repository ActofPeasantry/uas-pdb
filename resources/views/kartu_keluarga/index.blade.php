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
            <table id='kartu_keluarga' class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jorong</th>
                        <th>Tanggal Pencatatan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kartu_keluarga as $kk)    
                    <tr>
                        <td>{{$kk->no}}</td>
                        <td>{{$kk->jorong->nama}}</td>
                        <td>{{$kk->tanggal_pencatatan}}</td>
                        <td class="text-center">
                            <a class="btn btn-info" href="{{route('kartu_keluarga.show', [$kk->id])}}">detail</a>
                            <a class="btn btn-warning" href="{{route('kartu_keluarga.edit', [$kk->id])}}">edit</a>
                            <a class="btn btn-danger" href="{{route('kartu_keluarga.destroy', [$kk->id])}}">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



    @include('kartu_keluarga/addmodal')
@endsection

@section('javascript')
    <script type="text/javascript">
        $('#nagari').on('click', function() {
            $('#jorong').prop('disabled', false);
            var selected = $(this).val(); //fakultas value

            $("#jorong option").each(function(item){
                var element =  $(this) ;
                if (element.data("tag") != selected){
                    element.hide() ; 
                }
                else{
                    element.show();
                }
            }) ; 
            
            $("#jorong").val($("#jorong option:visible:first").val());
        });
    </script>
@endsection