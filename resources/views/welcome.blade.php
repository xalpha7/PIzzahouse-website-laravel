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

         <div class="chef-containers">
             <div class="chef-title">
                 <h1>Our Chefs</h1>
             </div>
             <div class="chef-avatar-continer">
                 <img src="/img/avatar1.jpg" alt="Avatar-1" class="avatars">
                 <img src="/img/avatar2.jpg" alt="Avatar-2" class="avatars">
                 <img src="/img/avatar3.jpg" alt="Avatar-3" class="avatars">
                 <img src="/img/avatar4.jpg" alt="Avatar-4" class="avatars">
             </div>
         </div>
     </div>
     <div class="social-links">
        <div class="social-title">
           <h1>Our Social Links</h1> 
        </div>
        <div class="social-container">
            <img src="/img/facebook.png" alt="facebook" class="social">
            <img src="/img/instagram.png" alt="instagram" class="social">
            <img src="/img/youtube.png" alt="youtube" class="social">
        </div>
     </div>
     <div class='contact'>
             <div class="contact-title">
                 <h1>Contact developer</h1>
             </div>
             <div class="contact-container">
                 <div class="dev-avatar-container">
                     <img src="/img/dev-avatar.jpg" alt="Dev-avatar" class="dev-avatar">
                     <h2>Anurag Pattnayak</h1>
                 </div>
                 <div class="email">
                     <h2>anuragpattnayak07@gmail.com</h1>
                 </div>
                 <div class="instagram-link">
                     <h2>Instagram--&nbsp;&nbsp;</h1>
                     <a href="#">xalpha7</a>
                 </div>
             </div>
     </div>
 </div>
 </div>

 @endsection