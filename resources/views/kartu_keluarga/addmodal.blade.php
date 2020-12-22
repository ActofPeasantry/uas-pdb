<div class="container-fluid">
    <form class="post" action="{{route('kartu_keluarga.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kartu keluarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">   
                        <div class="form-group">
                            <label for="test" class="form-control-label">Nama Nagari</label>
                            <select name="nagari" id="nagari" class='form-control'>
                                @foreach ($nagari as $n)
                                    <option value="{{$n->id}} ">{{$n->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="marital" class="form-control-label">Nama Jorong</label>
                            <select name="jorong" id="jorong" class='form-control' disabled>
                                @foreach ($jorong as $j)
                                    <option value="{{$j->id}}" data-tag="{{$j->nagari_id}}">{{$j->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="tanggal_pencatatan">Tanggal Pencatatan</label>
                            <input type="date" id="tanggal_pencatatan" name="tanggal_pencatatan" class='form-control' value="">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="no">Nomor Kartu Keluarga</label>
                            <input type="number" id="no" name="no" class='form-control' value="" placeholder="Masukkan Nomor">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </form>

</div

