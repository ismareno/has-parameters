<?php

declare(strict_types=1);

namespace Tests\Middleware;

use Closure;
use Illuminate\Http\Request;
use TiMacDonald\Middleware\HasParameters;

class OptionalRequired
{
    use HasParameters;

    public function handle(Request $request, Closure $next, string $optional = 'default', string $required): void
    {
        //
    }
}