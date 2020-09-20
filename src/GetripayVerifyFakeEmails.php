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
        $email_domain = explode('@', $value)[1];
        logger("Email Domain => ".$email_domain);
        $collection = $this->searchFileForDomain($email_domain);
        $validator->setCustomMessages(['email.not_fake_email' => config('getripay_verify_fake_emails.validation_message')]);
        return !empty($collection) ? false : true;
    }

    protected function searchFileForDomain($searchfor){
        // get the file contents, assuming the file to be readable (and exist)
        $contents = file_get_contents(base_path().$this->path_to_file);
        // escape special characters in the query
        $pattern = preg_quote($searchfor, '/');
        // finalise the regular expression, matching the whole line
        $pattern = "/^.*$pattern.*\$/m";
        // search, and store all matching occurences in $matches
        if(preg_match_all($pattern, $contents, $matches)){
            //logger("Found matches:\n". implode("\n", $matches[0]));
            return $matches;
        }
        else{
            //echo "No matches found";
            return false;
        }
    }
}
