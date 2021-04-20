<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

class Badges extends AbstractRestResource
{
    public function badgecampaigns()
    {
    //  echo 'dupa';

    $requestHeaders = [
        'Accept' => 'application/vnd.allegro.beta.v1+json',
        'Content-Type' => 'application/vnd.allegro.beta.v1+json',
    ];
        return $this->get('/sale/badge-campaigns', $requestHeaders);
    }

}
