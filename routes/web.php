<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/novan', function(){
    $org = [
    ['title'=>"NECC Project 2020 - Now", 'jabatan' => "Graphic Designer"],
    ['title'=>"Media Center Poliwangi 2021 - Now", 'jabatan' => "Graphic Designer"]
    ];

    $exp = [
    ['title'=>"PT. Lumiga indah selaras glenmore", 'year' => "Desember 2018 - maret 2019",'jabatan' => "Graphic Designer, Video Editor"],
    ['title'=>"Studio Hakam Design", 'year' => "September 2020 - maret 2021",'jabatan' => "Logo Designer"],
    
    ];

    $ach = [
    ['title'=>"LKS (Lomba Kompetensi Siswa)", 'year' => "2020",'jabatan' => "Participan"],
    ['title'=>"Frontend Web Development", 'year' => "2021",'jabatan' => "Peserta"],
    
    ];

    $certificate = [
    ['img'=>"assets/sertifikat/web_dasar.png",'title'=>"Belajar Pemrograman Web Dasar", 'desc' => "Sertification from Dicoding Academy",'detail' => "https://drive.google.com/file/d/1NMKf-iOUwfQgs6_KM_R9LY3j4-G0TB7Q/view?usp=sharing"],
    ['img'=>"assets/sertifikat/Cloud_practicioner_essensial_AWS.png",'title'=>"Cloud Practicioner Essensial - AWS", 'desc' => "Sertification from Dicoding Academy and AWS",'detail' => "https://drive.google.com/file/d/1HDCUugw9xQrvECtfo5wPTnSylPc2zChv/view?usp=sharing"]
    
    ];


    return view('dashboard.index', [
        'img' => "assets/img/profile1.jpeg",
        'nama' => 'Novan Rohman',
        'pro' => 'Graphic Designer',
        'lahir' => 'Banyuwangi, 20 November 2001',
        'alamat' => 'RT 04 / RW 03, Bagorejo Srono, Banyuwangi, East Java',
        'tlp' => '(+62) 812 7699 5583',
        'wa' => '+6281276995583',
        'email' => 'novanrohman@gmail.com',
        'about' => "I'm a designer graphic, I have worked in a design studio as an E-sport logo designer, I'm also an Instagram admin for the necc.project community. i'm Interested in design since 11th grade Vocational high school",
        'skill' => "Adobe Illustrator, Adobe Photoshop, Adobe Corel Draw, Adobe Figma",
        'edu' => [
            "Puspa Bangsa Vocational School, 2020",
            "Junior High School 3 Srono Satu Atap, 2017",
            ],
        'organizations' => $org,
        'experiances' => $exp,
        'interest' => 'Typography, Design, photography, UI/UX, Illustraion',
        'achievements' => $ach,
        'certificates' => $certificate

    ]);
});

Route::get('/novan/portfolio', function () {
    
    $certificate = [
        ['img'=>"../assets/img/space.jpg",'title'=>"Space.id", 'desc' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis vel placeat, maxime eum.",'detail' => "#"],
        ['img'=>"../assets/img/da-coffee.jpg",'title'=>"Da-Coffe.com", 'desc' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis vel placeat, maxime eum.",'detail' => "#"],
        ['img'=>"../assets/img/portfolio.jpg",'title'=>"My Portfolio", 'desc' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis vel placeat, maxime eum.",'detail' => "#"]
        
        ];
    return view('dashboard.portfolio',[
        'img' => "../assets/img/profile1.jpeg",
        'nama' => 'Novan Rohman',
        'pro' => 'Graphic Designer',
        'lahir' => 'Banyuwangi, 20 November 2001',
        'alamat' => 'RT 04 / RW 03, Bagorejo Srono, Banyuwangi, East Java',
        'tlp' => '(+62) 812 7699 5583',
        'wa' => '+6281276995583',
        'email' => 'novanrohman@gmail.com',

        'certificates' => $certificate
    ]);
});

Route::get('/novan/contact', function () {
    $form = [
        ['name'=>"Email", 'placeholder'=> "Email", 'type'=>"email"],
        ['name'=>"Name", 'placeholder'=> "Name", 'type'=>"text"],
        ['name'=>"Phone", 'placeholder'=> "Phone", 'type'=>"phone"]
        
        ];
    return view('dashboard.contact',[
        'img' => "../assets/img/profile1.jpeg",
        'nama' => 'Novan Rohman',
        'pro' => 'Graphic Designer',
        'lahir' => 'Banyuwangi, 20 November 2001',
        'alamat' => 'RT 04 / RW 03, Bagorejo Srono, Banyuwangi, East Java',
        'tlp' => '(+62) 812 7699 5583',
        'wa' => '+6281276995583',
        'email' => 'novanrohman@gmail.com',
        'forms' => $form
    ]);
});
