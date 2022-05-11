<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->unsignedBigInteger('sub_category_id');
			$table->string('unsigned_name');
			$table->float('unit_price', 8, 2);
			$table->float('sale_price', 8, 2);
			$table->integer('rate');
			$table->string('vendor');
			$table->integer('sku');
			$table->enum('availability', ['In stock', 'Out of stock']);
			$table->text('description');
			$table->string('color');
			$table->string('size');
			$table->string('image');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('products');
	}
};
?>