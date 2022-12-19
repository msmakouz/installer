<?php

declare(strict_types=1);

namespace Installer\Package;

use Installer\Generator\GeneratorInterface;
use Installer\Package\Generator\LeagueEvent\Bootloaders;

final class LeagueEvent extends Package
{
    /**
     * @param GeneratorInterface[] $generators
     */
    public function __construct(
        array $resources = [],
        array $generators = [
            new Bootloaders(),
        ],
        array $instructions = []
    ) {
        parent::__construct(Packages::LeagueEvent, $resources, $generators, $instructions);
    }
}
