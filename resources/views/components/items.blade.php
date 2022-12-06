<ul class="navbar-nav justify-content1-end flex-grow-1 pe-3">
    @auth
        <li class="nav-item"><a class="nav-link" href="/add/student">Add New</a></li>
        <form action="/logout" method="POST">
            @csrf
            <button class="nav-link logout">LOG OUT</button> 
        </form>
    @else
        <li class="nav-item"><a class="nav-link" href="/register">REGISTER</a></li>
        <li class="nav-item"><a class="nav-link" href="/login">LOGIN</a></li>
    @endauth
</ul>