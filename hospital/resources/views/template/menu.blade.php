<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
   <img src="images/one.png" style="height:70px" alt="img">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{route('hospital.index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('hospital.create')}}">Add Case</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('hospital.about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('hospital.contact')}}">Contact Us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-light" href="{{route('hospital.trash')}}">Recycle Bin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>