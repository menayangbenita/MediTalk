@extends('layouts.app-pasien')

@section('title', 'MediTalk | Dashboard Pasien')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar pt-5 pt-lg-10">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                            Beranda</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <li class="breadcrumb-item text-muted">
                                <span class="text-muted">Selamat Datang, {{ Auth::user()->nama }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card mb-5">
                    <div class="card-body p-8 pb-0">
                        <div class="d-flex flex-wrap flex-sm-nowrap">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="#"
                                                class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ Auth::user()->nama }}</a>
                                        </div>
                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                            <div class="d-flex align-items-center text-gray-400 me-5 mb-2">
                                                No. RM: {{ Auth::user()->rekammedis }}
                                            </div>
                                            <div class="d-flex align-items-center text-gray-400 me-5 mb-2">
                                                {{ Auth::user()->email }}
                                            </div>
                                            <div class="d-flex align-items-center text-gray-400 mb-2">
                                                23th 11bln 9hr
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex my-4">
                                        <a href="{{ route('profil') }}" class="btn btn-sm btn-primary me-3">Lihat Profil
                                            Saya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-6">
                        <div class="card card-xl-stretch mb-xl-1"
                            style="background: linear-gradient(45deg, #8c46c9, #72C5D7); min-height: 160px;
                        height: auto;">
                            <div class="card-body d-flex flex-column position-relative">
                                <a href="./konsultasi.html"
                                    class="btn btn-outline btn-outline-dashed btn-outline-secondary position-absolute bottom-0 end-0 m-5">
                                    Mulai Berkonsultasi
                                </a>
                                <i class="ki-solid ki-messages text-white fs-3qx ms-n1"></i>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Tidak Ada Konsultasi
                                </div>
                                <div class="fw-semibold text-white">Anda sedang tidak berkonsultasi dengan dokter.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card card-xl-stretch mb-xl-1"
                            style="background: linear-gradient(45deg, #4669C9, #72C5D7); min-height: 160px;
                        height: auto;">
                            <div class="card-body d-flex flex-column position-relative">
                                <a href="./konsultasi.html"
                                    class="btn btn-outline btn-outline-dashed btn-outline-secondary position-absolute bottom-0 end-0 m-5">
                                    Kembali ke Chat
                                </a>
                                <i class="ki-solid ki-messages text-white fs-3qx ms-n1"></i>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Dalam Sesi Konsultasi
                                </div>
                                <div class="fw-semibold text-white">dr. Kaeya Alberich, Sp.A (K)</div>
                                <div class="fw-semibold text-white">09.15 - 10.15</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card card-xl-stretch mb-xl-1"
                            style="background: linear-gradient(45deg, #2b9c63, #72C5D7); min-height: 160px;
                        height: auto;">
                            <div class="card-body d-flex flex-column position-relative">
                                <a href="./konsultasi.html"
                                    class="btn btn-outline btn-outline-dashed btn-outline-secondary position-absolute bottom-0 end-0 m-5">
                                    Lihat Riwayat Konsultasi
                                </a>
                                <i class="ki-solid ki-messages text-white fs-3qx ms-n1"></i>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Sesi Konsultasi Berakhir
                                </div>
                                <div class="fw-semibold text-white">dr. Kaeya Alberich, Sp.A (K)</div>
                                <div class="fw-semibold text-white">7 Feb 2025 09.15 - 10.15</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card card-xl-stretch mb-5">
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bold text-dark">Rekam Medis Terbaru</span>
                                </h3>
                            </div>
                            <div class="card-body pt-3">
                                <div class="d-flex align-items-sm-center mb-7">
                                    <i class="bi bi-file-earmark-medical fs-3x me-4"></i>
                                    <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                                        <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                            <div class="text-gray-800 fw-bold text-hover-primary fs-6">Jake</div>
                                            <span class="text-muted fw-semibold d-block pt-1">6 Feb 2025</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="./rekam_medis.html" class="btn btn-primary btn-sm border-0">
                                                Buka
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-sm-center mb-7">
                                    <i class="bi bi-file-earmark-medical fs-3x me-4"></i>
                                    <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                                        <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                            <div class="text-gray-800 fw-bold text-hover-primary fs-6">Jake</div>
                                            <span class="text-muted fw-semibold d-block pt-1">6 Feb 2025</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="./rekam_medis.html" class="btn btn-primary btn-sm border-0">
                                                Buka
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
