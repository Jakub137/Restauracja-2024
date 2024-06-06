<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Strona Restauracji" />
<title>Restauracja</title>
@vite('resources/css/app.css')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-white">
<header class="relative h-screen bg-cover bg-center" style="background-image: url('asset/background.jpg')">
    
        <div class="nav-bar fixed w-full flex justify-between items-center p-5 bg-black bg-opacity-100 z-50">
            <div class="left_top flex items-center">
                <img src="asset/hamburger.svg" alt="Logo restauracji" class="w-12">
                <h1 class="ml-2 mt-0 text-5xl font-bold text-white">Smakosze</h1>
            </div>
            <nav>  
                <ul class="flex space-x-8 text-white text-lg">
                    <li><a href="#">O nas</a></li>
                    <li><a href="#">Galeria</a></li>
                    <li><a href="#">Szefowie kuchni</a></li>
                    @if (Route::has('login'))                          
                    @auth 
                    <li>
                        <a href="{{ url('/dashboard') }}">Login</a>                            
                    </li>
                    @else 
                    <li>
                        <a href="{{ route('login') }}">Zaloguj się</a>                
                    </li>
                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">Rejestracja</a>
                    </li>                                                                                                                                                   
                                    @endif
                                @endauth                            
                        @endif
                    <li><a href="#" class="bg-orange-500 py-2 px-4 rounded-full">Recenzje</a></li>
                </ul>
            </nav>  
        </div>
        <div class="main-content text-center text-white absolute top-1/2 left-3/4 transform -translate-x-3/4 -translate-y-1/2">
            <h1 class=" text-4xl font-semibold  AlexBrush-Regular">Twoje smakowe podróże zaczynają się właśnie teraz! Zajrzyj do naszego menu i zanurz się w smakach, które Cię zaskoczą.</h1>
            <button class="mt-5 px-8 py-3 text-2xl border border-white rounded-full hover:bg-white hover:text-black transition">Menu</button>
        </div>
    </header>

    <div class="about_section relative bg-white py-16">
        <div class="info flex flex-col">
            <div class="about_image w-full p-8">
                <img src="asset/background2.jpg" alt="Wnętrze restauracji" class="w-full h-auto rounded-lg">
            </div>
            <div class="about_text w-1/2 bg-yellow-100 bg-opacity-60 p-8 rounded-lg absolute top-3/4 left-1/2 transform -translate-x-1 -translate-y-1/2">
                <h2 class="text-3xl font-bold mb-4">Kim jesteśmy?</h2>
                <p class="text-lg leading-relaxed">Restauracja "Smakosze" została założona w 2017 roku przez troje przyjaciół, którzy dzielili wspólną pasję do gotowania i dzielenia się wyjątkowymi smakami z innymi. Każdy z założycieli wnosił do przedsięwzięcia swoje unikalne umiejętności i doświadczenia, co pozwoliło stworzyć miejsce, które szybko zyskało uznanie w lokalnej społeczności. Zainspirowani kulinarnymi podróżami po różnych zakątkach świata, przyjaciele postanowili, że ich restauracja będzie miejscem, gdzie można odkrywać różnorodne smaki i techniki kulinarne. "Smakosze" szczycą się tym, że serwują dania przygotowywane z najwyższej jakości, lokalnych produktów, co każdego dnia przyciąga do restauracji rzesze smakoszy poszukujących autentycznych doznań.</p>
            </div>
        </div>
    </div>
<div class="div_menu ml-20 mb-20 mt-20">
    <div class="napis_menu text-9xl font-bold flex justify-center bg-black text-white rounded-lg pb-4 w-1/4">Menu</div>
