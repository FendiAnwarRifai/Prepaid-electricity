<?php

use Illuminate\Database\Seeder;

class HargaTokenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$harga = array(10,50,100,1000);
    	$length = count($harga);
    	for($x = 0; $x < $length; $x++) {
    		$o = $harga[$x];
    		$a = '000';
    		$total = $o + 2;
    		DB::table('harga_token')->insert([
    			'kode' => 'PLN'.$harga[$x],
    			'nominal' => $o.$a,
    			'harga' => $total.$a,
    			'created_at' => date('y-m-d'),
    			'updated_at' => date('y-m-d'),
    		]);
    	}
    }
}
