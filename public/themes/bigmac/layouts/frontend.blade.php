@extends('layouts.base')

@section('body')

    <div class="ui menu attached one item" id="header">
        <div class="item"><img src="{{ theme_asset('img/logo-mcd.png') }}" alt=""></div>
    </div>
    <div class="ui menu attached four item small borderless" id="topmenu">
        <a href="{{ route('frontend.home') }}" class="item">
            <span class="circular ui icon button">
                <i class="icon home"></i>
            </span>
            &nbsp;
            HOME
        </a>
        <a href="{{ route('frontend.gallery') }}" class="item">
            <span class="circular ui icon button">
                <i class="icon file image outline"></i>
            </span>
            &nbsp;
            GALERI
        </a>
        <a href="{{ route('frontend.mechanism') }}" class="item">
            <span class="circular ui icon button">
                <i class="icon settings"></i>
            </span>
            &nbsp;
            MEKANISME
        </a>
        <a href="{{ route('frontend.prize') }}" class="item">
            <span class="circular ui icon button">
                <i class="icon trophy"></i>
            </span>
            &nbsp;
            HADIAH
        </a>
    </div>

    <div style="min-height: 500px">
        @yield('content')
    </div>

    <footer id="footer" class="ui container center aligned">
        Copyright &copy; 2015 @McDonalds Indonesia. All rights reserved.
    </footer>
@endsection
