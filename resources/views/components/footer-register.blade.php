          <!--begin::Footer-->
          <div class="m-0">
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Aside-->
      <!--begin::Body-->
      <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat register-page" style="background-image: url('../resources/media/auth/register.jpg')"></div>
      <!--begin::Body-->
    </div>
    <!--end::Authentication - Sign-up-->
  </div>
  <!--end::Root-->
  <!--begin::Javascript-->
  <script>var hostUrl = "../resources/";</script>
  <!--begin::Global Javascript Bundle(mandatory for all pages)-->
  <script src="../resources/js/scripts.bundle.js"></script>
  <!--end::Global Javascript Bundle-->
  <!--begin::Custom Javascript(used for this page only)-->
  {{-- <script src="../resources/js/custom/authentication/sign-up/general.js"></script>
  <script src="../resources/js/custom/authentication/sign-in/general.js"></script> --}}
  <!--end::Custom Javascript-->
  <!--end::Javascript-->
</body>
{{-- <body>
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="alamat" name="alamat" placeholder="Alamat" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br>
        <button type="submit">Register</button>
    </form>
    <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
</body> --}}
</html>
    