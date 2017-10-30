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
     * Override config file path to use the custom one
     *
     * @return string
     */
    protected function getConfigPath()
    {
        return __DIR__ . '/Configs/Default.php';
    }

    /**
     * Override cache directory to use project root
     *
     * @return string
     */
    public function getCacheDir()
    {
        return ROOT_PATH . '/var/cache/' . $this->environment . '_' . \Shopware::REVISION;
    }
}
