@extends('layout.users.app')
@section('title')
    Purchase API token
@endsection
@section('css')
    <style class="css">
        .token-status{
            border:1px solid var(--primary);
            border-radius:20px;
            padding:10px;
            position:relative;
            overflow:hidden;
        }
        .token-status::before{
            content:'';
            height:40%;
            aspect-ratio:1;
            position: absolute;
            filter:blur(40px);
            background:blue;
            z-index:50;
            

        }
        .prompt{
            width:100%;
            padding:10px;
            border:1px solid orange;
            background:rgba(255, 165, 0,0.05);
            border-radius:10px;
            color:orange;
            display:flex;
            flex-direction:row;
            align-items: center;
            gap:10px;

        }
        .receipt img{
            display:none;
        }
        .receipt.active span{
            display:none;
        }
        .receipt.active img{
            display:flex;
        }
    </style>
@endsection
@section('main')
    <section class="w-full g-10 column p-10">
        <div class="w-full token-status column g-10">
           <div style="position:relative;z-index:100;" class="column text-center align-center g-10">
             <span class="font-1" style="color:var(--primary-light)">API TOKEN STATUS</span>
            <strong class="desc">{{ ucwords($api_token_status) }}</strong>
            @if ($api_token_status == 'pending')
                <span style="opacity:0.5;">Your API Token is currently processed and your account would be assigned an API Token upon confirmation of payment by the platform administrators.</span>
        
            @else
                <span style="opacity:0.5;">Purchase and API Token to connect your account to the payment processor and enable withdrawals.</span>
        
            @endif
            
           </div>
        </div>
        {{-- PROMPT --}}
        <div class="prompt">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-4,48a12,12,0,1,1-12,12A12,12,0,0,1,124,72Zm12,112a16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40a8,8,0,0,1,0,16Z"></path></svg>

            You need an active API Token to process withdrawals.
        </div>
        {{-- ABOUT TOKEN --}}
        <strong style="color:var(--primary-light)" class="desc">What is API Token?</strong>
      {{-- NEW --}}
        <div style="border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.01)" class="row br-10 w-full p-10 g-10 align-center">
            <div style="color:var(--primary-light)" class="h-40 circle perfect-square no-shrink bg-primary-transparent column justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,80H96V56a32,32,0,0,1,32-32c15.37,0,29.2,11,32.16,25.59a8,8,0,0,0,15.68-3.18C171.32,24.15,151.2,8,128,8A48.05,48.05,0,0,0,80,56V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80Zm-72,78.63V184a8,8,0,0,1-16,0V158.63a24,24,0,1,1,16,0Z"></path></svg>

            </div>
            <div class="column g-10">
              <strong class="font-1"> Unlock Withdrawal</strong>
              <span style="opacity:0.5">API token is used in unlocking withdrawals on your account.</span>
            </div>
        </div>
        {{-- NEW --}}
        <div style="border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.01)" class="row br-10 w-full p-10 g-10 align-center">
            <div style="color:var(--primary-light)" class="h-40 circle perfect-square no-shrink bg-primary-transparent column justify-center">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M213.85,125.46l-112,120a8,8,0,0,1-13.69-7l14.66-73.33L45.19,143.49a8,8,0,0,1-3-13l112-120a8,8,0,0,1,13.69,7L153.18,90.9l57.63,21.61a8,8,0,0,1,3,12.95Z"></path></svg>

            </div>
            <div class="column g-10">
              <strong class="font-1">Instant Withdrawals</strong>
              <span style="opacity:0.5">API token allows automated and instant payouts directly to your provided bank account.</span>
            </div>
        </div>
        {{-- NEW --}}
         <div style="border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.01)" class="row br-10 w-full p-10 g-10 align-center">
            <div style="color:var(--primary-light)" class="h-40 circle perfect-square no-shrink bg-primary-transparent column justify-center">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
              
            </div>
            <div class="column g-10">
              <strong class="font-1">Secure Transactions</strong>
              <span style="opacity:0.5">API token are verified for safe transfers.</span>
            </div>
        </div>
       
        
        @if ($api_token_status !== 'pending')
         {{-- PAYMENT INSTRUCTIONS --}}
         <div style="flex-direction:column;align-items:flex-start" class="prompt g-10">
           <div class="row align-center g-5">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M108,84a16,16,0,1,1,16,16A16,16,0,0,1,108,84Zm128,44A108,108,0,1,1,128,20,108.12,108.12,0,0,1,236,128Zm-24,0a84,84,0,1,0-84,84A84.09,84.09,0,0,0,212,128Zm-72,36.68V132a20,20,0,0,0-20-20,12,12,0,0,0-4,23.32V168a20,20,0,0,0,20,20,12,12,0,0,0,4-23.32Z"></path></svg>

           <strong> Payment Instructions</strong>
           </div>
           <div>
            1. Pay exactly <strong class="font-1">&#8358;{{ number_format($upgrade->cost ?? 0,2) }}</strong> to the account details below to generate your api token. 
           </div>
           <div>
            2. Upload a clear screenshot of the payment receipt.
           </div>
           <div>
            3. Submit and wait for activation.
           </div>
        </div>
        {{-- PAYMENT DETAILS --}}
            <div style="border:1px dashed rgba(255,255,255,0.1)" class="w-full br-10 p-10 column g-10">
           {{-- NEW --}}
             <div style="border-bottom:1px solid rgba(255,255,255,0.1);padding:10px 0" class="row align-center g-10">
                <span class="font-1" style="opacity:0.7">Account Number</span>:
                <strong class="desc">{{ $upgrade->account_number ?? 'null' }}</strong>
            </div>
            {{-- NEW --}}
            <div style="border-bottom:1px solid rgba(255,255,255,0.1);padding:10px 0" class="row align-center g-10">
                <span class="font-1" style="opacity:0.7">Bank Name</span>:
                <strong class="desc">{{ $upgrade->bank_name ?? 'null' }}</strong>
            </div>
             {{-- NEW --}}
             <div style="padding:10px 0" class="row align-center g-10">
                <span class="font-1" style="opacity:0.7">Account Name</span>:
                <strong class="desc">{{ $upgrade->account_name ?? 'null' }}</strong>
            </div>
        </div>
        {{-- PAYMENT RECEIPT --}}
       <form enctype="multipart/form-data" method="POST" onsubmit="PostRequest(event,this,MyFunc.Upgraded)" class="w-full column g-10" action="{{ url('users/post/deposit/process') }}">
       {{-- CSRF TOKEN --}}
       <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="inp input">
        {{-- NEW --}}
    
        <label style="border:1px dashed var(--primary-light);" class="w-full cont receipt pointer clip-10 align-center text-center br-10 p-20 column g-10">
          <input onchange="
          let file=this.files[0];
          if(file){
          this.closest('label').querySelector('img').src=window.URL.createObjectURL(file);
          this.closest('label').classList.add('active');
          }else{
          this.closest('label').classList.remove('active');
          }
          " type="file" name="file" class="display-none inp input required" required accept="image/*">
            <span style="color:var(--primary-light)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="32" width="32"><path d="M196.49,151.51a12,12,0,0,1-17,17L168,157v51a12,12,0,0,1-24,0V157l-11.51,11.52a12,12,0,1,1-17-17l32-32a12,12,0,0,1,17,0ZM160,36A92.08,92.08,0,0,0,79,84.37,68,68,0,1,0,72,220h28a12,12,0,0,0,0-24H72a44,44,0,0,1-1.81-87.95A91.7,91.7,0,0,0,68,128a12,12,0,0,0,24,0,68,68,0,1,1,132.6,21.29,12,12,0,1,0,22.8,7.51A92.06,92.06,0,0,0,160,36Z"></path></svg>

            </span>
            <span class="font-1" style="opacity:0.7">Click to Upload Receipt</span>
            <span class="font-1" style="opacity:0.7">JPG,PNG or WEBP</span>
            <span class="font-1" style="opacity:0.7">File size should not be more than 5MB</span>
            <img style="max-width:100%;width:50%;border-radius:10px;" src="" alt="">
        </label>
        {{-- NEW --}}
       <div class="column display-none w-full g-5">
        <label for="">Bank Sent from</label>
       <div style="border:0.1px solid rgba(255,255,255,0.1);background:rgba(0,0,0,0.3)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
       <input value="null" placeholder="E.g Opay" name="bank_from" type="text" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
              
    </div>
       </div>
        {{-- NEW --}}
       <div class="column display-none w-full g-5">
        <label for="">Name on account sent from</label>
      <div style="border:0.1px solid rgba(255,255,255,0.1);background:rgba(0,0,0,0.3)" class="cont row align-center w-full h-50 bg-light border-1 bg border-color-silver">
      
        <input value="null" placeholder="E.g {{ Auth::guard('users')->user()->name }}" name="account_name" type="text" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
              
    </div>
       </div>
        <button class="post bold">
            Activate Token
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,20A108,108,0,1,0,236,128,108.12,108.12,0,0,0,128,20Zm0,192a84,84,0,1,1,84-84A84.09,84.09,0,0,1,128,212Zm48.49-92.49a12,12,0,0,1,0,17l-32,32a12,12,0,1,1-17-17L139,140H88a12,12,0,0,1,0-24h51l-11.52-11.51a12,12,0,1,1,17-17Z"></path></svg>
            
        </button>
       </form>
        @endif
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc ={
            Upgraded : function(response,event){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    spa(event,'{{ url()->current() }}')
                }
            }
        }
    </script>
@endsection