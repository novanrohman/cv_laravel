{{-- Created by. Novan Rohman
     Year of Created 2022
     This project is a CV
 --}}

<x-main>
    <x-navbar brand="My Portfolio"/>
    <x-sidebar img="{{$img}}" nama="{{$nama}}" pro="{{$pro}}" lahir="{{$lahir}}" alamat="{{$alamat}}" tlp="{{$tlp}}" wa="{{$wa}}" email="{{$email}}">
        <div class="p-5">
                <section class="about-me">
                    <h2>About Me</h2>
                    <hr>
                    <p data-aos="fade-left">{{$about}}</p>
                </section>

                <section class="skils">
                    <h2 >My Skill</h2>
                    <hr>
                    <p data-aos="fade-left">{{$skill}}</p>
                </section>

                <section class="edu">
                    <h2>Education</h2>
                    <hr>
                     @foreach ($edu as $data)
                    <p data-aos="fade-left"><strong>{{$data}}</strong></p>
                        
                    {{-- @dd($data) --}}

                    @endforeach
                </section>

                <section class="organization">
                    <h2>Organization</h2>
                    <hr>
                    {{-- @dd($organizations) --}}
                    @foreach ($organizations as $organization)
                        <p data-aos="fade-left"><strong>{{$organization['title']}}</strong>
                        <br>{{$organization['jabatan']}}</p>
                    @endforeach
                </section>

                <section class="experiance">
                    <h2>Experiance</h2>
                    <hr>
                    @foreach ($experiances as $experiance)
                    <p data-aos="fade-left"><strong>{{$experiance['title']}} {{$experiance['year']}}</strong><br> {{$experiance['jabatan']}}</p>
                        
                    @endforeach
                </section>

                <section class="interest">
                    <h2>Interest</h2>
                    <hr>
                    <p data-aos="fade-left">{{$interest}}</p>
                </section>

                <section class="achievement">
                    <h2>Achievement</h2>
                    <hr>
                     @foreach ($achievements as $achievement)
                    <p data-aos="fade-left"><strong>{{$achievement['title']}} {{$achievement['year']}}</strong><br> {{$achievement['jabatan']}}</p>
                        
                    @endforeach
                </section>

                <section class="sertification">
                    <h2>Ceritifation</h2>
                    <hr>
                    
                    <div class="row">
                        @foreach ($certificates as $certif)
                            
                      <div class="col-md-4 col-sm-12 mb-3">
                        <div class="card" data-aos="fade-left style="width: 15rem;">
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
                </section>


            </div>
    </x-sidebar>
</x-main>
        


       