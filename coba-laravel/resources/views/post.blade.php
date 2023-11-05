
@extends('layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. Widya Dwi Indrianti in <a href="/categories/{{ $post->catagory->slug}}"> {{ $post->catagory->name }}</a></p>

    {!! $post->body !!}
</article>

<a href="/blog">Back to Posts</a>
    
@endsection
 
