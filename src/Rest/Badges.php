<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

class Badges extends AbstractRestResource
{
    // List of available campaigns

    public function badgecampaigns()
    {
    $requestHeaders = [
        'Accept' => 'application/vnd.allegro.beta.v1+json',
        'Content-Type' => 'application/vnd.allegro.beta.v1+json',
    ];
        return $this->get('/sale/badge-campaigns', $requestHeaders);
    }

    //Submit offer to a campaign

    public function badgesubmit($campaign, $offer_id, $market_amount, $bargain_amount)
    {
    $requestHeaders = [
        'Accept' => 'application/vnd.allegro.beta.v1+json',
        'Content-Type' => 'application/vnd.allegro.beta.v1+json',
    ];
    $params = [
      'campaign' => ['id' => $campaign,],
      'offer' =>    [ 'id' => $offer_id,],
      'prices' =>   [
                    'market' => [ 'amount' => $market_amount,
                                  'currency' => 'PLN',],
                    'bargain' =>
                                [
                                  'amount' => $bargain_amount,
                                  'currency' => 'PLN',],
                    ],
    ];


        return $this->post('/sale/badges', $params, $requestHeaders);
    }



}
