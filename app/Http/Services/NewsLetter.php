<?php

namespace App\Http\Services;

use MailchimpMarketing\ApiClient;

class NewsLetter
{
    protected function client(): ApiClient
    {
        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => config('services.mailchimp.server')
        ]);
    }
    public function subscribe(string $email, string $status = 'subscribed', string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');
        return $this->client()->lists->addListMember($list, [
            "email_address" => $email,
            "status" => $status,
        ]);
    }
}
