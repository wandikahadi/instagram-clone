{{-- <ul>
    <li><a href="/posts">Posts</a></li>
    <li><a href="/posts/add">Add</a></li>
    <li><a href="/profile">Profile</a></li>
    <li>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </li>
</ul> --}}
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-200 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-100">
        <div class="flex space-y-4 p-2 py-10 text-2xl font-bold">
            <h1 class="font-satisfy">Instagram</h1>
        </div>
       <ul class="space-y-4 font-medium border-right border-1">
          <li>
             <a href="/posts" class="flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group">
                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                </svg>
                <span class="ms-3 {{ Request::is('posts') ? 'active' : '' }}">Home</span>
             </a>
          </li>
          {{-- <li>
             <a href="#" class="flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group">
                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>\
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Search</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group">
                <svg class="w-6"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm306.7 69.1L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Explore</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group">
                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M448 32l-86.1 0-1 1-127 127 92.1 0 1-1L453.8 32.3c-1.9-.2-3.8-.3-5.8-.3zm64 128l0-64c0-15.1-5.3-29.1-14-40l-104 104L512 160zM294.1 32l-92.1 0-1 1L73.9 160l92.1 0 1-1 127-127zM64 32C28.7 32 0 60.7 0 96l0 64 6.1 0 1-1 127-127L64 32zM512 192L0 192 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-224z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Reels</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group">
                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376l0 103.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Messages</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group">
                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Notifications</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
             </a>
            </li> --}}
          <li> 
             <a href="/posts/add" class="flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group">
                <svg class="w-6 bg-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM200 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap {{ Request::is('posts/add') ? 'active' : '' }}">Create</span>
             </a>
            </li>
            <li {{ Request::is('profile') ? 'active' : '' }}>
             <a href="/profile" class="{{ Request::is('/profile') ? 'active' : '' }} flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group">
                <svg class="size-7 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                  </svg>
                {{-- <img class="w-6 rounded-full" src="img/wandika.jpeg" alt=""> --}}
                <span class="{{ Request::is('profile') ? 'active' : '' }} flex-1 ms-3 whitespace-nowrap">Profile</span>
             </a>
            </li>
          <li>
              <form class="flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                  <button type="submit" class="flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group">
                      <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                    </button>
                </form>
          </li>
          <li>
              <a href="#" class="flex items-center p-2 text-black font-normal rounded-lg hover:bg-gray-200 group">
                  <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">More</span>
            </a>
          </li>
       </ul>
    </div>
</aside>