@extends('layouts.app-dokter')

@section('title', 'MediTalk | Konsultasi')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar pt-5 pt-lg-10">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                            Konsultasi</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <li class="breadcrumb-item text-muted">
                                <a href="./beranda.html" class="text-muted text-hover-primary">Beranda</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="./konsultasi.html" class="text-muted text-hover-primary">Konsultasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0 order-1 order-lg-0">
                        <div class="card card-flush">
                            <div class="card-header pt-7" id="kt_chat_contacts_header">
                                <form class="w-100 position-relative" autocomplete="off">
                                    <i
                                        class="ki-outline ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>
                                    <input type="text" class="form-control form-control-solid px-13" name="cari"
                                        value="" placeholder="Cari..." />
                                </form>
                            </div>
                            <div class="card-body pt-5" id="kt_chat_contacts_body">
                                <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true"
                                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                    data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header"
                                    data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body"
                                    data-kt-scroll-offset="5px">
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px symbol-circle">
                                                <img alt="Pic" src="{{ asset('images/user.jpg') }}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Jake</a>
                                                <div class="fw-semibold text-muted last-chat">Lorem
                                                    ipsum dolor
                                                    sit
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end ms-2">
                                            <span class="text-muted fs-7 mb-1">04.19</span>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed d-none"></div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px symbol-circle">
                                                <img alt="Pic" src="{{ asset('images/user.jpg') }}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ekaj</a>
                                                <div class="fw-semibold text-muted last-chat">Lorem
                                                    ipsum dolor
                                                    sit amet Lorem ipsum dolor sit amet Lorem ipsum
                                                    dolor sit amet Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end ms-2">
                                            <span class="text-muted fs-7 mb-1">2/2/2025</span>
                                            <span class="badge badge-sm badge-circle badge-light-success">6</span>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed d-none"></div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px symbol-circle">
                                                <img alt="Pic" src="{{ asset('images/user.jpg') }}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ace</a>
                                                <div class="fw-semibold text-muted last-chat">Lorem
                                                    ipsum dolor
                                                    sit amet Lorem ipsum dolor sit amet Lorem ipsum
                                                    dolor sit amet Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end ms-2">
                                            <span class="text-muted fs-7 mb-1">1/2/2025</span>
                                            <span class="badge badge-sm badge-circle badge-light-success">6</span>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed d-none"></div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px symbol-circle">
                                                <img alt="Pic" src="{{ asset('images/user.jpg') }}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Eca</a>
                                                <div class="fw-semibold text-muted last-chat">Lorem
                                                    ipsum dolor
                                                    sit amet Lorem ipsum dolor sit amet Lorem ipsum
                                                    dolor sit amet Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end ms-2">
                                            <span class="text-muted fs-7 mb-1">1/2/2025</span>
                                            <span class="badge badge-sm badge-circle badge-light-success">6</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10 order-0 order-lg-1">
                        <div class="card" id="kt_chat_messenger">
                            <div class="card-header" id="kt_chat_messenger_header">
                                <div class="card-title">
                                    <div class="d-flex justify-content-center flex-column me-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#"
                                                class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Jake</a>
                                            <span class="fs-7 fw-semibold text-muted mb-2 ms-2 lh-1">No. RM:
                                                123456</span>
                                        </div>
                                        <div class="mb-0 lh-1">
                                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                            <span class="fs-7 fw-semibold text-muted">Online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="kt_chat_messenger_body">
                                <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages"
                                    data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                    data-kt-scroll-max-height="auto"
                                    data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                                    data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
                                    data-kt-scroll-offset="5px">
                                    <div class="d-flex justify-content-start mb-10">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('images/user.jpg') }}" />
                                                </div>
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Jake</a>
                                                    <span class="text-muted fs-7 mb-1">04.19</span>
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                data-kt-element="message-text">Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit. Ut et massa mi.
                                                Aliquam in hendrerit urna.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-10">
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-3">
                                                    <span class="text-muted fs-7 mb-1">04.36</span>
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">{{ Auth::user()->nama }}</a>
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('storage/' . Auth::user()->foto) }}" />
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                data-kt-element="message-text">Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit. Ut et massa mi.
                                                Aliquam in hendrerit urna.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-3">
                                                    <span class="text-muted fs-7 mb-1">13.49</span>
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">{{ Auth::user()->nama }}</a>
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('storage/' . Auth::user()->foto) }}" />
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                                data-kt-element="message-text"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic"
                                                        src="{{ asset('images/user.jpg') }}" />
                                                </div>
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Jake</a>
                                                    <span class="text-muted fs-7 mb-1">13.49</span>
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                data-kt-element="message-text">Right before vacation
                                                season we have the next Big Deal for you.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                <textarea class="form-control mb-3" rows="1" data-kt-element="input" placeholder="Ketik pesan..."></textarea>
                                <div class="d-flex flex-stack">
                                    <div class="d-flex align-items-center me-2">
                                        <input type="file" style="display:none;" id="inputFile" />
                                        <a href="javascript:document.getElementById('inputFile').click(); ">
                                            <div class="btn btn-sm btn-icon btn-active-light-primary me-1">
                                                <i class="ki-outline ki-paper-clip fs-3"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <button class="btn btn-primary px-4" type="button" data-kt-element="send">Kirim
                                        <i class="bi bi-send fs-5 ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
