<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand">Oishe Group</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="{{route('frontend.index')}}" class="nav-item nav-link active">Home</a>
                <a href="" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Visa & Immegration</a>
                    <div class="dropdown-menu">
                        <a href="blog.html" class="dropdown-item">Country</a>
                        <a href="single.html" class="dropdown-item">Visa Categories</a>
                    </div>
                </div>
                <a href="" class="nav-item nav-link">Regestration</a>

                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="{{route('dashboard')}}" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </div>
</div>