@extends('kurikulum.ayeu')
@section('content')
<div class="container">
    <div class="row">
        <center><h1>Data Kurikulum</h1></center>
        <div class="panel panel-primary">
            <div class="panel-heading">Data Kurikulum
            <div class="panel-title pull-right"><a href="/adm/kurikulum/create">Tambah Data</a></div></div>

         <div class="panel-body">
            <table class="table">
          <thead>
<tr>
    <th>Nama</th>
    <th>Cover</th>
    <th>Jabatan</th>
    <th colspan="3">Action</th>
    </tr>
</thead>
<tbody>
	@foreach($kurikulum as $data)
	<tr>
		<td>{{$data->nama}}</td>
		<td><img src="{{asset('img/'.$data->cover.'')}}" width="50" height="50">
		<td>{{$data->jabatan}}</td>
		
		</td>
	</td>
		<td>
			<a class="btn btn-success" href="{{ route('kurikulum.edit', $data->id) }}">Edit</a>
		</td>
		<!-- <td>
			<a class="btn btn-primary" href="/kurikulum/{{$data->id}}">Show</a>
		</td> -->
		<td>
			<form action="{{route('kurikulum.destroy',$data->id)}}" method="POST">

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