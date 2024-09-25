<?php

namespace Ivnkara\EbaySdkLaravel;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Foundation\Application;

class Ebay
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $token;

    /**
     * RecaptchaV3 constructor.
     *
     * @param Repository $config
     */
    public function __construct(Repository $config)
    {
        $this->url = $config['ebay']['url'];
        $this->token = $config['ebay']['token'];
    }


    /**
     * Verify the given token and retutn the score.
     * Returns false if token is invalid.
     * Returns the score if the token is valid.
     */
    public function check()
    {
        return [$this->url, $this->token];
    }
}
