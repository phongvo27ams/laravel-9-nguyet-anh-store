<?php
namespace App\Http\Controllers\Api;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AdminNewsController extends Controller
{
	public function index()
	{
		$news = News::all();
		return response()->json([
			'status' => 200,
			'news' => $news
		]);
	}

	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'title' => 'required',
			'brief' => 'required',
			'content' => 'required',
			'image' => 'required|image'
		], [
			'title.required' => 'Please enter a title',
			'brief.required' => 'Please enter a brief',
			'content.required' => 'Please enter a content',
			'image.required' => 'Please select an image',
			'image.image' => 'Only formats jpg, jpeg, png, bmp, gif, svg or webp are accepted'
		]);

		if($validator->fails()) {
			return response()->json([
				'status' => 400,
				'errors' => $validator->errors()
			]);
		} else {
			$news = new News();
			$news->title = $request->title;
			$news->unsigned_title = Str::slug($news->title, '-');
			$news->user_id = 1;
			$news->brief = $request->brief;
			$news->content = $request->content;
			if($request->hasFile('image')) {
				$file = $request->image;
				$fileName = $file->hashName();
				$file->move('assets/images/news', $fileName);
				$news->image = $fileName;
			}
			$news->save();

			return response()->json([
				'status' => 200,
				'message' => 'Stored a new piece of news succesfully'
			]);
		}
	}

	public function edit($id)
	{
		$news = News::find($id);
		return response()->json([
			'status' => 200,
			'news' => $news
		]);
	}

	public function update($id, Request $request)
	{
		$validator = Validator::make($request->all(), [
			'title' => 'required',
			'brief' => 'required',
			'content' => 'required',
			'image' => 'required|image'
		], [
			'title.required' => 'Please enter a title',
			'brief.required' => 'Please enter a brief',
			'content.required' => 'Please enter a content',
			'image.required' => 'Please select an image',
			'image.image' => 'Only formats jpg, jpeg, png, bmp, gif, svg or webp are accepted'
		]);

		if($validator->fails()) {
			return response()->json([
				'status' => 400,
				'errors' => $validator->errors()
			]);
		} else {
			$news = News::find($id);
			$news->title = $request->title;
			$news->unsigned_title = Str::slug($news->title, '-');
			$news->user_id = 1;
			$news->brief = $request->brief;
			$news->content = $request->content;
			if($request->hasFile('image')) {
				unlink("assets/images/news/$news->image");
				$file = $request->image;
				$fileName = $file->hashName();
				$file->move('assets/images/news', $fileName);
				$news->image = $fileName;
			}
			$news->update();

			return response()->json([
				'status' => 200,
				'message' => 'Updated a piece of news succesfully'
			]);
		}
	}

	public function destroy($id)
	{
		$news = News::find($id);
		$news->delete();
		return response()->json([
			'status' => 200,
			'message' => 'Deleted a piece of news succesfully'
		]);
	}
}
?>