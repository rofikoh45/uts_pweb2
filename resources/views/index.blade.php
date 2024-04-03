<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rofikoh Website</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-[#7A7A7A] to-black">
    <nav class="flex mx-auto max-w-full py-5 justify-between fixed text-center items-center">
        <div class=" ml-20 space-x-10">
            <h1 class="text-white font-extrabold text-xl">PORTFOLIO</h1>
        </div>

        <div class="ml-[690px] space-x-7">
            <a href="#home" class="text-white hover:text-red-600 font-extrabold text-sm">HOME</a>
            <a href="#portfolio" class="text-white hover:text-red-600 font-extrabold text-sm">PORTFOLIO</a>
            <a href="#blog" class="text-white hover:text-red-600 font-extrabold text-sm">BLOG</a>
            <a href="#contact" class="text-white hover:text-red-600 font-extrabold text-sm">CONTACT</a>
        </div>
    </nav>

    <section name="home" id="home" class="max-w-full mx-auto flex py-48 px-0 justify-between">
        <div class="ml-20 mt-20">
            <h1 class="text-white text-6xl font-bold">MY NAME IS</h1>
            <h1 class="text-white text-6xl font-bold">ROFIKOH  IKOH</h1>
            <div class="bg-yellow-400 w-[150px] mt-5 ml-28">
                <h1 class="py-3 text-center text-lg font-semibold">I'M STUDENT</h1>
            </div>
        </div>

        <div class="mr-48">
            <img src="https://i.ibb.co/Wn0HCY7/Rectangle-5.png" alt="" class="w-[310px]">
        </div>
    </section>

    <section name="portfolio" id="portfolio" class="max-w-full mx-auto flex py-32 px-0 justify-between bg-[#E5E0E0]">
        <div class="ml-28">
            <img src="https://i.ibb.co/Wn0HCY7/Rectangle-5.png" alt="" class="w-[310px]">
        </div>

        <div class="text-center mx-auto">
            <h1 class="text-black text-5xl font-extrabold">HELLO</h1>
            <div class="mt-10 text-black text-5xl text-left">
                <p>Perkenalkan nama saya Rofikoh</p>
                <p>saya Mahaiswa Politkenik Harber</p>
                <p>Prodi Teknik Komputer.</p>      
        </div>   
        </div>
    </section>

    <section name="blog" id="blog" class="max-w-full mx-auto flex flex-wrap py-32 px-0 justify-between bg-[#E5E0E0]">
        <div class="mx-96">
            <h1 class="text-4xl text-black ml-48 font-bold">MY BLOG</h1>
        </div>

        <!-- <div class="ml-28 flex flex-wrap"> -->
            <div class="text-black flex flex-wrap ml-44 mt-12">
                <div class="ml-20 mr-40 mb-5">
                    <img src="https://i.ibb.co/c2Qz4hQ/Rectangle-7.png" alt="" class="w-[300px]">
                    <p class="text-xl font-semibold mt-5">saya suka mengedit foto</p>
                    <p class="text-xl font-semibold">atau mengedit foto di canva</p>
                </div>

                <div>
                    <img src="https://i.ibb.co/xfBTFTL/IMG-20240319-WA0031-1.png" alt="" class="w-[300px]">
                </div>
            </div>
        <!-- </div> -->
    </section>

    <section name="blog" id="blog" class="max-w-full mx-auto flex flex-wrap py-32 px-0 justify-between bg-[#373737]">
        <div class="mx-96">
            <h1 class="text-5xl text-white ml-36 font-bold">CONTACT ME</h1>
        </div>

            <div class="text-white flex flex-wrap ml-44 mt-12">
                <div class="ml-7 mr-40 mb-5">
                    <h1 class="text-5xl font-semibold mt-5 italic">081215847170</h1>
                    <h1 class="text-5xl font-semibold mt-5 italic">rrofikoh24@gmail.com</h1>
                    <h3 class="text-2xl font-semibold mt-5 italic">Tegal, Jawa Tengah, Indonesia</h3>
                </div>

                <div class="-mt-10 -ml-20">
                    <img src="https://i.ibb.co/0VStS6z/Rectangle-10.png" alt="" class="w-[420px]">
                </div>
            </div>
    </section>
</body>
</html>