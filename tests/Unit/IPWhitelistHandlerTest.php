<?php

namespace Alitindrawan24\IPWhitelist\Tests\Unit;

use Alitindrawan24\IPWhitelist\Handler\IPWhitelistHandler;

it('checks if IP whitelist feature is enabled', function () {
    // Mock the configuration
    config(['ip-whitelist.ip_whitelist_enable' => true]);

    // Create an instance of IPWhitelistHandler
    $handler = new IPWhitelistHandler();

    // Call the shouldCheckIP method and assert that it returns true
    expect($handler->shouldCheckIP())->toBeTrue();
});

it('checks if IP whitelist feature is disabled', function () {
    // Mock the configuration
    config(['ip-whitelist.ip_whitelist_enable' => false]);

    // Create an instance of IPWhitelistHandler
    $handler = new IPWhitelistHandler();

    // Call the shouldCheckIP method and assert that it returns false
    expect($handler->shouldCheckIP())->toBeFalse();
});
