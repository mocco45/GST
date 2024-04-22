@extends('layout.app')

@section('content')
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
      <i class="fa fa-bars"></i>
      <span class="sr-only">Toggle Menu</span>
    </button>
</div>
        <div class="p-4 pt-5">
          <h1><a href="index.html" class="logo">Admin Panel</a></h1>
    <ul class="list-unstyled components mb-5">
      <li class="active">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link text-white px-0"><i class="fa fa-user me-sm-1"></i><span class="d-md-inline d-none">Staff</span></a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
        <li>
          <a href="{{ route('aStaff') }}">add member</a>
        </li>
        <li>
            <a href="{{ route('staff_list') }}">list members</a>
        </li>
        </ul>
      </li>

      <li class="active">
        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link text-white px-0"><i class="fa fa-user me-sm-1"></i><span class="d-md-inline d-none">Post</span></a>
        <ul class="collapse list-unstyled" id="homeSubmenu1">
        <li>
          <a href="{{ route('newPost') }}">add post</a>
        </li>
        <li>
            <a href="{{ route('posts') }}">all posts</a>
        </li>
        </ul>
      </li>
      {{-- <li>
          <a href="{{ route('aStaff') }}" class="nav-link text-white px-0"><i class="fa fa-user me-sm-1"></i><span class="d-md-inline d-none">User</span></a>
      </li> --}}
      {{-- <li>
      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
      <ul class="collapse list-unstyled" id="pageSubmenu">
        <li>
            <a href="#">Page 1</a>
        </li>
        <li>
            <a href="#">Page 2</a>
        </li>
        <li>
            <a href="#">Page 3</a>
        </li>
      </ul>
      </li>
      <li>
      <a href="#">Portfolio</a>
      </li> --}}
      <li>
        <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
            @csrf
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="nav-link text-white px-0">
                <i class="fa fa-sign-out"></i>
                <span class="d-md-inline d-none">Log out</span>
            </a>
        </form>
      </li>
    </ul>

  </div>
</nav>

<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">

@yield('contents')
</div>
</div>

@endsection
