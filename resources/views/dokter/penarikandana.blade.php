@extends('layouts.app-dokter')

@section('title', 'MediTalk | Penarikan Dana')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar pt-5 pt-lg-10">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                            Penarikan Dana</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <li class="breadcrumb-item text-muted">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card card-stretch mb-3"
                            style="background: linear-gradient(45deg, #8c46c9, #72C5D7); min-height: 90px; height: auto;">
                            <div class="card-body d-flex position-relative align-items-center">
                                <div class="d-flex align-items-start">
                                    <i class="bi bi-wallet text-white fs-3qx ms-n1" style="margin-top: 5px;"></i>
                                    <div class="ms-4">
                                        <div class="text-white fw-medium fs-4">Saldo</div>
                                        <div class="text-white fw-bolder fs-1">Rp300.000</div>
                                    </div>
                                </div>
                                <button data-bs-toggle="modal" data-bs-target="#modal_tarik_dana"
                                    class="btn btn-light-primary position-absolute end-0 me-8">
                                    Tarik Dana
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card card-stretch mb-3"
                            style="background: linear-gradient(45deg, #4669C9, #72C5D7); min-height: 100px; height: auto;">
                            <div class="card-body d-flex position-relative align-items-center">
                                <div class="d-flex align-items-start">
                                    <i class="bi bi-cash-stack text-white fs-3qx ms-n1" style="margin-top: 5px;"></i>
                                    <div class="ms-4">
                                        <div class="text-white fw-medium fs-4">Dana Keluar</div>
                                        <div class="text-white fw-bolder fs-1">Rp300.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-flush h-xl-100">
                            <div class="card-header pt-7">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Riwayat Transaksi</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                        <div class="d-flex align-items-center fw-bold">
                                            <div class="text-muted fs-7 me-2">Cateogry</div>
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="Show All" selected="selected">Semua
                                                </option>
                                                <option value="Dana Masuk">Dana Masuk</option>
                                                <option value="Dana Keluar">Dana Keluar</option>
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-center fw-bold">
                                            <div class="text-muted fs-7 me-2">Status</div>
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                                data-kt-table-widget-5="filter_status">
                                                <option></option>
                                                <option value="Show All" selected="selected">Semua
                                                </option>
                                                <option value="Berhasil">Berhasil</option>
                                                <option value="Ditolak">Ditolak</option>
                                                <option value="Menunggu">Menunggu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-100px">No. Rek</th>
                                            <th class="text-end pe-3 min-w-100px">Transaksi</th>
                                            <th class="text-end pe-3 min-w-100px">Saldo Awal</th>
                                            <th class="text-end pe-3 min-w-100px">Nominal</th>
                                            <th class="text-end pe-3 min-w-100px">Saldo Akhir</th>
                                            <th class="text-end pe-3 min-w-100px">Tanggal & Waktu</th>
                                            <th class="text-end pe-3 min-w-100px">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold text-gray-600">
                                        <tr>
                                            <td class="">56700123456789</td>
                                            <td class="text-end text-dark text-hover-primary">
                                                Dana Masuk
                                            </td>
                                            <td class="text-end">Rp150.000</td>
                                            <td class="text-end">Rp150.000</td>
                                            <td class="text-end">Rp300.000</td>
                                            <td class="text-end">13 Feb 2025 13.10</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-success">Berhasil</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">56700123456789</td>
                                            <td class="text-end text-dark text-hover-primary">
                                                Dana Keluar
                                            </td>
                                            <td class="text-end">Rp150.000</td>
                                            <td class="text-end">Rp150.000</td>
                                            <td class="text-end">Rp300.000</td>
                                            <td class="text-end">13 Feb 2025 13.10</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-danger"
                                                    data-bs-toggle="tooltip" title="Sistem sedang bermasalah">Ditolak
                                                    <span class="ms-2 lh-0">
                                                        <i class="ki-outline ki-information-5 text-danger fs-5"></i>
                                                    </span></a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">56700123456789</td>
                                            <td class="text-end text-dark text-hover-primary">
                                                Dana Keluar
                                            </td>
                                            <td class="text-end">Rp150.000</td>
                                            <td class="text-end">Rp150.000</td>
                                            <td class="text-end">Rp300.000</td>
                                            <td class="text-end">13 Feb 2025 13.10</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">Menunggu</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <div class="modal fade" id="modal_tarik_dana" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <form class="form" action="#" id="modal_tarik_dana_form">
                    <div class="modal-header" id="modal_tarik_dana_header">
                        <h2 class="fw-bold">Tarik Dana</h2>
                        <div id="modal_tarik_dana_close" data-bs-dismiss="modal"
                            class="btn btn-icon btn-sm btn-active-icon-primary">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>
                    </div>
                    <div class="modal-body py-10 px-lg-17">
                        <div class="scroll-y me-n7 pe-7" id="modal_tarik_dana_scroll" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#modal_tarik_dana_header"
                            data-kt-scroll-wrappers="#modal_tarik_dana_scroll" data-kt-scroll-offset="300px">
                            <div class="fv-row mb-7">
                                <label class="required fs-6 fw-semibold mb-2">Masukkan Nominal</label>
                                <input type="number" class="form-control form-control-solid" placeholder=""
                                    name="nominal penarikan" value="" />
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fs-6 fw-semibold mb-2">Nomor Rekening</label>
                                <input type="number" class="form-control form-control-solid" placeholder=""
                                    name="nomor rekening" value="" />
                            </div>
                            <div class="fv-row mb-7">
                                <div class="d-flex flex-stack">
                                    <div class="me-5">
                                        <label class="fs-6 fw-semibold">Simpan Nomor Rekening?</label>
                                    </div>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" name="billing" type="checkbox" value="1"
                                            id="modal_tarik_dana_simpanrek" checked="checked" />
                                        <span class="form-check-label fw-semibold text-muted"
                                            for="modal_tarik_dana_simpanrek">Ya</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" id="modal_tarik_dana_cancel"
                            class="btn btn-light me-3">Batalkan</button>
                        <button type="submit" id="modal_tarik_dana_submit" class="btn btn-primary">
                            <span class="indicator-label">Ajukan Penarikan Dana</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
