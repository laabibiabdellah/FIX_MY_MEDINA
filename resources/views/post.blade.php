<x-scope>
    <style>
        .btn-cat{
            background: none;
            border-radius: 30px;
            padding: 5px 20px;
            border: 1px solid var(--primary);
            color: var(--primary);
            cursor: pointer;
        }
        .btn-cat:hover{
            background-color: var(--primary);
            color: var(--light);
        }
    </style>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">Signalements</h6>
                        {{-- <h1 class="mb-5">Decouvrez les signalements</h1> --}}
                    </div>
                    <div class="post-btns text-center my-4">
                        @if (count($cities) <= 0)
                            <h2 class='text-center'>NULL</h2>
                        @else
                           <button class="btn-cat" data-cityId="all" class="btn btn-primary me-2">Tous</button>
                           @foreach ($cities as $city)
                               <button class="btn-cat" data-cityId="p-{{$city->id}}" class="btn btn-primary me-2">{{$city->name}}</button>
                           @endforeach
                        @endif
                    </div>
                    <div class="row g-4 justify-content-center post-content">
                        @if (count($posts) <= 0)
                            <h2 class='text-center'>NULL</h2>
                        @else
                            @foreach ( $posts as $post )
                            <div class="all {{'p-'.$post->city_id}} col-lg-4 col-md-6 wow fadeInUp mt-3" data-wow-delay="0.1s">
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
                                        <div class="d-flex justify-content-center mb-2" >
                                            <a href="{{route('post.show', $post)}}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Read More</a>
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

<script src="{{asset('js/actions.js')}}"></script>
