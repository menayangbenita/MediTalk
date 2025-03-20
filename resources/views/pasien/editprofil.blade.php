@extends('layouts.app-pasien')

@section('title', 'MediTalk | Profil')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar pt-5 pt-lg-10">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                            Data Diri Pasien</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <li class="breadcrumb-item text-muted">Lengkapi data diri anda
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card mb-5 mb-xl-5 box-shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="fw-bold m-0">Data Pasien</h3>
                    </div>
                    <form class="form" action="#" id="form_data_diri_pasien">
                        <div class="card-body p-9">
                            <div class="row">
                                <label class="col-lg-4 fw-bold text-gray-600">DATA DIRI PASIEN</label>
                            </div>
                            <div class="row mt-lg-5 mt-sm-5">
                                <div class="col-lg-4 mt-2">
                                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="cth: Andini Indana" id="namaLengkap" readonly value="{{ Auth::user()->nama }}" />
                                </div>
                                <div class="col-lg-4 mt-2">
                                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="cth: Malang"
                                        id="tempatLahir" />
                                </div>
                                <div class="col-lg-4 mt-2">
                                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-solid" placeholder="Pilih Tanggal"
                                        id="tanggalLahir"  />
                                </div>
                            </div>
                            <div class="row mt-lg-5 mt-sm-5">
                                <div class="col-lg-4 mt-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-solid"
                                        placeholder="cth: andiniindana@gmail.com" id="email" readonly value="{{ Auth::user()->email }}" />
                                </div>
                                <div class="col-lg-4 mt-2">
                                    <label for="nomorTelepon" class="form-label">Nomor Telepon</label>
                                    <input type="number" class="form-control form-control-solid"
                                        placeholder="cth: 08123456890" id="nomorTelepon" />
                                </div>
                                <div class="col-lg-4 mt-2">
                                    <label for="namaIbuKandung" class="form-label">Nama Ibu
                                        Kandung</label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="cth: Indriana" id="namaIbuKandung" />
                                </div>
                            </div>
                            <div class="row mt-lg-5 mt-sm-5">
                                <div class="col-lg-12 mt-2">
                                    <label for="nomorIdentitas" class="form-label">Nomor
                                        Identitas/KTP</label>
                                    <input type="number" class="form-control form-control-solid"
                                        placeholder="cth: 1234567890123456" id="nomorIdentitas" />
                                </div>
                            </div>
                            <div class="separator separator-dashed my-6"></div>
                            <div class="row">
                                <label class="col-lg-4 fw-bold text-gray-600">ALAMAT IDENTITAS</label>
                            </div>
                            <div class="row mt-lg-5 mt-sm-5">
                                <div class="col-lg-6 mt-2">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control form-control-solid" data-kt-autosize="true" id="alamat"></textarea>
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label for="desaKelurahan" class="form-label">Desa/Kelurahan</label>
                                    <input class="form-control form-control-solid" placeholder="cth: Sukoharjo"
                                        id="tanggalLahir" />
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <input type="kecamatan" class="form-control form-control-solid" placeholder="cth: Sukun"
                                        id="kecamatan" />
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label for="kotaKabupaten" class="form-label">Kota/Kabupaten</label>
                                    <input type="kotaKabupaten" class="form-control form-control-solid"
                                        placeholder="cth: Malang" id="kotaKabupaten" />
                                </div>
                            </div>
                            <div class="separator separator-dashed my-6"></div>
                            <div class="row">
                                <label class="col-lg-4 fw-bold text-gray-600">SOSIAL</label>
                            </div>
                            <div class="row mt-lg-5 mt-sm-5">
                                <div class="col-lg-6 mt-2">
                                    <label for="selectAgama" class="form-label">Agama</label>
                                    <select class="form-select form-select-solid" aria-label="Pilih Agama"
                                        id="selectAgama">
                                        <option disabled selected>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghuchu">Konghucu</option>
                                        <option value="Konghuchu">Kepercayaan Terhadap Tuhan Yang Maha
                                            Esa
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label for="selectStatusPerkawinan" class="form-label">Status
                                        Perkawinan</label>
                                    <select class="form-select form-select-solid" aria-label="Pilih Status Perkawinan"
                                        id="selectStatusPerkawinan">
                                        <option disabled selected>Pilih Status Perkawinan</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-lg-5 mt-sm-5">
                                <div class="col-lg-6 mt-2">
                                    <label for="selectPendidikan" class="form-label">Pendidikan
                                        Terakhir</label>
                                    <select class="form-select form-select-solid" aria-label="Pilih Pendidikan Terakhir"
                                        id="selectPendidikan">
                                        <option disabled selected>Pilih Pendidikan Terakhir</option>
                                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                        <option value="Belum Tamat SD/Sederajat">Belum Tamat
                                            SD/Sederajat
                                        </option>
                                        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                        <option value="Diploma I/II">Diploma I/I I</option>
                                        <option value="Akademi/Diploma III/S. Muda">Akademi/Diploma
                                            III/S.Muda</option>
                                        <option value="Strata II">Strata II</option>
                                        <option value="Strata III">Strata III</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="cth: PNS"
                                        id="pekerjaan" />
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end py-5">
                            <a href="{{ route('profil') }}" class="btn btn-secondary me-2">Kembali</a>
                            <button type="submit" id="form_data_diri_pasien" class="btn btn-primary">
                                <span class="indicator-label">Simpan Perubahan</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
