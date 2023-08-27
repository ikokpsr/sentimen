<button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-blue-600 dark:bg-gray-800">
        <a href="#" class="flex items-center pl-2.5 mb-5">
            <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Sentimen</span>
         </a>
       <ul class="space-y-2 font-medium">
          <li>
             <a href="/" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-house"></i>
                <span class="ml-3">Home</span>
             </a>
          </li>
          <li>
             <a href="{{ route('integration.index') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-circle-nodes"></i>
                <span class="ml-3">API Integration</span>
             </a>
          </li>
          <li>
             <a href="{{ route('analysis.index') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                <i class="fa-solid fa-magnifying-glass-chart"></i>
                <span class="ml-3">Sentiment Analysis</span>                
             </a>
          </li>
          {{-- <li>
             <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                   <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                   <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ml-3">Hiji</span>
             </a>
          </li>   
          <li>
             <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                   <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                   <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ml-3">Dua</span>
             </a>
          </li>   
          <li>
             <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-700 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                   <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                   <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ml-3">Tilu</span>
             </a>
          </li>    --}}
       </ul>
       <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">          
             <a href="#" class="flex items-center p-2 text-white transition duration-75 rounded-lg hover:bg-blue-700 dark:hover:bg-gray-700 dark:text-white group">
                <i class="fa-solid fa-right-to-bracket"></i>
                <span class="ml-3">Sign In</span>
             </a>
          </li>
       </ul>
    </div>
 </aside>