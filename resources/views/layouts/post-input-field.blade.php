<div class="post-input-field-container limit-container">
    <form
        action="{{ route('add-post') }}"
        method="post"
        class="post-field-form"
    >
        @csrf
        <input
            type="text"
            name="user-post"
            id="user-post"
            placeholder="What's your advice"
        >
        <button type="submit" class="post-button ripple">Post</button>
    </form>
</div>