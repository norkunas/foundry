<?php

declare(strict_types=1);

/*
 * This file is part of the zenstruck/foundry package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Foundry\Utils\Rector\Tests\Fixtures;

final class DummyModelFactoryExtendingUserFactory extends DummyObjectModelFactory
{
    protected function getDefaults(): array
    {
        return [];
    }

    protected static function getClass(): string
    {
        return DummyObject::class;
    }
}
