@extends('layouts.index')
@section('content')
<div class="container">
    <div class="row">
        <center><h1>Edit Data Kurikulum</h1></center>
        <div class="panel panel-primary">
            <div class="panel-heading">Edit Data Kurikulum
            <div class="panel-title pull-right">
            <a href="{{ URL::previous() }}">Kembali</a></div></div>
            <div class="panel-body">
            <form action="{{route('kurikulum.update',$kurikulum->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{csrf_field()}}

        <div class="form-group">
			<label class="control-label">Title</label>
			<input type="text" name="a" class="form-control" required="" value="{{$kurikulum->nama}}">
		</div>
		<div class="form-group">
				<label class="control-label">Cover</label>
				<input value="{{asset('/img/'.$kurikulum->cover)}}" type="file" name="d" class="form-control">
				<img src="{{asset('/img/'.$kurikulum->cover)}}" class="img-rounded">
			</div>
		 <div class="form-group">
			<label class="control-label">Isi</label>
			<input type="text" name="c" class="form-control" required="" value="{{$kurikulum->jabatan}}">
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