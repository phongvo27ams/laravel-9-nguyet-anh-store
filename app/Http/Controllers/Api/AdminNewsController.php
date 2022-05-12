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