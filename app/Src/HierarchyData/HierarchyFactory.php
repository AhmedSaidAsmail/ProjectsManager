<?php
namespace App\Src\HierarchyData;

use Illuminate\Database\Eloquent\Collection as LaravelCollection;
use InvalidArgumentException;

final class HierarchyFactory
{
    public static function factory(LaravelCollection $collection, $type = null, $parentName = 'parent', $nameColumn = 'name')
    {
        /** * @var Collection */
        $hierarchyCollection = new Collection($collection, $parentName, $nameColumn);
        switch ($type) {
            case 'flatten':
                return new Flatten($hierarchyCollection);
            case null:
                return $hierarchyCollection;
            default:
                throw new InvalidArgumentException('unknown type given');
        }
    }
}
