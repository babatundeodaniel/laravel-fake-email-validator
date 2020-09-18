<?php

namespace Getripay\GetripayVerifyFakeEmails;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\LazyCollection;

class GetripayVerifyFakeEmails
{
    public $path_to_file = '/vendor/wesbos/burner-email-providers/emails.txt';
    // Build your next great package.
    public function validate ($attribute, $value, $parameters, $validator) {
        //$collection = new Collection();
        //logger("Attribute => ". print_r($attribute, 1));
        ///logger("Value => ". print_r($value, 1));
        //logger("Parameters => ". print_r($parameters, 1));
        $collection  = LazyCollection::make(function (){
            $handle = fopen(base_path().$this->path_to_file, "r+");
            while (($line = fgets($handle)) !== false) {
                yield $line;
            }
        });
        logger(print_r($collection->take(100)->all(), 1));
        $email_domain = explode('@', $value)[1];
        $matched_domain = $collection->search(function ($item, $key) use ($email_domain) {
            return $item  == $email_domain;
        });
        logger("Matched domains => ".print_r($matched_domain, 1));
        return !empty($matched_domain) ? false : true;
    }

    public function readFileToCache(){
        $fp = fopen(base_path().$this->path_to_file, "r+");
        while ($line = stream_get_line($fp, 1024 * 1024, "\n")) {
            echo $line;
        }
        fclose($fp);
    }
}
