<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
</a>
<hr>
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
        <a href="{{ route('admin.posts.create') }}" class="nav-link active mt-2" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#home"></use>
            </svg>
            Crea Post
        </a>
    </li>
</ul>
<hr>
