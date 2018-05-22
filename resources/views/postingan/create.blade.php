@extends('template.master')
@section('content')

            <section class="content-header">
            <h1>Tambah Peluang Bisnis</h1>
            <p>Jelaskan sedetail mungkin pada kolom Diskripsi rencana Bisnis Anda agar banyak Investor yang akan menginvestasikan dana kepada Anda *<br /></p>
            </section>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="POST" action="{{ url('/submitpostingan')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('namausaha') ? ' has-error' : '' }}">
                                <label for="namausaha" class="col-md-4 control-label">Nama Usaha</label>
                                <div class="col-md-6">
                                    <input id="namausaha" type="text" class="form-control" name="namausaha" required>
                                    @if ($errors->has('namausaha'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('namausaha') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                                <label for="kategori" class="col-md-4 control-label">Kategori</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="kategori">
                                        <option value="Start Up">Start UP</option>
                                        <option value="wirausaha">Wirausaha Mandiri</option>
                                    </select>
                                    @if ($errors->has('kategori'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kateori') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('biaya') ? ' has-error' : '' }}">
                                <label for="biaya" class="col-md-4 control-label">Biaya Yang Dibutuhkan</label>
                                <div class="col-md-6">
                                    <input id="biaya" type="text" class="form-control" name="biaya" required>
                                    @if ($errors->has('biaya'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('biaya') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('Tempat Usaha') ? ' has-error' : '' }}">
                                <label for="tempatusaha" class="col-md-4 control-label">Tempat Usaha</label>
                                <div class="col-md-6">
                                    <input id="tempatusaha" type="text" class="form-control" name="tempatusaha" required>
                                    @if ($errors->has('tempatusaha'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tempatusaha') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('foto usaha') ? ' has-error' : '' }}">
                                <label for="foto" class="col-md-4 control-label">Foto Usaha</label>
                                <div class="col-md-6">
                                    <input id="foto" type="file" class="form-control" name="foto" required>
                                    @if ($errors->has('foto'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('foto') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('Diskripsi') ? ' has-error' : '' }}">
                                <label for="diskripsi" class="col-md-4 control-label">Diskripsi</label>
                                <div class="col-md-6">
                                    <input id="diskripsi" type="text" class="form-control" name="diskripsi" required>
                                    @if ($errors->has('diskripsi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('diskripsi') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-offset-4 col-md-4">
                                <input class="btn btn-primary" type="submit" value="{{'Simpan'}}">
                                <input class="btn btn-danger" type="reset" value="{{'Reset'}}">
                            </div>
                        </form>
                    </div>
               </div>
@endsection
