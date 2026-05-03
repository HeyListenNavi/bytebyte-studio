@extends('layouts.app')

@section('body')
    <x-hero class="flex-col-reverse !gap-4 md:gap-16">
        <div class="flex flex-col gap-6">
            <div class="flex flex-col gap-1">
                <h1
                    class="text-balance text-headline-medium md:text-display-medium xl:text-display-large from-foreground to-foreground-tertiary bg-gradient-to-r from-40% to-90% bg-clip-text text-center text-transparent lg:text-start">
                    {{ $project->title }}
                </h1>
                <h2 class="text-balance text-label-medium md:text-body-medium text-foreground-secondary text-center lg:text-start">
                    {{ $project->subtitle }}
                </h2>
            </div>

            @if($project->url)
                <x-button.text :href="$project->url" class="text-label-large self-end lg:self-start" target="_blank">
                    Ver proyecto
                    <x-bx-arrow-up-right></x-bx-arrow-up-right>
                </x-button.text>
            @endif
        </div>
        <img class="w-full max-w-2xl" src="{{ url(Storage::url($project->thumbnail)) }}" alt="{{ $project->title }}">
    </x-hero>

    <div
        @class([
            'container mx-auto grid items-center gap-12 min-h-38 px-4 justify-items-center lg:grid-cols-2',
            'grid-cols-1! py-8' => !isset($project->mockup_one)
        ]) 
    >
        @if($project->mockup_one)
            <img class="w-full max-w-2xl rounded-2xl" src="{{ url(Storage::url($project->mockup_one)) }}" alt="">
        @endif
        <div class="flex flex-col gap-4">
            <h2 class="text-display-medium text-headline-medium md:text-display-medium font-bold">¿Quiénes Son?</h2>
            <div class="text-body-small text-foreground-secondary prose dark:prose-invert">
                {!! $project->company_description !!}
            </div>
        </div>
    </div>

    <div
        @class([
            'container mx-auto grid items-center gap-12 min-h-38 px-4 justify-items-center lg:grid-cols-2',
            'grid-cols-1! py-8' => !isset($project->mockup_two)
        ]) 
    >        <div class="flex flex-col gap-4">
            <h2 class="text-display-medium text-headline-medium md:text-display-medium font-bold">¿Cómo les ayudamos?</h2>
            <div class="text-body-small text-foreground-secondary prose dark:prose-invert">
                {!! $project->project_description !!}
            </div>
        </div>
        @if($project->mockup_two)
            <img class="w-full max-w-2xl rounded-2xl" src="{{ url(Storage::url($project->mockup_two)) }}" alt="">
        @endif
    </div>
@endsection
