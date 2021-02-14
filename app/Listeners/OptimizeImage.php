<?php

namespace App\Listeners;

use App\Events\ProjectSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class OptimizeImage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        $image = Image::make(Storage::get($event->project->image));

        $image->widen(floor( $image->getWidth() / 2), function ($constraint) {
            $constraint->upsize();
        }
        )->encode();

        Storage::put($event->project->image, (string)$image);
    }
}
