<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(SolarSystemsSeeder::class);
        $this->call(RegionsSeeder::class);
        $this->call(JitaSeeder::class);
        $this->call(AmarrSeeder::class);
        $this->call(RensSeeder::class);
        $this->call(DodixieSeeder::class);
        $this->call(HekSeeder::class);
        Model::reguard();
    }
}
