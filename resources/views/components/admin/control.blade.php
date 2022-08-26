@auth
    <div class="w-[360px] h-[150px] absolute bottom-[-13%] left-[4%] bg-card_bg rounded-2xl z-0 cursor-pointer ease-out duration-200 hover:bottom-[-24%] hover:shadow-[0px_-20px_170px_0px_#1A522C]">
        <form action="{{ route('delete', $game->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <x-buttons.delete class="hover:text-red" />
        </form>
        <x-buttons.edit href="{{ route('edit', $game->id) }}" class="hover:text-green" />
    </div>
@endauth