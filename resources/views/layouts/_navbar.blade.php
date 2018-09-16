<div class="navbar navbar-inverse" style="padding-bottom: 25px;padding-top: 5px;">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Techro HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav" id="navi">
                @if(Auth::user() && Auth::user()->hasRole('admin'))
                    <li ><a href="{{ url('admin/home') }}">Beranda</a></li>
                    <li ><a href="{{ url('admin/galeri') }}">Galeri</a></li>
                    <li><a href="{{ url('admin/jurusan') }}">Jurusan</a></li>
                    <li><a href="{{ url('admin/akademik') }}">Akademik</a></li>
                    <li><a href="{{ url('admin/fasilitas') }}">Fasilitas</a></li>
                    <li><a href="{{ url('admin/berita') }}">Berita</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                    @else
                    <li ><a href="{{ url('home') }}">Beranda</a></li>
                    <li ><a href="{{ url('galeri') }}">Galeri</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jurusan<b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li><a href="#">Jurusan1</a></li>
                            <li><a href="#">Jurusan2</a></li>
                            <li><a href="#">Jurusan3</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('akademik') }}">Akademik</a></li>
                    <li><a href="{{ url('fasilitas') }}">Fasilitas</a></li>
                    <li><a href="{{ url('berita') }}">Berita</a></li>

                @endif
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>