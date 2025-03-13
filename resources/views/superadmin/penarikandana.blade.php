@extends('layouts.app')

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
                    <div class="col-xl-12">
                        <div class="card card-flush h-xl-100">
                            <div class="card-header pt-7">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Riwayat Transaksi</span>
                                </h3>
                            </div>
                            <div class="card-body">
                                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-50px">Tanggal & Waktu</th>
                                            <th class="min-w-50px">No. rek</th>
                                            <th class="text-start min-w-150px">Nama Dokter</th>
                                            <th class="text-start min-w-50px">Nominal Penarikan</th>
                                            <th class="text-end min-w-50px">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold text-gray-600">
                                        <tr>
                                            <td class=""> 08 Februari 2025 15:31:22</td>
                                            <td class="text-start text-dark">
                                                56700123456789
                                            </td>
                                            </td>
                                            <td class="text-start">Dr. Ghina Balqis Rasyidah, Sp.PD-KGEH</td>
                                            <td class="text-start">Rp150.000</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-danger">Tolak</span>
                                                <span class="badge py-3 px-4 fs-7 badge-light-success me-2">Terima</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=""> 06 Februari 2025 12:39:12</td>
                                            <td class="text-start text-dark">
                                                56700123456789
                                            </td>
                                            </td>
                                            <td class="text-start">Dr. Ghina Balqis Rasyidah, Sp.PD-KGEH</td>
                                            <td class="text-start">Rp350.000</td>
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light">Selesai</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
