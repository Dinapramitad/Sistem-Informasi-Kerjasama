@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <h1>
        Edit Data Realisasi
        <small>Admin panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">user</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">User/Pengguna</h3>
                </div>
                <form method="POST" action="{{url('admin/perjanjian/edit')}}" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <div class="box-body">
                        <div class="form-group-sm">
                            <label for="inputEmail3" class="col-sm-3 control-label">Nama Lembaga</label>
                            <div class="col-sm-9">
                                <input type="hidden" class="form-control" value="{{$data->id}}" name="id">
                                <input type="text" class="form-control" value="{{$data->mitra}}" name="mitra">
                            </div>
                        </div>
                        <div class="form-group-sm">

                            <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">

                <textarea id="editor1" name="deskripsi" rows="4" cols="80" autofocus="">{{$data->deskripsi}}</textarea>
                            </div>


                        </div>

                        <div class="form-group-sm">
                            <label for="inputPassword3" class="col-sm-3 control-label">Pelaksana</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Nomor Kontrak" name="pelaksana" value="{{$data->pelaksana}}">
                            </div>
                        </div>

                        <div class="form-group-sm">
                            <label for="inputPassword3" class="col-sm-3 control-label">Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Nomor Kontrak" name="kegiatan" value="{{$data->kegiatan}}">
                            </div>
                        </div>
                        <div class="form-group-sm">
                            <label for="inputPassword3" class="col-sm-3 control-label">No.Kontrak</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Nomor Kontrak" name="no_kontrak" value="{{$data->no_kontrak}}">
                            </div>
                        </div>
                         <div class="form-group-sm">
                            <label for="inputPassword3" class="col-sm-3 control-label">PJ Univ</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Nomor Kontrak" name="pj_univ" value="{{$data->pj_univ}}">
                            </div>
                        </div>
                         <div class="form-group-sm">
                            <label for="inputPassword3" class="col-sm-3 control-label">PJ Mitra</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Nomor Kontrak" name="pj_mitra" value="{{$data->pj_mitra}}">
                            </div>
                        </div>
                         <div class="form-group-sm">
                            <label for="inputPassword3" class="col-sm-3 control-label">Tanggal Mulai</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" placeholder="Nomor Kontrak" name="tgl_mulai" value="{{$data->tgl_mulai}}">
                            </div>
                        </div>

                         <div class="form-group-sm">
                            <label for="inputPassword3" class="col-sm-3 control-label">Tanggal Selesai</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" placeholder="Nomor Kontrak" name="tgl_selesai" value="{{$data->tgl_selesai}}">
                            </div>
                        </div>


                        <div class="form-group-sm">
                            <label for="inputPassword3" class="col-sm-3 control-label">Dokumen</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" placeholder="" name="dokumen" value="">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

