<nav id="sidebar" class="navbar bg-dark navbar-expand d-flex flex-column align-item-start">
    <a href="#" class="navbar-brand text-light mt-5">
        <div class="display-5 font-wight-bold"><span class='capital-P'>P</span>eople</div>
    </a>
    <ul class="navbar-nav d-flex flex-column mt-5 w-100">
        <li class="nav-item w-100">
            <a href="{{route('dashboard')}}" class="nav-link text-light pl-4">Dashboard</a>
        </li>
        <li class="nav-item w-100">
            <a href="{{route('dashboard.users')}}" class="nav-link text-light pl-4">Users</a>
        </li>
        {{-- <li class="nav-item w-100">
            <a href="{{route('dashboard.profile')}}" class="nav-link text-light pl-4">Profile</a>
        </li> --}}
        {{-- <li class="nav-item dropdown w-100">
            <a 
                href="#" 
                class="nav-link dropdown-toggle text-light pl-4" 
                id="navbarDropdown" 
                role="button" 
                data-toggle='dropdown'
                arial-expanded='false'>
                Profiles
            </a>
            <ul class="dropdown-menu w-100"aria-labelledby="navbarDropdown">
                <li>
                    <a href="#" class="dropdown-item text-light pl-4 p-2">p1</a>
                </li>
            </ul>
        </li> --}}
        {{-- <li class="nav-item w-100">
            <a href="" class="nav-link text-light pl-4">Questions</a>
        </li> --}}
    </ul>
</nav>
