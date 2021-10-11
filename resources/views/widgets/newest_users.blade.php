<div class="h-full p-0 card">
    <header class="flex items-center justify-between p-2 border-b">
        <h2 class="flex items-center">
            <div class="w-6 h-6 mr-1 text-grey-80">
                @cp_svg('users-box')
            </div>
            <span>{{ __('Newest Users') }}</span>
        </h2>
    </header>
    <div class="px-2 py-1">
      @foreach ($results as $result)
            <div class="flex justify-between py-1 text-sm">
                <div class="flex justify-between flex-grow">
                    <a href="{{ $result->editUrl() }}" class="font-bold">
                        {{ $result->name }}
                    </a>
                </div>
                <div class="pl-2 text-grey-70">
                    {{ $result->augmentedValue('created_at')->format(config('statamic.cp.date_format')) }}
                </div>
            </div>
        @endforeach
    </div>
</div>
