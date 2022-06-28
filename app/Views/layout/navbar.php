<!-- Header Start -->

<header class="bg-transparent text-black py-8 w-full">
    <div class="container flex justify-around w-full mx-auto fixed bg-white py-6 top-0 md:static md:py-0 md:bg-transparent">
        <button id="hamburger" name="hamburger" type="button" class="block left-2 md:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left "></span>
        </button>
        <a href="<?= base_url('/'); ?>" class="font-normal text-2xl text-dark left-4 md:ml-6">UNIQGUE</a>
        <nav id="nav-menu" class="fixed top-20 bottom-0 w-3/5 -left-full transition-all duration-300 bg-[#3C4F77] md:bg-transparent md:static md:flex md:justify-center md:mx-auto">
            <ul class="block md:flex md:justify-center md:place-items-center">
                <li class="group"><a href="<?= base_url('/'); ?>" class="py-5 md:py-0 pl-4 text-xl md:text-lg text-white md:text-black mx-4 group-hover:text-sky-700 flex font-normal font-lg ">HOME</a></li>
                <li class="group"><a href="<?= base_url('/catalogue'); ?>" class="py-5 md:py-0 pl-4 text-xl md:text-lg text-white md:text-black mx-4 group-hover:text-sky-700 flex font-normal font-lg">CATALOGUE</a></li>
                <li class="group"><a href="<?= base_url('/about-us'); ?>" class="py-5 md:py-0 pl-4 text-xl md:text-lg text-white md:text-black mx-4 group-hover:text-sky-700 flex font-normal font-lg ">ABOUT US</a></li>
            </ul>
        </nav>
        <div class=""><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg></a></div>
        <div class="md:px-2 md:mr-6"><a href=""><svg width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 2.5a5.5 5.5 0 00-3.096 10.047 9.005 9.005 0 00-5.9 8.18.75.75 0 001.5.045 7.5 7.5 0 0114.993 0 .75.75 0 101.499-.044 9.005 9.005 0 00-5.9-8.181A5.5 5.5 0 0012 2.5zM8 8a4 4 0 118 0 4 4 0 01-8 0z" />
                </svg></a></div>
    </div>
</header>


<!-- Header End -->