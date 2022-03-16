@extends('backend.layouts.main')

@section('backend-section')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card author-box">
              <div class="card-body">
                <div class="author-box-center">

                  <div class="clearfix"></div>
                  <div class="author-box-name">
                  <a href="#">{{ ucfirst(session('admin_name'))}}</a>
                  </div>
                  <div class="author-box-job">Admin</div>
                </div>
                <div class="text-center">
                  <div class="author-box-description">

                    <p class="text-warning">
                      This is admin profile page here you can change only your name and email.
                    </p>
                  </div>

                </div>
              </div>
            </div>

          </div>
          <div class="col-12 col-md-12 col-lg-8">
            <div class="card">
              <div class="padding-20">
                <ul class="nav nav-tabs" id="myTab2" role="tablist">

                  <li class="nav-item">
                    <a class="nav-link active" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                      aria-selected="true">Setting</a>
                  </li>
                </ul>
                <div class="tab-content tab-bordered" id="myTab3Content">

                  <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                    <form method="post" class="needs-validation">
                      <div class="card-header">
                        <h4>Edit Profile</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Name</label>
                          <input type="text" class="form-control" value="{{ session('admin_name')}}">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Last Name</label>
                          <input type="email" class="form-control" value="{{ session('admin_email')}}" >
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="card-footer text-right">
                        <button class="btn btn-primary">Save Changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
