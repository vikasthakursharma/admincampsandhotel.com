@extends('backend.layouts.main')
@section('backend-section')
    <div class="main-content">
        <form name="add_banner" method="post" enctype="multipart/form-data" action={{ $url }}>
            @csrf
            <section class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $title }}</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tagline</label>

                                        <input type="text" class="form-control" name="tagline" value="@isset($banner){{ $banner->tagline }}@endisset {{old('tagline')}}">
                                        <span class="text-danger">
                                            @error('tagline')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" class="form-control" name="image[]" multiple>
                                        <span class="text-danger">
                                            @error('image')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </section>
        </form>
    @endsection
