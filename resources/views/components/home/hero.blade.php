<!-- ====== Hero Section Start -->
<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-800">
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4 lg:w-5/12">
        <div class="hero-content">
          <h1
            class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6">
            My Name is Sara. <br />
            I am an <span class="rounded-md text-amber-600">Enginer</span>.
          </h1>
          <p class="text-base mb-8 max-w-[520px]">
            I am a developer with 10+ years of experience. <br />
            I love sharing my knowledge to others, that's why I created a
            <a class="font-bold no-underline text-primary hover:underline underline-offset-2 decoration-2 decoration-primary"
              href="https://youtube.com/TheCodeholic" target="_blank">YouTube Channel</a>. <br>
          </p>
          <ul class="flex flex-wrap items-center">
            <li>
              <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                My Projects
              </x-button-link>
            </li>
          </ul>
          <div class="pt-16 clients">
            <h6 class="flex items-center mb-4 text-xs font-normal text-body-color dark:text-gray-300">
              Follow me on social media
              <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
            </h6>
            <x-social-icons></x-social-icons>
          </div>
        </div>
      </div>
      <div class="hidden px-4 lg:block lg:w-1/12"></div>
      <div class="w-full px-4 lg:w-6/12">
        <div class="lg:text-right lg:ml-auto">
          <div class="relative z-10 inline-block pt-11 lg:pt-0">
            <img src="{{ url('/img/me_hero.png') }}" alt="hero" class="max-w-full lg:ml-auto" />
            <span class="absolute -left-8 -bottom-8 z-[-1]">
              <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Hero Section End -->
