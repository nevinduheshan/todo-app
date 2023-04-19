
    {{-- go inside to the frontend page --}}
    @extends('layouts.frontend')

   {{-- write content inside the frontend content --}}
    @section('content')
    <div class="mb-2 row">
        {{-- for loop (get all posts in one by one ) --}}
        @foreach ($posts as $post)
        <div class="col-md-6">
            <div class="mb-4 card flex-md-row box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <img src="{{ asset('thumbnails/' .$post->thumbnail) }}" alt="thumbnail" class="max-w-sm p-1 bg-white border rounded dark:border-neutral-700 dark:bg-neutral-800">
                <h3 class="mb-0">
                  <a class="text-dark" href="#">{{ $post -> title }}</a>
                </h3>
                {{-- come user model via post model (post model eka hadapu relationship eka nisa)|  can access allthe things under user table--}}
                <div class="mb-1 text-muted">{{ $post->user->name }} {{ $post -> created_at }}</div>
                <p class="mb-auto card-text">{{ $post -> description }}</a>
                    <a href="{{  route ('posts.show', $post->id) }}">Continue</a>
              </div>

               {{-- <img class="flex-auto card-img-right d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap"> --}}
            </div>
          </div>
        @endforeach


      </div>
    @endsection

