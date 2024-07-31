<x-login-register-scope>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
              <div class="col-lg-4 mx-auto">
                @if (session()->has('success'))
                  <div class="alert alert-success text-center">{{session()->get('success')}}</div>
                @endif
                @if (session()->has('error'))
                  <div class="alert alert-danger text-center">{{session()->get('error')}}</div>
                @endif
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                  <div class="brand-logo">
                    <img src="{{asset('img/logo.png')}}" alt="logo">
                  </div>
                  <h4>Bonjour ! Commençons.</h4>
                  <h6 class="font-weight-light">Connectez-vous pour continuer.</h6>
                  <form class="pt-3" method="POST" action="{{route('handle')}}">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-lg" placeholder="Email">
                      @error('email')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-lg"  placeholder="Password">
                      @error('password')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SE CONNECTER</button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input">
                          Rester connecté
                        </label>
                      </div>
                      <a href="#" class="auth-link text-black">
                        Mot de passe oublié ?</a>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                        Vous n'avez pas de compte ? <a href="{{route('register.index')}}" class="text-primary">S'inscrire </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
</x-login-register-scope>
