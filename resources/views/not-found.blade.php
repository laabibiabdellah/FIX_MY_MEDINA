<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page not found</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" style="height: 100vh">
        <div class="container text-center d-flex align-items-center justify-content-center" style="height: 100%">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i
                        class="bi bi-exclamation-triangle display-1 text-primary"
                    ></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">
                        We’re sorry, the page you have looked for does not exist
                        in our website! Maybe go to our home page or try to use
                        a search?
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('home')}}"
                        >Go Back To Home</a
                    >
                </div>
            </div>
        </div>
    </div>
</body>
</html>
