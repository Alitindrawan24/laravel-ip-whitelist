<?php

namespace Alitindrawan24\IPWhitelist\Exception;

use Exception;

class IPWhiteListException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        abort(403, 'Your are not allowed to access this page');
    }
}
