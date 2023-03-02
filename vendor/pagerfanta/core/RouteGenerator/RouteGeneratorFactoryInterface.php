<?php declare(strict_types=1);

namespace Pagerfanta\RouteGenerator;

use Pagerfanta\Exception\RuntimeException;

interface RouteGeneratorFactoryInterface
{
    /**
     * @throws RuntimeException if the route generator cannot be created
     */
    public function create(array $options = []): RouteGeneratorInterface;
}
