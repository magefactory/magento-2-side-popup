<?php
/**
 * Copyright © magefactory (https://magefactory.alexander-naumov.com)
 * Author Alexander Naumov (https://www.alexander-naumov.com)
 * See LICENSE for the license details.
 */
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Magefactory_SidePopup',
    __DIR__
);
