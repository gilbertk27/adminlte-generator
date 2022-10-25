<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">

<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('posts.index') }}"
       class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
        <p>Posts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('authors.index') }}"
       class="nav-link {{ Request::is('authors*') ? 'active' : '' }}">
        <p>Authors</p>
    </a>
</li>

<!-- <li class="nav-item">
    <a class="navbar-brand" href="https://img.icons8.com/color/344/test-account.png">
        <div class="logo-image">
                <img src="https://img.icons8.com/color/344/test-account.png" class="img-fluid">
        </div>
    </a>
</li> -->

<li class="nav-item">
    <a href="{{ route('userLists.index') }}"
       class="nav-link {{ Request::is('userLists*') ? 'active' : '' }}">
        <p>User Lists</p>
    </a>
</li>


