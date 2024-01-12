@extends('layouts.app')

@section('title')
Dashboard | SuperAdmin
@endsection

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Selamat datang {{ auth()->user()->name }}!</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
        <div class="card dash-widget">
            <div class="card-body">
                <span class="dash-widget-icon"><i class="fa fa-users"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ $employeescount }}</h3>
                    <span>Karyawan</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
        <div class="card dash-widget">
            <div class="card-body">
                <span class="dash-widget-icon"><i class="las la-user-tie"></i></span>
                <div class="dash-widget-info">
                    <h3>{{ $admincount }}</h3>
                    <span>Manajer</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Total Pendapatan</h3>
                        <div id="bar-charts"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Tinjauan Penjualan</h3>
                        <div id="line-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
