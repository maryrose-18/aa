<nav class="navbar navbar-expand-lg navbar-light bg-light my-nav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      
        <ul class="navbar-nav" >
            <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#home">NCV Request</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Managements
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('users')}}">User Management</a> 
                    <a class="dropdown-item" href="{{route('company-managements')}}">Company Management</a>
                    <a class="dropdown-item" href="#">Approver Management</a>
                </div>
            </li>
        </ul>
    </div>
</nav>