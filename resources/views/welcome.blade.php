@extends('layouts.main')

@section('content')
<div class="container mx-auto p-4">
  @foreach([1,2,3] as $launch)
    @include('partials.card', ['launch' => $launch])
  @endforeach
</div>
@endsection
