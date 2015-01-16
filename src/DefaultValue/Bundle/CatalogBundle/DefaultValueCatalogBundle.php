<?php

namespace DefaultValue\Bundle\CatalogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DefaultValueCatalogBundle extends Bundle
{
    public function getParent()
    {
        return 'PimCatalogBundle';
    }
}
