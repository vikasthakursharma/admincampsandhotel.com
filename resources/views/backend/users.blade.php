@extends('backend.layouts.main')
@section('backend-section')
<div class="main-content" style="min-height: 530px;">
<section class="section">
<div class="section-body">
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Comments</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
              <li class="media">
                <img alt="image" class="mr-3 rounded-circle" width="70" src="{{ url('backend/img/users/user-1.png')}}">
                <div class="media-body">
                  <div class="media-right">
                    <div class="text-primary">Approved</div>
                  </div>
                  <div class="media-title mb-1">Cara Stevens</div>
                  <div class="text-time">Yesterday</div>

                  <div class="media-links">
                    <a href="#">View</a>
                    <div class="bullet"></div>
                    <a href="#">Edit</a>
                    <div class="bullet"></div>
                    <a href="#" class="text-danger">Trash</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
</div>
</div>
</div>
</section>
@endsection
