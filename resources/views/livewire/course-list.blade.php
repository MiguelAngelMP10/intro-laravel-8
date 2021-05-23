<div class="grid grid-cols-3  gap-4 mt-8 px-3">

    @foreach ($courses as $key => $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">

            <a href="{{ route('course') }}">
                <img class="rounded-md mb-2" src="{{ $course->img }}" alt="">
                <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
                <h3 class="tex-md text-gray-500">{{ $course->excerpt }}</h3>
                <img class="rounded-full mt-4 mx-auto h-16 w-16" src="{{ $course->user->avatar }}" alt="">
            </a>
        </div>
    @endforeach
</div>
