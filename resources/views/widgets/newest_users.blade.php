<div class="bg-white dark:bg-gray-850 rounded-xl ring ring-gray-200 dark:ring-gray-700/80 shadow-ui-md @container/widget" data-ui-card="" data-inset="true">
    <header class="flex items-center min-h-[49px] justify-between border-b border-gray-200 px-4.5 py-2 dark:border-gray-700">
        <div class="flex items-center gap-2.5">
            @cp_svg('icons/users', 'size-5 shrink-0 text-gray-500')
            <span>{{ __('Newest Users') }}</span>
        </div>
    </header>
    <div class="px-4 py-2">
        @foreach ($results as $result)
            <div class="flex justify-between gap-2 py-1">
                <a href="{{ $result->editUrl() }}" class="text-sm font-medium no-underline hover:underline">
                    {{ $result->name ?? $result->email() }}
                </a>
                <span class="text-xs whitespace-nowrap text-gray-500 dark:text-gray-400">
                    {{ \Stoffelio\NewestUsers\Widgets\NewestUsers::registeredAt($result) }}
                </span>
            </div>
        @endforeach
    </div>
</div>
