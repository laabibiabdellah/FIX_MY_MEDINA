<x-dashboard-scope title='Companies'>
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
                              Nom de la compagnie
                            </th>
                            <th>
                              Email de la compagnie
                            </th>
                            <th>
                              Actions
                            </th>
                          </tr>
                        </thead>
                        <tbody>

                            @if (count($companies) <= 0)
                            <tr>
                              <td colspan="4" class="text-center">No data</td>
                            </tr>
                            @else

                            @foreach ( $companies as $company )
                            <tr>
                              <td class="py-1">
                                {{$loop->iteration}}
                                <img src="{{asset('storage/'. $company->logo)}}" alt="logo"/>
                              </td>
                              <td>
                                {{$company->name}}
                              </td>
                              <td>
                                {{$company->email}}
                              </td>

                              <td>
                                <div class="dropdown">
                                  <i class="ti-angle-down text-black" style="cursor:pointer !important;" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                  <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="{{route('dashboard-companies.edit',$company)}}">Modifer</a></li>
                                    <li>

                                      <form action="{{route('dashboard-companies.destroy',$company)}}" method="POST">
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
