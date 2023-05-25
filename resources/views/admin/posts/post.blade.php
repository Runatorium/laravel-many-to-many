@vite(['resources/css/app.css', 'resources/js/app.js'])
<main>
    <div class="container">
        <H1>post Individuale</H1>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <img src="{{ $post->thumb }}" alt="">
        <p>{{ $post->id }}</p>
    </div>
    <div class="row">
        <div class="col-2">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Dashboard
                    </a>
                    <a href="{{ route('admin.posts.index') }}" class="nav-link active mt-2" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Posts
                    </a>
                </li>
            </ul>
        </div>
    </div>


</main>
