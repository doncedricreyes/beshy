<div class="max-w-4xl mx-auto mt-5">

    <div class="p-4 bg-white rounded-lg shadow-md">
        <label for="message" class="block mb-2 text-2xl font-medium ">Your message</label>
        <textarea wire:model="text1" id="message" rows="4" class="block p-2.5 w-full text-xl bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lagay mo message mo dito antamad mo kase mag type yawa ka"></textarea>

    <div class="flex justify-end">
      <button wire:click='submitText' class="relative w-48 h-12 mt-5 mb-5 overflow-hidden text-lg font-bold text-white bg-green-500 group rounded-xl">
        Generate Message!
        <div class="absolute inset-0 w-full h-full transition-all duration-300 scale-0 rounded-2xl group-hover:scale-100 group-hover:bg-white/30"></div>
      </button>
    </div>

       <textarea id="message-copy" rows="4" class="mb-2 block p-2.5 w-full text-xl text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500   dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Generated Message..." >{{$text2}}</textarea>

      <button onclick="copy()" class="relative h-8 mt-5 mb-5 overflow-hidden text-xl font-bold text-white bg-blue-500 w-36 group rounded-xl">
        Copy Message
        <div class="absolute inset-0 w-full h-full transition-all duration-300 scale-0 rounded-2xl group-hover:scale-100 group-hover:bg-white/30"></div>
      </button>
      <div class="flex justify-end text-lg">

          Change Emoji
          <select class="cursor-pointer" wire:model="selectedEmoji">
            @foreach ($popularEmojis as $emoji)
                <option value="{{ $emoji }}">{{ $emoji }}</option>
            @endforeach
        </select>
      </div>

        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        <script>
        function copy()
        {
          document.getElementById('message-copy').select();
          document.execCommand('copy');
        }
        </script>
        </div>
    </div>
