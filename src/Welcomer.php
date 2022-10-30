<?php

namespace Sanslan\Welcomer;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class Welcomer extends Bundle
{
    public function getWelcome(): string
    {
        return "Hello Mansur";
    }
}