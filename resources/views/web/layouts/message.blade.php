<span class="text-xs text-red-600 dark:text-green-400">
    @if(session('success'))
      <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-purple-400  px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg  style="color: #707275" class="fill-current h-6 w-6 text-purple-400  mr-4" xmlns="" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div>
            <p class="font-bold text-purple-400 " style="color: #707275">Done</p>
            <p class="text-sm text-purple-400 " style="color: #707275">{!! session('success') !!}</p>
          </div>
        </div>
      </div>
      <br>
      <br>
    @endif
    @if(session('error'))
      <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-purple-400  px-4 py-3 shadow-md" role="alert">
        <div class="flex">
          <div class="py-1"><svg  style="color: #707275" class="fill-current h-6 w-6 text-purple-400  mr-4" xmlns="" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div>
            <p class="font-bold text-purple-400 " style="color: #707275">Error</p>
            <p class="text-sm text-purple-400 " style="color: #707275">{!! session('error') !!}</p>
          </div>
        </div>
      </div>
      <br>
      <br>
    @endif
</span>