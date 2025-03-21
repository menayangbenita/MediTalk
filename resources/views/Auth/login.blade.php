<x-navbarlogin></x-navbarlogin>
    <!--begin::Body-->
              <div class="py-20">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="{{ route('dashboard') }}" action="{{ route('login') }}" method="POST">
                @csrf
                  <!--begin::Heading-->
                  <div class="text-start mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Masuk</h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Selamat datang kembali di MediTalk!</div>
                        <!--end::Link-->
                    </div>
                  <!--end::Heading-->
                  <!--begin::Input group-->
                  <div class="fv-row mb-7">
                    <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Masukkan email Anda" name="email" autocomplete="off" required data-kt-translate="sign-up-input-email" />
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="fv-row mb-7" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                      <!--begin::Input wrapper-->
                      <div class="position-relative mb-3">
                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Masukkan kata sandi" name="password" autocomplete="off" data-kt-translate="sign-up-input-password" />
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                          <i class="ki-outline ki-eye-slash fs-2"></i>
                          <i class="ki-outline ki-eye fs-2 d-none"></i>
                        </span>
                      </div>
                      <!--end::Input wrapper-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Input group=-->
                  <!--begin::Actions-->
                  <div class="d-flex flex-stack">
                    <!--begin::Submit-->
                    <button id="kt_sign_in_submit" class="btn btn-primary w-100" type="submit" data-kt-translate="sign-in-submit">
                      <!--begin::Indicator label-->
                      <span class="indicator-label">Masuk</span>
                      <!--end::Indicator label-->
                      <!--begin::Indicator progress-->
                      <span class="indicator-progress">Harap Tunggu ...
                      <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      <!--end::Indicator progress-->
                    </button>
                    <!--end::Submit-->
                    <!--begin::Social-->
                    {{-- <div class="d-flex align-items-center">
                      <div class="text-gray-400 fw-semibold fs-6 me-6">Or</div>
                    </div> --}}
                    <!--end::Social-->
                  </div>
                  <!--end::Actions-->
                </form>
                <!--end::Form-->
                <div class="mt-10 text-center">
                  <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-up-head-desc">Belum memiliki akun?</span>
                  <a href="{{ route('register') }}" class="link-primary fw-bold fs-5" data-kt-translate="sign-up-head-link">Buat sekarang!</a>
                </div>
              </div>
              <!--end::Body-->

    <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
    <x-footerregister></x-footerregister>
