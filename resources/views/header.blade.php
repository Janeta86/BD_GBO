@guest
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand custom-navbar-brand" href="#">Goliketa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
@else
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Goliketa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" aria-current="page" data-bs-toggle="dropdown" href="#">Заказы</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href={{url('orders')}}>Все заказы</a></li>
                                <li><a class="dropdown-item" href={{url('orders/create')}}>Добавить заказ</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Личный кабинет</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-success my-2 my-sm-0 mt-3" href="{{url('logout')}}">Выйти</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endguest
