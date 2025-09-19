@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->

<section class="hero-section">

    <div class="container">

        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">

        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>

    </div>

</section>

<!-- About Section -->

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">About Me</h2>

        <p>My Name: Sammy Bagaan ang hilig ko ay manood at mag basa nang mga comics 
            para mahubog ang aking kaalaman or pag basa nang maayus
            mahilig din mag laro nang mga mobile games at bassketball
            pag nagawa kona mga bagay nayan tumotulong din ako sa mga gawain
            bahay na may kasabihan na aanhin mo ang pag ibig 
            na wagas kong wala ka naman pambili nang bigas kaya gosto ko
            after 10 years from now ay may sarili na akong bahay at mga 
            sasakyan at tahimik na buhay at masaya na pamilya </p>    

    </div>

</section>

<!-- Projects Section -->

<section id="projects" class="section bg-light">

    <div class="container">

        <h2 class="section-title">My Projects</h2>

        <p> Ang project ko ay maka pag tayo nang sariling building at mag n-negosyo ng mga pagkain</p>

    </div>

</section>

<!-- Contact Section -->

<section id="contact" class="section">

    <div class="container">

        <h2 class="section-title">Get In Touch</h2>

        <!-- Contact content -->

    </div>

</section>

@endsection