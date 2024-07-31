<x-scope>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Modifier mon signalement</h6>

            </div>
            <div class="row g-4">
                <div class="d-flex align-items-center justify-content-center wow fadeInUp" data-wow-delay="0.5s">
                    <form method="POST" action="{{route('my-posts.update',$post)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="{{$post->title}}" name="title" id="title" placeholder="Title">
                                    <label for="title">Titre</label>
                                </div>
                                @error('title')
                                <small class="text-danger">{{$message}}</small>
                              @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="address" value="{{$post->address}}" id="address" placeholder="Address">
                                    <label for="address">Address</label>
                                </div>
                                @error('address')
                                <small class="text-danger">{{$message}}</small>
                              @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" name="image" id="image" placeholder="Image">
                                </div>
                                @error('image')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                                <div class="mt-3">
                                    <img class="img-fluid w-25" src="{{asset('storage/'.$post->image)}}" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleSelectGender">City</label>
                                      <select class="form-control bg-white" name="city_id" id="exampleSelectGender">
                                        <option selected >---</option>
                                        @if (count($cities)<=0)
                                        <option disabled>Null</option>
                                        @else
                                            @foreach ( $cities as $city )
                                            <option value="{{$city->id}}" {{$post->city_id == $city->id ? 'selected' : ''}}>{{$city->name}}</option>
                                            @endforeach
                                        @endif
                                      </select>
                                    </div>
                                    @error('city_id')
                                    <small class="text-danger">{{$message}}</small>
                                  @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleSelectGender">Prefecture</label>
                                      <select class="form-control bg-white" name="prefecture_id" id="exampleSelectGender">
                                        <option selected disabled>---</option>
                                        @if (count($prefectures)<=0)
                                        <option disabled>Null</option>
                                        @else
                                            @foreach ( $prefectures as $prefecture )
                                            <option value="{{$prefecture->id}}" {{$post->prefecture_id == $prefecture->id ? 'selected' : ''}}>{{$prefecture->name}}</option>
                                            @endforeach
                                        @endif
                                      </select>
                                    </div>
                                    @error('prefecture_id')
                                    <small class="text-danger">{{$message}}</small>
                                  @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleSelectGender">Companies</label>
                                      <select class="form-control bg-white" name="company_id" id="exampleSelectGender">
                                        <option  disabled>---</option>
                                        @if (count($companies)<=0)
                                        <option disabled>Null</option>
                                        @else
                                            @foreach ( $companies as $company )
                                            <option value="{{$company->id}}" {{$post->company_id == $company->id ? 'selected' : ''}}>{{$company->name}}</option>
                                            @endforeach
                                        @endif
                                      </select>
                                    </div>
                                    @error('company_id')
                                    <small class="text-danger">{{$message}}</small>
                                  @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="entrez une description" name="description" id="description" style="height: 100px">{{$post->description}}</textarea>
                                    <label for="description">Description</label>
                                    @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                  @enderror
                                </div>
                                <input class="lat" type="hidden" name="lat" >
                                <input class="lng" type="hidden" name="lng" >
                                <div class="w-100 my-5 d-flex align-items-center justify-content-center">
                                  <div id="map"></div>
                               </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-scope>
