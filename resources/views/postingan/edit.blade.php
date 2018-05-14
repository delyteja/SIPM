<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="container">
            
         <!--    <div id="wrap"> -->
                <div id="main">
                    <div class="row">
                        <div class="col-md-10">
                            <h2 class="heading"><span>Tambah Peluang Bisnis Anda</span></h2>
                        </div>

                    </div>
                </div>
                <div class="para"> <p>Jelaskan sedetail mungkin pada kolom Diskripsi rencana Bisnis Anda agar banyak Investor yang akan menginvestasikan dana kepada Anda *<br /></p></div>

                <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                
 {!! Form::model($posts,['files'=>true, 'method'=>'POST','action'=>['PostinganController@update',$posts->id]]) !!}
                       <div class="form-group">
                            {!! Form::label('Email', 'Email') !!}
                            {!! Form::text('email',null, array('class' => 'form-control','placeholder'=>'Email')) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('Nama Usaha', 'NAMA USAHA') !!}
                            {!! Form::text('namausaha',null, array('class' => 'form-control','placeholder'=>'Nama Usaha')) !!}
                        </div>
                        <div class="form-group">
                        {!! Form::label('Kategori', 'Kategori :  ') !!}
                           {{ Form::select('kategori', [
                               'Start Up' => 'Start Up',
                               'Wirausaha' => 'Wirausaha Mandiri'
                               ]
                            ) }}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Biaya Yang dibutuhkan', 'Biaya yang Dibuthkan') !!}
                            {!! Form::text('biaya', null, array('class' => 'form-control','placeholder'=> 'biaya')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('TempatUsaha', 'TempatUsaha') !!}
                            {!! Form::text('tempatusaha', null, array('class' => 'form-control','placeholder'=>'tempatusaha')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('foto', 'FOTO') !!}
                            {!! Form::file('foto', null, array('class' => 'form-control','placeholder'=>'foto')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Diskripsi', 'Diskripsi') !!}
                            {!! Form::text('diskripsi', null, array('class' => 'form-control','placeholder'=>'diskripsi')) !!}
                        </div>
                        
                        {!! Form::button('<i class="fa fa-plus-square"></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
                        {!! Form::button('<i class="fa fa-times"></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}

                        {!! Form::close()!!}
                    </div>
                </div>
            </div>

          <!--   </div> -->
        </div>
    </body>
</html>
