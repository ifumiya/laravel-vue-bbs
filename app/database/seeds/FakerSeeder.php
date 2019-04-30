<?php

use Illuminate\Database\Seeder;

class FakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $blueprint = [
        App\Model\Thread::class => 20,
    ];

    public function run()
    {
        collect($this->blueprint)
            ->each(function ($count, $class) {
                factory($class, $count)->create();
            });
    }
}
