<div class="navbar navbar-expand-lg bg-dark navbar-dark" xmlns="http://www.w3.org/1999/html">
    <div class="container-fluid">
        <a href="{{route('frontend.index')}}" class="navbar-brand">Oishe Group</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="{{route('frontend.index')}}" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                    <div class="dropdown-menu">
                        <a href="blog.html" class="dropdown-item">What We Do</a>
                        <a href="single.html" class="dropdown-item">Service</a>
                    </div>
                </div>

                {{--<a href="" class="nav-item nav-link">About</a>--}}

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Visa & Immegration</a>
                    <div class="dropdown-menu">
                        <a href="blog.html" class="dropdown-item">Country</a>
                        <a href="single.html" class="dropdown-item">Visa Categories</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Regestration</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('register') }}" class="dropdown-item">Passenger</a>
                        <a href="" class="dropdown-item">Agent</a>
                    </div>
                </div>

                <a href="contact.html" class="nav-item nav-link">Contact</a>

               <a href="{{route('dashboard')}}" class="nav-item nav-link">Login</a>







            </div>
        </div>
    </div>
</div>