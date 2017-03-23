<?php

namespace Vdm\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VdmUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
