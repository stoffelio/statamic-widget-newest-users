<?php

namespace Stoffelio\NewestUsers\Widgets;

use Statamic\Widgets\Widget;
use Statamic\Facades\User;
use Statamic\Facades\Collection as CollectionAPI;

class NewestUsers extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        $limit = $this->config('limit', 5);

        $results = collect(File::disk('users')->files())
                    ->sortByDesc(function ($file) {
                        return $file->getCTime();
                    });

        return json_encode($results);

        return view('stoffelio::widgets.newest_users', [
            'results' => $results
        ]);
    }
}
