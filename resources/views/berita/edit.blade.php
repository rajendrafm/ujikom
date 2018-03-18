@extends('layouts.index')
@section('content')
<div class="container">
    <div class="row">
        <center><h1>Edit Data berita</h1></center>
        <div class="panel panel-primary">
            <div class="panel-heading">Edit Data berita
            <div class="panel-title pull-right">
            <a href="{{ URL::previous() }}">Kembali</a></div></div>
            <div class="panel-body">
            <form action="{{route('berita.update',$berita->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{csrf_field()}}

        <div class="form-group">
			<label class="control-label">Title</label>
			<input type="text" name="a" class="form-control" required="" value="{{$berita->title}}">
		</div>
		<div class="form-group">
				<label class="control-label">Cover</label>
				<input value="{{asset('img/'.$berita->cover.'')}}" type="file" name="d" class="form-control">
				<img src="{{asset('/img/'.$berita->cover)}}" class="img-rounded">
			</div>
		 <div class="form-group">
			<label class="control-label">Isi</label>
			<input type="text" name="c" class="form-control" required="" value="{{$berita->isi}}">
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