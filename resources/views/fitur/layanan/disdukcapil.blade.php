@extends('fitur.layanan.main')

@section('container')
    <div class="jumbroton responsive"> 
        
        <img src="{{asset('asset/img/slider1.jpg')}}" class="img-fluid" alt="" width="100%">

    </div>
    
    <div class="container-lg mt-1">
        <div class="row justify-content-center">
            <div class="col-lg-12 ">
                <div class="h1 text-center py-3">DINAS KEPENDUDUKAN DAN CATATAN SIPIL KAB. BANDUNG BARAT</div>
                <div class="h3">Pilih Jenis Layanan</div>
            </div>
    
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="myCard mb-5 mx-auto">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="text-center border-bottom border-1 mb-3 pb-2">Pembuatan KTP</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                          <img src=" {{asset('asset/img/Logo-eKTP.png')}}" class="img-fluid" alt="" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center py-1 mt-3">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              Booking Now
                          </button>
                        </div>
                    </div>
                </div>
          
    
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Persyaratan Pembuatan eKTP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <ol>
                            <li>Minimal berusia 17 tahun</li>
                            <li>Surat pengantar dari pihak Rukun Tetangga (RT) dan Rukun Warga (RW)</li>
                            <li>Surat keterangan pindah dari kota asal, jika bukan asli warga setempat</li>
                            <li>Fotokopi Kartu Keluarga (KK)</li>
                        </ol>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Cetak Antrian</button>
                        <a href="/layanan/disdukcapil/pengajuan-online" class="btn btn-success">Pengajuan Online</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            {{-- layanan 2 --}}
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="myCard mb-5 mx-auto">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="text-center border-bottom border-1 mb-3 pb-2">Pindah KTP</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                          <img src=" {{asset('asset/img/Logo-eKTP.png')}}" class="img-fluid" alt="" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center py-1 mt-3">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                              Booking Now
                          </button>
                        </div>
                    </div>
                </div>
          
    
                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Persyaratan Pindah KTP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <ol>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ol>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Cetak Antrian</button>
                        <a href="/layanan/disdukcapil/pengajuan-online" class="btn btn-success">Pengajuan Online</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            {{-- layanan 3 --}}
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="myCard mb-5 mx-auto">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="text-center border-bottom border-1 mb-3 pb-2">KTP Hilang/Rusak</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                          <img src=" {{asset('asset/img/Logo-eKTP.png')}}" class="img-fluid" alt="" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center py-1 mt-3">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                              Booking Now
                          </button>
                        </div>
                    </div>
                </div>
          
    
                <!-- Modal -->
                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Persyaratan Kehilangan KTP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <ol>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ol>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Cetak Antrian</button>
                        <a href="/layanan/disdukcapil/pengajuan-online" class="btn btn-success">Pengajuan Online</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    
             
        </div>
    </div>
@endsection
