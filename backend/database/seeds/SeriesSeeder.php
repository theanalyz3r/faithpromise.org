<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class SeriesSeeder extends CsvSeeder
{

    public function __construct() {
        $this->table = 'series';
        $this->filename = base_path() . '/database/seeds/csv/' . $this->table . '.csv';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();

        DB::table($this->table)->truncate();

        parent::run();
    }
}
