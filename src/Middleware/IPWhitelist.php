<?php

namespace Alitindrawan24\IPWhitelist\Middleware;

use Alitindrawan24\IPWhitelist\Handler\IPWhitelistHandler;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class IPWhitelist
{
    protected IPWhitelistHandler $handler;

    /**
     * Constructor function to initialize the IP whitelist handler.
     */
    public function __construct(IPWhitelistHandler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * Middleware for checking IP whitelists.
     */
    public function handle(Request $request, Closure $next)
    {
        if($this->handler->shouldCheckIP())
        {
            $this->handler->checkIP($request);
        }

        return $next($request);
    }
}
