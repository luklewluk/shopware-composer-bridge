<?php

namespace luklewluk\ShopwareComposerBridge\Shopware\Engine;

/**
 * Extension for Shopware Kernel
 *
 * @package luklewluk\ShopwareComposerBridge\Shopware\Engine
 * @author  Lukasz Lewandowski <luklewluk@gmail.com>
 */
class Kernel extends \Shopware\Kernel
{
    /**
     * @return string
     */
    protected function getConfigPath()
    {
        return __DIR__ . '/Configs/Default.php';
    }
}
