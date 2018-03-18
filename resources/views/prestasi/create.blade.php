@extends('layouts.index')
@section('content')
<div class="container">
    <div class="row">
        <center><h1>Data Prestasi</h1></center>
        <div class="panel panel-primary">
            <div class="panel-heading">Data Prestasi
            <div class="panel-title pull-right">
            <a href="{{ URL::previous() }}">Kembali</a></div></div>
            <div class="panel-body">
            <form action="{{route('prestasi.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

        <div class="form-group">
			<label class="control-label">Title</label>
			<input type="text" name="a" class="form-control" required="">
		</div>
		<div class="form-group">
				<label class="control-label">Cover</label>
				<input type="file" name="d" class="form-control" required="">
			</div>
		 <div class="form-group">
			<label class="control-label">Isi</label>
			<input type="text" name="c" class="form-control" required="">
		</div>
			
			
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
			</form>
			</div>
			</div>
			</div>
			</div>
			@endsection