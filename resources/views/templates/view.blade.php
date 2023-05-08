@extends('templates.base')

@section('title', $title)

@section('navigation')
   @if(isset($sidebar))
       @include($sidebar)
   @endif
    @if(isset($navbar))
        @include($navbar)
    @endif
@endsection

@section('content')
    @include($page)
@endsection
