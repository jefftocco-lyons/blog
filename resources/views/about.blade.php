<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bullsnake Inc</title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"
    />
    <!--Replace with your tailwind.css once created-->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700"
      rel="stylesheet"
    />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #237fbd 0%, #fdfdfd 100%);
      }
    </style>
  </head>
  <body
    class="leading-normal tracking-normal text-black "
    style="font-family: 'Source Sans Pro', sans-serif"
  >
    <!--Nav-->
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                Bullsnake Inc
                {{-- <img src="/images//bullsnake.jpg" alt="Laracasts Logo" width="100" height="100" class="rounded-xl"> --}}
            </a>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
              <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black no-underline" href="landing">Home</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="about">About</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/">Blog</a>
              </li>
              <li class="mr-3">
                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="apply">Apply</a>
              </li>
            </ul>
          </div>
        <div class="mt-8 md:mt-0 flex items-center">
            @auth
            <x-dropdown>
                <x-slot name="trigger">
                    <button href="/register" class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Welcome, {{auth()->user()->name}}!</button>
                </x-slot>

                @admin
                <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
                <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                @endadmin

                <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                <form id="logout-form" action="/logout" method="POST" class="hidden">
                    @csrf
                </form>
            </x-dropdown>


            @else
                <a href="/register" class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Register</a>
                <a href="/login" class=" inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Log In</a>
            @endguest

            <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>
        </div>
    </nav>
  </body>
  <section>
    <div class="bg-white text-black py-8">
      <div
        class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24"
      >
        <div
          class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8"
        >
          <p
            class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2"
          >
            Stay up to date!
          </p>
          <p class="text-sm md:text-base text-black-50 mb-4">
            Learn more about our story and what's happening at Bullsnake by visiting the official blog.
          </p>
          <button
            class="lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
          >
            <a href="/">Visit blog</a>
          </button>
        </div>
        <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
          <div class="container mx-auto w-full h-full">
            <div class="relative wrap overflow-hidden p-10 h-full">
              <div
                class="border-2-2 border-yellow-555 absolute h-full border"
                style="right: 50%; border: 2px solid #237fbd; border-radius: 1%"
              ></div>
              <div
                class="border-2-2 border-yellow-555 absolute h-full border"
                style="left: 50%; border: 2px solid #237fbd; border-radius: 1%"
              ></div>
              <div
                class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline"
              >
                <div class="order-1 w-5/12"></div>
                <div class="order-1 w-5/12 px-1 py-4 text-right">
                  <p class="mb-3 text-base text-black-300">2005</p>
                  <h4 class="mb-3 font-bold text-lg md:text-2xl">
                    Start of the Journey
                  </h4>
                  <p
                    class="text-sm md:text-base leading-snug text-black-50 text-opacity-100"
                  >
                  What would later become Bullsnake Inc, Lyons Express LLC takes its first steps as an independent contractor.
                  </p>
                </div>
              </div>
              <div
                class="mb-8 flex justify-between items-center w-full right-timeline"
              >
                <div class="order-1 w-5/12"></div>
                <div class="order-1 w-5/12 px-1 py-4 text-left">
                  <p class="mb-3 text-base text-black-300">2008</p>
                  <h4 class="mb-3 font-bold text-lg md:text-2xl">
                    Recognition of Service
                  </h4>
                  <p
                    class="text-sm md:text-base leading-snug text-black-50 text-opacity-100"
                  >
                  Lyons Express is awarded the Eagle Spirit award on account of its outstanding contributions to the USPS.
                  </p>
                </div>
              </div>
              <div
                class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline"
              >
                <div class="order-1 w-5/12"></div>
                <div class="order-1 w-5/12 px-1 py-4 text-right">
                  <p class="mb-3 text-base text-black-300">480 BC</p>
                  <h4 class="mb-3 font-bold text-lg md:text-2xl">
                    Battle of Thermopylae
                  </h4>
                  <p
                    class="text-sm md:text-base leading-snug text-black-50 text-opacity-100"
                  >
                  The Greeks this time sallied forth from the wall to meet the Persians in the wider part of the pass, in an attempt to slaughter as many Persians as they could.They fought with spears, until every spear was shattered, and then switched to xiphē (short swords). In this struggle, Herodotus states that two of Xerxes' brothers fell: Abrocomes and Hyperanthes. Leonidas also died in the assault, shot down by Persian archers, and the two sides fought over his body; the Greeks took possession. As the Immortals approached, the Greeks withdrew and took a stand on a hill behind the wall.
                  </p>
                </div>
              </div>

              <div
                class="mb-8 flex justify-between items-center w-full right-timeline"
              >
                <div class="order-1 w-5/12"></div>

                <div class="order-1 w-5/12 px-1 py-4">
                  <p class="mb-3 text-base text-black-300">2022</p>
                  <h4 class="mb-3 font-bold text-lg md:text-2xl text-left">
                    New Strides as Bullsnake Inc
                  </h4>
                  <p
                    class="text-sm md:text-base leading-snug text-black-50 text-opacity-100"
                  >
                    Lyons Express officially becomes Bullsnake Incoporated - a fresh new name as we continue to expand and venture into the freight industry.
                  </p>
                </div>
              </div>
            <!-- <img
              class="mx-auto -mt-36 md:-mt-36"
              src="https://user-images.githubusercontent.com/54521023/116968861-ef21a000-acd2-11eb-95ac-a34b5b490265.png"
            /> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;
    function check(e) {
      var target = (e && e.target) || (event && event.srcElement);

      //Nav Menu
      if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
          // click on the link
          if (navMenuDiv.classList.contains("hidden")) {
            navMenuDiv.classList.remove("hidden");
          } else {
            navMenuDiv.classList.add("hidden");
          }
        } else {
          // click both outside link and outside menu, hide menu
          navMenuDiv.classList.add("hidden");
        }
      }
    }
    function checkParent(t, elm) {
      while (t.parentNode) {
        if (t == elm) {
          return true;
        }
        t = t.parentNode;
      }
      return false;
    }
  </script>
</html>
