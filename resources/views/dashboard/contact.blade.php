<x-main>
    <x-navbar brand="My Portfolio"/>
    <x-sidebar img="{{$img}}" nama="{{$nama}}" pro="{{$pro}}" lahir="{{$lahir}}" alamat="{{$alamat}}" tlp="{{$tlp}}" wa="{{$wa}}" email="{{$email}}">
        <section class="contact p-5" data-aos="fade-left">
            <div class="container p-3">
                <h2 class="text-center">Contact</h2>
                <div class="row">
                @foreach ($forms as $form)         
                   <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{$form['name']}}</label>
                        <input type="{{$form['type']}}" class="form-control" id="exampleFormControlInput1" placeholder="{{$form['placeholder']}}">
                    </div>
                @endforeach
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </section>
    </x-sidebar>
</x-main>