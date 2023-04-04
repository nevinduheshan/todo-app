
    @extends('layouts.frontend')

    @section('content')
    <div class="mb-2 row">
        <div class="col-md-6">
          <div class="mb-4 card flex-md-row box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="mb-2 d-inline-block text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="mb-auto card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <!-- <img class="flex-auto card-img-right d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap"> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-4 card flex-md-row box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="mb-2 d-inline-block text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="mb-auto card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <!-- <img class="flex-auto card-img-right d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap"> -->
          </div>
        </div>
      </div>
    @endsection

