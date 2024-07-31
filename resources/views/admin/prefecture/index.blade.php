<x-dashboard-scope title='Prefectures'>
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
                              Prefecture
                            </th>
                            <th>
                              Ville
                            </th>
                            <th>
                              Actions
                            </th>
                          </tr>
                        </thead>
                        <tbody>

                            @if (count($prefectures) <= 0)
                            <tr>
                              <td colspan="4" class="text-center">No data</td>
                            </tr>
                            @else

                            @foreach ( $prefectures as $prefecture )
                            <tr>
                              <td class="py-1">
                                {{$loop->iteration}}
                              </td>
                              <td>
                                {{$prefecture->name}}
                              </td>
                              <td>
                                {{$prefecture->city->name}}
                              </td>

                              <td>
                                <div class="dropdown">
                                  <i class="ti-angle-down text-black" style="cursor:pointer !important;" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                  <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="{{route('dashboard-prefectures.update',$prefecture)}}">Modifier</a></li>
                                    <li>

                                      <form action="{{route('dashboard-prefectures.destroy',$prefecture)}}" method="POST">
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
