<?php
namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;

	protected $with = ['sub_category'];

	public function sub_category()
	{
		return $this->belongsTo(SubCategory::class);
	}
}
?>