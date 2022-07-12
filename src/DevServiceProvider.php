<?php

namespace Brunocfalcao\Dev;

use Eduka\Abstracts\EdukaServiceProvider;

final class DevServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        dd('here');
        $this->customViewNamespace(__DIR__.'/../resources/views', 'site');
        config()->set('mail.mailers.postmark.token', env('POSTMARK_TOKEN'));
    }

    public function register()
    {
        //
    }
}
