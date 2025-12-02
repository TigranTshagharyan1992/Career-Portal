<header class="header container-fluid">
    <nav class="header navbar-expand-lg fixed-top py-3 container-fluid">
        <div class="row1">
            <div class="col-6">
                <a href="/">
                    <img src="{{ asset('images/GTlogo.png') }}" alt="" width="260" height="60" style="margin: 0 16px 0 0; padding: 5px 0;" class="navbar-brandy">
                </a>
            </div>
            <div class="col-6 non-display-menu" style="display: flex; justify-content: flex-end">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link text-uppercase" style="font-family: 'GT Walsheim Pro', sans-serif; font-size:12px; color:black;">Home</a></li>
                    <li class="nav-item"><a href="/job" class="nav-link text-uppercase" style="font-family: 'GT Walsheim Pro', sans-serif; font-size:12px; color:black;">Careers</a></li>
                    <li class="nav-item"><a href="{{ route('academy') }}" class="nav-link text-uppercase" style="font-family: 'GT Walsheim Pro', sans-serif; font-size:12px; color:black;">Academy</a></li>
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link text-uppercase" style="font-family: 'GT Walsheim Pro', sans-serif; font-size:12px; color:black;">About Us</a></li>
                    <li class="nav-item"><a href="{{route('contact')}}" class="nav-link text-uppercase" style="font-family: 'GT Walsheim Pro', sans-serif; font-size:12px; color:black;">Contact Us</a></li>
                    <li class="nav-item"><a href="https://www.grantthornton.global/" target="_blank" class="nav-link text-uppercase" style="font-family: 'GT Walsheim Pro', sans-serif; font-size:12px; color:black;">Official Website</a></li>
                </ul>
                <input type="checkbox" id="hamburger-input" class="burger-shower"/>
                <label id="hamburger-menu" for="hamburger-input">
                    <div id="sidebar-menu">
                        <h3 style="font-family:'GT Walsheim Pro'; color:black; font-size:25px; font-weight:bold; border-bottom-style:groove; border-bottom-width:thin;">Menu</h3>
                        <ul>
                            <a href="/"><li class="minmen">Home</li></a>
                            <a href="/job"><li class="minmen">Careers</li></a>
                            <a href="/demoacademy"><li class="minmen">Academy</li></a>
                            <a href="/about"><li class="minmen">About Us</li></a>
                            <a href="/feedback"><li class="minmen">Contact Us</li></a>
                            <a href="https://www.grantthornton.global/" target="_blank"><li class="minmen">Official Website</li></a>
                        </ul>
                    </div>
                </label>
                <div class="overlay"></div>
            </div>
        </div>
    </nav>
</header>
