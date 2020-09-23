<div class="col-4">
    <div class="card mb-4 shadow-sm" style="width: 100%;">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"> {{ $post->sub_title }}</text></svg>
        <div class="card-body">
            <h5 class="card-title">#{{ $post->id }} | {{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <hr>
            <p class="card-text">Category : {{ $post->category_name }}</p>
            <p class="card-text">Author : {{ $post->user_name }}</p>
            <div class="d-flex align-items-center mt-3">
                Publish on {{ \Carbon\Carbon::parse($post->publication_date)->format('d/m/y') }}
            </div>
        </div>
    </div>
</div>
