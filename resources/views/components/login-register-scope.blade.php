<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
  <style>
    .back-to-home{
      background-color: #86b817;
      padding: 10px;
      border-radius: 50%;
      cursor: pointer;
      position: fixed;
      top: 25px;
      left: 25px;
      a{
        text-decoration: none;
        i{
        color: #f5f5f5;
        }
      }
    }
  </style>
</head>

<body>
  <div class="back-to-home d-flex align-items-center justify-content-center">
    <a href="{{route('home')}}">
      <i class="ti-angle-left text-white"></i>
    </a>
  </div>
  {{$slot}}
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{'admin/js/template.js'}}"></script>
  <script src="{{'admin/js/todolist.js'}}"></script>
  <!-- endinject -->
  <script src="{{asset('js/delete-confirmation.js')}}"></script>
</body>

</html>
