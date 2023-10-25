@extends('dashboard.layouts.main')


@section('container')

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <article>
                    <h2>{{ $post->title }}</h2>
                    
                    <a href="/dashboard/posts" class="btn btn-dark fs-6 icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-arrow-left"></i> Back to My Posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning fs-6 icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-pencil"></i> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger fs-6 icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" onclick="return confirm('Are you sure?');"><i class="bi bi-trash3"></i> Delete</button>
                    </form>

                    @if ($post->image)
                        <div class="div" style="max-height: 400px; overflow: hidden">
                            <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    @endif

                    <article class="my-3" >
                        {!! $post->body !!}
                    </article>
                    <a href="/blog" class="d-block mt-3">Back to Blog</a>
                </article>
            </div>
        </div>
    </div>
@endsection

