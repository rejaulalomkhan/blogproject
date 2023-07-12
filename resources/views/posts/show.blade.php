<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Blog</span>Room</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{ route('posts.index') }}" class="nav-item nav-link">Home</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Main Start -->
    <div class="container">
        <h1 class="mb-5">single post</h1>
        <div class="position-relative mb-3">
            <img class="img-fluid w-100" width=100px src="{{ asset($post->image) }}" style="object-fit: cover;">
            <div class="overlay position-relative bg-light">
                <div class="mb-3">
                    <a href="">{{ $post->user->name }}</a>
                    <span class="px-1">/</span>
                    <span>{{ date('d M Y ', strtotime($post->published_at)) }}</span>
                </div>
                <div>
                    <h3 class="mb-3">{{ $post->title }}</h3>
                    <p class="fw-200">{!! @nl2br($post->content) !!}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Main End -->

    <!-- disqus comment Start -->
    <div class="container mt-5">
        <div id="disqus_thread"></div>
        <script>
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://laravel-blog-4blk49e2ma.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
        </script>
    </div>
    <!-- disqus comment End -->

    <script id="dsq-count-scr" src="//laravel-blog-4blk49e2ma.disqus.com/count.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
