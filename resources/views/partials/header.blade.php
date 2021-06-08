<header class="container main-header">
    <a href="/"><img src="{{ asset('images/dc-logo.png') }}" alt="Dc Comics Image Logo"></a>
    
    <nav class="main-nav">
        <ul>
            <li>
                <a class="default" href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a class="active" href="{{route('comics')}}">Comics</a>
            </li>
            <li>
                <a class="default" href="{{ route('news') }}">News</a>
            </li>
            <li>
                <a class="default" href="{{ route('about') }}">About</a>
            </li>
        </ul>
    </nav>
</header>