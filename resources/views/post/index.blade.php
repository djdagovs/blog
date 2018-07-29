@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="margin">
                    <div class="collapsible">
                        @forelse($posts as $post)
                            <article>
                                <h3><a class="text-lead" href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h3>
                                <div class="collapsible-body">{{ $post->body }}</div>
                            </article>
                            @empty
                                @auth
                                    <h4 class="text-center">
                                        ⭐ <a href="{{ route('post.create') }}">Create A Post</a> ⭐
                                    </h4>
                                @endauth
                                @guest
                                    <h4 class="text-center">
                                        Oops! Nothing for the moment. Come back soon!
                                    </h4>
                                @endguest
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
