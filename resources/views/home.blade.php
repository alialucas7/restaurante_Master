@extends('layouts.plantilla')
@section('titulo','Inicio') 


@section('contenido')
<div>
  
  <!-- Titulo Principal -->
  <div class="flex">
      <div class="flex-grow"></div>
        <!-- contenido central -->
        <div class="textito flex-grow-0 ">
            <div class="flex flex-row">  
                <svg class="w-10 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd" />
                </svg>
                <h1 class="py-2 font-black text-2xl sm:text-xl md:text-4xl lg:text-4xl">Fires-Game</h1>
            </div>
        </div>
        <!-- contenido central -->
      <div class="flex-grow"></div>
  </div>  


    <!-- Navbar -->
    <div class="sticky top-0 bg-black py-2 pb-4">
      <nav class=" miNav ">
        <a href="#">Juegos</a>
        <a href="gamee">Blogs</a>
        <a href="#3">Arcade</a>
        <div class="animation start-home"></div>
      </nav>
    </div>

  <!-- Juego de truco  tarjeta y los scores-->    
  <div class="flex items-center justify-center  ">  
    <div class="bg-image w-full min-h-screen flex flex-wrap justify-center items-center gap-3 py-5">
      <div class="backdrop w-10/12 md:w-1/4 bg-white bg-opacity-10 rounded p-3 text-white border border-gray-300 shadow-lg">
        <!-- header -->
        <div class="w-full mb-3 pb-3 border-b border-1 border-white">
          <h3 class="text-xl font-semibold text-shadow">Something Good</h3>
        </div>
        <!-- body -->
        <div>
          <img class="object-center" src="https://previews.123rf.com/images/ylivdesign/ylivdesign1708/ylivdesign170802465/83296583-tic-tac-toe-game-icon-cartoon-style.jpg" alt="image1" class="w-full h-48 object-cover mb-2">
          <p class="mb-3 tracking-wide text-base text-shadow">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, omnis.
          </p>
          <button class="backdrop bg-white bg-opacity-0 border border-white px-3 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-40 hover:bg-opacity-10 text-lg">
            Detail
          </button>
        </div>
      </div>
      <div class="hidden sm:block backdrop w-10/12 md:w-1/4 bg-white bg-opacity-10 rounded p-3 text-white border border-white shadow-lg">
        <!-- header -->
        <div class="w-full mb-3 pb-3 border-b border-1 border-white">
          <h3 class="text-xl font-semibold text-shadow">Something Good</h3>
        </div>
        <!-- body -->
        <div>
          <img src="https://i.postimg.cc/J4khxLqf/bg02.jpg" alt="image2" class="w-full h-48 object-cover mb-2">
          <p class="mb-3 tracking-wide text-base text-shadow">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, omnis.
          </p>
          <button class="backdrop bg-white bg-opacity-0 border border-white px-3 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-40 hover:bg-opacity-10 text-lg">
            Detail
          </button>
        </div>
      </div>
    </div>
  </div>





 













  <div class="z-40 bg-red-400 text-white">5</div>
  <div class="z-30   bg-yellow-400 text-white">4</div>
  <div class="z-20   bg-red-400 text-white">3</div>
  <div class="z-1   bg-blue-400 text-white">2</div>
  <div class="z-0   bg-white text-white">1</div>




    <!-- footer-->
    <!-- This is an example component -->
    <div class="mifooter">
      <footer class="flex flex-wrap items-center justify-between p-3 m-auto">
          <div class="container mx-auto flex flex-col flex-wrap items-center justify-between">
              
              <ul class="flex mx-auto text-black text-center">
                <li class="p-2 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white" width="24" height="24" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg></li>
                <li class="p-2 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white" width="24" height="24" viewBox="0 0 24 24"><path d="M21.231 0h-18.462c-1.529 0-2.769 1.24-2.769 2.769v18.46c0 1.531 1.24 2.771 2.769 2.771h18.463c1.529 0 2.768-1.24 2.768-2.771v-18.46c0-1.529-1.239-2.769-2.769-2.769zm-9.231 7.385c2.549 0 4.616 2.065 4.616 4.615 0 2.549-2.067 4.616-4.616 4.616s-4.615-2.068-4.615-4.616c0-2.55 2.066-4.615 4.615-4.615zm9 12.693c0 .509-.413.922-.924.922h-16.152c-.511 0-.924-.413-.924-.922v-10.078h1.897c-.088.315-.153.64-.2.971-.05.337-.081.679-.081 1.029 0 4.079 3.306 7.385 7.384 7.385s7.384-3.306 7.384-7.385c0-.35-.031-.692-.081-1.028-.047-.331-.112-.656-.2-.971h1.897v10.077zm0-13.98c0 .509-.413.923-.924.923h-2.174c-.511 0-.923-.414-.923-.923v-2.175c0-.51.412-.923.923-.923h2.174c.511 0 .924.413.924.923v2.175z" fillRule="evenodd" clipRule="evenodd"/></svg></li>
                <li class="p-2 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></li>
              </ul>
              <div class="flex mx-auto text-black text-center">
                  Copyright Business Name © 2021
              </div>
          </div>
      </footer>
    </div> 


</div>
@endsection
