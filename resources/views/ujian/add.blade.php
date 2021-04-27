@extends('template')

@section('content')

<div class="container p-2 mt-2">
<h2> Input Data</2>
<form action="{{ route('ujian.save') }} method="post">
@csrf
<div class="form-group">
    <label>Nama Mata Kuliah</label>
    <input type="text" name="nama_mk" class="form-control">
</div>
<div class="form-group">
<label>Dosen</label>
<textarea name="dosen" clas="form-control"></textarea>
</div>
<div class="form-group">
<label>Jumlah Soal</label>
<input type="number" name="jumlah_soal" clas="form-control">
</div>
<div class="form-group">
<label>Keterangan</label>
<input type="text" name="keterangan" clas="form-control">
</div>
<br>
<input type="submit" name="submit" value="Save Data" class="btn btn-primary">
<a  href="{{ route('ujian.inex')}}" class="btn btn-secondary">Cancel</a>
</form>
</div>

@endsection
