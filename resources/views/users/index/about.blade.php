@extends('layout.users.index')
@section('title')
    About Us
@endsection
@section('css')
    <style class="css">
         .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
        .card{
            border:1px solid var(--bg-light);
            padding:10px;

        }
    </style>
@endsection
@section('main')
    <section class="column g-10 w-full p-10">
        <section class="about-profitpay">
   <div class="w-full column align-center text-center g-10">
        <div class="hero-title w-fit">About {{ config('app.name') }}</div>
        <p class="font-1" style="opacity:0.9;">We're revolutionizing how people earn from their everyday social media activities. Our mission is to create a fair, transparent, and rewarding ecosystem for digital creators and social media users.</p>
    </div>
     <!-- Mission & Vision Section -->
    <section class="mission-vision" id="mission">
        <div class="container">
            <h2 class="section-title">Our Mission & Vision</h2>
            
            <div class="mission-vision-grid card">
                <div class="mission-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="card-title">Our Mission</h3>
                    <div class="card-content">
                        <p>To democratize social media monetization by providing everyone with equal opportunities to earn from their online presence and activities. We believe that every like, share, and view has value.</p>
                        <p>We're building a platform where users are fairly compensated for their time and engagement, creating a sustainable income stream from their regular social media use.</p>
                    </div>
                </div>
                
                <div class="vision-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="card-title">Our Vision</h3>
                    <div class="card-content">
                        <p>To become the world's leading social monetization platform, connecting millions of users with brands and content creators in a mutually beneficial ecosystem.</p>
                        <p>We envision a future where anyone with a smartphone can generate meaningful income through their social media engagement, breaking down barriers to financial independence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Our Values Section -->
    <section class="our-values" id="values">
        <div class="container">
            <h2 class="section-title">Our Core Values</h2>
            
            <div class="values-grid card">
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="value-title">Transparency</h3>
                    <div class="value-desc">
                        We believe in complete transparency. Every earning calculation, fee, and process is clearly explained and accessible to all users.
                    </div>
                </div>
                
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="value-title">Community First</h3>
                    <div class="value-desc">
                        Our users are at the heart of everything we do. We build features based on community feedback and prioritize user needs.
                    </div>
                </div>
                
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="value-title">Fairness</h3>
                    <div class="value-desc">
                        Everyone deserves fair compensation for their time and effort. We ensure equitable earning opportunities for all users.
                    </div>
                </div>
                
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="value-title">Innovation</h3>
                    <div class="value-desc">
                        We continuously innovate to provide new earning opportunities and improve the user experience on our platform.
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title">Join Our Growing Community</h2>
           <div class="card">
             <p class="cta-subtitle">Be part of the social monetization revolution. Start earning from your everyday social media activities today.</p>
            <a href="{{ url('register') }}" class="cta-button">Start Earning Now <i class="fas fa-arrow-right"></i></a>
        
           </div>
        </div>
    </section>


    
   
</section>
    </section>
@endsection