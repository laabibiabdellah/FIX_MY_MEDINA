<x-dashboard-scope title='details du signalment'>
    <div class="container">
       <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
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
             <a href="#" class="btn btn-primary">Revenir</a>
           </div>
           <div class="card-footer text-muted">
             <h4>{{$post->created_at->diffForHumans()}}</h4>
           </div>
         </div>
   </div>
</x-dashboard-scope>
