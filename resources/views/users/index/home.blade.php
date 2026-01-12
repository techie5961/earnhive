@extends('layout.users.index')
@section('title')
    Homepage
@endsection
@section('css')
    <style class="css">
        .observe{
            opacity:0;
        }
        .observe.scale-in{
            animation:scale-in 1.0s ease forwards;
        }
        .observe.scale-out{
            animation:scale-out 1.0s ease forwards;
        }

        @keyframes scale-in{
            0%{
                transform:scale(0.8);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
          @keyframes scale-out{
            0%{
                transform:scale(1.2);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
        .observe.trans-up{
            animation:trans-up 1s ease forwards;
        }
        @keyframes trans-up{
            0%{
                opacity:0;
                transform:translateY(30px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.trans-from-left{
            animation:trans-from-left 2s ease forwards;
        }
        @keyframes trans-from-left{
            0%{
                opacity:0;
                transform:translateX(-50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
         .observe.trans-from-right{
            animation:trans-from-right 2s ease forwards;
        }
        @keyframes trans-from-right{
            0%{
                opacity:0;
                transform:translateX(50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
          .observe.trans-from-bottom{
            animation:trans-from-bottom 2s ease forwards;
        }
        @keyframes trans-from-bottom{
            0%{
                opacity:0;
                transform:translateY(50px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
                  .observe.trans-from-top{
            animation:trans-from-top 2s ease forwards;
        }
        @keyframes trans-from-top{
            0%{
                opacity:0;
                transform:translateY(-50px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.rotate-in-from-left{
            animation:rotate-in-from-left 1s ease forwards;
        }
        @keyframes rotate-in-from-left{
            0%{
                transform:rotate(-90deg) translateX(-200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
        .observe.rotate-in-from-right{
            animation:rotate-in-from-right 1s ease forwards;
        }
        @keyframes rotate-in-from-right{
            0%{
                transform:rotate(90deg) translateX(200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-top{
            animation:rotate-in-from-top 1s ease forwards;
        }
        @keyframes rotate-in-from-top{
            0%{
                transform:rotate(45deg) translateY(50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-bottom{
            animation:rotate-in-from-bottom 1s ease forwards;
        }
        @keyframes rotate-in-from-bottom{
            0%{
                transform:rotate(-180deg) translateY(-50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
        .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
        .features-card{
            display:flex;
            flex-direction:column;
            gap:10px;
            padding:20px;
            border:1px solid var(--bg-lighter);
            background:var(--bg-light);
            border-radius:10px;
            /* border-top:8px solid var(--primary-light); */
           

        }
        .features-card .symbol{
            background:rgba(255,255,255,0.1);
            padding:10px;
            border-radius:5px;
            height:70px;
            width:70px;
            display:flex;
            align-items:center;
            justify-content:center;
            color:var(--primary-light)
        }
        .features-title{
            font-weight:800;
            font-size:1.5rem;

        }
        .features-details{
            color:silver;
        }
        .faq .answer{
            display:none;
        }
        .faq .question *{
            transition: all 0.5s ease;
        }
        .faq.active .question .icon{
            background:var(--gradient);
            box-shadow: 0 0 10px var(--primary-brighter);
          

        }
         .faq.active .question .icon svg{
          transform:rotate(90deg);
          

        }
        .faq.active .question{
            display:flex;
        }
        .faq.active .answer{
            display:flex;
        }
         .get-started-btn{
            position: relative;
         }
        /* .get-started-btn::before{
            content:'';
            position:absolute;
            left:0;
            top:0;
            bottom:0;
            background:linear-gradient(to right,transparent,rgba(255,255,255,0.5),transparent,transparent);
            width:100%;
            animation:shiny 2s linear infinite;
            transform:skew(40deg)
        }
        @keyframes shiny{
            0%{
                left:-25%;
            }
            25%{
                left:25%;
            }
            50%{
                left:50%;
            }
            75%{
                left:75%;
            }
            100%{
                left:100%
            }
        } */

    </style>
@endsection
@section('main')
    <section class="w-full align-center  g-10 column p-10">
           
        <div class="hero-title text-center">
           Social Monetization Made Simple
        </div>
        
        <span style="opacity:0.9;" class="text-center font-1">
          Turn your followers and subscriptions into cash. Get rewarded for your daily posts, likes & shares. Simple as that.

        </span>
       <div style="padding-top:20px;padding-bottom:20px;" class="grid pc-grid-2 w-full g-10 m-y-20">
        <div onclick="window.location.href='{{ url('register') }}'" style="font-size:1rem;background: var(--primary-bright);color:white;" class="h-50 pointer get-started-btn w-full bold row g-10 justify-center p-10 br-1000 clip-1000 overflow-hidden">
        Join us Now
        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="CurrentColor"></path>
</svg>

    </div>
    <div onclick="window.location.href='{{ url('login') }}'" style="font-size:1rem;border:1px solid var(--bg-lighter);color:silver;background:rgba(255,255,255,0.05)" class="h-50 pointer clip-5 w-full bold row g-10 justify-center p-10 br-1000 clip-1000">
     Sign In
        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="CurrentColor"></path>
</svg>

    </div>
       </div>
       
         <img data-class='scale-in' src="{{ asset('banners/image8A305924-B66A-4E9A-A44D-46E5B7D5B822.jpg') }}" alt="" class="w-full m-x-auto observe br-10 max-w-500">
        
       
        <span class="hero-title">How You Can Earn With EarnHive</span>
        <div class="grid p-20 pc-grid-2 w-full g-10">
            <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M240,128a15.74,15.74,0,0,1-7.6,13.51L88.32,229.65a16,16,0,0,1-16.2.3A15.86,15.86,0,0,1,64,216.13V39.87a15.86,15.86,0,0,1,8.12-13.82,16,16,0,0,1,16.2.3L232.4,114.49A15.74,15.74,0,0,1,240,128Z"></path></svg>


                </div>
                <strong class="features-title">Watch & Stream Videos</strong>
                <span class="features-details">Get paid to sit back and relax. Watch short videos, ads or clips and earn per view — literal easy money.</span>
               <div class="earning-highlight font-1">Earn: <strong>&#8358;350 per watch</strong></div>
            </div>
             <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M198.51,56.09C186.44,35.4,169.92,24,152,24H104C86.08,24,69.56,35.4,57.49,56.09,46.21,75.42,40,101,40,128s6.21,52.58,17.49,71.91C69.56,220.6,86.08,232,104,232h48c17.92,0,34.44-11.4,46.51-32.09C209.79,180.58,216,155,216,128S209.79,75.42,198.51,56.09ZM199.79,120h-32a152.78,152.78,0,0,0-9.68-48H188.7C194.82,85.38,198.86,102,199.79,120Zm-20.6-64H150.46a83.13,83.13,0,0,0-12-16H152C162,40,171.4,46,179.19,56ZM152,216H138.49a83.13,83.13,0,0,0,12-16h28.73C171.4,210,162,216,152,216Zm36.7-32H158.12a152.78,152.78,0,0,0,9.68-48h32C198.86,154,194.82,170.62,188.7,184Z"></path></svg>

                </div>
                <strong class="features-title">Tap to Earn Cash</strong>
                <span class="features-details">Earn with every tap! Complete simple one-click tasks and watch your balance grow instantly.</span>
              <div class="earning-highlight font-1">Earn: <strong>&#8358;100 per tap</strong></div>
            </div>
            <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M212,200a36,36,0,1,1-69.85-12.25l-53-34.05a36,36,0,1,1,0-51.4l53-34a36.09,36.09,0,1,1,8.67,13.45l-53,34.05a36,36,0,0,1,0,24.5l53,34.05A36,36,0,0,1,212,200Z"></path></svg>



                </div>
                <strong class="features-title">Social Media Boosting</strong>
                <span class="features-details">Help others go viral and earn for it! Like, follow, share & get paid for boosting real accounts. All for free!</span>
            </div>
              <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M212.92,17.71a7.89,7.89,0,0,0-6.86-1.46l-128,32A8,8,0,0,0,72,56V166.1A36,36,0,1,0,88,196V102.25l112-28V134.1A36,36,0,1,0,216,164V24A8,8,0,0,0,212.92,17.71Z"></path></svg>



                </div>
                <strong class="features-title">Stream & Earn</strong>
                <span class="features-details">Stream upcoming musicians' songs, popular music, or live content and earn rewards as you enjoy.</span>
            </div>
             <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136ZM144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17A8,8,0,0,0,24,208H192a8,8,0,0,0,6.13-13.15C183.18,177.07,164.6,164.44,144,157.68Z"></path></svg>


                </div>
                <strong class="features-title">Referral Rewards</strong>
                <span class="features-details">Invite friends and earn generous rewards for every successful referral. Grow your network and income together.</span>
            </div>
            <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M128,40a96,96,0,1,0,96,96A96.11,96.11,0,0,0,128,40Zm45.66,61.66-40,40a8,8,0,0,1-11.32-11.32l40-40a8,8,0,0,1,11.32,11.32ZM96,16a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H104A8,8,0,0,1,96,16Z"></path></svg>
                 



                </div>
                <strong class="features-title">Per Minute Claims</strong>
                <span class="features-details">Every minute counts! Stay active, claim bonus points, and cash out when your minutes stack up.</span>
            </div>
            
        </div>
        <img src="{{ asset('banners/image594F00BB-3295-424B-84D5-66A7204C4D4A.jpg') }}" alt="" class="w-full max-w-500 m-x-auto br-10">
       
       
       
       
       


        {{-- FAQ SECTION --}}
         <div class="column display-none m-x-auto m-top-50 text-center g-10 w-full">
            <strong class="hero-title">Frequently Asked Questions</strong>
            <span style="color:silver;">Find quick and clear answers to the most common questions about {{ config('app.name') }}</span>
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How Do I Join {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
                  <span>  To get started on {{ config('app.name') }},</span>
                  <span>- Click on the `Get Started` button at the top of the page or follow this <a href="{{ url('register') }}" class="no-u bold" style="color:greenyellow">Link</a></span>
                  <span>- Fill the form with your enrollment details</span>
                  <span>- Message any of our verified vendors to purchase your coupon code/access key</span>
                 <span>- We value your privacy so your data are end-to-end encrypted and 100% safe on {{ config('app.name') }}</span>
                </div>
            </div>
            {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">Are Non-Affiliates paid on {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
                 Yes, Non-Affiliate users on {{ config('app.name') }} are paid for their daily activities completed on the platform,subjust to the platform's payment terms and thresholds.
                </div>
            </div>
             {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How do i earn on {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
               You can earn money on {{ config('app.name') }} by completing a variety of activities like tasks, stream, article writing, content monetization etc <br>
               You can also earn money by sharing your affiliate link to your friends and families and earn on each complete signup.
                </div>
            </div>
              {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How long is my withdrawal on {{ config('app.name') }} processed</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
              Withdrawals on {{ config('app.name') }} are typically processed within 1-24 hours depending on the load of withdrawals availble to process.
                </div>
            </div>
        </div>
        
    </section>
@endsection
@section('js')
    <script class="js">
        function ObserveItems(class_name){
            let observer=new IntersectionObserver((entries)=>{
                entries.forEach((entry)=>{
                    if(entry.isIntersecting){
                        entry.target.classList.add(entry.target.dataset.class);
                    }else{
                        entry.target.classList.remove(entry.target.dataset.class);
                    }
                });
            },{
                threshold : 0
            });
            let items=document.querySelectorAll('.' + class_name);
           items.forEach((item)=>{
             observer.observe(item);
           })
        }
        window.onload=function(){
            document.querySelector('.happy-users').style.minWidth=document.querySelector('.happy-users').getBoundingClientRect().height + 'px'
        }
        ObserveItems('observe');
    </script>
@endsection
