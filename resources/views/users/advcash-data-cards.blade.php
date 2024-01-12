<div class="row">
    <div class="col-md-12">
        <div class="card-group m-b-30">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <span class="d-block">Jenis Pekerjaan Saat Ini :</span>
                        </div>
                    </div>
                    <h3 class="mb-3">{{ $current_worktype_name }}</h3>
                    <div class="progress mb-2" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <span class="d-block">Harga Jenis Pekerjaan Saat Ini :</span>
                        </div>
                    </div>
                    <h3 class="mb-3">{{ $current_worktype_price }}</h3>
                    <div class="progress mb-2" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <span class="d-block">Debit di Muka <a
                                    href="{{ route('users.advcashlist', $user->id) }}"><span
                                        class="badge badge-primary ml-1 p-1">Daftar lengkap</span></a></span>
                        </div>
                    </div>
                    <h3 class="mb-3">Rp <span class="advance">{{ $advancecash }}</span></h3>
                    <div class="progress mb-2" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <span class="d-block">Jumlah Total :</span>
                        </div>
                    </div>
                    <h3 class="mb-3 total_qty">{{ $qtysum }}</h3>
                    <div class="progress mb-2" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <span class="d-block">Jumlah Hutang Bersih :</span>
                        </div>
                    </div>
                    <h3 class="mb-3">Rp <span class="net_amount">{{ $total }}</span></h3>
                    <div class="progress mb-2" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