</div>
    <div class="przystawki text-center bg-white py-16 mx-4">
        <h2 class="text-5xl font-bold mb-8">Przystawki</h2>
        <div class="appetizers_grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="appetizers">
                <img src="asset/carpacciowołowe.jpg" class="w-full h-auto rounded-lg">
                <p class="mt-2 text-xl">Carpaccio wołowe</p>
            </div>
            <div class="appetizers">
                <img src="asset/carpacciozburaka.jpg" class="w-full h-auto rounded-lg">
                <p class="mt-2 text-xl">Carpaccio z buraka</p>
            </div>
            <div class="appetizers">
                <img src="asset/carpacciozłososia.jpg" class="w-full h-auto rounded-lg">
                <p class="mt-2 text-xl">Carpaccio z łososia</p>
            </div>
            <div class="appetizers">
                <img src="asset/grzankizgrzybami.jpg" class="w-full h-auto rounded-lg">
                <p class="mt-2 text-xl">Grzanki z grzybami</p>
            </div>
            <div class="appetizers">
                <img src="asset/oyakata.jpg" class="w-full h-auto rounded-lg">
                <p class="mt-2 text-xl">Oyakata</p>
            </div>
            <div class="appetizers">
                <img src="asset/deskaserów.jpg" class="w-full h-auto rounded-lg">
                <p class="mt-2 text-xl">Deska serów</p>
            </div>
        </div>
    </div>

    <figure class="carpaccio2 my-8">
        <img src="asset/carpacciov2.jpg" class="w-4/5 mx-auto rounded-lg">
    </figure>

    <div class="dania_glowne text-center bg-white py-16 mx-4">
        <h2 class="text-5xl font-bold mb-8">Dania Główne</h2>
        <div class="dishes_grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="dishes">
                <img src="asset/schabowy.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Kotlet schabowy</p>
            </div>
            <div class="dishes">
                <img src="asset/mielony.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Kotlet mielony</p>
            </div>
            <div class="dishes">
                <img src="asset/zeberka.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Żeberka z grilla</p>
            </div>
            <div class="dishes">
                <img src="asset/karkowka.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Karkówka z grilla</p>
            </div>
            <div class="dishes">
                <img src="asset/losos.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Łosoś z grilla</p>
            </div>
            <div class="dishes">
                <img src="asset/pstrag.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Pstrąg z grilla</p>
            </div>
        </div>
    </div>

    <div class="salatki text-center bg-white py-16 mx-4">
        <h2 class="text-5xl font-bold mb-8">Sałatki</h2>
        <div class="salad_grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="salad">
                <img src="asset/salatkagrecka.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Sałatka grecka</p>
            </div>
            <div class="salad">
                <img src="asset/salatkagyros.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Sałatka gyros</p>
            </div>
            <div class="salad">
                <img src="asset/salatkajerzynowa.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Sałatka jerzynowa</p>
            </div>
            <div class="salad">
                <img src="asset/salatkakrewetki.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Sałatka z krewetkami</p>
            </div>
            <div class="salad">
                <img src="asset/salatkakurczak.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Sałatka z kurczakiem</p>
            </div>
            <div class="salad">
                <img src="asset/salatkastudencka.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Sałatka studencka</p>
            </div>
        </div>
    </div>

    <div class="zupy text-center bg-white py-16 mx-4">
        <h2 class="text-5xl font-bold mb-8">Zupy</h2>
        <div class="soup_grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="soup">
                <img src="asset/zupagrochowa.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Zupa grochowa</p>
            </div>
            <div class="soup">
                <img src="asset/zupagrzybowa.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Zupa grzybowa</p>
            </div>
            <div class="soup">
                <img src="asset/zupapomidorowa.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Zupa pomidorowa</p>
            </div>
            <div class="soup">
                <img src="asset/rosol.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Rosół</p>
            </div>
            <div class="soup">
                <img src="asset/zurekstaropolski.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Zurek staropolski</p>
            </div>
            <div class="soup">
                <img src="asset/barszczbialy.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Barszcz biały</p>
            </div>
        </div>
    </div>

    <div class="desery text-center bg-white py-16 mx-4">
        <h2 class="text-5xl font-bold mb-8">Desery</h2>
        <div class="desserts_grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="desserts">
                <img src="asset/3bit.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Ciasto 3 bit</p>
            </div>
            <div class="desserts">
                <img src="asset/karpatka.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Ciasto karpatka</p>
            </div>
            <div class="desserts">
                <img src="asset/sernik.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Ciasto sernik</p>
            </div>
            <div class="desserts">
                <img src="asset/deserlodowy.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Desery lodowe</p>
            </div>
            <div class="desserts">
                <img src="asset/zapiekanejablko.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Zapiekane jabłko</p>
            </div>
            <div class="desserts">
                <img src="asset/pannacotta.jpg" class="w-full h-80 rounded-lg">
                <p class="mt-2 text-xl">Deser Panna Cotta</p>
            </div>
        </div>
    </div>

    <div class="recommendation bg-white py-16 relative">
        <div class="rcm flex flex-col lg:flex-column lg:space-x-8">
            <div class="rcm_image w-full p-8">
                <img src="asset/polecajka.jpg" alt="Danie polecane przesz szefów kuchni" class="w-full h-auto rounded-lg">
            </div>
            <div class="rcm_text w-full lg:w-1/2 bg-yellow-100 bg-opacity-60 p-8 rounded-lg absolute top-3/4 left-1/3 transform -translate-x-1/2 -translate-y-1/2">
                <h2 class="text-3xl font-bold mb-4">Danie polecane przez szefów kuchni</h2>
                <p class="text-lg leading-relaxed">Z przyjemnością polecamy nasze wyjątkowe danie - pieczone żeberka BBQ z ziemniaczkami, które zostały uznane przez naszych szefów kuchni za prawdziwy majstersztyk kulinarnej sztuki. Nasze żeberka, starannie marynowane w aromatycznych przyprawach, poddawane są długiemu procesowi pieczenia, aby osiągnąć idealną soczystość i bogactwo smaku. Ich wyjątkowy aromat i intensywny smak są owocem troski o każdy szczegół podczas przygotowania. Towarzyszące im chrupiące ziemniaczki, starannie pieczone, stanowią doskonałe uzupełnienie dla tego wykwintnego dania, podkreślając jego wyjątkowość i satysfakcję, którą zapewnia każdy kęs.</p>
            </div>
        </div>
    </div>

    <div class="chefs text-center bg-white py-16">
        <h2 class="text-5xl font-bold mb-20">Szefowie kuchni</h2>
        <div class="chefs_grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
            <div class="chef">
                <img src="asset/chef_Demkowski.jpg" class="w-60 h-60 shadow-2xl shadow-black rounded-full mx-auto">
                <p class="mt-4 text-xl">Szef kuchni</p>
            </div>
            <div class="chef">
                <img src="asset/chef_Brożyna.jpg" class="w-60 h-60 rounded-full mx-auto">
                <p class="mt-4 text-xl">Właściciel</p>
            </div>
            <div class="chef">
                <img src="asset/chef_Janiec.png" class="w-60 h-60 rounded-full mx-auto">
                <p class="mt-4 text-xl">Zastępca szefa kuchni</p>
            </div>
        </div>
    </div>
<div class="div_recenzje relative left-1/2 ml-20">
    <div class="napis_recenzje text-8xl font-bold py-6 bg-orange-600 text-white text-center rounded-lg my-16 w-1/3">Recenzje</div>
</div>
    <section class="komentarze text-center bg-white py-16">
    @forelse($data as $item)
        <div class="comment_1 flex items-center bg-gray-100 p-4 rounded-lg shadow-md mt-8 w-2/3 mx-auto">
            <figure class="icon w-10 mr-4"><img src="asset/hamburger.svg"></figure>
            <div>
                <p class="author_1 text-xl font-bold">{{ $item->id }} Smakosz</p>
                <p class="andrzej_comment text-lg mt-2">{{ $item->message}}</p>
                <p class="andrzej_comment text-lg mt-2">{{ $item->updated_at}}</p>
            </div>
        </div>
    @empty
    @endforelse
    </section>

    <footer class="fixed bottom-0 right-0 p-2 bg-white text-black text-sm">copyright © 2024 Admin</footer>
</body>
</html>
