@extends('template.master')
@section('content')

            <section class="content-header">
            <h1>Tambah Laporan Usaha</h1>
            </section>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="POST" action="{{ url('/laporan/store')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('aktivitas') ? ' has-error' : '' }}">
                                <label for="aktivitas" class="col-md-4 control-label">Aktivitas</label>
                                <div class="col-md-6">
                                    <input id="aktivitas" type="text" class="form-control" name="aktivitas" required>
                                    @if ($errors->has('aktivitas'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('aktivitas') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('biaya') ? ' has-error' : '' }}">
                                <label for="biaya" class="col-md-4 control-label">Biaya yang dikeluarkan</label>
                                <div class="col-md-6">
                                    <input id="biaya" type="text" class="form-control" name="biaya" required>
                                    @if ($errors->has('biaya'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Biaya') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                                <label for="keterangan" class="col-md-4 control-label">Keterangan</label>
                                <div class="col-md-6">
                                    <input id="keterangan" type="text" class="form-control" name="keterangan" required>
                                    @if ($errors->has('keterangan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('keterangan') }}</strong>
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
