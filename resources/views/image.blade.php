@extends('layouts.app')

@section('content')


    <!--Main layout-->
    <div class="container pb-5 page-content">
        <!--Section: Cards-->
        <form action="{{ url('upload-images') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header bg-success">
                    <h5 class="text-white"> Laravel 6 Multiple Images Upload </h5>
                </div>
                <div class="card-body">

                    <!-- print success message after file upload  -->
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="">Multiple File Select</label>
                        <input required type="file" class="form-control" name="images[]" multiple>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success"> Upload Images </button>
                </div>
            </div>
        </form>
            <!--Section: Cards-->

        </div>
    <!--Main layout-->

    <!--/.Footer-->
@endsection
@section('footer_scripts')

    @include('scripts.datetime')

@endsection