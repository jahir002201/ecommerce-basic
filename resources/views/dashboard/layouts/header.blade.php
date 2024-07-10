<header class="main-header navbar">
    <div class="col-search">
        <form class="searchform">
            <div class="input-group">
                <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                <button class="btn btn-light bg" type="button"> <i class="material-icons md-search"></i></button>
            </div>
            <datalist id="search_terms">
                <option value="Products">
                <option value="New orders">
                <option value="Apple iphone">
                <option value="Ahmed Hassan">
            </datalist>
        </form>
    </div>
    <div class="col-nav">
        <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link btn-icon" href="#">
                    <i class="material-icons md-notifications animation-shake"></i>
                    <span class="badge rounded-pill">3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
            </li>
            <li class="dropdown nav-item">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="material-icons md-public"></i></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                    <a class="dropdown-item text-brand" href="#"><img src="{{asset('backend/assets/imgs/theme/flag-us.png')}}" alt="English">English</a>
                </div>
            </li>
            <li class="dropdown nav-item">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false">
                    @if(Auth::user()->image)
                    {{-- If the user has a profile image, display it --}}
                   <img src="{{ asset('upload/backend/photos/'.Auth::user()->image) }}" alt="Profile Photo" class="rounded-circle" width="50" height="50" style="border: 1px solid #ddd;">
                    @else
                 <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="Profile Photo" class="rounded-circle" width="50" height="50" style="border: 1px solid #ddd;">
                  @endif
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                    <a class="dropdown-item" href="{{route('profile.edit')}}"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">Logout</button>
                        </form>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</header>