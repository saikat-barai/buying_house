<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <link href="{{ asset('frontend/asset') }}/output.css" rel="stylesheet" />
        <link href="{{ asset('frontend/asset') }}/style.css" rel="stylesheet" />
    </head>
    <body>
        <header class="bg-white flex fixed w-full drop-shadow-lg z-20">
            <div class="container mx-auto flex justify-between px-2 py-5">
                <div><img width="200px" src="{{ asset('frontend/asset') }}/assets/logo title 1.png" /></div>
                <i
                    class="fa-solid fa-bars lg:hidden cursor-pointer text-2xl flex items-center text-ptagcolor navClick"
                ></i>
                <nav class="lg:flex hidden items-center justify-center">
                    <ul
                        class="uppercase flex gap-x-10 xl:gap-x-16 text-ptagcolor font-ru font-medium"
                    >
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('home') }}"
                        >
                            HOME
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('about') }}"
                        >
                            ABOUT
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('service') }}"
                        >
                            SERVICES
                        </a>
                        <a
                            class="cursor-pointer transition duration-300 ease-in-out nav_producthover"
                            href="{{ route('products') }}"
                        >
                            <span class="nav_product">
                                <ul class="flex flex-col gap-y-4">
                                    <li class="border-b pb-2">
                                        CIRCULAR KNIT ITEMS
                                    </li>
                                    <li class="border-b pb-2">
                                        SWEATER / FLAT KNIT
                                    </li>
                                    <li class="border-b pb-2">DENIM ITEMS</li>
                                    <li class="border-b pb-2">WOVEN ITEMS</li>
                                    <li>UNDERGARMENTS</li>
                                </ul>
                            </span>
                            Products
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('mission.and.vission') }}"
                        >
                            Mission & Vision
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="{{ route('contact') }}"
                        >
                            Contact Us
                        </a>
                    </ul>
                </nav>

                <nav
                    class="absolute hidden w-full top-16 left-0 bg-white p-5 navBar"
                >
                    <ul
                        class="uppercase flex flex-col gap-y-5 text-ptagcolor font-ru font-medium"
                    >
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="index.html"
                        >
                            HOME
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="about.html"
                        >
                            ABOUT
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="service.html"
                        >
                            SERVICES
                        </a>
                        <a
                            class="cursor-pointer transition duration-300 ease-in-out nav_producthover"
                            href="product.html"
                        >
                            <span class="nav_product">
                                <ul class="flex flex-col gap-y-4">
                                    <li class="border-b pb-2">
                                        CIRCULAR KNIT ITEMS
                                    </li>
                                    <li class="border-b pb-2">
                                        SWEATER / FLAT KNIT
                                    </li>
                                    <li class="border-b pb-2">DENIM ITEMS</li>
                                    <li class="border-b pb-2">WOVEN ITEMS</li>
                                    <li>UNDERGARMENTS</li>
                                </ul>
                            </span>
                            Products
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="mission.html"
                        >
                            Mission & Vision
                        </a>
                        <a
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                            href="contact.html"
                        >
                            Contact Us
                        </a>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div>
                <section class="pt-[74px] relative">
                    <div class="owl-carousel carousel1">
                        <div>
                            <img class="h-[100vh] object-cover" src="{{ asset('frontend/asset') }}/assets/bg1.jpg" />
                        </div>
                        <div>
                            <img class="h-[100vh] object-cover" src="{{ asset('frontend/asset') }}/assets/bg1.jpg" />
                        </div>
                        <div>
                            <img class="h-[100vh] object-cover" src="{{ asset('frontend/asset') }}/assets/buying-house.jpg" />
                        </div>
                        <div>
                            <img class="h-[100vh] object-cover" src="{{ asset('frontend/asset') }}/assets/buying-house.jpg" />
                        </div>
                        <div>
                            <img class="h-[100vh] object-cover" src="{{ asset('frontend/asset') }}/assets/buying-house.jpg" />
                        </div>
                    </div>
                    <div class="flex justify-center w-full gap-x-5 absolute top-[45%] z-[2]">
                        <a class="uppercase font-ru font-medium text-white px-6 py-2 button"><span class="hoverspan"></span>more
                            details</a>
                        <a class="uppercase font-ru font-medium text-white px-6 py-2 button"><span class="hoverspan"></span>get a
                            quate</a>
                    </div>
                </section>
        
                <section class="pt-20 bg-white">
                    <div class="container mx-auto px-2 md:flex gap-x-2 smd:max-md:text-justify">
                        <div class="md:w-1/2 smd:max-md:flex justify-center">
                            <img src="{{ asset('frontend/asset') }}/assets/buying-house.jpg" />
                        </div>
                        <div class="md:w-1/2">
                            <p class="font-ru text-primary font-medium smd:max-md:text-center smd:max-md:mt-5">
                                ABOUT LN Associate Limited
                            </p>
                            <h2 class="font-ru text-4xl mt-3 mb-4 smd:max-md:text-center">
                                About
                            </h2>
                            <div class="font-ru text-ptagcolor flex flex-col gap-y-2">
                                <p>
                                    We LN Associate Limited is one of the Leading
                                    Apparel Sourcing, Manufacturing and Buying
                                    office in Dhaka, Bangladesh since 2007.
                                </p>
                                <p>
                                    We are strongly capable to handle any products
                                    among Knit, Woven, Denim & Sweater for Men’s,
                                    Ladies , Boys and girls.
                                </p>
                                <p>
                                    Also we have a great number of sourcing of all
                                    kinds of raw materials and garment factories,
                                    textile mills & washing plants.
                                </p>
                                <p>
                                    we are exporting Circular Knit (T-Shirt, Polo
                                    Shirt, Tank Top or Vest, Ladies Blouse & Tops,
                                    Fleece, Polar Fleece), Flat Knit (Sweater 3gg,
                                    5gg, 7gg, 12gg, 14gg), Woven ( Shirt, Pants,
                                    Shorts), Denim (Long & short pants, yoga & cargo
                                    pants) & Under Garments (Lingerie, Swim Wear,
                                    Beach Wear etc.), Uniform, Children Wear,
                                    Fleece...
                                </p>
                                <div class="flex smd:max-md:justify-center gap-x-5 mt-7">
                                    <a
                                        class="uppercase font-ru font-medium text-primary px-6 smd:max-md:px-4 py-2 button !bg-white !z-10"><span
                                            class="hoverspan"></span>view more</a>
                                    <a
                                        class="uppercase font-ru !bg-white font-medium text-primary smd:max-md:px-4 px-6 py-2 button !z-10"><span
                                            class="hoverspan"></span>contact
                                        us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        
                <section class="pt-16 pb-8 bg-white">
                    <div class="container px-2 mx-auto md:flex">
                        <div class="md:w-[40%] mx-auto md:mr-7 xl:mr-16">
                            <img width="100%" src="{{ asset('frontend/asset') }}/assets/showroom.jpg" />
                            <div class="flex justify-center mt-7">
                                <h3 class="font-ru font-medium text-center text-ptagcolor text-lg">
                                    A Trusted apparels sourcing house in <br />
                                    The World
                                    <a class="text-primary underline">Buying House</a>
                                </h3>
                            </div>
                        </div>
                        <div class="md:w-[60%] md:flex flex-wrap">
                            <div class="md:w-[48%] border-b md:border-r pt-7">
                                <img src="{{ asset('frontend/asset') }}/assets/fectory.svg" class="w-16" />
                                <h4 class="font-ru text-2xl font-semibold my-5 text-textcolor">
                                    LN Associate Limited Overview
                                </h4>
                                <p class="text-ptagcolor font-ru font-semibold pb-7">
                                    We Bringing a revolutionary change in the
                                    Textile industry through products!
                                </p>
                            </div>
                            <div class="md:w-[48%] smd:max-md:border-b md:pl-5 pt-7">
                                <img src="{{ asset('frontend/asset') }}/assets/Production.svg" class="w-16" />
                                <h4 class="font-ru text-2xl font-semibold my-5 text-textcolor">
                                    Production Capability
                                </h4>
                                <p class="text-ptagcolor font-ru font-semibold pb-7">
                                    We’re try to be not just legally compliant but
                                    more than that.
                                </p>
                            </div>
                            <div class="md:w-[48%] pt-7">
                                <img src="{{ asset('frontend/asset') }}/assets/Company.svg" class="w-16" />
                                <h4 class="font-ru text-2xl font-semibold my-5 text-textcolor">
                                    Company History
                                </h4>
                                <p class="text-ptagcolor font-ru font-semibold pb-7">
                                    One of the largest & most reputed Buying House
                                    in Bangladesh & globe.
                                </p>
                            </div>
                            <div class="md:w-[48%] border-t md:border-l md:pl-5 pt-7">
                                <img src="{{ asset('frontend/asset') }}/assets/Fabric.svg" class="w-16" />
                                <h4 class="font-ru text-2xl font-semibold my-5 text-textcolor">
                                    Fabric Designs
                                </h4>
                                <p class="text-ptagcolor font-ru font-semibold pb-7">
                                    Gold trophy 5 years in a row for being the
                                    largest exporter
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
        
                <section class="pt-8 pb-24 bg-primary">
                    <div class="container px-2 mx-auto">
                        <h2 class="font-ru font-medium text-white text-3xl text-center pt-10">
                            OUR PRODUCTS
                        </h2>
                    </div>
                    <div class="owl-carousel carousel2 mt-16">
                        <div>
                            <img class="object-cover h-[300px]" src="{{ asset('frontend/asset') }}/assets/bg1.jpg" />
                        </div>
                        <div>
                            <img class="object-cover h-[300px]" src="{{ asset('frontend/asset') }}/assets/bg1.jpg" />
                        </div>
                        <div>
                            <img class="object-cover h-[300px]" src="{{ asset('frontend/asset') }}/assets/buying-house.jpg" />
                        </div>
                        <div>
                            <img class="object-cover h-[300px]" src="{{ asset('frontend/asset') }}/assets/buying-house.jpg" />
                        </div>
                        <div>
                            <img class="object-cover h-[300px]" src="{{ asset('frontend/asset') }}/assets/buying-house.jpg" />
                        </div>
                        <div>
                            <img class="object-cover h-[300px]" src="{{ asset('frontend/asset') }}/assets/buying-house.jpg" />
                        </div>
                        <div>
                            <img class="object-cover h-[300px]" src="{{ asset('frontend/asset') }}/assets/buying-house.jpg" />
                        </div>
                    </div>
                </section>
        
                <section class="pt-20 bg-[#00000090] pb-16">
                    <div class="container px-2 mx-auto">
                        <h2 class="font-ru font-medium text-white smd:max-md:text-xl text-2xl lg:text-4xl text-center">
                            The Textile,Product, And Apparel<br />
                            <span class="text-primary font-bold">Manufacturing</span>
                            Industries.
                        </h2>
                        <div class="flex smd:max-md:flex-wrap lg:gap-x-28 smd:max-md:justify-between my-10">
                            <div class="flex flex-col justify-center items-center mx-auto smd:max-md:w-[48%]">
                                <img src="{{ asset('frontend/asset') }}/assets/client.svg"
                                    class="w-24 border rounded-lg border-[#ffffffa1] p-5" />
                                <div class="bg-primary w-3 h-3 rounded-full mt-4"></div>
                                <p class="font-ru text-4xl font-semibold mt-5 mb-3 text-white">
                                    350
                                </p>
                                <p class="text-white font-ru font-medium pb-7">
                                    Trusted Clients
                                </p>
                            </div>
                            <div class="flex flex-col smd:max-md:w-[48%] justify-center items-center mx-auto">
                                <img src="{{ asset('frontend/asset') }}/assets/project.svg"
                                    class="w-24 text-white border rounded-lg border-[#ffffffa1] p-5" />
                                <div class="bg-primary w-3 h-3 rounded-full mt-4"></div>
                                <p class="font-ru text-4xl font-semibold mt-5 mb-3 text-white">
                                    250
                                </p>
                                <p class="text-white font-ru font-medium pb-7">
                                    Finished Projects
                                </p>
                            </div>
                            <div class="flex flex-col justify-center smd:max-md:w-[48%] items-center mx-auto">
                                <img src="{{ asset('frontend/asset') }}/assets/Production.svg"
                                    class="w-24 border rounded-lg border-[#ffffffa1] p-5" />
                                <div class="bg-primary w-3 h-3 rounded-full mt-4"></div>
                                <p class="font-ru text-4xl font-semibold mt-5 mb-3 text-white">
                                    25
                                </p>
                                <p class="text-white font-ru font-medium pb-7">
                                    Years Of Experience
                                </p>
                            </div>
                            <div class="flex flex-col smd:max-md:w-[48%] justify-center items-center mx-auto">
                                <img src="{{ asset('frontend/asset') }}/assets/view.svg"
                                    class="w-24 border rounded-lg border-[#ffffffa1] p-5" />
                                <div class="bg-primary w-3 h-3 rounded-full mt-4"></div>
                                <p class="font-ru text-4xl font-semibold mt-5 mb-3 text-white">
                                    45
                                </p>
                                <p class="text-white font-ru font-medium pb-7">
                                    Visited Conference
                                </p>
                            </div>
                        </div>
                        <p class="font-ru font-medium text-white text-center">
                            Don’t hesitate, contact us for better help and services.
                            <a class="underline text-primary">View More!</a>
                        </p>
                    </div>
                </section>
        
                <section class="bg-white py-16">
                    <div class="container px-2 mx-auto">
                        <h2 class="font-ru font-medium text-textcolor text-3xl text-center">
                            INDUSTRIES & PRODUCTION
                        </h2>
                        <div class="font-ru md:flex mt-10">
                            <div class="md:w-1/2">
                                <h5 class="text-textcolor font-medium text-2xl lg:text-4xl">
                                    We Give Top Production From
                                    <span class="font-bold text-3xl lg:text-5xl">Every Angle</span>
                                </h5>
                            </div>
                            <div class="md:w-1/2 smd:max-md:mt-5">
                                <p class="text-ptagcolor font-medium text-justify">
                                    LN Associate Limited is the largest peer-to-peer
                                    comparison initiative in the textile industry.
                                    It tracks the apparel material and home textile
                                    sector’s progress.
                                </p>
                            </div>
                        </div>
                        <div class="lg:flex mt-7 gap-x-5">
                            <div class="p-5 shadow-xl">
                                <img class="lg:w-[400px]" src="{{ asset('frontend/asset') }}/assets/showroom.jpg" />
                                <div class="flex justify-between items-center mt-5">
                                    <h6 class="font-ru text-3xl font-medium text-textcolor">
                                        Testing
                                    </h6>
                                    <i class="fa-solid fa-arrow-trend-up text-2xl text-textcolor"></i>
                                </div>
                            </div>
                            <div class="p-5 shadow-xl">
                                <img class="lg:w-[400px]" src="{{ asset('frontend/asset') }}/assets/showroom.jpg" />
                                <div class="flex justify-between items-center mt-5">
                                    <h6 class="font-ru text-3xl font-medium text-textcolor">
                                        Engineering
                                    </h6>
                                    <i class="fa-solid fa-arrow-trend-up text-2xl text-textcolor"></i>
                                </div>
                            </div>
                            <div class="p-5 shadow-xl">
                                <img class="lg:w-[400px]" src="{{ asset('frontend/asset') }}/assets/showroom.jpg" />
                                <div class="flex justify-between items-center mt-5">
                                    <h6 class="font-ru text-3xl font-medium text-textcolor">
                                        Fabric Dyeing
                                    </h6>
                                    <i class="fa-solid fa-arrow-trend-up text-2xl text-textcolor"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-7">
                            <a class="uppercase font-ru font-medium text-primary px-10 py-2 button !bg-white !z-10"><span
                                    class="hoverspan"></span>View More
                                Services!</a>
                        </div>
                    </div>
                </section>
        
                <section class="bg-white pt-8 pb-16 border-t">
                    <div class="container mx-auto px-2 xl:flex xl:gap-x-3 justify-between">
                        <div class="xl:w-[20%]">
                            <img width="200px" src="{{ asset('frontend/asset') }}/assets/logo title 1.png" />
                        </div>
        
                        <div class="xl:w-[60%] smd:max-xl:mt-5">
                            <p class="font-ru text-justify font-medium text-textcolor ml-2 lg:text-xl">
                                LN Associate Limited is operating in the textile
                                market, as the manufacture and trader. As years go
                                by the range of produced textiles products has
                                increased.
                            </p>
                        </div>
                        <div class="flex gap-x-2 xl:w-[20%] smd:max-xl:mt-5">
                            <i
                                class="fa-brands fa-facebook-f bg-slate-100 w-14 flex items-center justify-center h-14 p-4 shadow-lg rounded-full"></i>
                            <i
                                class="fa-brands fa-twitter w-14 bg-slate-100 flex items-center justify-center h-14 p-4 shadow-lg rounded-full"></i>
                            <i
                                class="fa-solid fa-envelope w-14 bg-slate-100 flex items-center justify-center h-14 p-4 shadow-lg rounded-full"></i>
                            <i
                                class="fa-brands fa-linkedin w-14 bg-slate-100 flex items-center justify-center h-14 p-4 shadow-lg rounded-full"></i>
                        </div>
                    </div>
                </section>
            </div>
            
        </main>

        <footer class="bg-[#0a0a0a] pt-16 pb-8">
            <div class="container mx-auto px-2 flex smd:max-md:flex-col smd:max-md:gap-y-7">
                <div class="md:w-[30%]">
                    <h6 class="font-ru text-white text-3xl mb-8">
                        Get Free Estimate
                    </h6>
                    <a
                        class="uppercase font-ru lg:font-medium text-white z-10 px-[10px] lg:px-8 py-2 button"
                        ><span class="hoverspan"></span>Request Online Form</a
                    >
                </div>
                <div class="md:w-[20%]">
                    <h6 class="font-ru text-white text-3xl mb-8">
                        Useful Links
                    </h6>
                    <ul
                        class="text-white font-ru flex flex-col gap-y-6 font-medium"
                    >
                        <li
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                        >
                            Services
                        </li>
                        <li
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                        >
                            About
                        </li>
                        <li
                            class="hover:text-primary cursor-pointer transition duration-300 ease-in-out"
                        >
                            Mission Vision
                        </li>
                    </ul>
                </div>
                <div class="md:w-[50%]">
                    <h6 class="font-ru text-white text-3xl mb-8">Contact Us</h6>
                    <div class="flex gap-x-5">
                        <i class="fa-solid fa-location-dot text-primary"></i>
                        <p class="text-white font-ru font-medium">
                            House-36, Road-9, Sector-4 Uttara, Dhaka-1230.
                        </p>
                    </div>
                    <div class="flex gap-x-5 mt-5">
                        <i class="fa-solid fa-phone text-primary"></i>
                        <p class="text-white font-ru font-medium">
                            +8801703017360<br />
                            +8801726225633
                        </p>
                    </div>
                    <div class="flex gap-x-5 mt-5">
                        <i class="fa-solid fa-envelope text-primary"></i>
                        <p class="text-white font-ru font-medium">
                            Md Zaherul Islam<br />
                            zaherul.islam1978@gmail.com<br />
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="font-ru px-2 font-medium text-white mt-12 border-t pt-8 border-[#27272771] flex justify-center"
            >
                Copyright © 2024 LN Associate Limited . Develope By
                <a
                    class="text-primary ml-1 smd:max-md:contents"
                    href="https://synexdigital.com/"
                    target="_blank"
                >
                    Synex digital</a
                >
            </div>
        </footer>

        <!-- JS start -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script>
            $(document).ready(function () {
                $(".carousel1").owlCarousel({
                    loop: true,
                    margin: 10,
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplaySpeed: 1000,
                    smartSpeed: 1000,
                    dots: false,
                    navText: [
                        "<div class='absolute smd:max-md:hidden top-[45%] right-5 z-[2] text-4xl bg-[#0000002e] w-[50px] h-[50px] rounded-full flex items-center justify-center text-white hover:bg-[#000000ad]'><i class='fa-solid fa-chevron-right'></i></div>",
                        "<div class='absolute top-[45%] left-5 z-[2] text-4xl bg-[#0000002e] w-[50px] h-[50px] smd:max-md:hidden rounded-full flex items-center justify-center text-white hover:bg-[#000000ad]'><i class='fa-solid fa-chevron-left'></i></div>",
                    ],
                    responsiveClass: true,
                    nav: true,
                });
                $(".carousel2").owlCarousel({
                    loop: true,
                    margin: 10,
                    items: 3,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplaySpeed: 1000,
                    smartSpeed: 1000,
                    dots: false,
                    navText: [
                        "<div class='absolute top-[35%] right-2 z-[2] text-xl bg-[#0000002e] w-[50px] h-[50px] rounded-full flex items-center justify-center text-white hover:bg-[#000000ad]'><i class='fa-solid fa-chevron-right'></i></div>",
                        "<div class='absolute top-[35%] left-2 z-[2] text-xl bg-[#0000002e] w-[50px] h-[50px] rounded-full flex items-center justify-center text-white hover:bg-[#000000ad]'><i class='fa-solid fa-chevron-left'></i></div>",
                    ],
                    responsiveClass: true,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 2,
                        },
                        1024: {
                            items: 3,
                        },
                    },
                });
            });
        </script>
        <script>
            let navClick = document.querySelector(".navClick");
            let navBar = document.querySelector(".navBar");

            navClick.addEventListener("click", function () {
                navBar.classList.toggle("hidden");
            });
        </script>
        <!-- JS end -->
    </body>
</html>
