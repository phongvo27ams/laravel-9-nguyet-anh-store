<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AdminSubCategoryController extends Controller
{
	public function index()
	{
		$subCategories = SubCategory::all();
		return response()->json([
			'status' => 200,
			'subCategories' => $subCategories
		]);
	}

	public function create()
	{
		$categories = Category::all();
		return response()->json([
			'status' => 200,
			'categories' => $categories
		]);
	}

	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'category_id' => 'required'
		], [
			'name.required' => 'Please enter a name',
			'category_id.required' => 'Please select a category'
		]);

		if($validator->fails()) {
			return response()->json([
				'status' => 400,
				'errors' => $validator->errors(),
			]);
		} else {
			$subCategory = new SubCategory();
			$subCategory->name = $request->name;
			$subCategory->unsigned_name = Str::slug($subCategory->name, '-');
			$subCategory->category_id = $request->category_id;
			$subCategory->save();
			return response()->json([
				'status' => 200,
				'message' => 'Sub-category stored succesfully'
			]);
		}
	}

	public function edit($id)
	{
		$categories = Category::all();
		$subCategory = SubCategory::find($id);
		return response()->json([
			'status' => 200,
			'categories' => $categories,
			'subCategory' => $subCategory
		]);
	}

	public function update(Request $request, $id)
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'category_id' => 'required'
		], [
			'name.required' => 'Please enter a name',
			'category_id.required' => 'Please select a category'
		]);

		if($validator->fails()) {
			return response()->json([
				'status' => 400,
				'errors' => $validator->errors(),
			]);
		} else {
			$subCategory = SubCategory::find($id);
			$subCategory->name = $request->name;
			$subCategory->unsigned_name = Str::slug($subCategory->name, '-');
			$subCategory->category_id = $request->category_id;
			$subCategory->save();
			return response()->json([
				'status' => 200,
				'message' => 'Sub-category updated succesfully'
			]);
		}
	}

	public function destroy($id)
	{
		$subCategory = SubCategory::find($id);
		$subCategory->delete();
		return response()->json([
			'status' => 200,
			'message' => 'Sub-category deleted succesfully'
		]);
	}
}
?>