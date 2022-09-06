<div class="relative w-full">
    <a href="{{ route('game', $game->id) }}">
        <div class="h-full lg:h-[300px] flex flex-col gap-y-10 lg:grid lg:grid-cols-2 lg:grid-rows-2 relative group ring-2 ring-main rounded-2xl p-6 overflow-hidden z-40">
            
            <h3 class="w-full lg:w-min h-min text-3xl sm:text-5xl lg:text-3xl text-center rounded-2xl ease-out duration-200 whitespace-nowrap bg-bg lg:bg-bg/[.78] p-4 xl:group-hover:bg-bg xl:group-hover:p-6 z-40"> {{ $game->name }} </h3>
            <div class="w-full lg:w-min h-min lg:flex flex-row items-end rounded-2xl ease-out duration-200 hidden bg-bg lg:bg-bg/[.78] p-4 xl:group-hover:bg-bg xl:group-hover:p-6 z-40 lg:place-self-end lg:self-start">
                <b class="text-white text-3xl font-medium mr-3 leading-none"> {{ date('g:i', strtotime($game->time))}} </b>
                <p class="text-subwhite font-normal leading-5"> {{ ucfirst(date('a', strtotime($game->time))) }} </p>
            </div>
            <p class="w-full xl:w-[80%] rounded-2xl ease-out duration-200 whitespace-pre-line text-justify leading-relaxed lg:text-left sm:whitespace-pre-line bg-bg lg:bg-bg/[.78] p-4 xl:group-hover:bg-bg xl:group-hover:p-6 z-40 lg:place-self-start lg:self-end">{{ $game->info }} </p>
            <h3 class="w-full lg:w-min h-min text-center text-xl sm:text-3xl rounded-2xl ease-out duration-200 whitespace-nowrap bg-bg lg:bg-bg/[.78] p-4 xl:group-hover:bg-bg xl:group-hover:p-6 z-40 lg:place-self-end lg:self-end"> {{ $game->polygon }} </h3>
            
            <div class="w-full h-full lg:h-[300px] bg-bg/50 backdrop-blur-[3px] absolute left-0 top-0 ease-in duration-100 xl:group-hover:backdrop-blur-0 xl:group-hover:bg-bg/25 z-30"></div>
            <x-elems.map class="top-0 left-0 xl:group-hover:scale-[1.2]" id="map{{ $loop->index }}" />

        </div>
    </a>
    <x-admin.control :game=$game />
</div>