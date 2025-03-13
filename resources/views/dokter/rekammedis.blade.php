@extends('layouts.app-dokter')

@section('title', 'MediTalk | Rekam Medis')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card card-flush box-shadow">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                <input type="text" data-kt-ecommerce-product-filter="search"
                                    class="form-control form-control-solid w-250px ps-12" placeholder="Cari Rekam Medis" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="text=start min-w25px">Tanggal</th>
                                        <th class="min-w-200px">Pasien</th>
                                        <th class="min-w-200px">Dokter</th>
                                        <th class="text-end min-w-100px">Anamnesis</th>
                                        <th class="text-end min-w-100px">Hasil Permeriksaan Fisik</th>
                                        <th class="text-end min-w-100px">Diagnosis</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @php $i = 1; @endphp
                                    @foreach ($laborats as $laborat)
                                        <tr>
                                            <td class="text-start">29 Januari 2025</td>
                                            <td class="text-start pe-0">
                                                <span class="fw-bold">Kaedehara Kazuha</span>
                                            </td>
                                            <td class="text-start pe-0">
                                                <span class="fw-bold">Nishimura Riki</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">Sakit tenggorokan</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">Tonisilitis</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="fw-bold">Tonisilitis</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
        </div>
    </div>
    @endsection
