@
<x-dashboard-scope title='Users'>
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
                              Usename
                            </th>
                            <th>
                              Prenom
                            </th>
                            <th>
                              Nom
                            </th>
                            <th>
                                telephone
                            </th>
                            <th>
                              Email
                            </th>
                            <th>
                                Adresse
                            </th>
                            <th>
                                Gender
                            </th>
                            <th>
                              Actions
                            </th>
                          </tr>
                        </thead>
                        <tbody>

                            @if (count($users) <= 0)
                            <tr>
                              <td colspan="9" class="text-center">No data</td>
                            </tr>
                            @else

                            @foreach ( $users as $user )
                            <tr>
                              <td class="py-1">
                                {{$loop->iteration}}
                                <img src="{{asset('storage/'. $user->img)}}" alt="image"/>
                              </td>
                              <td>
                                {{$user->username}}
                              </td>
                              <td>
                                {{$user->f_name}}
                              </td>
                              <td>
                                {{$user->l_name}}
                              </td>
                              <td>
                                {{$user->phone_number}}
                              </td>
                              <td>
                                {{$user->email}}
                              </td>
                              <td>
                                {{$user->address == null ? '-':Str::limit($user->address, 20)}}
                              </td>

                              <td>
                                {{$user->gender}}
                              </td>
                              <td>
                                <div class="dropdown">
                                  <i class="ti-angle-down text-black" style="cursor:pointer !important;" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                  <ul class="dropdown-menu">

                                      <form action="{{route('dashboard-users.destroy',$user->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item delete-btn">Delete</button>
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
