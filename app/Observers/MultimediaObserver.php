<?php

namespace App\Observers;

use App\Multimedia;
use App\Services\ImageUploader;

class MultimediaObserver
{
    /**
     * Handle the multimedia "created" event.
     *
     * @param  \App\Multimedia  $multimedia
     * @return void
     */
    public function created(Multimedia $multimedia)
    {
        //
    }

    public function creating(Multimedia $multimedia)
    {
        $multimedia->url_photo = ImageUploader::upload(request('url_photo'),'multimedia', 'multimedia', 40);
    }

    /**
     * Handle the multimedia "updated" event.
     *
     * @param  \App\Multimedia  $multimedia
     * @return void
     */
    public function updated(Multimedia $multimedia)
    {
        //
    }

    /**
     * Handle the multimedia "deleted" event.
     *
     * @param  \App\Multimedia  $multimedia
     * @return void
     */
    public function deleted(Multimedia $multimedia)
    {
        //
    }

    /**
     * Handle the multimedia "restored" event.
     *
     * @param  \App\Multimedia  $multimedia
     * @return void
     */
    public function restored(Multimedia $multimedia)
    {
        //
    }

    /**
     * Handle the multimedia "force deleted" event.
     *
     * @param  \App\Multimedia  $multimedia
     * @return void
     */
    public function forceDeleted(Multimedia $multimedia)
    {
        //
    }
}
