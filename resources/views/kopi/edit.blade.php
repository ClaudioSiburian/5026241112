@extends('template')
@section('title', 'Edit Data Kopi')
@section('konten')

    <a href="/kopi" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($kopi as $k)

    <div class="card mb-5">
        <div class="card-header">
            Form Edit Data Kopi
        </div>

        <div class="card-body">
            <form action="/kopi/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $k->kodekopi }}">

                <div class="row mb-3">
                    <label for="merkkopi" class="col-sm-2 col-form-label">Merk Kopi</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="merkkopi"
                            id="merkkopi"
                            class="form-control"
                            required
                            value="{{ $k->merkkopi }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockkopi" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="stockkopi"
                            id="stockkopi"
                            class="form-control"
                            required
                            value="{{ $k->stockkopi }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y" {{ $k->tersedia == 'Y' ? 'selected' : '' }}>Y</option>
                            <option value="N" {{ $k->tersedia == 'N' ? 'selected' : '' }}>N</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

    @endforeach
@endsection
