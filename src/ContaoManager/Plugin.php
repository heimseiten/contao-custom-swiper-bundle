<?php

declare(strict_types=1);

/*
 * This file is part of contao-custom-swiper-bundle.
 *
 * (c) heimseiten.de - Webdesign aus Köln 2025 <info@heimseiten.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/heimseiten/contao-custom-swiper-bundle
 */

namespace Heimseiten\ContaoCustomSwiperBundle\ContaoManager;

use Heimseiten\ContaoCustomSwiperBundle\HeimseitenContaoCustomSwiperBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(HeimseitenContaoCustomSwiperBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
