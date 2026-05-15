@extends('layouts.app')

@section('content')

<h1>
    {{ $place->name }}
</h1>

<img src="https://picsum.photos/800/400"
     class="img-fluid mb-4">

<h4>
    Địa chỉ
</h4>

<p>
    {{ $place->address }}
</p>

<h4>
    Mô tả
</h4>

<p>
    {{ $place->description }}
</p>

<a href="/places"
   class="btn btn-secondary">

    Quay lại

</a>

@endsection