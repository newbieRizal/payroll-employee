@extends('layouts.app')

@section('title')
    Dashboard | Employee
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="welcome-box">
            <div class="welcome-img">
                <img alt="" src="{{ asset('assets/img/user.jpg') }}">
            </div>
            <div class="welcome-det">
                <h3>Selamat datang, {{ auth()->user()->name }}</h3>
                @php
                $date = date('Y-m-d');
                $day = date('l', strtotime($date));
                @endphp
                <p>{{ $day }}, {{ date('j F Y') }}</p>
                <p></p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-md-8">
        <section class="dash-section">
            <h1 class="dash-sec-title">Hari ini</h1>
            <div class="dash-sec-content">
                <div class="dash-info-list">
                    <a href="#" class="dash-card text-danger">
                        <div class="dash-card-container">
                            <div class="dash-card-icon">
                                <i class="fa fa-hourglass-o"></i>
                            </div>
                            <div class="dash-card-content">
                                <p>Viko sakit hari ini</p>
                            </div>
                            <div class="dash-card-avatars">
                                <div class="e-avatar"><img src="assets/img/profiles/avatar-09.jpg" alt=""></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="dash-info-list">
                    <a href="#" class="dash-card">
                        <div class="dash-card-container">
                            <div class="dash-card-icon">
                                <i class="fa fa-suitcase"></i>
                            </div>
                            <div class="dash-card-content">
                                <p>Kamu pergi hari ini</p>
                            </div>
                            <div class="dash-card-avatars">
                                <div class="e-avatar"><img src="assets/img/profiles/avatar-02.jpg" alt=""></div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="dash-info-list">
                    <a href="#" class="dash-card">
                        <div class="dash-card-container">
                            <div class="dash-card-icon">
                                <i class="fa fa-building-o"></i>
                            </div>
                            <div class="dash-card-content">
                                <p>Anda bekerja dari rumah hari ini</p>
                            </div>
                            <div class="dash-card-avatars">
                                <div class="e-avatar"><img src="assets/img/profiles/avatar-02.jpg" alt=""></div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>

        <section class="dash-section">
            <h1 class="dash-sec-title">Besok</h1>
            <div class="dash-sec-content">
                <div class="dash-info-list">
                    <div class="dash-card">
                        <div class="dash-card-container">
                            <div class="dash-card-icon">
                                <i class="fa fa-suitcase"></i>
                            </div>
                            <div class="dash-card-content">
                                <p>2 orang akan pergi besok</p>
                            </div>
                            <div class="dash-card-avatars">
                                <a href="#" class="e-avatar"><img src="assets/img/profiles/avatar-04.jpg" alt=""></a>
                                <a href="#" class="e-avatar"><img src="assets/img/profiles/avatar-08.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dash-section">
            <h1 class="dash-sec-title">Tujuh hari berikutnya</h1>
            <div class="dash-sec-content">
                <div class="dash-info-list">
                    <div class="dash-card">
                        <div class="dash-card-container">
                            <div class="dash-card-icon">
                                <i class="fa fa-suitcase"></i>
                            </div>
                            <div class="dash-card-content">
                                <p>2 orang akan pergi</p>
                            </div>
                            <div class="dash-card-avatars">
                                <a href="#" class="e-avatar"><img src="assets/img/profiles/avatar-05.jpg" alt=""></a>
                                <a href="#" class="e-avatar"><img src="assets/img/profiles/avatar-07.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dash-info-list">
                    <div class="dash-card">
                        <div class="dash-card-container">
                            <div class="dash-card-icon">
                                <i class="fa fa-user-plus"></i>
                            </div>
                            <div class="dash-card-content">
                                <p>Hari pertamamu akan jatuh pada hari Kamis</p>
                            </div>
                            <div class="dash-card-avatars">
                                <div class="e-avatar"><img src="assets/img/profiles/avatar-02.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dash-info-list">
                    <a href="" class="dash-card">
                        <div class="dash-card-container">
                            <div class="dash-card-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="dash-card-content">
                                <p>Hari Senin adalah Hari Libur Bank Musim Semi</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <div class="col-lg-4 col-md-4">
        <div class="dash-sidebar">
            <section>
                <h5 class="dash-title">Proyek</h5>
                <div class="card">
                    <div class="card-body">
                        <div class="time-list">
                            <div class="dash-stats-list">
                                <h4>71</h4>
                                <p>Jumlah Tugas</p>
                            </div>
                            <div class="dash-stats-list">
                                <h4>14</h4>
                                <p>Tugas yang Tertunda</p>
                            </div>
                        </div>
                        <div class="request-btn">
                            <div class="dash-stats-list">
                                <h4>2</h4>
                                <p>Jumlah Proyek</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h5 class="dash-title">Cuti Anda</h5>
                <div class="card">
                    <div class="card-body">
                        <div class="time-list">
                            <div class="dash-stats-list">
                                <h4>4.5</h4>
                                <p>Tinggalkan Diambil</p>
                            </div>
                            <div class="dash-stats-list">
                                <h4>12</h4>
                                <p>Tersisa</p>
                            </div>
                        </div>
                        <div class="request-btn">
                            <a class="btn btn-primary" href="#">Terapkan Cuti</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h5 class="dash-title">Tunjangan waktu istirahat Anda</h5>
                <div class="card">
                    <div class="card-body">
                        <div class="time-list">
                            <div class="dash-stats-list">
                                <h4>5.0 Jam</h4>
                                <p>Disetujui</p>
                            </div>
                            <div class="dash-stats-list">
                                <h4>15 Jam</h4>
                                <p>Tersisa</p>
                            </div>
                        </div>
                        <div class="request-btn">
                            <a class="btn btn-primary" href="#">Terapkan Waktu Istirahat</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h5 class="dash-title">Liburan Mendatang</h5>
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="holiday-title mb-0">Sen 1 Januari 2024 - Turu</h4>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
