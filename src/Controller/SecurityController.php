<?php

declare(strict_types=1);

namespace Alpabit\ApiSkeleton\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Security\Core\Exception\RuntimeException;

/**
 * @author Muhamad Surya Iksanudin<surya.iksanudin@alpabit.com>
 */
final class SecurityController extends AbstractFOSRestController
{
    /**
     * @Rest\Post("/login")
     */
    public function check()
    {
        throw new RuntimeException('Invalid security configuration');
    }
}
