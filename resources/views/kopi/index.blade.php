@extends('template')
@section('title', 'Data Kopi')
@section('konten')

	<a href="/kopi/tambah" class="btn btn-primary"> + Tambah Kopi Baru</a>

	<br/>
	<br/>
	<p>Cari Data Kopi :</p>
	<form action="/kopi/cari" method="GET" class="form-inline">
        <div class="form-group">
		<input type="text" name="cari" placeholder="Cari Kopi .."  class="form-control">
		<input type="submit" value="CARI" class="btn btn-dark mt-2">
        </div>
	</form>
	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merek Kopi</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($kopi as $k)
		<tr>
			<td>{{ $k->kodekopi }}</td>
			<td>{{ $k->merkkopi }}</td>
			<td>{{ $k->stockkopi }}</td>
			<td>{{ $k->tersedia }}</td>
			<td>
				<a href="/kopi/edit/{{ $k->kodekopi }}" class="btn btn-warning btn-sm">Edit</a>

				<a href="/kopi/hapus/{{ $k->kodekopi }}" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $kopi->links() }} @endsection
