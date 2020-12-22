@extends('/layout/base')

@section('content')

{{-- <div class="container-fluid">
    <h3 class="page-title">Tables</h3>
    <div class="row">
        <div class="col-md-6">
            <!-- BASIC TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Basic Table</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Steve</td>
                                <td>Jobs</td>
                                <td>@steve</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Simon</td>
                                <td>Philips</td>
                                <td>@simon</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>@jane</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END BASIC TABLE -->
        </div>
        <div class="col-md-6">
            <!-- TABLE NO PADDING -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Table Inside No Padding</h3>
                </div>
                <div class="panel-body no-padding">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Steve</td>
                                <td>Jobs</td>
                                <td>@steve</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Simon</td>
                                <td>Philips</td>
                                <td>@simon</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>@jane</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END TABLE NO PADDING -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- TABLE STRIPED -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Striped Row</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Steve</td>
                                <td>Jobs</td>
                                <td>@steve</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Simon</td>
                                <td>Philips</td>
                                <td>@simon</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>@jane</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END TABLE STRIPED -->
        </div>
        <div class="col-md-6">
            <!-- TABLE HOVER -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Hover Row</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Steve</td>
                                <td>Jobs</td>
                                <td>@steve</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Simon</td>
                                <td>Philips</td>
                                <td>@simon</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>@jane</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END TABLE HOVER -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- BORDERED TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Bordered Table</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Steve</td>
                                <td>Jobs</td>
                                <td>@steve</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Simon</td>
                                <td>Philips</td>
                                <td>@simon</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>@jane</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END BORDERED TABLE -->
        </div>
        <div class="col-md-6">
            <!-- CONDENSED TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Condensed Table</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Steve</td>
                                <td>Jobs</td>
                                <td>@steve</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Simon</td>
                                <td>Philips</td>
                                <td>@simon</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>@jane</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END CONDENSED TABLE -->
        </div>
    </div>
</div> --}}

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