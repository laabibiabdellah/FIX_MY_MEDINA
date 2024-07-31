<x-scope>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">Mes signalements</h6>
                        {{-- <h1 class="mb-5">My Posts</h1> --}}
                    </div>
                    <div class="row g-4 justify-content-center">
                        @if (count($myposts) <= 0)
                            <h2 class='text-center'>NULL</h2>
                        @else
                            @foreach ( $myposts as $post )
                            <div class="col-lg-4 col-md-6 wow fadeInUp mt-3" data-wow-delay="0.1s">
                                <div class="package-item">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="{{asset('storage/'.$post->image)}}" alt="">
                                    </div>
                                    <div class="d-flex border-bottom">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$post->address}}</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                       {{ $post->city->name }}
                                        </small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>
                                        {{$post->prefecture->name}}
                                        </small>
                                    </div>
                                    <div class="text-center p-4">
                                        <h4 class="mb-0">{{$post->title}}</h4>
                                        <p>{{Str::limit($post->description, 50)}}</p>
                                        <div class="d-flex justify-content-center mb-2">
                                           @auth
                                           <a href="{{route('post.show', $post)}}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Details</a>
                                           <a href="{{route('my-posts.edit', $post)}}" class="btn btn-sm btn-primary px-3" style="border-radius: 0">Modifier</a>
                                           <form method="POST" action="{{route('my-posts.destroy', $post)}}">
                                               @csrf
                                               @method('delete')
                                               <button type="submit" class="btn btn-sm btn-primary px-3 delete-btn" style="border-radius: 0 30px 30px 0;">Supprimez</button>
                                           </form>
                                           @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-scope>
