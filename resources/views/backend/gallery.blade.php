@extends('backend.layouts.main')
@section('backend-section')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Gallery</h4>
                            </div>
                            <div class="card-body">
                                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                    @foreach ($banners as $banner)
                                        @php
                                            $imageArr = [];
                                            
                                            if ($banner->image != '') {
                                                $imageArr = explode(',', $banner->image);
                                            }
                                        @endphp
                                        @if (!empty($imageArr))
                                            @foreach ($imageArr as $imgSrc)
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <img class="img-responsive thumbnail" src="{{ asset('/storage/images/'. $imgSrc) }}" alt="{{$imgSrc}}">
                                                </div>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
