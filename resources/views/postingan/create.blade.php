<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                    
                {!! Form::open(['files'=>true,'method'=>'POST','url'=>'/submitpostingan', 'enctype' => 'multipart/form-data']) !!} 
                        <div class="form-group">
                            {!! Form::label('Email', 'Email') !!}
                            {!! Form::text('email',null, array('class' => 'form-control','placeholder'=>'Email')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Nama Usaha', 'Nama Usaha') !!}
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
                            {!! Form::label('Biaya Yang dibutuhkan', 'Biaya yang Dibutuhkan') !!}
                            {!! Form::text('biaya', null, array('class' => 'form-control','placeholder'=>'Biaya Yang Dibutuhkan')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('TempatUsaha', 'Tempat Usaha') !!}
                            {!! Form::text('tempatusaha', null, array('class' => 'form-control','placeholder'=>'Tempat Usaha')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('foto', 'Foto Modal') !!}
                            {!! Form::file('foto', null, array('class' => 'form-control','placeholder'=>'FOTO')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Diskripsi', 'Diskripsi') !!}
                            {!! Form::text('diskripsi', null, array('class' => 'form-control','placeholder'=>'Diskripsi Usaha')) !!}
                        </div>
                        
                        {!! Form::button('<i class="fa fa-plus-square"></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
                        {!! Form::button('<i class="fa fa-times"></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}

                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
