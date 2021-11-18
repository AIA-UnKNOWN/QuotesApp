<div class="posts-container limit-container">

    @foreach ($posts as $post)
    <div class="post-container">
        <div class="post">
            <a href="{{ route('edit-post', $post->id) }}" class="edit-post-button ripple">
                <i class="fas fa-pen"></i>
            </a>
            <form action="{{ route('delete-post', $post->id) }}" method="post">
                @csrf
                <button type="submit" class="delete-post-button ripple">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
            <p>{{ $post->quote }}</p>
        </div>
        <div class="post-details">
            <label>Author</label>
            <a class="author">{{ $post->author ?? 'N/A' }}</a>
        </div>
    </div>
    @endforeach

</div>