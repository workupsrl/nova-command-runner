<?php

namespace Workup\Nova\CommandRunner\Http\Controllers;

use Cache;
use Carbon\Carbon;

class HistoryController
{
    public function index()
    {
        $history = Cache::get('nova-command-runner-history', []);
        array_walk($history, function (&$val) {
            $val['time'] = Carbon::createFromTimestamp($val['time'])->diffForHumans();
        });

        return $history;
    }
}