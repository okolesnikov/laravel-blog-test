<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link @linkactive('/')" href="{{ route('index') }}">На главную</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @linkactive('articles*')" href="{{ route('article.index') }}">Каталог статей</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
