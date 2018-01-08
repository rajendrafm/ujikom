@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <center><h1>Data Alumni</h1></center>
        <div class="panel panel-primary">
            <div class="panel-heading">Data Alumni
            <div class="panel-title pull-right"><a href="/admin/alumni/create">Tambah Data</a></div></div>

         <div class="panel-body">
            <table class="table">
          <thead>
<tr>
    <th>Title</th>
    <th>Cover</th>
    <th>Isi</th>
    <th colspan="3">Action</th>
    </tr>
</thead>
<tbody>
	@foreach($alumni as $data)
	<tr>
		<td>{{$data->title}}</td>
		<td><img src="{{asset('img/'.$data->cover.'')}}" width="50" height="50">
		<td>{{$data->isi}}</td>
		
		</td>
	</td>
		<td>
			<a class="btn btn-success" href="{{ route('alumni.edit', $data->id) }}">Edit</a>
		</td>
		<!-- <td>
			<a class="btn btn-primary" href="/alumni/{{$data->id}}">Show</a>
		</td> -->
		<td>
			<form action="{{route('alumni.destroy',$data->id)}}" method="POST">

		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="_token">
		<input class="btn btn-danger" type="submit" value="Delete">
		{{csrf_field()}}
		</form>
		</td>
		</tr>
		@endforeach
		</tbody>
		</table>
		    </div>
		</div>
	</div>
</div>
@endsection