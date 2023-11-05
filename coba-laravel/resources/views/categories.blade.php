@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Catagories</h1>

    @foreach ($categories as $catagory)
    <ul>
        <li>
            <h2><a href="/categories/{{ $catagory->slug }}">{{ $catagory->name }}</a></h2>
        </li>
    </ul>
    @endforeach

@endsection

