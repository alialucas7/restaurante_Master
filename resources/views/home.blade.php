@extends('layouts.plantilla')
@section('titulo','Inicio') 


@section('contenido')
  <!-- Titulo Principal -->
  <div class="flex">
      <div class="flex-grow"></div>
        <!-- contenido central -->
        <div class=" text-red-500    flex-grow-0 ">
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
  <nav class=" miNav">
    <a href="#">Juegos</a>
    <a href="#2">Blogs</a>
    <a href="#3">Arcade</a>
    <div class="animation start-home "></div>
  </nav>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis atque, provident ab nostrum soluta ipsa sunt blanditiis reiciendis neque dolorum. Expedita, incidunt explicabo nihil eaque fugit sequi facilis aut. Obcaecati?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere tempora in iste reiciendis necessitatibus nam expedita. Autem ipsa recusandae nesciunt non hic porro maiores neque illo at asperiores. Modi, similique.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis tenetur hic quidem maxime quisquam doloribus qui libero saepe aspernatur quis ipsam, impedit, fugiat natus animi alias? Deserunt reprehenderit accusamus voluptates.</p>
  </div>  
</div>






@endsection
