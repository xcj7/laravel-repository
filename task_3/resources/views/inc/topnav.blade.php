<nav class="navbar navbar-expand-lg navbar-dark  sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h2>LAB TASK 3</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end"  id="navbarText">
      <ul class="navbar-nav justify-content-sm-center mb-3 mb-lg-0">
      @if(Session::has('user'))
      <li class="nav-item">
          <a class="nav-link active btn btn-info" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active btn btn-info" aria-current="page" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active btn btn-info" aria-current="page" href="{{route('logout')}}">Logout</a>
        </li>
       @else
        <li class="nav-item">
          <a class="nav-link btn btn-info" href="#">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-info" href="#">Login</a>
        </li>
        @endif
      </ul>
       
    </div>
  </div>
</nav>