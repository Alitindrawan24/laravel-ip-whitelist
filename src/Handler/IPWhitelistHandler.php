<?php

namespace Alitindrawan24\IPWhitelist\Handler;

use Illuminate\Http\Request;

class IPWhitelistHandler
{
    /**
     * Function to check the IP whitelist features is enabled or disabled.
     */
    public function shouldCheckIP(): bool
    {
        return config('ip-whitelist.ip_whitelist_enable');
    }

    /**
     * Function to check the IP is on the whitelist or not.
     * If not, throw an exception.
     */
    public function checkIP(Request $request): void
    {
        $whitelist = config('ip-whitelist.ip_whitelist');
        $clientIP = $request->getClientIp();

        // Looping through the IP whitelist
        foreach ($whitelist as $value) {
            // Pattern matching
            if(fnmatch($value, $clientIP)) return;
        }

        // Throwing an exception if not on the whitelist
        $exception = \config('ip-whitelist.ip_whitelist_exception');
        throw new $exception;
    }
}
