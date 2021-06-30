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
         <div class="front">
             <div class="title">
                 <h1>Pizza House</h1>
                 <p>The East's Best Pizza</p>
             </div>
             <div class="order-pizza">
                 <div class="order-button">
                     <a href="/pizzas/create">
                         Order a Pizza
                     </a>
                 </div>
                 <div class="mssg">
                     {{ session('mssg') }}
                 </div>
             </div>
         </div>


         <div class='show-pizza'>
             <a href="/pizzas" class='home-back'> Show all pizza Orders</a>
         </div>
         <div class="pizza-order-home">
             <div class="pizza-orders-list">
                 <div class="item-container">
                     <div class="burger-home">
                         <div class="item">
                             <h2>Burger</h5>
                                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, corrupti.</p>

                         </div>
                     </div>
                 </div>
                 <div class="item-container">
                     <div class="pizza-home item-container">
                         <div class="item">
                             <h2>Pizza</h2>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, corrupti.</p>

                         </div>
                     </div>
                 </div>
                 <div class="item-container">
                     <div class="pasta-home item-container">
                         <div class="item">
                             <h2>Pasta</h2>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, corrupti.</p>

                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>
 </div>

 @endsection