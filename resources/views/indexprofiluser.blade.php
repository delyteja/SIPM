 
@extends('layouts.app')

@section('content')
 <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-condensed tfix">
                    <thead align="center">
                       <tr>
                           <td><b>email</b></td>
                           <td><b>Nama Usaha</b></td>
                           <td><b>Tempat Usaha</b></td>
                           <td><b>Biaya yang dibutuhkan</b></td>
                           <td><b>Foto</b></td>
                           <td><b>Diskripsi</b></td>
                           <td colspan="2"><b>MENU</b></td>
                       </tr>
                   </thead>
                   @foreach($kls as $k)
                       <tr>
                           <td>{{ $k->kodekls }}</td>
                           <td>{{ $k->namamatkul }}</td>
                           <td>{{ $k->namadosen }}</td>
                           <td align="center" width="30px">
                               <a href="/kelas/{{$k->kodekls}}/edit" class="btn btn-warning btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>
                           </td>
                           <td align="center" width="30px">
                               {!! Form::open(array(
                                    'route' => array('kelas.destroy', $k->kodekls),
                                    'method' => 'delete',
                                    'style' => 'display:inline')) !!}
                                    <button class='btn btn-sm btn-danger delete-btn' type='submit'>
                                        <i class='fa fa-times-circle'></i> Delete
                                    </button>
                                {!! Form::close() !!}

                           </td>
                       </tr>
                   @endforeach
              </table>
              {{$kls->render()}}
          </div>
        @endsection