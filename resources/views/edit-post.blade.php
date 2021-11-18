@extends('layouts.main')

@section('app')
<div class="title-bar">Quotes</div>

<div class="edit-post-container">
    
    <form
        action="{{ route('update-post', $quote->id) }}"
        method="post"
        class="edit-post-form"
    >
        @csrf
        <textarea type="text" name="updated-post" id="updated-post-input">
            {{ $quote->quote }}
        </textarea>
        <div class="edit-actions-container">
            <button type="submit" class="update-post-button ripple">Update</button>
        </div>
    </form>

</div>
@endsection