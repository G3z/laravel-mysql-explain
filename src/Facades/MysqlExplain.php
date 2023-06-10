<?php

declare(strict_types=1);

namespace Tpetry\MysqlExplain\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string submitBuilder(\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|\Illuminate\Contracts\Database\Query\Builder $builder)
 * @method static string submitQuery(\Illuminate\Database\ConnectionInterface $connection, string $sql, mixed[] $bindings = [])
 *
 * @see \Tpetry\MysqlExplain\MysqlExplain
 */
class MysqlExplain extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Tpetry\MysqlExplain\MysqlExplain::class;
    }
}
