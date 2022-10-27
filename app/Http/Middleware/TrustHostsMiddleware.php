<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHostsMiddleware extends Middleware
{
    /**
     * @return array<int, string|null>
     */
    public function hosts()
    {
        return [

            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
