@extends('layout')

@section('content') 
  <main id="main" data-aos="fade-up">
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Posts</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
          </ol>
        </div>

      </div>
    </section>
    <section class="inner-page">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row">
              @foreach ($posts as $key => $post)
                <div class="col-md-6 col-lg-4">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at }}</h6>
                      <p class="card-text">{{  post_excerpt($post->excerpt) }}</p>
                      <a href="{{ route('posts.by_slug', ['slug' => $post->slug ]) }}" class="card-link">Baca...</a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
            {{-- @if ($posts->lastPage() > 1)
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        {{ $posts->links() }}
                    </ul>
                </nav>
            @endif --}}
           {{--  @if ($posts->lastPage() > 1)
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            @endif --}}
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection


