<?php

namespace Northrook\Symfony\Document;

use Symfony\Component\HttpFoundation\RequestStack;

final class DocumentService
{
    public function __construct(
        private readonly RequestStack $requestStack,
    ) {
        dd( $this->requestStack->getCurrentRequest() );
    }
}