<div class="container">
    <nav class="navbar navbar-light bg-primary justify-content-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="">Quản lý giáo viên</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="">Quản lý học sinh</a>
            </li>

            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">

                    @csrf
                    <button type="submit" class="btn btn-primary">Đăng xuất</button>
                </form>
            </li>
        </ul>
    </nav>