<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('root_path') }}">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link {{ set_active_route('root_path') }}" href="{{ route('root_path') }}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ set_active_route('about_path') }}" href="{{ route('about_path') }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Artisan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Planet
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://Laravel.com">Laravel.com</a>
            <a class="dropdown-item" href="https://Laravel.io">Laravel.io</a>
            <a class="dropdown-item" href="https://Laracasts.com">Laracast</a>
            <a class="dropdown-item" href="https://Larajobs.com">Larajob</a>
            <a class="dropdown-item" href="https://Laravel-news.com">Laravel News</a>
            <a class="dropdown-item" href="https://Larachat.co">Larachat</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ set_active_route('root_path') }}" href="{{ route('contact_path') }}">Contact</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
      </ul>
    </div>
  </nav>
