<x-dashboard-scope title='Signalements'>
    <style>

  .dropdown-menu {
      width: fit-content !important;
      height: fit-content!important;
      margin-left: -10px !important;
  }
    </style>

                  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    @if (session()->has('success'))
                      <div class="alert alert-success text-center">{{session()->get('success')}}</div>
                    @endif
                    <div class="table-responsive">
                      <table class="table table-striped p-2">
                        <thead>
                          <tr>
                            <th>
                              Id
                            </th>
                            <th>
                              Titre
                            </th>
                            <th>
                              Description
                            </th>
                            <th>
                              Username
                            </th>
                            <th>
                                Ville
                            </th>
                            <th>
                              Prefecture
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                              Actions
                            </th>
                          </tr>
                        </thead>
                        <tbody>

                            @if (count($posts) <= 0)
                            <tr>
                              <td colspan="8" class="text-center">No data</td>
                            </tr>
                            @else

                            @foreach ( $posts as $post )
                            <tr>
                              <td class="py-1">
                                {{$loop->iteration}}
                                <img src="{{asset('storage/'. $post->image)}}" alt="image"/>
                              </td>
                              <td>
                                {{$post->title}}
                              </td>
                              <td>
                              {{ $post->description == null ? '-':Str::limit($post->description, 20)}}

                              </td>
                              <td>
                                {{$post->user->username}}
                              </td>
                              <td>
                                {{$post->city->name}}
                              </td>
                              <td>
                                {{$post->prefecture->name}}
                              </td>
                              <td>
                                <p class="@if ($post->status == 0)
                                  text-danger
                                  @elseif($post->status == 1)
                                  text-success
                                  @else
                                  text-warning
                                @endif">
                                @if ($post->status == 0)
                                  In process
                                @elseif($post->status == 1)
                                  Done
                                @else
                                  Send
                                @endif
                                </p>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <i class="ti-angle-down text-black" style="cursor:pointer !important;" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                  <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="{{route('dashboard-posts.edit',$post->id)}}">Change status</a></li>
                                     <li><a class="dropdown-item" href="{{route('dashboard-posts.show',$post->id)}}">Show Post</a></li>
                                    <li>

                                      <form action="{{route('dashboard-posts.destroy',$post->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item delete-btn">Supprimer</button>
                                      </form>
                                    </li>
                                  </ul>
                                </div>
                              </td>
                            <tr>
                            @endforeach
                            @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
  </x-dashboard-scope>
