<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top" aria-label="Fourth navbar example">
    <div class="container">
        <a class="navbar-brand" href="#">M150</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('checkout') }}">Cart</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                @auth
                <li class="nav-item mx-5">
                    <span class="nav-link">{{ auth()->user()->email }}</span>
                </li>
                @endauth

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-users-cog"></i><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu mt-md-2" aria-labelledby="dropdown04">
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input type="submit" class="dropdown-item" value="{{ __('Logout') }}">
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>


        </div>
    </div>
</nav>
