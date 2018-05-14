<div class="modal fade" id="modal-investasi" role="dialog">
  <div class="modal-dialog">
    <div class="form-horizontal" id="form-investasi">
      <div class="modal-content" style="background-color: #a7a5a5;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong>INVESTASI</strong></h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="col-sm-3 control-label">No. Rekening</label>
            <div class="col-sm-9">
              <input class="form-control" name="no_rekening" id="rekening" placeholder="Masukkan nomor rekening anda">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Jumlah Investasi</label>
            <div class="col-sm-9">
              <input class="form-control" name="jumlah_investasi" id="jumlah_investasi" placeholder="Masukkan jumlah uang untuk diinvestasikan">
            </div> 
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Bukti Transfer</label>
            <div class="col-sm-9">
              {!! Form::file('bukti_transfer', null, array('class' => 'form-control','placeholder'=>'Bukti Transfer')) !!}
            </div> 
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success pull-right" id="do_invest" data-dismiss="modal" data-toggle="modal" data-target="#investasi_sukses">Kirim</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="investasi_sukses" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><strong>INVESTASI SUKSES</strong></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>