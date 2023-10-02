
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$layout_pagetitle ?? 'My Library'}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Librarion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home Menu</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/tentangperpus">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>  


  <div class="container mt-5">
        <h1>{{$layout_maintitle}}</h2>
    <!-- Content here -->
        <h2>{{$layout_tagline}}</h2>
        {{$slot}}
  </div>
  
     </body>
</html>