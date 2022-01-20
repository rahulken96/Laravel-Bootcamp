<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('menu_utama') }}">
            <img src="" alt="LARACAMP">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
            </ul>

            @auth()
                <div class="d-flex user-logged nav-item dropdown no-arrow">
                    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Halo, {{Auth::user()->name}}!
                        <img src="{{Auth::user()->image}}" class="user-photo" alt="">
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">
                            <li>
                                <a href="{{ route('dashboard') }}" class="dropdown-item">My Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item" onclick="confirm('Anda Yakin ?'); event.preventDefault(); document.getElementById('form-keluar').submit()"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Keluar</a>
                                <form id="form-keluar" action="{{ route('keluar') }}" method="post" style="display: none">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </li>
                        </ul>
                    </a>
                </div>
            @else
                <div class="d-flex">
                    <a href="{{ route('masuk') }}" class="btn btn-master btn-secondary me-3">
                        Masuk
                    </a>
                    <a href="{{ route('daftar') }}" class="btn btn-master btn-primary">
                        Daftar
                    </a>
                </div>
            @endauth

            {{-- <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form> --}}

        </div>
    </div>
</nav>
