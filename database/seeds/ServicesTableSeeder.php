<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->insertService('Detailing');
        $this->insertService('Estimating');
        $this->insertService('Design');
        $this->insertService('Construction');
        $this->insertService('Review');
        $this->insertService('Inspection');
    }

    public function insertService($name)
    {
        $ser = new Service();
        $ser->name = $name;
        $ser->save();
    }

}
