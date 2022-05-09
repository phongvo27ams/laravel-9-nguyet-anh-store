<?php
namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    public function index()
	{
		$products = Product::all();
		return response()->json([
			'status' => 200,
			'products' => $products
		]);
	}

	public function create()
	{
		$subCategories = SubCategory::all();
		return response()->json([
			'status' => 200,
			'subCategories' => $subCategories
		]);
	}

	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'sub_category_id' => 'required',
			'name' => 'required',
			'unit_price' => 'required',
			'rate' => 'required',
			'vendor' => 'required',
			'sku' => 'required',
			'availability' => 'required',
			'description' => 'required',
			'color' => 'required',
			'size' => 'required',
			'image' => 'required|image'
		], [
			'sub_category_id.required' => 'Please select a sub-category',
			'name.required' => 'Please enter a name',
			'unit_price.required' => 'Please enter an unit price',
			'rate.required' => 'Please enter a rate',
			'vendor.required' => 'Please enter a vendor',
			'sku.required' => 'Please enter an SKU',
			'availability.required' => 'Please select an availability',
			'description.required' => 'Please enter a description',
			'color.required' => 'Please enter color',
			'size.required' => 'Please enter a size',
			'image.required' => 'Please select an image',
			'image.image' => 'Only formats jpg, jpeg, png, bmp, gif, svg or webp are accepted'
		]);

		if($validator->fails()) {
			return response()->json([
				'status' => 400,
				'errors' => $validator->errors()
			]);
		} else {
			$product = new Product();
			$product->sub_category_id = $request->sub_category_id;
			$product->name = $request->name;
			$product->unsigned_name = Str::slug($product->name, '-');
			$product->unit_price = $request->unit_price;
			$product->sale_price = $request->sale_price;
			$product->rate = $request->rate;
			$product->vendor = $request->vendor;
			$product->sku = $request->sku;
			$product->availability = $request->availability;
			$product->description = $request->description;
			$product->color = $request->color;
			$product->size = $request->size;
			if($request->hasFile('image')) {
				$file = $request->image;
				$fileName = $file->hashName();
				$file->move('assets/images/product', $fileName);
				$product->image = $fileName;
			}
			$product->save();

			return response()->json([
				'status' => 200,
				'message' => 'Stored a new product succesfully'
			]);
		}
	}

	public function edit($id)
	{
		$subCategories = SubCategory::all();
		$product = Product::find($id);
		if($product) {
			return response()->json([
				'status' => 200,
				'subCategories' => $subCategories,
				'product' => $product
			]);
		} else {
			return response()->json([
				'status' => 404,
				'message' => 'Product not found'
			]);
		}
	}

	public function update(Request $request, $id)
	{
		$validator = Validator::make($request->all(), [
			'subCategory' => 'required',
			'name' => 'required',
			'unitPrice' => 'required',
			'rate' => 'required',
			'vendor' => 'required',
			'sku' => 'required',
			'availability' => 'required',
			'description' => 'required',
			'color' => 'required',
			'size' => 'required',
			'image' => 'image'
		], [
			'subCategory.required' => 'Please select a sub-category',
			'name.required' => 'Please enter a name',
			'unitPrice.required' => 'Please enter an unit price',
			'rate.required' => 'Please enter a rate',
			'vendor.required' => 'Please enter a vendor',
			'sku.required' => 'Please enter an SKU',
			'availability.required' => 'Please select an availability',
			'description.required' => 'Please enter a description',
			'color.required' => 'Please enter color',
			'size.required' => 'Please enter a size',
			'image.image' => 'Only formats jpg, jpeg, png, bmp, gif, svg or webp are accepted'
		]);

		if($validator->fails()) {
			return response()->json([
				'status' => 400,
				'errors' => $validator->errors()
			]);
		} else {
			$product = Product::find($id);
			$product->sub_category_id = $request->subCategory;
			$product->name = $request->name;
			$product->unsigned_name = Str::slug($product->name, '-');
			$product->unit_price = $request->unitPrice;
			$product->sale_price = $request->salePrice;
			$product->rate = $request->rate;
			$product->vendor = $request->vendor;
			$product->sku = $request->sku;
			$product->availability = $request->availability;
			$product->description = $request->description;
			$product->color = $request->color;
			$product->size = $request->size;
			if($request->hasFile('image')) {
				unlink("assets/images/product/$product->image");
				$file = $request->image;
				$fileName = $file->hashName();
				$file->move('assets/images/product', $fileName);
				$product->image = $fileName;
			}
			$product->update();

			return response()->json([
				'status' => 200,
				'message' => 'Updated a product succesfully'
			]);
		}
	}

	public function destroy($id)
	{
		$product = Product::find($id);
		$product->delete();
		return response()->json([
			'status' => 200,
			'message' => 'Deleted a product succesfully'
		]);
	}
}
?>