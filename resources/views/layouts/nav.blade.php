<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() =='dashboard') active @endif" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() =='student.index') active @endif" href="{{ route('student.index') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() =='teacher.index') active @endif" href="{{ route('teacher.index') }}">Teachers</a>
                </li>
            </ul>
        </div>
        <form class="d-flex dropdown" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="#" onclick="this.closest('form').submit()">Logout</a></li>
            </ul>
        </form>
    </div>
</nav>
<div class="container my-2">
    @if (session('success_message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success_message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session('error_message'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error_message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>