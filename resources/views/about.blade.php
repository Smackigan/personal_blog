<x-app-layout meta-title="Jean Paul le Blogue - About me page" meta-description="About me page">

    <section class="w-full flex flex-col items-center px-3">
    
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75 w-full">
                <img src="/storage/{{ $widget->image }}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                    {{ $widget->title }}
                </h1>
                <div>
                    {!! $widget->content !!}
                </div>
            </div>
        </article>

    </section>

</x-app-layout>