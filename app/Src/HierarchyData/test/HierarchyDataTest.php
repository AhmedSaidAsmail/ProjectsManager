<?php
use Tests\TestCase;
use App\Src\HierarchyData\HierarchyFactory;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use App\Src\HierarchyData\Model\TestModel;
use App\Src\HierarchyData\ItemCollection;
use App\Src\HierarchyData\ItemResolver;

class HierarchyDataTest extends TestCase
{
    public function provideFlattenArray()
    {
        return
            [
                [
                    [
                        [
                            [
                                'id' => 1,
                                'parent' => 0,
                                'name' => 'grandFather1'
                            ],
                            [
                                'id' => 2,
                                'parent' => 0,
                                'name' => 'grandFather2'
                            ],
                            [
                                'id' => 3,
                                'parent' => 1,
                                'name' => 'Father1'
                            ],
                            [
                                'id' => 4,
                                'parent' => 2,
                                'name' => 'Father2'
                            ],
                            [
                                'id' => 5,
                                'parent' => 3,
                                'name' => 'child1'
                            ],
                            [
                                'id' => 6,
                                'parent' => 4,
                                'name' => 'child2'
                            ]
                        ]
                    ],
                    [
                        new ItemCollection([
                            (new ItemResolver())
                                ->setID(1)
                                ->setTitle('grandFather1')
                                ->setModel(new TestModel([
                                    'id' => 1,
                                    'parent' => '0',
                                    'name' => 'grandFather1'
                                ]))
                                ->setChilds(null),
                            (new ItemResolver())
                                ->setID(3)
                                ->setTitle('Father1')
                                ->setModel(new TestModel([
                                    'id' => 3,
                                    'parent' => '1',
                                    'name' => 'Father1'
                                ]))
                                ->setChilds(null),
                            (new ItemResolver())
                                ->setID(5)
                                ->setTitle('child1')
                                ->setModel(new TestModel([
                                    'id' => 5,
                                    'parent' => '3',
                                    'name' => 'child1'
                                ]))
                                ->setChilds(null)
                            ,
                            (new ItemResolver())
                                ->setID(2)
                                ->setTitle('grandFather2')
                                ->setModel(new TestModel([
                                    'id' => 2,
                                    'parent' => '0',
                                    'name' => 'grandFather2'
                                ]))
                                ->setChilds(null),
                            (new ItemResolver())
                                ->setID(4)
                                ->setTitle('Father2')
                                ->setModel(new TestModel([
                                    'id' => 4,
                                    'parent' => '2',
                                    'name' => 'Father2'
                                ]))
                                ->setChilds(null),
                            (new ItemResolver())
                                ->setID(6)
                                ->setTitle('child2')
                                ->setModel(new TestModel([
                                    'id' => 6,
                                    'parent' => '4',
                                    'name' => 'child2'
                                ]))
                                ->setChilds(null)


                        ])
                    ]
                ]

            ];
    }

    public function provideHierarchyArray()
    {
        return
            [
                [
                    [
                        [
                            [
                                'id' => 1,
                                'parent' => 0,
                                'name' => 'grandFather1'
                            ],
                            [
                                'id' => 2,
                                'parent' => 0,
                                'name' => 'grandFather2'
                            ],
                            [
                                'id' => 3,
                                'parent' => 1,
                                'name' => 'Father1'
                            ],
                            [
                                'id' => 4,
                                'parent' => 2,
                                'name' => 'Father2'
                            ],
                            [
                                'id' => 5,
                                'parent' => 3,
                                'name' => 'child1'
                            ],
                            [
                                'id' => 6,
                                'parent' => 4,
                                'name' => 'child2'
                            ]
                        ]
                    ],
                    [
                        new ItemCollection([
                            (new ItemResolver())
                                ->setID(1)
                                ->setTitle('grandFather1')
                                ->setModel(new TestModel([
                                    'id' => 1,
                                    'parent' => '0',
                                    'name' => 'grandFather1'
                                ]))
                                ->setChilds([
                                    (new ItemResolver())
                                        ->setID(3)
                                        ->setTitle('Father1')
                                        ->setModel(new TestModel([
                                            'id' => 3,
                                            'parent' => '1',
                                            'name' => 'Father1'
                                        ]))
                                        ->setChilds([
                                            (new ItemResolver())
                                                ->setID(5)
                                                ->setTitle('child1')
                                                ->setModel(new TestModel([
                                                    'id' => 5,
                                                    'parent' => '3',
                                                    'name' => 'child1'
                                                ]))
                                                ->setChilds(null)
                                        ])
                                ])
                            ,
                            (new ItemResolver())
                                ->setID(2)
                                ->setTitle('grandFather2')
                                ->setModel(new TestModel([
                                    'id' => 2,
                                    'parent' => '0',
                                    'name' => 'grandFather2'
                                ]))
                                ->setChilds([
                                    (new ItemResolver())
                                        ->setID(4)
                                        ->setTitle('Father2')
                                        ->setModel(new TestModel([
                                            'id' => 4,
                                            'parent' => '2',
                                            'name' => 'Father2'
                                        ]))
                                        ->setChilds([
                                            (new ItemResolver())
                                                ->setID(6)
                                                ->setTitle('child2')
                                                ->setModel(new TestModel([
                                                    'id' => 6,
                                                    'parent' => '4',
                                                    'name' => 'child2'
                                                ]))
                                                ->setChilds(null)
                                        ])
                                ])
                        ])
                    ]
                ]
            ];
    }

    /**
     * @param array $collection
     * @return EloquentCollection
     */
    private function collectModels(array $collection)
    {
        $modelsCollection = new EloquentCollection();
        foreach ($collection[0] as $item) {
            $modelsCollection->add(new TestModel($item));
        }
        return $modelsCollection;
    }

    /**
     * @dataProvider provideFlattenArray
     *
     * @param $collection
     * @param $expected
     */
    public function testReturnedArrayFromCollectionToFlattenArray($collection, $expected)
    {
        $collection = $this->collectModels($collection);
        $factory = HierarchyFactory::factory($collection, 'flatten');
//        var_dump($factory->renderArray());
////        $expected = $this->collectModels($expected);
        $this->assertEquals($expected[0], $factory->renderArray());
    }

    /**
     * @dataProvider provideHierarchyArray
     *
     * @param $collection
     * @param $expected
     */
    public function testReturnedArrayFromCollection($collection, $expected)
    {
        $collection = $this->collectModels($collection);
        $factory = HierarchyFactory::factory($collection);
        $this->assertEquals($expected[0], $factory->renderArray());
    }
}
