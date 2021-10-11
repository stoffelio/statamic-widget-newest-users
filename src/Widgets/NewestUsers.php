<?php

namespace Stoffelio\NewestUsers\Widgets;

use Statamic\Widgets\Widget;
use Statamic\Facades\User;

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

        $results = User::query()
            ->where('created_at', '>', 0)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('stoffelio::widgets.newest_users', [
            'results' => $results
        ]);
    }
}
