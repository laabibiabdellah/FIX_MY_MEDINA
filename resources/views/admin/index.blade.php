<x-dashboard-scope title='Dashboard'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div>

      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Posts</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$postsCount}}</h3>
                <i class="fa-regular fa-image text-muted mb-0 mb-md-3 mb-xl-0" style="font-size: 30px"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Users</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$usersCount}}</h3>
                <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Posts details</p>
              <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
              <canvas id="myChart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card border-bottom-0">
            <div class="card-body pb-0">
              <p class="card-title">Purchases</p>
              <p class="text-muted font-weight-light">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review</p>
              <div class="d-flex flex-wrap mb-5">
                <div class="me-5 mt-3">
                  <p class="text-muted">Status</p>
                  <h3>362</h3>
                </div>
                <div class="me-5 mt-3">
                  <p class="text-muted">New users</p>
                  <h3>187</h3>
                </div>
                <div class="me-5 mt-3">
                  <p class="text-muted">Chats</p>
                  <h3>524</h3>
                </div>
                <div class="mt-3">
                  <p class="text-muted">Feedbacks</p>
                  <h3>509</h3>
                </div>
              </div>
            </div>
            <canvas id="order-chart" class="w-100"></canvas>
          </div>
        </div>
      </div>
    </div>
  </x-dashboard-scope>

  <script>
    const _dateOfposts = {!! json_encode($dateOfposts) !!};
    const _arrayPosts = {!! json_encode($arrayPosts) !!};
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: _dateOfposts,
        datasets: [{
          label: '# of Votes',
          data: _arrayPosts,
          borderWidth: 1,
          borderColor: '#4aba8f',
          backgroundColor: '#8cdebe',
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
