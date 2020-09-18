<?php

namespace Getripay\GetripayVerifyFakeEmails;

use Illuminate\Support\Facades\Storage;

class GetripayVerifyFakeEmails
{
    public $patth_to_file = 'vendor/wesbos/burner-email-providers/emails.txt';
    // Build your next great package.
    public function function ($attribute, $value, $parameters, $validator) {
        $collection = new Collection();
        $contents = Storage::get($this->patth_to_file);
        dump($contents);
        return $value == 'foo';
    }
}
