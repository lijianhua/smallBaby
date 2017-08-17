@extends('themes.small_baby.layouts.default')
@section('content')
    @include('themes.small_baby.partials.posts-list', $posts)
@endsection
