<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top" aria-label="Fourth navbar example">
    <div class="container">
        <a class="navbar-brand" href="#">M150</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item mx-5">
                    <span class="nav-link">:)</span>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-users-cog"></i><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu mt-md-2" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="#">Action</a></li>

                        <li>
                            <form id="logout-form" action="http://localhost/santisquiz-p/public/logout" method="POST">
                                <input type="hidden" name="_token" value="GLXqrpP83jQCZUuHmIFAuWHBtb2FzhUaUsEmLBX8">
                                <input type="submit" class="dropdown-item" value="Logout">
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>


        </div>
    </div>
</nav>
