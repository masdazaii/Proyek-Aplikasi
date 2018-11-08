@extends('layouts.main')

@section('css')
	<link rel="stylesheet" href="{{url('/')}}/purpleadmin/node_modules/jqvmap/dist/jqvmap.min.css" />
@endsection

@section('body')
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <button type="button" data-toggle="modal" class="btn btn-info btn-fw" data-target="#tambah">Tambah data</button>
              	  </br>
                  <table class="table table-bordered">
            		<tr>
                        <th>admin id</th>
                        <th>Nama</th>
                        <th>Password</th>
                        <th>Pilihan</th>
                    </tr>
                    @foreach($admin as $data)
                    <tr>
                        <th>{{$data->admin_id}}</th>
                        <th>{{$data->Nama}}</th>
                   	    <th>{{$data->password}}</th>
                        <th>
                           <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#ubah">Ubah</button>
                           <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#hapus">Hapus</button>
                        </th>
                    </tr>
                    @endforeach 
                  </table>
                </div>
              </div>
            </div>

            <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="card-inside-title">Tambah data</h2>
                        </div>
                        <div class="modal-body">
                        	<form action="{{route('tambah')}}" method="POST">
	                            <div class="row clearfix">
	                                <div class="col-sm-12">
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="Admin Id" name="admin_id" />
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="Nama" name="Nama" />
	                                        </div>
	                                    </div>
	                                   	<div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="Password" name="password" />
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="Alamat" name="Alamat" />
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenisKelamin"/>
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="Nomor Telefon" name="NoHp" />
	                                        </div>
	                                    </div>
	                                </div>
	                                    {{csrf_field()}}
	                                    <input type="hidden" name="_method" value="PUT">
	                            </div>
	                            <div class="modal-footer">
                        		<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            	<button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                        		</div>
                        	</form>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($admin as $data)
            <div class="modal fade" id="ubah" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="card-inside-title">Update data</h2>
                        </div>
                        <div class="modal-body">
                        	<form action="{{route('update', $data->admin_id)}}" method="POST">
	                            <div class="row clearfix">
	                                <div class="col-sm-12">
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="Store Id" name="admin_id"  value="{{$data->admin_id}}" />
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="First Name" name="Nama"  value="{{$data->Nama}}" />
	                                        </div>
	                                    </div>
	                                   	<div class="form-group">
	                                        <div class="form-line">
	                                            <input type="password" class="form-control" placeholder="Last Name" name="password"  value="{{$data->password}}" />
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="E-mail" name="Alamat" value="{{$data->Alamat}}"  />
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="jenisKelamin" name="address_id" value="{{$data->jenisKelamin}}" />
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="form-control" placeholder="Active" name="NoHp"  value="{{$data->NoHp}}" />
	                                        </div>
	                                    </div>
	                                </div>
	                                    {{csrf_field()}}
	                                    <input type="hidden" name="_method" value="PUT">
	                            </div>
	                            <div class="modal-footer">
                        		<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            	<button type="submit" class="btn btn-link waves-effect">Update</button>
                        	</div>
                        	</form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach($admin as $data)
            <div class="modal fade" id="hapus" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel"> Are you sure to delete this data</h4>
                        </div>
                        <div class="modal-body">
                        	<form action="{{route('delete',$data->admin_id)}}" method="POST">
                        		{{ method_field('DELETE') }}
                        		<div class="modal-footer">
                            		<button type="submit" class="btn btn-link waves-effect">DELETE</button>
                            		<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            		{{csrf_field()}}
                        		</div>
                        	</form>       
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
@endsection

@section('js')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="{{url('/')}}/purpleadmin/js/modals.js"></script>
@endsection

