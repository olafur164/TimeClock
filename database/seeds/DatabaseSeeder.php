<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Employees;

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

        $this->call('EmployeesTableSeeder');
    }
}
class EmployeesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('employees')->delete();

        $employees = array(
            ['id' => '0709972319', 'name' => 'Árni Þór Busk'],
            ['id' => '0505922199', 'name' => 'Baldur Freyr Valgeirsson'],
            ['id' => '0805715429', 'name' => 'Berglind Hofland Sigurðardóttir'],
            ['id' => '2408962069', 'name' => 'Birgir Rúnar Steinarsson Busk'],
            ['id' => '0605922769', 'name' => 'Bjarki Friðgeirsson'],
            ['id' => '1801972309', 'name' => 'Bryndís Jóna Gunnarsdóttir'],
            ['id' => '2201892449', 'name' => 'Eva Dögg'],
            ['id' => '2605973109', 'name' => 'Gabríela Ósk Víðisdóttir'],
            ['id' => '2704518109', 'name' => 'Guðbjörg H Traustadóttir'],
            ['id' => '0712873199', 'name' => 'Hafþór Vilberg Björnsson'],
            ['id' => '0709962519', 'name' => 'Hildur Guðbjörg Benediktsdóttir'],
            ['id' => '0608813839', 'name' => 'Hjördís Harpa Guðlaugsdóttir'],
            ['id' => '1407893139', 'name' => 'Hlynur Ingvarsson'],
            ['id' => '1509714119', 'name' => 'Ingibjörg Zoega'],
            ['id' => '2807992629', 'name' => 'Írena Stefánsdóttir'],
            ['id' => '2110993059', 'name' => 'Ísabella Hofland Tryggvadóttir'],
            ['id' => '0603982249', 'name' => 'Kolbrún Marín'],
            ['id' => '1412982089', 'name' => 'Nína Þöll Birkisdóttir'],
            ['id' => '1710943059', 'name' => 'Ólafur Hólm Eyþórsson'],
            ['id' => '1110814769', 'name' => 'Rakel Rós Geirsdóttir'],
            ['id' => '1910982509', 'name' => 'Róbert Bergmann Eiríksson'],
            ['id' => '2010973479', 'name' => 'Sigríður Elma Svanbjargardóttir'],
            ['id' => '2604982909', 'name' => 'Sigurbjörn Geir Benediktsson'],
            ['id' => '0402983989', 'name' => 'Sísí Eva Helgadóttir'],
            ['id' => '1703883649', 'name' => 'Sjöfn Ingvarsdóttir'],
        );

        foreach($employees as $employee)
        {
            Employees::create($employee);
        }
    }
}
