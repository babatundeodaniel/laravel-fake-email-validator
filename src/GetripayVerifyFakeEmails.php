<?php

namespace Getripay\GetripayVerifyFakeEmails;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\LazyCollection;

class GetripayVerifyFakeEmails
{
    public $path_to_file = 'vendor/wesbos/burner-email-providers/emails.txt';
    // Build your next great package.
    public function validate ($attribute, $value, $parameters, $validator) {
        //$collection = new Collection();
        $collection  = LazyCollection::make(function (){
            $handle = fopen(base_path().$this->path_to_file, "r+");
            while (($line = fgets($handle)) !== false) {
                yield $line;
            }
        });
        logger(print_r($collection->take(100)->all(), 1));
        return $value == 'foo';
    }

    public function readFileToCache(){
        $fp = fopen(base_path().$this->path_to_file, "r+");
        while ($line = stream_get_line($fp, 1024 * 1024, "\n")) {
            echo $line;
        }
        fclose($fp);
    }
}
