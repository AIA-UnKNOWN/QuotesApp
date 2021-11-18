@extends('layouts.main')

@section('app')
<div class="app">

    <div class="title-bar">Quotes</div>

    @include('layouts.post-input-field')

    @include('layouts.posts')

</div>
@endsection