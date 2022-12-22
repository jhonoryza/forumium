<x-layout>

    <x-slot name="title">{{ $title }}</x-slot>

    <div class="w-full h-52 bg-slate-400 flex flex-row justify-center items-center">
        <div class="container flex flex-row justify-start items-center gap-5">
            <img src="{{ $user->avatarUrl }}" alt="Avatar" class="rounded-full w-24 h-24 border-4 border-white shadow" />
            <div class="flex flex-col justify-center items-start gap-3">
                <span class="text-xl font-medium text-white">{{ $user->name }}</span>
                <div class="w-full flex flex-row justify-start items-center gap-5 text-white text-xs">
                    <span class="flex lg:flex-row flex-col justify-center lg:items-center items-start gap-2">
                        <i class="lg:flex hidden fa-regular fa-clock"></i> {{ $user->updated_at->diffForHumans() }}
                    </span>
                    <span class="flex lg:flex-row flex-col justify-center lg:items-center items-start gap-2">
                        <i class="lg:flex hidden fa-solid fa-sign-in"></i> Joined {{ $user->created_at->diffForHumans() }}
                    </span>
                    <span class="flex lg:flex-row flex-col justify-center lg:items-center items-start gap-2">
                        <i class="lg:flex hidden fa-solid fa-check"></i> 0 best answer
                    </span>
                    <span class="flex lg:flex-row flex-col justify-center lg:items-center items-start gap-2">
                        <i class="lg:flex hidden fa-solid fa-medal"></i> 0 points
                    </span>
                </div>
                <p class="text-white font-light text-sm m-0 p-0 lg:max-w-[50%] max-w-full">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate ad neque error?
                    Deleniti autem impedit, nemo sed dolores distinctio perspiciatis doloribus quis! Fuga cum sequi,
                    culpa ipsum a qui!
                </p>
            </div>
        </div>
    </div>

    <div class="w-full flex justify-center items-center px-2 sm:px-4 py-10">
        <div class="container  mx-auto flex flex-row gap-10">
            <div class="lg:flex hidden flex-col gap-10 w-1/6">
                @include('partials.layouts.profile.side-menu')
            </div>
            <div class="flex flex-col gap-8 lg:w-5/6 w-full">

                {{ $slot }}

            </div>
        </div>
    </div>

</x-layout>