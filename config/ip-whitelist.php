<?php

return [
    /**
     * Boolean value for enable and disable the IP Whitelist middleware.
     */
    'ip_whitelist_enable' => env('IP_WHITELIST_ENABLE', false),

    /**
     * List of IP Whitelist.
     * Only IP in this list is allowed to pass the middleware.
     */
    'ip_whitelist' => [
        // '127.0.0.1' // Localhost example
        // '127.0.0.*' // Using Wildcard example
    ],

    /**
     * Exception class for invalid IP.
     * The exception can be customized by overriding the exception class.
     */
    'ip_whitelist_exception' => \Alitindrawan24\IPWhitelist\Exception\IPWhiteListException::class,
];
