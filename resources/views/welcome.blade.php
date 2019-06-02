@extends('layouts.main')

@section('content')
<div class="container mx-auto p-4">
  @foreach($launches as $launch)
    @include('partials.card', ['launch' => $launch])
  @endforeach
</div>
@endsection
