<?php
/**
 *  Copyright Information
 *  @copyright: 2019 agentur fipps e.K.
 *  @author   : Arne Borchert <arne.borchert@fipps.de>
 *  @license  : LGPL 3.0+
 */

namespace Fipps\TinymcehrBundle\ContaoManager;

use Fipps\TinymcehrBundle\FippsTinymcehrBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Fipps\TinymcepluginsBundle\FippsTinymcepluginsBundle;

/**
 * Plugin for the Contao Manager.
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(FippsTinymcehrBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class, FippsTinymcepluginsBundle::class])
                ->setReplace(['fipps_tinymcehr']),
        ];
    }
}