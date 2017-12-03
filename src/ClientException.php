<?php

declare(strict_types=1);

namespace Psr\Http\Client;

/**
 * Every HTTP client related Exception MUST implement this interface.
 */
interface ClientException extends \Throwable
{
}