@extends('layout.users.app')
@section('title')
    Dashboard
@endsection
@section('css')
    <style class="css">
        .quick-link{
            position:relative;
            

        }
        .quick-link .group{
            z-index:20;
            position:relative;
        }
        .quick-link::before{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            width:40%;
            height:40%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(30px);
            z-index:10;
        }
         .quick-link::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            width:20%;
            height:20%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(20px);
            z-index:10;
        }
        .populate.shown .form{
            animation:opaq-in 0.5s ease forwards;
            
        }
        .affiliate-balance-div{
            background:var(--primary);
            position:relative;
        }
          .activities-balance-div{
            background:gold;
            position:relative;
            color:black;
        }
        .all-time-balance-div{
            background:var(--bg);
            position:relative;
            color:white;
            border:1px solid var(--primary);
        }
          .activities-balance-div .balance-name{
           
            color:#222;
        }
         .all-time-balance-div .balance-name{
           
            color:whitesmoke;
        }
        
      .rep-img{
            position:absolute;
            bottom:0;
            right:0;
        }
        .rep-img{
            height:150px;
            pointer-events:none;
            z-index:200;
        }
        .balance-divs{
            overflow: hidden;
            /* clip-path:inset(0 round 20px); */
        }
        .balance-divs .icon{
            background:rgba(0,0,255,0.2);
            color:blue;
            height:50px !important;
        }
        .balance-divs.affiliate-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:white;
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-divs.activities-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:rgb(119, 89, 14);
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-divs.all-time-balance-div::after{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            background:var(--primary-light);
            filter:blur(100px);
            --webkit-filter:blur(100px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-name{
            color:silver;
        }
        .balance-divs .content{
            position:relative;
            z-index:300;
        }
        .balance-display.balance-hidden .balance{
            display:none !important;
        }
         .balance-display.balance-hidden .star{
            display:flex !important;
        }
        .balance-display.balance-shown .balance{
            display:flex !important;
        }
         .balance-display.balance-shown .star{
            display:none !important;
        }
        .balance-display.balance-hidden .hide-balance-text{
            display:none !important;
        }
        .balance-display.balance-hidden .show-balance-text{
            display:flex !important;
        }
        .balance-display.balance-shown .hide-balance-text{
            display:flex !important;
        }
        .balance-display.balance-shown .show-balance-text{
            display:none !important;
        }
        .wallets{
            position:absolute;
            top:100%;
            height:20px;
        }
        .wallets.activities{
            background:gold;
            border-radius:0 0 10px 10px;
             left:5%;
            right:5%;
            z-index:200;
        }
        .wallets.affiliate{
            background:var(--primary);
            border-radius:0 0 10px 10px;
             left:5%;
            right:5%;
            z-index:200;
        }
        .wallets.all_time{
            background:rgb(108,92,230);
             border-radius:0 0 10px 10px;
              left:8%;
            right:8%;
             height:30px;
             z-index:100;
        }
        .quick-link{
            position:relative;
            overflow:hidden;
            border:1px solid var(--bg-lighter);

        }
        .quick-link .content{
            position:relative;
            z-index:20;

        }
       
      .quick-link::before{
        content:'';
        position:absolute;
        top:0;
        right:0;
        left:calc(100% - 50%);
        background:var(--primary-light);
        filter:blur(20px);
        -webkit-filter:blur(20px);
        height:50%;
        width:50%;
        z-index:10
      }
        .chat-btn{
            width:100%;
            height:fit-content;
            background:linear-gradient(to top right,greenyellow,#4caf50,green);
            padding:10px;
            border:none;
            user-select:none;
            color:white;
            font-family:var(--font);
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;
            clip-path:inset(0 round 5px);
            border-radius:5px;
            gap:5px;
            cursor:pointer;
        }
         
        @keyframes opaq-in{
            0%{
                opacity:0;
                transform:scale(0.9)
            }
            100%{
                opacity:1;
                transform:scale(1);
            }
        }
        .promo-img{
            position:fixed;
            right:10px;
            height:70px;
            animation:breathe 2.5s ease infinite;

            
        }
        @keyframes breathe{
            0%{
                transform: scale(1)
            }
            50%{
                transform: scale(0.9)
            }
        }
    </style>
@endsection
@section('main')
    <section class="column p-10 w-full g-10">
     <div class="w-full g-5 column">
        {{-- TOTAL BALANCE --}}
       <div class="pos-relative balance-houses w-full">
        <div class="w-full br-10  p-20 column no-select g-10 balance-divs all-time-balance-div">
        <div class="column w-full content g-10">
                 <div class="row g-5">
            <div>Welcome back 👋,<br><strong class="desc"> {{ ucfirst(strtolower(Auth::guard('users')->user()->username)) }}</strong></div>
           <div class="row align-center m-left-auto g-10">
         <div class="h-30 icon perfect-square br-10 bg-primary-transparent column justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M236,208a12,12,0,0,1-12,12H32a12,12,0,0,1-12-12V48a12,12,0,0,1,24,0v99l43.51-43.52a12,12,0,0,1,17,0L128,127l43-43H160a12,12,0,0,1,0-24h40a12,12,0,0,1,12,12v40a12,12,0,0,1-24,0V101l-51.51,51.52a12,12,0,0,1-17,0L96,129,44,181v15H224A12,12,0,0,1,236,208Z"></path></svg>

         </div>
           </div>
        </div>
        <div class="column balance-display balance-shown g-5 m-top-auto">
            <span class="balance-name">Total Balance</span>
            <strong style="font-size:2rem;" class="desc balance">{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format($all_time,2) }}</strong>
             
        </div>
        <div class="align-center m-top-20 row g-10">
           <div onclick="spa(event,'{{ url('users/withdraw') }}')" style="background:var(--primary-light)" class="h-fit bold w-fit br-5 clip-5 p-10  pointer bg-primary-light">
          Withdraw Funds
        </div>
        </div>
        </div>

       </div>

       
       </div>
       {{-- BALANCES ROW --}}
       <div class="w-full p-10 row align-center overflow-auto g-10">
        {{-- ACTIVITIES BALANCE --}}
         <div style="min-width: 70%;" class="pos-relative balance-houses">
        <div class="w-full br-10  p-20 column no-select g-10 balance-divs all-time-balance-div">
        <div class="column w-full content g-10">
                 <div class="row g-5">
                     <span class="balance-name">Activities Balance</span>
             <div class="row align-center m-left-auto g-10">
                 
         <div style="height:40px !important;" class="h-30 icon perfect-square br-10 bg-primary-transparent column justify-center">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,28H188V24a12,12,0,0,0-24,0v4H92V24a12,12,0,0,0-24,0v4H48A20,20,0,0,0,28,48V208a20,20,0,0,0,20,20H208a20,20,0,0,0,20-20V48A20,20,0,0,0,208,28ZM68,52a12,12,0,0,0,24,0h72a12,12,0,0,0,24,0h16V76H52V52ZM52,204V100H204V204Zm120.49-84.49a12,12,0,0,1,0,17l-48,48a12,12,0,0,1-17,0l-24-24a12,12,0,0,1,17-17L116,159l39.51-39.52A12,12,0,0,1,172.49,119.51Z"></path></svg>

         </div>
           </div>
        </div>
        <div class="column balance-display balance-shown g-5 m-top-auto">
          
            <strong style="font-size:2rem;" class="desc balance">{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</strong>
          
        </div>
       
        </div>

       </div>

       
       </div>
       {{-- AFFILIATE BALANCE --}}
       <div style="min-width: 70%;" class="pos-relative balance-houses">
        <div class="w-full br-10  p-20 column no-select g-10 balance-divs all-time-balance-div">
        <div class="column w-full content g-10">
                 <div class="row g-5">
                     <span class="balance-name">Affiliate Balance</span>
             <div class="row align-center m-left-auto g-10">
                 
         <div style="height:40px !important;" class="h-30 icon perfect-square br-10 bg-primary-transparent column justify-center">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M240.49,103.52l-80-80A12,12,0,0,0,140,32V68.74c-25.76,3.12-53.66,15.89-76.75,35.47-29.16,24.74-47.32,56.69-51.14,90A16,16,0,0,0,39.67,207h0c10.46-11.14,47-45.74,100.33-50.42V192a12,12,0,0,0,20.48,8.48l80-80A12,12,0,0,0,240.49,103.52ZM164,163V144a12,12,0,0,0-12-12c-49,0-86.57,21.56-109.79,40.11,7.13-18.16,19.63-35.22,36.57-49.59C101.3,103.41,128.67,92,152,92a12,12,0,0,0,12-12V61l51,51Z"></path></svg>

         </div>
           </div>
        </div>
        <div class="column balance-display balance-shown g-5 m-top-auto">
          
            <strong style="font-size:2rem;" class="desc balance">{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format(Auth::guard('users')->user()->affiliate_balance,2) }}</strong>
          
        </div>
       
        </div>

       </div>

       
       </div>
       </div>

      
   
   
     </div>
{{-- MARGINALIZE --}}
    <div class="marginalize"></div>
   {{-- QUICK LINKS --}}
       <strong class="desc p-left-20">Quick Actions</strong>
       <section style="padding-top:5px;" class="grid quick-links p-20 grid-4 w-full place-center g-10">
        {{-- NEW LINK --}}
        <div onclick="
        MyFunc.CheckIn(this)
        " class="column align-center text-center g-10">
            <div style="background:rgba(0,0,0,0.5);color:var(--primary-light);box-shadow:0 0 15px var(--primary-light)" class="h-50 column perfect-square circle align-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                
            </div>
            <span class="title">Daily Claim</span>
        </div>
        {{-- NEW LINK --}}
         <div onclick="CreateNotify('error','This feature is coming soon')" class="column text-center align-center g-10">
            <div style="background:rgba(0,0,0,0.5);color:var(--primary-light);box-shadow:0 0 15px var(--primary-light)" class="h-50 column perfect-square circle align-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M212.92,17.71a7.89,7.89,0,0,0-6.86-1.46l-128,32A8,8,0,0,0,72,56V166.1A36,36,0,1,0,88,196V102.25l112-28V134.1A36,36,0,1,0,216,164V24A8,8,0,0,0,212.92,17.71Z"></path></svg>

            </div>
            <span>Stream & Earn</span>
        </div>
        {{-- NEW LINK --}}
         <div onclick="spa(event,'{{ url('users/transactions') }}')" class="column align-center text-center g-10">
            <div style="background:rgba(0,0,0,0.5);color:var(--primary-light);box-shadow:0 0 15px var(--primary-light)" class="h-50 column perfect-square circle align-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="25" width="25"><path d="M76,64A12,12,0,0,1,88,52H216a12,12,0,0,1,0,24H88A12,12,0,0,1,76,64Zm140,52H88a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Zm0,64H88a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24ZM44,112a16,16,0,1,0,16,16A16,16,0,0,0,44,112Zm0-64A16,16,0,1,0,60,64,16,16,0,0,0,44,48Zm0,128a16,16,0,1,0,16,16A16,16,0,0,0,44,176Z"></path></svg>

            </div>
            <span>Transactions</span>
        </div>
         {{-- NEW LINK --}}
         <div onclick="spa(event,'{{ url('users/team') }}')" class="column align-center text-center g-10">
            <div style="background:rgba(0,0,0,0.5);color:var(--primary-light);box-shadow:0 0 15px var(--primary-light)" class="h-50 column perfect-square circle align-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="25" width="25"><path d="M164.38,181.1a52,52,0,1,0-72.76,0,75.89,75.89,0,0,0-30,28.89,12,12,0,0,0,20.78,12,53,53,0,0,1,91.22,0,12,12,0,1,0,20.78-12A75.89,75.89,0,0,0,164.38,181.1ZM100,144a28,28,0,1,1,28,28A28,28,0,0,1,100,144Zm147.21,9.59a12,12,0,0,1-16.81-2.39c-8.33-11.09-19.85-19.59-29.33-21.64a12,12,0,0,1-1.82-22.91,20,20,0,1,0-24.78-28.3,12,12,0,1,1-21-11.6,44,44,0,1,1,73.28,48.35,92.18,92.18,0,0,1,22.85,21.69A12,12,0,0,1,247.21,153.59Zm-192.28-24c-9.48,2.05-21,10.55-29.33,21.65A12,12,0,0,1,6.41,136.79,92.37,92.37,0,0,1,29.26,115.1a44,44,0,1,1,73.28-48.35,12,12,0,1,1-21,11.6,20,20,0,1,0-24.78,28.3,12,12,0,0,1-1.82,22.91Z"></path></svg>

            </div>
            <span>Team</span>
        </div>
        
       </section>

       {{-- AFFILIATE LINK --}}
       <div class="w-full border-1 br-10 column g-10 p-20 border-color-primary">
        <strong class="desc">Your Affiliate Link</strong>
       <span style="opacity:0.7;">Share your link to invite others</span>
        <div style="border:1px solid var(--bg-lighter)" class="w-full bg-light g-5 secondary-text br-10 p-10 row space-between align-center">
            <div class="w-full h-40 no-scrollbar align-center row ws-nowrap overflow-auto p-5 br-10 bg-secondary-transparent">{{ url('register/'.Auth::guard('users')->user()->username.'') }}</div>
            <div onclick="copy('{{ url('register/'.Auth::guard('users')->user()->username.'') }}')" style="border:1px solid var(--bg-lighter);color:var(--primary-light)" class="h-40 c-primary-light perfect-square column justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M200,32H163.74a47.92,47.92,0,0,0-71.48,0H56A16,16,0,0,0,40,48V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V48A16,16,0,0,0,200,32Zm-72,0a32,32,0,0,1,32,32H96A32,32,0,0,1,128,32Z"></path></svg>


            </div>
        </div>
       </div>
        
        <div style="border:1px solid var(--primary);margin-bottom:10px;" class="w-full no-select m-x-auto align-center p-20 column g-5 br-10 p-10">
                <strong class="font-1 m-right-auto row">Join Our Community</strong>
                <span>Want to stay updated? Join our communities on WhatApp and Telegram to get latest updates and giveaways.</span>
           
       <div class="grid place-center m-left-auto w-full g-10 align-center">
        <div onclick="window.open('{{ $social->whatsapp }}')" class="bg-green g-5 align-center pc-max-w-half c-white row justify-center h-50 p-10 bold w-full br-1000">
            Join our Whatsapp Group
          


        </div>
         <div onclick="window.open('{{ $social->telegram }}')" style="box-shadow:inset 0 0 20px navy;background:blue" class="bg-navy g-5 align-center pc-max-w-half m-right-auto c-white row justify-center h-50 p-10 bold w-full br-1000">
            Join our Telegram Group
        


        </div>
       </div>
        </div>
    
       
    </section>
  @include('components.sections',[
    'populate' => true
  ])
  {{-- <img onclick="spa(event,'{{ url('users/referral/contest') }}')" src="{{ asset('images/IMG_1613.PNG') }}" class="promo-img" alt=""> --}}
@endsection
@section('popup')
    <div class="column p-10 g-10">
        <img src="{{ asset('banners/eb4c53bd-8a10-47f0-8570-a43582d1b9eb.jpeg') }}" alt="" class="w-full br-10">
    <div class=" bold text-center w-full">
        {!! nl2br($social->notification) !!}
         </div>
         <div class="w-full chat-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="CurrentColor" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>





                        <span>Join our Whatsapp Group</span>
         </div>
    </div>
@endsection
@section('js')
    <script class="js">
        // PopUp();
        window.MyFunc ={
           Style : function(){
           try{
            document.querySelectorAll('.balance-divs').forEach((div)=>{
            
                // div.style.minHeight=div.querySelector('.rep-img').getBoundingClientRect().height + 'px';
            })
            // document.querySelector('.promo-img').style.bottom=Math.abs(document.querySelector('footer').getBoundingClientRect().top - document.querySelector('footer').getBoundingClientRect().bottom) + 10 + 'px';
          //  alert(Math.abs(document.querySelector('footer').getBoundingClientRect().top - document.querySelector('footer').getBoundingClientRect().bottom) + 10 + 'px')
         //   alert(document.querySelectorAll('.wallets')[document.querySelectorAll('.wallets').length - 1].getBoundingClientRect().bottom)
            // document.querySelector('.marginalize').style.marginTop=Math.abs(document.querySelectorAll('.wallets')[0].getBoundingClientRect().top - document.querySelectorAll('.wallets')[document.querySelectorAll('.wallets').length - 1].getBoundingClientRect().bottom) + 'px' 
           

           }catch(error){
            alert(error.stack);
           }
           } ,
           Redeemed : function(response,event){
            let data=JSON.parse(response);
          
            document.querySelector('.prompt.' + data.status).innerHTML=(data.message).toUpperCase();
           document.querySelector('.prompt.' + data.status).classList.remove('display-none');
           if(data.status == 'success'){
            document.querySelector('.close-modal').onclick=function(){
                spa(event,'{{ url()->current() }}');
            }
           }else{
              document.querySelector('.close-modal').onclick=function(){
                document.querySelector('.populate').classList.add('display-none');
                 document.querySelector('.populate').classList.remove('shown');
            document.body.classList.remove('overflow-hidden')
            }
            
           }

           },
           CheckIn : async function(element){
           
            element.querySelector('.title').innerHTML='Claiming..';
           let response=await fetch('{{ url('users/get/daily/claim') }}');
           if(response.ok){
            let data=await response.json();
            CreateNotify(data.status,data.message);
            element.querySelector('.title').innerHTML='Daily Claim';

           }else{
            // CreateNotify('error',response.status);
            element.querySelector('.title').innerHTML='Daily Claim';
           }
           
           }
        }
        MyFunc.Style();
    </script>
@endsection