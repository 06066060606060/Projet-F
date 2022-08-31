
<?php if (!defined('APP_VERSION')) die("Yo, what's up?"); ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@900,700,500,301,701,300,501,401,901,400&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="<?= active_theme("url")."/assets/css/style.css" ?>" />
    <link rel="stylesheet" href="<?= active_theme("url")."/assets/css/animate.min.css" ?>" />
    <title>Home</title>
</head>

<body class="bg-gray-50">
    <!-- ________________________________________BlocK 1_+_navbar____________________________________________ -->
    <div class="block1"></div>
    <header class="max-w-screen-xl px-4 mx-auto">
        <div class="flex items-center justify-between h-16">
            <div class="flex-1 md:flex md:items-center md:gap-12">

                <span class="sr-only">Home</span>
                <img src="<?= active_theme("url") . "/assets/img/Logo.png" ?>" class="w-[212px] h-[54px]">

            </div>

            <div class="md:flex md:items-center md:gap-12">
                <nav class="hidden md:block" aria-labelledby="header-navigation">
                    <h2 class="sr-only" id="header-navigation"></h2>

                    <ul class="flex items-center gap-6 text-base font-bold">
                        <li>
                            <a class="text-white transition-colors duration-300 transform hover:text-gray-600 pt-8" href="./how.html">
                                How it works
                            </a>
                        </li>

                        <li>
                            <a class="text-white transition-colors duration-300 transform hover:text-gray-600" href="./results.html">
                                Results
                            </a>
                        </li>

                        <li>
                            <a class="text-white transition-colors duration-300 transform hover:text-gray-600" href="./faq.html">
                                FAQ
                            </a>
                        </li>

                        <li>
                            <a class="text-white transition-colors duration-300 transform hover:text-gray-600" href="./">
                                Sign up
                            </a>
                        </li>

                        <li>
                            <a class="text-white transition-colors duration-300 transform hover:text-gray-600" href="./">
                                Login
                            </a>
                        </li>

                    </ul>
                </nav>

                <div class="flex items-center gap-4">
                    <div class="hidden md:flex lg:flex">
                        <a class="px-5 py-2.5 text-sm text-gray-700 bg-white rounded-lg font-black  transition-colors duration-300 transform hover:bg-blue-800 hover:text-white shadow-md"
                            href="./">
                            CONTACT US
                        </a>
                    </div>
                    <!-- menu mobile -->
                    <div class="block md:hidden" id="scrollM">
                        <div class="hamburger-menu">
                            <input id="menu__toggle" type="checkbox" />
                            <label class="menu__btn" for="menu__toggle">
                                <span></span>
                            </label>

                            <ul class="menu__box">
                                <li><a class="menu__item" href="./how.html">How it works</a></li>
                                <li><a class="menu__item" href="./results.html">Results</a></li>
                                <li><a class="menu__item" href="./faq.html">FAQ</a></li>
                                <li><a class="menu__item" href="#">Sign up</a></li>
                                <li><a class="menu__item" href="#">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="max-w-screen-xl px-4 mx-auto">
        <div class="container mx-auto flex px-5 pt-20 md:flex-row flex-col relative">
            <img src="<?= active_theme("url") . "/assets/img/float_logo.png" ?>" class="float_logo"></img>
            <div
                class="lg:flex-grow md:w-2/3 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font text-white capitalize drop-shadow">Get Famous And Earn <br> New Customers With
                    <br>The Best Instagram Bot
                </h1>
                <p class="mb-8 mt-6 leading-relaxed text-white text-base font-bold drop-shadow">SoGrowth is the best bot
                    to get
                    hundreds of real followers, views and engagement per DAY. Our bot is secure and practicing the
                    latest 2022 methods of growth hacking following the new Instagram updates. Get famous on
                    Instagram
                    fast!</p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-gray-700  bg-white py-3 px-8 focus:outline-none transition-colors duration-300 transform hover:bg-blue-800 hover:text-white rounded-lg font-black text-sm shadow-md">FREE
                        7-DAY TRIAL</button>
                </div>
            </div>
            <div class="lg:w-full md:w-1/2 pb-16">
                <img class="object-cover object-center rounded animate__animated animate__pulse animate__delay-1s"
                    alt="hero" src="<?= active_theme("url") . "/assets/img/image_hero.png" ?>">
            </div>
        </div>
    </section>
    </div>





    <!-- ________________________________________how it work______________________________________________ -->
    <div class="block4"></div>
    <section class="text-gray-600 max-w-screen-xl px-4 mx-auto pt-8">
        <h1 class="title-font text-4xl font-black text-gray-900 mb-3 text-center pb-8 capitalize z-10">How it Works</h1>
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="p-4 md:w-1/3 ">
                    <div class="h-full rounded-lg overflow-hidden bg-[#FFD583] shadow-md">
                        <img class="img_anim object-center w-full" src="<?= active_theme("url") . "/assets/img/Saly-2.png" ?>" alt="">
                        <div class="p-6 bg-white  h-[274px]">
                            <h1
                                class="title-font2 text-2xl md:text-xl lg:text-2xl font-black text-gray-900 mb-3 text-center capitalize">
                                Sign
                                Up</h1>
                            <p class="leading-relaxed mb-3 text-lg md:text-sm lg:text-base">Sign up to SoGrowth form by
                                selecting a plan with just a
                                few
                                clicks. You can get a 7 days trial and can cancel your subscription at anytime by
                                contacting our support</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="h-full rounded-lg overflow-hidden bg-blue-300 shadow-md">
                        <img class="img_anim object-center w-full" src="<?= active_theme("url") . "/assets/img/Saly-3.png" ?>" alt="">
                        <div class="p-6 bg-white h-[274px]">

                            <h1
                                class="title-font2 text-2xl md:text-xl lg:text-2xl font-black text-gray-900 mb-3 text-center capitalize">
                                Connect tool to your account
                            </h1>
                            <p class="leading-relaxed mb-3 text-lg md:text-sm lg:text-base">Our team will connects our
                                bot to your Instagram account
                                within 24 hours. Bot will work side-by-side on your account to engage with ONLY
                                Active
                                followers of your target.</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="h-full rounded-lg overflow-hidden bg-[#FFAF83] shadow-md">
                        <img class="img_anim object-center w-full" src="<?= active_theme("url") . "/assets/img/Saly-11.png" ?>" alt="">
                        <div class="p-6 bg-white  h-[274px]">
                            <h1
                                class="title-font2 text-2xl md:text-xl lg:text-2xl font-black text-gray-900 mb-3 text-center capitalize">
                                Growth
                            </h1>
                            <p class="leading-relaxed mb-3  text-lg md:text-sm lg:text-base">Our bot uses safe and
                                time-tested organic strategies.
                                With
                                consistent social interactions, we connect with the right audience, and organically
                                grow
                                your followers over time.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>



    <!-- _______________________________________a brand new______________________________________________ -->
    <section class="pt-8">
        <div class="max-w-screen-xl mx-auto pb-16">
            <card class="text-gray-600 md:px-8 px-2 pt-14">
                <div class="container mx-auto flex md:px-5 py-8 md:flex-row flex-col items-center">
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-[366px]">
                        <img class="object-cover object-center rounded p-8" alt="" src="<?= active_theme("url") . "/assets/img/Group.png" ?>">
                    </div>
                    <div
                        class="lg:flex-grow md:w-1/2 lg:pr-14 md:pl-14 flex flex-col md:items-start md:text-left md:mb-0 items-center text-center ">
                        <h1 class="text-2xl md:text-4xl mb-6 font-black text-gray-900 capitalize">A brand new <span
                                style="color: #0D59EF">powerfull</span>
                            tool</h1>
                        <p class="leading-relaxed text-gray-500 font-medium px-4 md:px-0">Risus in nibh a at. Nulla
                            rhoncus, libero
                            suscipit elementum elementum. Justo, aliquet maecenas a mauris faucibus. Pellentesque elit
                            vitae, et aenean sit vitae at elit. Egestas pellentesque mauris libero mauris at quam
                            pretium. Id et amet, id etiam tellus consectetur rhoncus lectus sit. Sociis eu justo, massa
                            eget quis maecenas turpis sagittis, neque. Malesuada nisi.e </p>
                    </div>
                </div>
            </card>

            <card class="text-gray-600 md:px-12 px-2 mx-auto">
                <div class="container mx-auto flex md:px-12 md:flex-row flex-col-reverse items-center">
                    <div
                        class="lg:flex-grow md:w-1/2 flex flex-col md:items-start md:text-left items-center text-center lg:ml-20">
                        <h1 class="text-2xl md:text-4xl mb-6 font-black text-gray-900 capitalize px-4 md:px-0">How our
                            bot bring
                            you<br>
                            <span style="color: #0D59EF">hundreds of followers</span> and engagement per day?
                        </h1>
                        <p class="leading-relaxed text-gray-500 font-medium px-4 md:px-0">Risus in nibh a at. Nulla
                            rhoncus, libero
                            suscipit elementum elementum. Justo, aliquet maecenas a mauris faucibus. Pellentesque elit
                            vitae, et aenean sit vitae at elit. Egestas pellentesque mauris libero mauris at quam
                            pretium. Id et amet, id etiam tellus consectetur rhoncus lectus sit. Sociis eu justo, massa
                            eget quis maecenas turpis sagittis, neque. Malesuada nisi.</p>
                    </div>
                    <div class="lg:p-8 lg:w-full lg:ml-8 md:w-1/2 w-[366px]">
                        <img class="object-cover object-center rounded p-12 lg:ml-8" alt="" src="<?= active_theme("url") . "/assets/img/Group2.png" ?>">
                    </div>
                </div>
            </card>
        </div>
    </section>

    <!-- ________________________________________our stats______________________________________________ -->
    <section class="bg-gray-50 pt-8">
        <div class="max-w-screen-xl mx-auto">
            <card class="text-gray-600 md:px-8 px-2">
                <div class="container mx-auto flex lg:px-5 md:flex-row flex-col items-center">
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full">
                        <img class="object-cover object-center px-8 md:px-2" alt="" src="<?= active_theme("url") . "/assets/img/Group4.png" ?>">
                    </div>
                    <div
                        class="lg:flex-grow md:w-1/2 lg:pr-14 md:pl-14 flex flex-col md:items-start md:text-left md:mb-0 items-center text-center mx-4 md:mx-0">
                        <h1 class="text-3xl md:text-4xl my-6 font-black text-gray-900 capitalize">Our statistics</h1>
                        <div class="flex flex-col items-center justify-center pb-6">
                            <div class="flex -space-x-4">
                                <img alt="" class="w-10 h-10 border rounded-full "
                                    src="https://source.unsplash.com/40x40/?portrait?1">
                                <img alt="" class="w-10 h-10 border rounded-full "
                                    src="https://source.unsplash.com/40x40/?portrait?2">
                                <img alt="" class="w-10 h-10 border rounded-full "
                                    src="https://source.unsplash.com/40x40/?portrait?3">
                                <span class="mt-2.5 pl-6 text-sm font-medium"><span class="font-bold"
                                        style="color: #0D59EF">+10K</span> People are already with us</span>
                            </div>
                        </div>
                        <div id="stats1">
                            <p class="block leading-relaxed text-gray-500 font-medium text-left px-2">There are many
                                variations of
                                passages of
                                Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected
                                humour, or randomised words which don't look even slightly believable. If you are going
                                to
                                use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                hidden
                                in the middle of text. </p>
                        </div>
                        <div id="stats2" class="hidden">
                            <p class="leading-relaxed text-gray-500 font-medium text-left px-2">
                                Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected
                                humour, or randomised words which don't look even slightly believable. If you are going
                                to
                                use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                hidden
                                in the middle of text.There are many variations of
                                passages of </p>
                        </div>
                        <div class="flex">
                            <button onclick="stats1();"
                                class="mt-4 text-gray-700 bg-[#0D59EF] border-0 py-3 px-3 focus:outline-none hover:bg-gray-400 rounded transition-colors duration-300 transform text-lg shadow-md">
                                <img class="h-4 w-4" src="<?= active_theme("url") . "/assets/img/left.png" ?>">
                            </button>
                            <button onclick="stats2();"
                                class="mt-4 ml-4 text-gray-700 bg-[#0D59EF] border-0 py-3 px-3 focus:outline-none hover:bg-gray-400 rounded transition-colors duration-300 transform  text-lg shadow-md">
                                <img class="h-4 w-4" src="<?= active_theme("url") . "/assets/img/right.png" ?>">
                            </button>
                        </div>
                    </div>
                </div>
            </card>
    </section>

    <!-- _______________________________________pricing ____________________________________________ -->

    <section>
        <div class="relative items-center w-full mx-auto md:px-16 lg:px-20 max-w-7xl">
            <div>
                <div class="flex flex-col items-center pt-32">
                    <h1 class="text-3xl md:text-4xl mb-4 font-black text-gray-900 capitalize px-4">Pricing plans for
                        <span style="color: #0D59EF">all use cases</span>
                    </h1>
                    <p class="leading-relaxed text-gray-500 font-medium max-w-xl p-2 px-4 text-center text-lg ">You get
                        one week for free.
                        Our
                        prices
                        are variable depending on the number of accounts and the duration of the subscription </p>
                </div>

                <div class="slider mt-4 mx-auto px-16">
                    <input type="text" id="textInput" value="33" class="hidden">
                    <input type="text" id="textInputr" value="1"
                        class="w-8 bg-[#0D59EF] rounded-lg text-white pl-[12px] mb-2 pointer-events-none ml-[31%]">
                    <input id="slider" onchange="changeHandler(this), updateTextInput(this.value);"
                        onpointermove="changeHandler(this), updateTextInput(this.value);"
                        class="w-full cursor-pointer accent-[#0D59EF] rounded-full " type="range" min="0" max="100"
                        step="3" value="33" />
                </div>

                <div id="react1" style="display: block" class="relative">
                    <div class="relative px-14 pb-14 pt-8 lg:grid lg:grid-cols-2 rounded-xl">
                        <!-- section gauche -->
                        <div
                            class="relative flex flex-col p-12 bg-white rounded-2xl shadow-md z-10 border-t-4 border-[#0D59EF]">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-[#0D59EF]">Pro - Weekly</h3>
                                <p class="flex items-baseline mt-4 text-[#1F2D49]">
                                    <span class="text-5xl font-extrabold tracking-tight">$250</span>
                                </p>
                                <ul role="list" class="pt-6 mt-6 py-4 space-y-2">
                                    <p class="text-md font-semibold text-neutral-600 max-w-[220px]">Explode your
                                        engagement
                                        /
                                        <br> followers and gain new customers.<br> <br>
                                        Start the rapid Instagram account growth!
                                    </p>
                                </ul>
                            </div>
                            <div class="z-50 rounded-lg pt-8">
                                <a href="" type="highlight"
                                    class="w-full items-center block px-10 py-3.5 text-base font-medium text-center text-white shadow-md rounded-xl transition-colors duration-300 transform bg-[#0D59EF] hover:bg-gray-400">
                                    7-Day Free Trial </a>
                            </div>
                        </div>

                        <!-- section droite -->
                        <div class="relative flex flex-col md:py-8 lg:py-12 lg:pr-16">
                            <div class="relative flex-1 bg-[white] p-6 rounded-r-2xl">
                                <h3 class="text-xl font-semibold text-neutral-600">What’s included</h3>
                                <ul role="list" class="mt-4 space-y-2 text-sm">
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4 rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Avg. 400+ Reel Organic Followers/week</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Targeted Audience</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">7 Days Free Trial</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Intelligent Growth</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Exclusive access to weekly updates</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Full setup on your account</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Secure by free high-quality 4g proxy</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Normal support</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Account statistics</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Interactive Dashboard</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="react2" style="display: none" class="relative">
                    <div class="relative px-14 pb-14 pt-8  lg:grid lg:grid-cols-2 rounded-xl">
                        <!-- section gauche -->
                        <div
                            class="relative flex flex-col p-12 bg-white rounded-2xl shadow-md z-10 border-t-4 border-[#0D59EF]">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-[#0D59EF]">Pro - Monthly</h3>
                                <p class="flex items-baseline mt-4 text-[#1F2D49]">
                                    <span class="text-5xl font-extrabold tracking-tight">$650</span>
                                </p>
                                <ul role="list" class="pt-6 mt-6 py-4 space-y-2">
                                    <p class="text-md font-semibold text-neutral-600 max-w-[220px]">Explode your
                                        engagement
                                        /
                                        <br> followers and gain new customers.<br> <br>
                                        Start the rapid Instagram account growth!
                                    </p>
                                </ul>
                            </div>
                            <div class="z-50 rounded-lg pt-8">
                                <a href="" type="highlight"
                                    class="w-full items-center block px-10 py-3.5 text-base font-medium text-center text-white shadow-md rounded-xl transition-colors duration-300 transform bg-[#0D59EF] hover:bg-gray-400">
                                    7-Day Free Trial </a>
                            </div>
                        </div>

                        <!-- section droite -->
                        <div class="relative flex flex-col md:py-8 lg:py-12 lg:pr-16">
                            <div class="relative flex-1 bg-[white] p-6 rounded-r-2xl">
                                <h3 class="text-xl font-semibold text-neutral-600">What’s included</h3>
                                <ul role="list" class="mt-4 space-y-2 text-sm">
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4 rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Avg. 400+ Reel Organic Followers/week</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Targeted Audience</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">7 Days Free Trial</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Intelligent Growth</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Exclusive access to weekly updates</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Full setup on your account</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Secure by free high-quality 4g proxy</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Normal support</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Account statistics</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Interactive Dashboard</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="react3" style="display: none" class="relative">
                    <div class="relative px-14 pb-14 pt-8  lg:grid lg:grid-cols-2 rounded-xl">
                        <!-- section gauche -->
                        <div
                            class="relative flex flex-col p-12 bg-white rounded-2xl shadow-md z-10 border-t-4 border-[#0D59EF]">
                            <div class="flex-1">
                                <h3 class="text-xl font-semibold text-[#0D59EF]">Pro - Annually</h3>
                                <p class="flex items-baseline mt-4 text-[#1F2D49]">
                                    <span class="text-5xl font-extrabold tracking-tight">$6050</span>
                                </p>
                                <ul role="list" class="pt-6 mt-6 py-4 space-y-2">
                                    <p class="text-md font-semibold text-neutral-600 max-w-[220px]">Explode your
                                        engagement
                                        /
                                        <br> followers and gain new customers.<br> <br>
                                        Start the rapid Instagram account growth!
                                    </p>
                                </ul>
                            </div>
                            <div class="z-50 rounded-lg pt-8">
                                <a href="" type="highlight"
                                    class="w-full items-center block px-10 py-3.5 text-base font-medium text-center text-white shadow-md rounded-xl transition-colors duration-300 transform bg-[#0D59EF] hover:bg-gray-400">
                                    7-Day Free Trial </a>
                            </div>
                        </div>

                        <!-- section droite -->
                        <div class="relative flex flex-col md:py-8 lg:py-12 lg:pr-16">
                            <div class="relative flex-1 bg-[white] p-6 rounded-r-2xl">
                                <h3 class="text-xl font-semibold text-neutral-600">What’s included</h3>
                                <ul role="list" class="mt-4 space-y-2 text-sm">
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4 rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Avg. 400+ Reel Organic Followers/week</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Targeted Audience</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">7 Days Free Trial</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Intelligent Growth</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Exclusive access to weekly updates</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Full setup on your account</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Secure by free high-quality 4g proxy</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Normal support</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Account statistics</span>
                                    </li>
                                    <li class="flex">
                                        <div class="inline-flex items-center w-4 h-4  rounded-xl">
                                            <img src="<?= active_theme("url") . "/assets/img/check.png" ?>" alt="">
                                        </div>
                                        <span class="ml-3 text-neutral-600">Interactive Dashboard</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col items-center">
                    <p class="leading-relaxed text-gray-500 font-medium max-w-2xl text-lg py-4 px-8">Become An SoGrowth
                        Affiliate: Earn 15% recurring commission for as long as your referral remains an SoGrowth
                        customer Or Affiliate 3 person and access to the bot for free for as long as your referral
                        remains an SoGrowth customer.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ________________________________________what client say______________________________________________ -->

    <section>
        <div class="block3"></div>
        <div class="flex flex-col relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl lg:py-52">
            <div class="flex md:flex-col md:items-center">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

                    <div class="flex flex-col w-full max-w-lg p-4 text-left lg:mx-auto rounded-xl">
                        <h2 class="my-2 text-base font-semibold text-[#0D59EF]">
                            Customer Reviews
                        </h2>
                        <h1 class="text-4xl md:text-3xl mb-3 font-black text-gray-900 capitalize">What our clients say
                            <span style="color: #0D59EF">about us</span>
                        </h1>
                        <p class=" text-gray-500 font-xs">Nibh consequat amet, pretium aliquet fusce vestibulum duis.
                            Dui amet neque a facilisi sit.</p>
                        <div class="hidden md:flex">
                            <button onclick="displayClient();"
                                class="mt-4 text-gray-700 bg-[#0D59EF] border-0 py-3 px-3 focus:outline-none hover:bg-gray-400 rounded transition-colors duration-300 transform text-lg shadow-md"><img
                                    class="h-4 w-4" src="<?= active_theme("url") . "/assets/img/left.png" ?>"></button>
                            <button onclick="displayClient();"
                                class="mt-4 ml-4 text-gray-700 bg-[#0D59EF] border-0 py-3 px-3 focus:outline-none hover:bg-gray-400 rounded transition-colors duration-300 transform text-lg shadow-md"><img
                                    class="h-4 w-4" src="<?= active_theme("url") . "/assets/img/right.png" ?>"></button>
                        </div>
                    </div>

                    <div id="client1">
                        <div
                            class="flex flex-col w-full max-w-lg p-8 text-left bg-white shadow-md lg:mx-auto rounded-xl ">

                            <img alt="" class="inline-block object-cover object-center w-12 h-12 rounded-full"
                                src="https://source.unsplash.com/40x40/?portrait?1">
                            <div class="flex justify-between">
                                <h2 class="my-4 text-xl font-semibold">
                                    Robert Fox<br>
                                    <span href="#" class="font-light text-gray-600 lg:mb-0 text-xs">UI/UX
                                        Designer</span>
                                </h2>
                                <div class="flex">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                </div>
                            </div>
                            <p class="mx-auto font-medium text-sm leading-relaxed text-gray-800 overflow-clip h-[68px] md:h-auto">Sed nec aenean
                                habitasse
                                volutpat orci, ultrices. Semper ut aenean arcu in proin. Enim viverra arcu, massa tempus
                                rhoncus.
                            </p>
                        </div>
                    </div>

                    <div id="client2" class="hidden md:block">
                        <div
                            class="flex flex-col w-full max-w-lg p-8 text-left bg-white shadow-md lg:mx-auto rounded-xl ">

                            <img alt="" class="inline-block object-cover object-center w-12 h-12 rounded-full"
                                src="https://source.unsplash.com/40x40/?portrait?2">
                            <div class="flex justify-between">
                                <h2 class="my-4 text-xl font-semibold">
                                    Jenny Wilson<br>
                                    <span href="#" class="font-light text-gray-600 lg:mb-0 text-xs">Web Developer</span>
                                </h2>
                                <div class="flex">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                </div>
                            </div>
                            <p class="mx-auto font-medium text-sm leading-relaxed text-gray-800 h-[68px] md:h-auto">Sed nec aenean
                                risus
                                condimentum aliquam integer enim. Auctor nisl, urna, tincidunt tincidunt ut turpis ante
                                magna
                            </p>
                        </div>
                    </div>

                    <div id="client3" class="hidden">
                        <div
                            class="flex flex-col w-full max-w-lg p-8 text-left bg-white shadow-md lg:mx-auto rounded-xl ">

                            <img alt="" class="inline-block object-cover object-center w-12 h-12 rounded-full"
                                src="https://source.unsplash.com/40x40/?portrait?2">
                            <div class="flex justify-between">
                                <h2 class="my-4 text-xl font-semibold">
                                    Franck Miller<br>
                                    <span href="#" class="font-light text-gray-600 lg:mb-0 text-xs">Photographer</span>
                                </h2>
                                <div class="flex">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                  
                                </div>
                            </div>
                            <p class="mx-auto font-medium text-sm leading-relaxed text-gray-800 h-[68px] md:h-auto">Sed nec aenean
                                habitasse
                                volutpat orci, ultrices. Semper ut aenean arcu in proin. Enim viverra arcu, massa tempus
                                rhoncus.
                            </p>
                        </div>
                    </div>

                    <div id="client4"  class="hidden">
                        <div
                            class="flex flex-col w-full max-w-lg p-8 text-left bg-white shadow-md lg:mx-auto rounded-xl ">

                            <img alt="" class="inline-block object-cover object-center w-12 h-12 rounded-full"
                                src="https://source.unsplash.com/40x40/?portrait?3">
                            <div class="flex justify-between">
                                <h2 class="my-4 text-xl font-semibold">
                                    Jane Robins<br>
                                    <span href="#" class="font-light text-gray-600 lg:mb-0 text-xs">Developer</span>
                                </h2>
                                <div class="flex">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                    <img src="<?= active_theme("url") . "/assets/img/star.png" ?>" class="h-4 w-4 mt-8 mx-0.5" alt="">
                                </div>
                            </div>
                            <p class="mx-auto font-medium text-sm leading-relaxed text-gray-800 h-[68px] md:h-auto">Sed nec aenean
                                risus
                                condimentum aliquam integer enim. Auctor nisl, urna, tincidunt tincidunt ut turpis ante
                                magna
                            </p>
                        </div>
                    </div>

                    <div class="md:hidden flex"">
                        <button
                            class=" mt-4 text-gray-700 bg-[#0D59EF] border-0 py-3 px-3 focus:outline-none
                        hover:bg-gray-400 rounded transition-colors duration-300 transform text-lg shadow-md"><img
                            class="h-4 w-4" src="<?= active_theme("url") . "/assets/img/left.png" ?>" onclick="displayClient2();"></button>
                        <button
                            class="mt-4 ml-4 text-gray-700 bg-[#0D59EF] border-0 py-3 px-3 focus:outline-none hover:bg-gray-400 rounded transition-colors duration-300 transform text-lg shadow-md"><img
                                class="h-4 w-4" src="<?= active_theme("url") . "/assets/img/right.png" ?>" onclick="displayClient2();"></button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ________________________________________still not sure______________________________________________ -->


    <section class="lg:max-w-screen-lg mx-auto py-16">
        <div class="bg-[#0D59EF] rounded-3xl mx-8 relative overflow-hidden">
            <div class="doghnut "></div>
            <div class="container flex flex-col items-center px-4 py-12 mx-auto text-center">

                <h2 class="text-4xl md:text-3xl font-bold tracking-tight text-gray-600 dark:text-white">
                    Still Not Sure? Checkout These Stats:
                </h2>

                <p class="block max-w-2xl mt-4 text-sm text-gray-300 dark:text-gray-300">Sed nascetur facilisis senectus
                    eget elementum dignissim mi nec sagittis. Sociis consequat, cursus adipiscing eget ac integer
                    ultricies neque. Arcu habitant rutrum nisl scelerisque odio senectus aliquam id rhoncus. Congue non
                    porttitor feugiat tincidunt. </p>

                <div class="mt-6">
                    <div class="inline-flex w-full mt-4 rounded-md shadow sm:w-auto sm:mx-3 sm:mt-0">
                        <a href="#"
                            class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-black transition-colors duration-300 transform sm:w-auto bg-white shadow-md hover:bg-gray-400 rounded-lg">
                            <span class="mx-2 uppercase font-bold text-sm">
                                try it now
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="doghnut2 overflow-hidden"></div>
        </div>
    </section>


    <!-- ________________________________________FAQS______________________________________________ -->
    <section class="lg:max-w-screen-lg mx-auto py-16">
        <div class="flex flex-col md:max-w-xl mx-auto px-8 py-4 md:px-2 items-center">
            <h1 class="title-font text-3xl font-black text-gray-900 mb-3 text-center pb-8 capitalize">FAQs</h1>
            <div class="-my-8 divide-y divide-gray-100 pb-20 md:w-[560px] w-auto">
                <details class="py-8 group" open>
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-md font-black text-gray-900">
                            Malesuada lorem est non eu.
                        </h5>

                        <span>
                            <img class="w-4 h-4" src="<?= active_theme("url") . "/assets/img/plus.png" ?>" alt="">
                        </span>
                    </summary>

                    <p class="mt-4 leading-relaxed text-sm text-gray-700">
                        Non, amet viverra at pellentesque feugiat odio. Dapibus consequat massa habitant ut fringilla
                        urna
                        ultrices at purus. Id massa turpis penatibus maecenas et suscipit. Molestie in placerat cras
                        tellus.
                        Id id quam lorem penatibus morbi elementum mi pellentesque aenean. Amet platea.
                    </p>
                </details>
                <details class="py-8 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-md  font-black text-gray-900">
                            Vitae molestie tristique amet suspendisse.
                        </h5>

                        <span>
                            <img class="w-4 h-4" src="<?= active_theme("url") . "/assets/img/plus.png" ?>" alt="">
                        </span>
                    </summary>

                    <p class="mt-4 leading-relaxed text-sm text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic
                        veritatis molestias culpa in, recusandae laboriosam neque aliquid libero
                        nesciunt voluptate dicta quo officiis explicabo consequuntur distinctio
                        corporis earum similique!
                    </p>
                </details>
                <details class="py-8 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-md  font-black text-gray-900">
                            Morbi proin massa dictum et non netus sed eu.
                        </h5>

                        <span>
                            <img class="w-4 h-4" src="<?= active_theme("url") . "/assets/img/plus.png" ?>" alt="">
                        </span>
                    </summary>

                    <p class="mt-4 leading-relaxed text-sm text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic
                        veritatis molestias culpa in, recusandae laboriosam neque aliquid libero
                        nesciunt voluptate dicta quo officiis explicabo consequuntur distinctio
                        corporis earum similique!
                    </p>
                </details>
                <details class="py-8 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-md  font-black text-gray-900">
                            Eu ullamcorper non a a faucibus eget dui sit.
                        </h5>

                        <span>
                            <img class="w-4 h-4" src="<?= active_theme("url") . "/assets/img/plus.png" ?>" alt="">
                        </span>
                    </summary>

                    <p class="mt-4 leading-relaxed text-sm text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic
                        veritatis molestias culpa in, recusandae laboriosam neque aliquid libero
                        nesciunt voluptate dicta quo officiis explicabo consequuntur distinctio
                        corporis earum similique!
                    </p>
                </details>
                <details class="py-8 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-md  font-black text-gray-900">
                            Nibh mauris pretium lectus quam leo eu dui.
                        </h5>

                        <span>
                            <img class="w-4 h-4" src="<?= active_theme("url") . "/assets/img/plus.png" ?>" alt="">
                        </span>
                    </summary>

                    <p class="mt-4 leading-relaxed text-sm text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic
                        veritatis molestias culpa in, recusandae laboriosam neque aliquid libero
                        nesciunt voluptate dicta quo officiis explicabo consequuntur distinctio
                        corporis earum similique!
                    </p>
                </details>
                <details class="py-8 group">
                    <summary class="flex items-center justify-between cursor-pointer">
                        <h5 class="text-md  font-black text-gray-900">
                            Iaculis ornare adipiscing arcu tellus tortor.
                        </h5>

                        <span>
                            <img class="w-4 h-4" src="<?= active_theme("url") . "/assets/img/plus.png" ?>" alt="">
                        </span>
                    </summary>

                    <p class="mt-4 leading-relaxed text-sm text-gray-700">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic
                        veritatis molestias culpa in, recusandae laboriosam neque aliquid libero
                        nesciunt voluptate dicta quo officiis explicabo consequuntur distinctio
                        corporis earum similique!
                    </p>
                </details>
                <div class="bg-[#0D59EF] rounded-xl mt-4">
                    <div
                        class="container flex flex-col md:flex-row px-4 py-8 md:justify-around items-center text-center">
                        <h2
                            class="text-4xl md:text-xl font-bold tracking-tight text-gray-600 dark:text-white pb-4 md:pb-0">
                            have more questions?
                        </h2>
                        <div class="mt-1 pt-4 md:pt-0">
                            <a href="#"
                                class="justify-center w-full px-4 py-2 text-base font-medium text-black sm:w-auto transition-colors duration-300 transform bg-white shadow-md hover:bg-gray-400 rounded-md">
                                <span class="mx-2 uppercase font-bold text-sm">
                                    CONTACT US
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ________________________________________footer______________________________________________ -->

    <footer class="bg-white mx-auto flex flex-col justify-center">
        <div class="max-w-screen-xl py-16 mx-auto px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div>
                    <img src="<?= active_theme("url") . "/assets/img/footer_logo.png" ?>" class="h-10">

                    <p class="max-w-md mt-4 text-sm text-gray-500">
                        This app is in no way sponsored, endorsed, affiliated with, administered by, or associated with
                        any social media platform. By using our service, you completely agree to the terms of service of
                        SoGrowth. We do not sell fake followers or likes.
                    </p>
                    <p class="mt-8 text-xs text-black">
                        &copy; SoGrowth Ltd. 2022. All rights reserved
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <p class="font-medium">
                            Menu
                        </p>

                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href=""> How it works </a>
                            <a class="hover:opacity-75" href=""> Results </a>
                            <a class="hover:opacity-75" href=""> Sign up </a>
                            <a class="hover:opacity-75" href=""> Login </a>
                        </nav>
                    </div>

                    <div>
                        <p class="font-medium">
                            Social
                        </p>

                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <li class="flex">
                                <div class="inline-flex items-center w-4 h-4 rounded-xl pt-1 pr-1">
                                    <img class="" src="<?= active_theme("url") . "/assets/img/eva_facebook-fill.png" ?>" alt="">
                                </div>
                                <a class="hover:opacity-75" href="">Facebook</a>
                            </li>
                            <li class="flex">
                                <div class="inline-flex items-center w-4 h-4 rounded-xl pt-1 pr-1">
                                    <img src="<?= active_theme("url") . "/assets/img/ant-design_instagram-filled.png" ?>" alt="">
                                </div>
                                <a class="hover:opacity-75" href="">Instagram</a>
                            </li>
                            <li class="flex">
                                <div class="inline-flex items-center w-4 h-4 rounded-xl pt-1 pr-1">
                                    <img src="<?= active_theme("url") . "/assets/img/akar-icons_youtube-fill.png" ?>" alt="">
                                </div>
                                <a class="hover:opacity-75" href="">Youtube</a>
                            </li>
                            <li class="flex">
                                <div class="inline-flex items-center w-4 h-4 rounded-xl pt-1 pr-1">
                                    <img src="<?= active_theme("url") . "/assets/img/akar-icons_linkedin-fill.png" ?>" alt="">
                                </div>
                                <a class="hover:opacity-75" href="">LinkedIn</a>
                            </li>
                            <li class="flex">
                                <div class="inline-flex items-center w-4 h-4 rounded-xl pt-1 pr-1">
                                    <img src="<?= active_theme("url") . "/assets/img/bxl_patreon.png" ?>" alt="">
                                </div>
                                <a class="hover:opacity-75" href="">Patreon</a>
                            </li>
                        </nav>
                    </div>

                    <div>
                        <p class="font-medium">
                            Legal
                        </p>

                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href=""> Terms & Conditions </a>
                            <a class="hover:opacity-75" href=""> Privacy policy </a>
                        </nav>
                    </div>

                    <div>
                        <p class="font-medium">
                            Contact
                        </p>

                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href=""> contact@sogrowth.com </a>
                            <a class="hover:opacity-75" href=""> (024) 214 2151 24 </a>
                        </nav>
                    </div>
                </div>
            </div>

    </footer>
</body>

<script>
const slider = document.getElementById('slider')
slider.defaultValue = 33
const react1 = document.querySelector('#react1')
const react2 = document.querySelector('#react2')
const react3 = document.querySelector('#react3')
const valueslider = document.getElementById('textInput')
const textInputr = document.getElementById('textInputr')
const btn1 = document.getElementById('stats1')
const btn2 = document.getElementById('stats2')

const client1 = document.getElementById('client1')
const client2 = document.getElementById('client2')
const client3 = document.getElementById('client3')
const client4 = document.getElementById('client4')

function changeHandler(e) {
    console.log(valueslider.value)
    switch (true) {
        case (0 <= valueslider.value && valueslider.value < 33):
            react1.style.display = 'block'
            react2.style.display = 'none'
            react3.style.display = 'none'
            break;
        case (34 <= valueslider.value && valueslider.value < 66):
            react2.style.display = 'block'
            react1.style.display = 'none'
            react3.style.display = 'none'
            break;
        case (67 <= valueslider.value && valueslider.value < 100):
            react3.style.display = 'block'
            react1.style.display = 'none'
            react2.style.display = 'none'

            break;
    }
}

function updateTextInput(val) {
    const color_1 = 'linear-gradient(to right, #0D59EF 0%, #0D59EF ' + val + '%, white ' + val + '%, white 100%)'
    const color_2 = '#FFFFFF'
    var rounded = Math.ceil(val / 33)
    document.getElementById('textInputr').value = rounded;
    document.getElementById('textInput').value = val;
    textInputr.style.marginLeft = val - 2 + '%';
    slider.style.background = color_1;
}

function stats1() {
    btn1.style.display = 'block';
    btn2.style.display = 'none';
}

function stats2() {
    btn1.style.display = 'none';
    btn2.style.display = 'block';

}


function getMultipleRandom(arr, num) {
    const shuffled = [...arr].sort(() => 0.5 - Math.random());
    return shuffled.slice(0, num);
  }
  


function displayClient(){
    const arr = ['client1', 'client2', 'client3', 'client4'];
   
    var rands = getMultipleRandom(arr, 4);
    const client11 = document.getElementById(rands[1])
    const client22 = document.getElementById(rands[0])
    const client33 = document.getElementById(rands[3])
    const client44 = document.getElementById(rands[2])
    client11.style.display = 'block';
    client22.style.display = 'block';
    client33.style.display = 'none';
    client44.style.display = 'none';

}

function displayClient2(){
    const arr = ['client1', 'client2', 'client3', 'client4'];
   
    var rands = getMultipleRandom(arr, 4);
    const client11 = document.getElementById(rands[1])
    const client22 = document.getElementById(rands[0])
    const client33 = document.getElementById(rands[3])
    const client44 = document.getElementById(rands[2])
    client11.style.display = 'block';
    client22.style.display = 'none';
    client33.style.display = 'none';
    client44.style.display = 'none';

}

const scrollM = document.getElementById('scrollM')
document.getElementById('scrollM').style.display = 'block';

document.addEventListener("scroll", () => {
    var scroll_position = window.scrollY;
    if (scroll_position > 60) {
        scrollM.style.display = 'none';
  
    } else 
    {
        scrollM.style.display = 'block';

    }
  });
</script>

</html>