<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website yang melayani konsultasi dokter online.">
    <meta name="keywords" content="konsultasi, konsultasi online, dokter, kesehatan">
    <meta name="author" content="Kelompok 4 RPL C 2024/2025">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="MediTalk">
    <meta property="og:description" content="Konsultasi online 24/7 dengan dokter profesional">
    <meta property="og:image" content="{{ asset('images/Logo.svg') }}">
    <meta property="og:url" content="https://MediTalk.com/">

	<link rel="shortcut icon" href="{{ asset('media/logos/Logo.svg') }}" />

  <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
  <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <title>MediTalk | Login</title>
    @vite(['resources/css/style.bundle.css', 'resources/js/scripts.bundle.js', 'resources/plugins/global/plugins.bundle.js', 'resources/plugins/global/plugins.bundle.css'])
</head>
<body id="kt_body" class="app-blank">
  <!--begin::Theme mode setup on page load-->
  <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
  <!--end::Theme mode setup on page load-->
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
      <!--begin::Logo-->
      <a href="{{ ('/') }}" class="d-block d-lg-none mx-auto py-20">
        <img src="{{ asset('images/Logo.svg') }}" alt="Logo MediTalk" class="theme-dark-show h-25px">
        <img src="{{ asset('images/Logo.svg') }}" alt="Logo MediTalk" class="theme-dark-show h-25px">
      </a>
      <!--end::Logo-->
      <!--begin::Aside-->
      <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
        <!--begin::Wrapper-->
        <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
          <!--begin::Header-->
          <div class="d-flex flex-stack py-2">
            <!--begin::Back link-->
            {{-- <div class="me-2">
              <a href="{{ ('/') }}" class="btn btn-icon bg-light rounded-circle">
                <i class="ki-outline ki-black-left fs-2 text-gray-800"></i>
              </a>
            </div> --}}
            <!--end::Back link-->
            <!--begin::Sign Up link-->
            {{-- <div class="m-0">
              <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-up-head-desc">Belum memiliki akun?</span>
              <a href="{{ route('login') }}" class="link-primary fw-bold fs-5" data-kt-translate="sign-up-head-link">Sign In</a>
            </div> --}}
            <!--end::Sign Up link=-->
          </div>
          <!--end::Header-->