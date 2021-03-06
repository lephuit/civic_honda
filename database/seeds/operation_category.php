<?php

use Illuminate\Database\Seeder;

class operation_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('operation_category')->delete();

		$items = [
			[
	            "title" => "Công nghệ",
	            "heading" => "VẬN HÀNH BỨT PHÁ",
	            "description" => "VTEC TURBO là thế hệ động cơ tăng áp mới đột phá của Honda giúp xe đạt được đồng thời hai yếu tố : khả năng vận hành mạnh mẽ và tiết kiệm nhiên liệu vượt trội - khắc phục được nhược điểm của động cơ tăng áp truyền thống.",
                'image' => 'http://demo.thinkclimax.com/hondaoto/honda-civic/dist/assets/images/s-operation/img-left.jpg',
    			'image_mobile' => 'http://demo.thinkclimax.com/hondaoto/honda-civic/dist/assets/images/s-operation/img-left-mb@2x.jpg',
                'order' => 1
	        ]
		];

		foreach( $items as $item ) {
			DB::table('operation_category')->insert($item);
		}

    }
}
