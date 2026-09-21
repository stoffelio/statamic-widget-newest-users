<?php

namespace Stoffelio\NewestUsers\Widgets;

use Carbon\Carbon;
use Statamic\Facades\User;
use Statamic\Statamic;
use Statamic\Widgets\Widget;

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

        $query = User::query()
            ->orderBy('created_at', 'desc')
            ->limit($limit);

        if (config('statamic.users.repository') === 'file') {
            $query->where('created_at', '>', 0);
        } else {
            $query->whereNotNull('created_at');
        }

        return view('stoffelio::widgets.newest_users', [
            'results' => $query->get(),
        ]);
    }

    /**
     * The file driver stores a unix timestamp this addon writes itself, while a
     * database user carries a real datetime column Eloquent has already cast.
     * Handing the second one to createFromTimestamp is what produced 1 Jan 1970.
     */
    public static function registeredAt($user): string
    {
        $created = $user->get('created_at');

        $date = match (true) {
            $created instanceof \DateTimeInterface => Carbon::instance($created),
            is_numeric($created) => Carbon::createFromTimestamp((int) $created),
            default => Carbon::parse($created),
        };

        return $date->setTimezone(Statamic::displayTimezone())->format(Statamic::dateFormat());
    }
}
