<?php

namespace LabFimo\SecurityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LabFimoSecurityBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
