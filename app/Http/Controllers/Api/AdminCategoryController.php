<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AdminCategoryController extends Controller
{
	public function index()
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
			'image' => 'required|image'
		], [
			'name.required' => 'Please enter a name',
			'image.required' => 'Please select an image',
			'image.image' => 'Only formats jpg, jpeg, png, bmp, gif, svg or webp are accepted'
		]);

		if($validator->fails()) {
			return response()->json([
				'status' => 400,
				'errors' => $validator->errors(),
			]);
		} else {
			$category = new Category();
			$category->name = $request->name;
			$category->unsigned_name = Str::slug($category->name, '-');
			if($request->hasFile('image')) {
				$file = $request->image;
				$fileName = $file->hashName();
				$file->move('assets/images/category', $fileName);
				$category->image = $fileName;
			}
			$category->save();
			return response()->json([
				'status' => 200,
				'message' => 'Category stored succesfully'
			]);
		}
	}

	public function edit($id)
	{
		$category = Category::find($id);
		if($category) {
			return response()->json([
				'status' => 200,
				'category' => $category
			]);
		} else {
			return response()->json([
				'status' => 404,
				'message' => 'Category not found!'
			]);
		}
	}

	public function update(Request $request, $id)
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'image' => 'image',
		], [
			'name.required' => 'Please enter a name',
			'image.image' => 'Only formats jpg, jpeg, png, bmp, gif, svg or webp are accepted'
		]);

		if($validator->fails()) {
			return response()->json([
				'status' => 400,
				'errors' => $validator->errors()
			]);
		} else {
			$category = Category::find($id);
			$category->name = $request->name;
			$category->unsigned_name = Str::slug($category->name, '-');
			if($request->hasFile('image')) {
				unlink("assets/images/category/$category->image");
				$file = $request->image;
				$fileName = $file->hashName();
				$file->move('assets/images/category', $fileName);
				$category->image = $fileName;
			}
			$category->update();
			return response()->json([
				'status' => 200,
				'message' => 'Category updated succesfully'
			]);
		}
	}

	public function destroy($id)
	{
		$category = Category::find($id);
		$category->delete();
		return response()->json([
			'status' => 200,
			'message' => 'Category deleted succesfully'
		]);
	}
}
?>