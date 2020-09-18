<?php

namespace Getripay\GetripayVerifyFakeEmails;

use Illuminate\Support\Facades\Storage;

class GetripayVerifyFakeEmails
{
    public $path_to_file = 'vendor/wesbos/burner-email-providers/emails.txt';
    // Build your next great package.
    public function validate ($attribute, $value, $parameters, $validator) {
        $collection = new Collection();
        $contents = Storage::get($this->path_to_file);
        dump($contents);
        return $value == 'foo';
    }
}
