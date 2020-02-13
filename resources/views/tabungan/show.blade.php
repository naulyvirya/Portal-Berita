@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Tabungan</div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama & Kelas Siswa</label>
                            <select name="siswa_id" class="form-control" readonly>
                                    <option value=" {{$tabungan->id}} ">
                                        {{ $tabungan->siswa->nama }} - {{ $tabungan->siswa->kelas }}
                                    </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Uang</label>
                            <input type="text" class="form-control" value="{{$tabungan->jumlah_uang}}" readonly>
                        </div>

                        <div class="form-group">
                            <a href=" {{ route('tabungan.index') }} " class="btn btn-danger">Back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
