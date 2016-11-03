<?php

namespace School\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SchoolUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
