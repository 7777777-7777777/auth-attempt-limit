<?php

namespace Manzhouya\AuthAttempts;

use Encore\Admin\Extension;

class AuthAttempts extends Extension
{
    public $name = 'auth-attempt-limit';

    public $views = __DIR__ . '/../resources/views';
}
