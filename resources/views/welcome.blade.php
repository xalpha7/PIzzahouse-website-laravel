 @extends('layouts.layout')
 
 @section('content')
 <div>
     @if (Route::has('login'))
     <div class="main-nav">
         @auth
         <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
         @else
         <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login &nbsp;&nbsp;&nbsp;&nbsp;</a>

         @if (Route::has('register'))
         <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
         @endif
         @endauth
     </div>
     @endif

     <div class='main-container'>
         <img src="/img/pizzahouse.jpg" alt="pizzahouse logo" class="main-img">
         <div class="title">
             <h1>Pizza House</h1>
             <p>The East's Best Pizza</p>
         </div>
         <div class="mssg">{{ session('mssg') }}</div>
        <div>
        <a href="/pizzas" class='back'> Show all pizza Orders</a>
        </div>
        <div>
        <a href="/pizzas/create">Order a Pizza</a>
        </div>
     </div>
 </div>
 </div>

 @endsection