@extends('layouts.app')

@section('content')

<div class="p-5 mb-4 bg-light rounded-3">

    <h1>KHÁM PHÁ ĐỊA ĐIỂM DU LỊCH</h1>

    <p>
        Website du lịch mini bằng Laravel
    </p>

</div>

<div class="row">

    @foreach($places as $place)

    <div class="col-md-4 mb-4">

        <div class="card">

            <img src="https://picsum.photos/300/200"
                 class="card-img-top">

            <div class="card-body">

                <h5>{{ $place->name }}</h5>

                <p>{{ $place->address }}</p>

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