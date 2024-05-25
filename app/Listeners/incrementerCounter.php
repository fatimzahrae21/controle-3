<?php

namespace App\Listeners;
use App\Events\vedioViewers;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class incrementerCounter
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(vedioViewers $event): void
    {
        $this ->updateViewr($event -> video);
    }

    function updateViewr($video){
        $video -> viewers = $video -> viewers + 1;
        $video -> save();
    }
}
