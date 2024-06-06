<?php

declare( strict_types = 1 );

namespace Northrook\Symfony\Document;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

/**
 * @author  Martin Nielsen <mn@northrook.com>
 */
final class SymfonyDocumentBundle extends AbstractBundle
{
    public function loadExtension(
        array                 $config,
        ContainerConfigurator $container,
        ContainerBuilder      $builder,
    ) : void {

    }

    public function getPath() : string {
        return dirname( __DIR__ );
    }
}