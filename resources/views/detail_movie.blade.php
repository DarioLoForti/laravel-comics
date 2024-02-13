@extends('layout.app')

@section('content')
    <div class="bg-light">
        <div class="jumbo">
        </div>
        <div class="blue-bar">

        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12"></div>
                <div class="col-6">
                    <h3 class="py-3">{{ $movie['title'] }}</h3>
                    <div class="green d-flex">
                        <p><strong>U.S. Price:</strong> </p>
                    </div>
                    <p class="py-3">{{ $movie['overview'] }}</p>
                </div>
                <div class="col-6">
                    <img class="mb-5 img-details" src="{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
                </div>
            </div>
        </div>
        <div class="bg-grey py-3">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3>Talent</h3>

                    </div>
                    <div class="col-6">
                        <h3>Specs</h3>
                        <div class="col-12 d-flex py-2">
                            <div class="left">
                                <p>Series:</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                        <div class="col-12 d-flex py-2">
                            <div class="left">
                                <p>U.S. Price:</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                        <div class="col-12 d-flex py-2">
                            <div class="left">
                                <p>On sale Date:</p>
                            </div>
                            <div class="right">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
