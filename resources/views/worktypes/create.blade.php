@extends('layouts.app')

@section('title')
        Membuat Jenis Pekerjaan
@endsection

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger mt-2">
            <strong>Waduhhh!</strong>Ada yang tidak beres.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Membuat Jenis Pekerjaan</h3>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('worktypes.index') }}" class="btn add-btn add-role"> Kembali </a>
            </div>
        </div>
    </div>
    {!! Form::open(['route' => 'worktypes.store', 'method' => 'POST']) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
            <div class="form-group">
                <strong>Nama:</strong>
                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
            <div class="form-group">
                <strong>Harga:</strong>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="number" name="price" step="0.01" class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
