@extends('layouts.app')

@section('content')

<h1 class="mb-4">
    DANH SÁCH ĐỊA ĐIỂM DU LỊCH
</h1>

<div class="row">

    @foreach($places as $place)

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">

                <img src="https://picsum.photos/300/200"
                     class="card-img-top"
                     alt="image">

                <div class="card-body">

                    <h5 class="card-title">

                        {{ $place->name }}

                    </h5>

                    <p class="card-text">

                        {{ $place->address }}

                    </p>

                    <a href="/places/{{ $place->id }}"
                       class="btn btn-primary">

                        Xem chi tiết

                    </a>

                </div>

            </div>

        </div>

    @endforeach

</div>

@endsection