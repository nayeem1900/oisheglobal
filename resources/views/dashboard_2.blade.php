<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">

<!-- Example Code -->
<h5 style="text-align: center"><strong>Oishe Global Limited</strong></h5>

<div class="row">
   <div class="col-md-3">
       <div class="card" style="width: 18rem;">
           <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
           <div class="card-body">
               <h5 class="card-title">Passenger Profile</h5>
               <p class="card-text">Please Update Your Profile</p>
           </div>
           <ul class="list-group list-group-flush">
               <a href="#" class="btn btn-success">Update Personal Information</a><br>
               <a href="#" class="btn btn-primary">Go somewhere</a><br>
               <a href="#" class="btn btn-primary">Go somewhere</a><br>
               <form method="POST" action="{{ route('logout') }}">
                   @csrf

                   <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                       {{ __('Log Out') }}
                   </x-dropdown-link>
               </form>

               <li class="list-group-item">An item</li>
               <li class="list-group-item">A second item</li>
               <li class="list-group-item ">A third item</li>
               <a href="#" class="btn btn-primary">Go somewhere</a><br>
               <a href="#" class="btn btn-primary">Go somewhere</a>
           </ul>
           <div class="card-body">
               <a href="#" class="btn btn-primary">Go somewhere</a>
               <a href="#" class="btn btn-primary">Go somewhere</a>
               <a href="#" class="card-link">Card link</a>
               <a href="#" class="card-link">Another link</a>
           </div>
       </div>
   </div>
    <div class="col-md-9">
ffffff

    </div>

</div>




<!-- End Example Code -->
</body>
</html>