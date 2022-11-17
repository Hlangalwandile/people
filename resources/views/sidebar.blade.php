<nav id="sidebar" class="navbar bg-dark navbar-expand d-flex flex-column align-item-start active-nav">
    <a href="#" class="navbar-brand text-light mt-5">
        <div class="display-5 font-wight-bold"><span class='capital-P'>P</span>eople</div>
    </a>
{{-- 

    <form action="{{route('userByEmail')}}" method="post">
        @csrf
        <div class="row float-left">
            <input type="email" class="form-control" placeholder="search email" name="email" style='width:250px' required>
            <input type="submit" class="btn btn-primary ml-2" value='search' name="search" style='width:100px;margin-left:5px'>
        </div>
      </form> --}}
    <form action="{{route('userByEmail')}}" method="post" autocomplete="off">
        @csrf
        <div class="input-group search-div mt-5 my-3">
            <input type="email" class="form-control" autocomplete="off" name="email" placeholder="Search user by email" aria-label="search user by email" aria-describedby="button-addon2" required>
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">search</button>
        </div>
    </form>
    <ul class="navbar-nav d-flex flex-column  w-100">
        <li class="nav-item w-100">
            <a href="{{route('dashboard')}}" class="nav-link text-light pl-4">My Profile</a>
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
