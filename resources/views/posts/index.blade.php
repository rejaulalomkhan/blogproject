<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .custom-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <h1>Posts</h1>
            @foreach($posts as $post)
            <div class="col-md-6 py-3">
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    <div class="position-relative">
                        <div class="col-12 w-100">
                            <img class="img-fluid custom-image" src="{{ asset($post->image) }}" style="object-fit: cover;">
                        </div>
                        <div class="overlay position-relative bg-light">
                            <div class="mb-2" style="font-size: 13px;">
                                <a href="">{{ $post->user->name }}</a>
                                <span class="px-1">/</span>
                                <span>{{ date('d M Y ', strtotime($post->published_at)) }}</span>
                            </div>
                            <a class="h4 m-0" href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                            <p class="mt-3">{{ $post->excerpt }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
