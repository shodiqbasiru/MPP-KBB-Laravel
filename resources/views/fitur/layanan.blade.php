@extends('layout.main')

@section('jumbroton')
    <div style="padding-top: 9rem">
        <h1>Mal Pelayanan Publik (MPP)</h1>
        <h2>Kabupaten Bandung Barat</h2>
    </div>
@endsection

@section('container')
<div class="container-lg">

    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center mb-3">
            <h1>Pilih Instansi</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-4 col-md-6 col-sm-7 col-7 mb-2">
            <a href="/layanan/disdukcapil" class="fitur">
                <div class="card">
                    <div class=" d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3">Disdukcapil</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-7 col-7 mb-2">
            <a href="#" class="fitur">
                <div class="card">
                    <div class=" d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3">Samsat</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-7 col-7 mb-2">
            <a href="#" class="fitur">
                <div class="card">
                    <div class=" d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3">Kementrian Agama</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-7 col-7 mb-2">
            <a href="#" class="fitur">
                <div class="card">
                    <div class=" d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3">PDAM</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-7 col-7 mb-2">
            <a href="#" class="fitur">
                <div class="card">
                    <div class=" d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3">Kejaksaan</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-7 col-7 mb-2">
            <a href="#" class="fitur">
                <div class="card">
                    <div class=" d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3">Kantor Imigrasi</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection