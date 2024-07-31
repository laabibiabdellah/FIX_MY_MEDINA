<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}">
<x-scope title='Settings'>
  <style>
    .settings>.card{
      box-shadow: none !important;
      border: none !important;
    }
  </style>

  <div>
    <div class="col-12 grid-margin stretch-card settings">
        <div class="card mt-5 mb-3">
          <div class="card-body">
            <h1 class="card-title text-center font-bold">User settings</h1>
            <form class="forms-sample" method="POST" @if ($user)
              action="{{route('settings.update', $user->id)}}"
            @else
              action="{{route('home')}}"
            @endif>
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="exampleInputName1">Username</label>
                <input type="text" class="form-control" name="username"
                @if ($user)
                  value="{{$user->username}}"

                @endif
                id="exampleInputName1" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">First name</label>
                <input type="text" class="form-control" name="f_name"
                @if ($user)
                  value="{{$user->f_name}}"

                @endif
                 id="exampleInputName1" placeholder="First name">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Last name</label>
                <input type="text" class="form-control" name="l_name"
                @if ($user)
                  value="{{$user->l_name}}"

                @endif
                 id="exampleInputName1" placeholder="Last name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" name="email"
                @if ($user)
                  value="{{$user->email}}"

                @endif
                 disabled id="exampleInputEmail3" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" class="form-control" name="password"
                @if ($user)
                  value="{{$user->password}}"

                @endif
                 disabled id="exampleInputPassword4" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Address</label>
                <input type="text" class="form-control" name="address"
                @if ($user)
                  value="{{$user->address}}"

                @endif
                 id="exampleInputPassword4" placeholder="Address">
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Gender</label>
                <h3 class="text-muted">
                  @if ($user)
                  {{$user->gender}}
                  @endif
                  </h3>
                  <select class="form-control bg-white" name="gender" id="exampleSelectGender">
                    <option value="man">Man</option>
                    <option value="woman">Woman</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">Phone number</label>
                  <input type="text" class="form-control" name="phone_number"
                  @if ($user)
                  value="{{$user->phone_number}}"
                  @endif
                   disabled id="exampleInputPassword4" placeholder="Pohne number">
                </div>
              <div class="form-group">
                <label>Image</label>
                <div class="input-group col-xs-12">
                  <input type="file" name="img" class="form-control file-upload-info bg-white" placeholder="Image">
                </div>
                <div class="my-2">
                  @if ($user)
                  @if ($user->img)
                    <img class="w-25" src="{{asset('storage/'. $user->img)}}" alt="image">
                  @else
                    <h3 class="text-warning">No image</h3>
                  @endif
                  @endif


                </div>
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <a class="btn btn-light text-white" href="{{route('home')}}">Cancel</a>
            </form>
          </div>
        </div>
      </div>
</div>
</x-scope>
