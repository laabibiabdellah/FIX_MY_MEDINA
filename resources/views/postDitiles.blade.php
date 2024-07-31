<x-scope>
    <style>
        .card>.card-header,.card>.card-footer{
            background-color: var(--primary) !important;
            h4{
                color: var(--light) !important;
            }
        }
        .card-title>img{
            border: 5px solid var(--primary) !important;
            border-radius: 15px !important;
        }
    </style>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">details</h6>
                <h1 class="mb-5">{{$post->title}}</h1>
            </div>

            <div class="card text-center">
                <div class="card-header">
                  <h4>{{$post->city->name}}, {{$post->prefecture->name}}</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title">
                        <img src="{{asset('storage/'.$post->image)}}" width="50%">
                  </h5>
                  <p class="card-text">{{$post->description}}</p>
                 <div class="w-100 my-5 not-clickable d-flex align-items-center justify-content-center">
                    <div id="map"></div>
                 </div>
                </div>
                <div class="card-footer text-muted">
                  <h4>{{$post->created_at->diffForHumans()}}</h4>
                </div>
              </div>
        </div>
    </div>
</x-scope>
