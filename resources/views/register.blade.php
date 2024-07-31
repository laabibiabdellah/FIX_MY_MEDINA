<x-login-register-scope>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="{{asset('img/logo.png')}}" alt="logo">
                </div>
                <h4>Nouveau ici ?</h4>
                <h6 class="font-weight-light">
                  S'inscrire est facile. Cela ne prend que quelques étapes.</h6>
                <form class="pt-3" method="POST" action="{{route('register.store')}}">
                  @csrf
                  <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username">
                    @error('username')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email">
                    @error('email')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" name="phone_number" class="form-control form-control-lg" placeholder="Telephone">
                    @error('phone_number')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                    @error('password')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="d-flex gap-3">
                      <div>
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="man" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Homme
                        </label>
                      </div>
                      <div>
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="woman">
                        <label class="form-check-label" for="exampleRadios1">
                          Femme
                        </label>
                      </div>
                    </div>
                    @error('gender')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">S'inscrire</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light">
                      Vous avez déjà un compte ? <a href="{{route('login')}}" class="text-primary">Login</a>
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
