@extends('/layout/base')

@section('content')
<form class="post" action="{{route('kartu_keluarga.update', [$kk->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Kartu Keluarga</h3>
        </div>

        <div class="panel-body">
            <div class="form-group">
                <label for="test" class="form-control-label">Nama Nagari</label>
                <select name="nagari" id="nagari" class='form-control'>
                    @foreach ($nagari as $n)
                        <option value="{{$n->id}}">{{$n->nama}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="marital" class="form-control-label">Nama Jorong</label>
                <select name="jorong_id" id="jorong_id" class='form-control' disabled>
                    @foreach ($jorong as $j)
                        <option value="{{$j->id}}" data-tag="{{$j->nagari_id}}">{{$j->nama}}</option>
                    @endforeach
                </select>
            </div>
        
            <div class="form-group">
                <label class="form-label" for="tanggal_pencatatan">Tanggal Pencatatan</label>
                <input type="date" id="tanggal_pencatatan" name="tanggal_pencatatan" class='form-control' value="{{$kk->tanggal_pencatatan}}">
            </div>
        
            <div class="form-group">
                <label class="form-label" for="no">Nomor Kartu Keluarga</label>
                <input type="number" id="no" name="no" class='form-control' value="{{$kk->no}}" placeholder="Masukkan Nomor">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection

@section('javascript')
    <script type="text/javascript">
        $('#nagari').on('click', function() {
            $('#jorong_id').prop('disabled', false);
            var selected = $(this).val(); //fakultas value

            $("#jorong_id option").each(function(item){
                var element =  $(this) ;
                if (element.data("tag") != selected){
                    element.hide() ; 
                }
                else{
                    element.show();
                }
            }) ; 
            
            $("#jorong_id").val($("#jorong_id option:visible:first").val());
        });
    </script>
@endsection