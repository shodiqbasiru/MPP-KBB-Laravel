@extends('fitur.layanan.main')

@section('container')
    <div class="container-lg mt-3 form-pengajuan border border-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>Form Kelengkapan Data</h2>
            </div>
        </div>
        <div class="container-lg border border-1 py-1 my-1">
            <div class="row">
                <form action="/layanan/disdukcapil/pengajuan-online" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12">
                        <h3>Data Pemohon</h3>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row g-2 justify-content-start mb-1">
                            <div class="col-lg-2 ms-3">
                                <label for="nik" class="col-form-control">NIK</label>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" id="nik" name="nik" class="form-control">
                            </div>
                        </div>
                        <div class="row g-2 justify-content-start mb-1">
                            <div class="col-lg-2 ms-3">
                                <label for="name" class="col-form-label">Nama</label>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h3>Data Persyaratan</h3>
                    </div>
                    <div class="row g-2 justify-content-start mb-1">
                        <div class="col-lg-2 ms-3">
                            <label for="alamat" class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-lg-5">
                            <input type="text" id="alamat" name="alamat" class="form-control">
                        </div>
                    </div>
                    <div class="row g-2 justify-content-start mb-1">
                        <div class="col-lg-2 ms-3">
                            <label for="desa_kelurahan" class="col-form-label">Desa/Kelurahan</label>
                        </div>
                        <div class="col-lg-5">
                            <input type="text" id="desa_kelurahan" name="desa_kelurahan" class="form-control">
                        </div>
                    </div>
                    <div class="row g-2 justify-content-start mb-1">
                        <div class="col-lg-2 ms-3">
                            <label for="kecamatan" class="col-form-label">Kecamatan</label>
                        </div>
                        <div class="col-lg-5">
                            <input type="text" id="kecamatan" name="kecamatan" class="form-control">
                        </div>
                    </div>
                    <div class="row g-2 justify-content-start mb-1">
                        <div class="col-lg-2 ms-3">
                            <label for="fileKK" class="col-form-label">Fotocopy KK</label>
                        </div>
                        <div class="col-lg-5">
                            <input type="file" id="fileKK" class="form-control" name="fileKK">
                        </div>
                    </div>
                    <div class="col-lg-12 form-check mt-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Dengan ini saya menyatakan bahwa data yang saya kirim adalah benar dan valid. Saya bersedia menerima sanksi sesuai dengan ketentuan peraturan perundang-undang yang berlaku</label>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center mb-1">
                        <button type="submit" class="btn btn-primary ">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection