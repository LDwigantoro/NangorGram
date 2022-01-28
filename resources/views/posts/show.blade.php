@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="p-3">
                            <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle w-100"
                                style="max-width: 40px">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}" class="text-decoration-none text-dark">
                                    {{ $post->user->username }}
                                </a>
                                <a href="#" class="p-2 text-decoration-none">Follow</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}"
                                class="text-decoration-none text-dark">{{ $post->user->username }}
                            </a>
                        </span>
                        {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
