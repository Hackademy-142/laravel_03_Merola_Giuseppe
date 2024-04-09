<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <div class="row justify-content-center mx-auto">
            <img class="dimensione_img" src="Logo Aziendale.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto mt-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('articoli')}}">Articoli</a>
                </li>
              </ul>
            </div>
        </div>
    </div>
  </nav>