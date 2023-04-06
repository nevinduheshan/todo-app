
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
                <h3 class="mb-0">
                  <a class="text-dark" href="#">{{ $post -> title }}</a>
                </h3>
                <div class="mb-1 text-muted">{{ $post -> created_at }}</div>
                <p class="mb-auto card-text">{{ $post -> description }}</a>
                    <a href="{{  route ('posts.show', $post->id) }}">Continue</a>
              </div>

               {{-- <img class="flex-auto card-img-right d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap"> --}}
            </div>
          </div>
        @endforeach


      </div>
    @endsection

