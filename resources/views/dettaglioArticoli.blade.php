<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-center">{{$articoli['name']}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img class="rounded-circle" src="{{$articoli['img']}}" alt="">
            </div>
            <div class="col-12 col-md-6">
                <p class="fs-3">{{$articoli['categoria']}}</p>
            </div>
        </div>
    </div>


</x-layout>