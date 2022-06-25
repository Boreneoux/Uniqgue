<!-- Header Start -->
<header class="bg-transparent z-50 top-0 left-0 w-full flex items-center justify-around">
    <div class="container">
        <div class="flex items-center justify-around relative">
            <div class="px-2">
                <a href="<?= base_url('/'); ?>" class="font-normal text-2xl text-dark block py-8 lg:px-0 px-12">UNIQGUE</a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute left-4 mr-6 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left "></span>
                </button>
                <nav id="nav-menu" class="hidden absolute py-5 z-50 bg-white shadow-lg rounded-lg max-w-[250px] w-full left-4 top-full lg:block lg:static lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group"><a href="<?= base_url('/'); ?>" class="text-base text-black py-2 mx-12 group-hover:text-sky-700 flex font-normal font-lg">HOME</a></li>
                        <li class="group"><a href="<?= base_url('/catalogue'); ?>" class="text-base text-black py-2 mx-12 group-hover:text-sky-700 flex font-normal font-lg">CATALOGUE</a></li>
                        <li class="group"><a href="<?= base_url('/about-us'); ?>" class="text-base text-black py-2 mx-12 group-hover:text-sky-700 flex font-normal font-lg">ABOUT US</a></li>
                    </ul>
                </nav>
            </div>
            <div class="flex">
                <div class="mr-10 ml-12"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg></a></div>
                <div class=""><a href=""><svg width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12 2.5a5.5 5.5 0 00-3.096 10.047 9.005 9.005 0 00-5.9 8.18.75.75 0 001.5.045 7.5 7.5 0 0114.993 0 .75.75 0 101.499-.044 9.005 9.005 0 00-5.9-8.181A5.5 5.5 0 0012 2.5zM8 8a4 4 0 118 0 4 4 0 01-8 0z" />
                        </svg></a></div>
            </div>
        </div>
    </div>
</header>

<!-- Header End -->