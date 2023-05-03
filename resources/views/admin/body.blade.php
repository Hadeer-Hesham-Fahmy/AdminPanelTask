<div class="main-panel">
    <div class="content-wrapper">
      
      <div class="row">
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card" style="height: 8rem;">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $total_employee }}</h3>

                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Employees</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card" style="height: 8rem;">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $total_company }}</h3>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Companies</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card" style="height: 8rem;">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{ $total_user->count() }}</h3>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-danger">
                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Users</h6>
            </div>
          </div>
        </div>

      </div>







      <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Users</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </th>
                      <th> User Name </th>
                      <th> User Email </th>
                      <th> User Role </th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                        @foreach ($total_user as $user)
                          
                        <td>
                          <span class="pl-2">{{ $user->name }}</span>
                        </td>
                        <td> {{ $user->email }} </td>
                        <td> {!! $user->usertype=1 ? "Administrator" : ""!!} </td>
                      
                      </tr>
                      @endforeach
                    
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- !-- content-wrapper ends --> --}}
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>