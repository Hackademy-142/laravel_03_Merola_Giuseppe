<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-center">I nostri Articoli</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($articoli as $articolo)
            <div class="col-12 col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{$articolo['img']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$articolo['name']}}</h5>
                      <p class="card-text">{{$articolo['categoria']}}</p>
                      <div class="d-flex justify-content-center">
                          <a href="{{route('dettaglioArticoli', ['id' => $articolo['id']])}}" class="btn btn-secondary ">Vai al dettaglio</a>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>


</x-layout>