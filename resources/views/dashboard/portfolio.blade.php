<x-main>
    <x-navbar brand="My Portfolio"/>
    <x-sidebar img="{{$img}}" nama="{{$nama}}" pro="{{$pro}}" lahir="{{$lahir}}" alamat="{{$alamat}}" tlp="{{$tlp}}" wa="{{$wa}}" email="{{$email}}">
    <section class="portfolio p-5">
            <div class="container p-3">
                <h2 class="text-center">Portfolio</h2>
                <hr>
                <div class="row">
                @foreach ($certificates as $certif)         
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="{{$certif['img']}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$certif['title']}}</h5>
                            <p class="card-text">{{$certif['desc']}}</p>
                            <a href="{{$certif['detail']}}" target="blank" class="btn btn-primary">View Details</a>
                        </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
    </x-sidebar>
    </div>
</x-main>