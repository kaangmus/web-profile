@extends('layout')
@section('content') 
  <main id="main" data-aos="fade-up">
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>{{ $post->title }}</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
             <li><a href="{{ route('posts.index') }}">Posts</a></li>
          </ol>
        </div>

      </div>
    </section>
    <section class="inner-page">
      <div class="container">
        {!! $post->body !!}
      </div>
    </section>
  </main>
@endsection


