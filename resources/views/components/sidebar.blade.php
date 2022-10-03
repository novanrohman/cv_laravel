<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4 p-5 bg-dark text-light" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
        <img src="{{ $img }}" class="rounded-circle mt-4 mx-auto d-block" style="width: 150px;" alt="profile">
        <h2 class="d-flex justify-content-center mt-4">{{$nama}}</h2>
        <p class="d-flex justify-content-center">{{$pro}}</p>
        <h5>Date of birth</h5>
        <p>{{$lahir}}</p>
        <h5 class="pt-3">Address</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15788.031395031927!2d114.29302990436554!3d-8.40088754777245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3fd6ef983307d%3A0xeb79d964a40feb84!2zOMKwMjQnMDMuMiJTIDExNMKwMTgnMDYuNCJF!5e0!3m2!1sid!2sid!4v1664810256929!5m2!1sid!2sid" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p>{{$alamat}}</p>
        <h5 class="pt-3">Contact</h5>
        <a href="https://wa.me/{{$wa}}" class="text-white" style="text-decoration: none;">{{$tlp}}</a><br>
        <a href="mailto:{{$email}}" class="text-white" style="text-decoration: none;" target="email">{{$email}}</a> 
    </div>
    <div class="col-md-8">
        {{$slot}}
    </div>

</div>