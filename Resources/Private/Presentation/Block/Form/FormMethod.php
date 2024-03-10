<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form;

enum FormMethod: string
{
    case METHOD_GET = 'get';
    case METHOD_POST = 'post';
}
