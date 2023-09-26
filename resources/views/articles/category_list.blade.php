<div>
    <div class="flex flex-wrap gap-3 mt-7">
        @foreach($categories as $category)
            <a href="#"
               class="bg-pink grow xs:grow-0 py-2 px-4 rounded-[32px] bg-[#2A2B4E] text-white no-underline text-xxs sm:text-xs font-semibold whitespace-nowrap">
                {{ $category->title }}
            </a>
        @endforeach
    </div>
</div>
