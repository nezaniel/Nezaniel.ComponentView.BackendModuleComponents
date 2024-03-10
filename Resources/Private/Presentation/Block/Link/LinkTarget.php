<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Link;

use GuzzleHttp\Psr7\ServerRequest;
use Psr\Http\Message\UriInterface;

enum LinkTarget: string
{
    case TARGET_SELF = '_self';
    case TARGET_BLANK = '_blank';

    public static function forUri(UriInterface $uri): self
    {
        return ServerRequest::getUriFromGlobals()->getHost() === $uri->getHost()
            ? self::TARGET_SELF
            : self::TARGET_BLANK;
    }

    public function getRel(): string
    {
        return match ($this) {
            self::TARGET_SELF => '',
            self::TARGET_BLANK => ' rel="noreferrer noopener"',
        };
    }
}
