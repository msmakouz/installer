<?php

declare(strict_types=1);

namespace Installer\Application;

use Composer\Package\PackageInterface;
use Installer\Generator\GeneratorInterface;
use Installer\Package\Package;
use Installer\Question\QuestionInterface;

/**
 * @psalm-import-type AutoloadRules from PackageInterface
 * @psalm-import-type DevAutoloadRules from PackageInterface
 */
interface ApplicationInterface
{
    public function getName(): string;

    /**
     * @return Package[]
     */
    public function getPackages(): array;

    /**
     * @return QuestionInterface[]
     */
    public function getQuestions(): array;

    /**
     * @return AutoloadRules
     */
    public function getAutoload(): array;

    /**
     * @return DevAutoloadRules
     */
    public function getAutoloadDev(): array;

    public function getResources(): array;

    /**
     * @return non-empty-string[]
     */
    public function getInstructions(): array;

    /**
     * @return \Generator<Package|null|QuestionInterface, GeneratorInterface|class-string<GeneratorInterface>>
     */
    public function getGenerators(): \Generator;

    /**
     * @return non-empty-string[]
     */
    public function getCommands(): array;

    /**
     * @param non-empty-string ...$name
     */
    public function useRoadRunnerPlugin(string ...$name): void;

    /**
     * @return list<non-empty-string>
     */
    public function getRoadRunnerPlugins(): array;

    public function isPackageInstalled(Package $package): bool;

    /**
     * @param class-string $question
     */
    public function getOption(string $question): mixed;
}
