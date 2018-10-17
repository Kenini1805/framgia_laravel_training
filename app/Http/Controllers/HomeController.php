<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;

class HomeController extends Controller
{
    //
    public function index() 
    {
    	// Lấy ra tất cả các bản ghi của Product
    	// $product = $product = Product::all();

    	//Lấy ra 5 bản ghi
    	// $product = Product::limit(5)->get();

    	//Lấy ra 5 bản ghi mới nhất
    	//asc | desc
    	// $product = Product::limit(5)->orderBy('id', 'desc')->get();

    	//Lấy ra 1 bản ghi mới nhất
    	// $product = Product::limit(1)->orderBy('id', 'desc')->get();
    	// $product = Product::first();
    	// $product = Product::latest();

    	//Lấy ra sản phẩm sản phẩm mới (Hot = 1)
    	// $product = Product::where('hot', 1)->get();

    	//Lấy ra sản phẩm tên mới nhập bắt đầu bằng: Miss (% ở cuối)
    	//Hoặc kết thúc bằng MD  (% ở đầu)
    	//Hoặc chứa Miss(% ở đầu và cuối chuỗi tìm kiếm)
		// $product = Product::where('hot', 1)->where('product_name', 'like', '%Miss%')->get();
    	
    	//Lấy ra sản phẩm có giá từ 20-160$
    	// $product = Product::where('price', '>=', 20)->where('price', '<=', 160)->get();
    	// $product = Product::whereBetween('price', [20, 160])->get();

		//Lấy ra sản phẩm nằm trong khoảng 20-100$ hoặc 400-600$ (nâng cao)
    	//$product = Product::whereBetween('price', [20, 160])->get();

    	//Lấy ra sản phẩm có unit là: miếng|cân
    	// $product = Product::whereIn('unit', ['miếng', 'cân'])->get();

    	//Đếm số lượng sản phẩm có unit là: miếng|cân
    	// $product = Product::whereIn('unit', ['miếng', 'cân'])->count();

    	//Lấy giá sản phẩm cao nhất | thấp nhất | trung bình
    	// $product = Product::max('price');
    	// $product = Product::min('price');
    	// $product = Product::avg('price');

    	//Lấy ra danh sách các loại unit
    	// $product = Product::select('unit')->distinct()->get();


		//select count(*) as user_count from `products` where `status` <> '1' group by `status`

		//select count(*) as user_count from `products` where `status` <> '1' and `hot` = '1' group by `status`
		//select count(*) as user_count from `products` where `status` <> '1' group by `hot` having `hot` = '0'

    	// $product = DB::table('products')
     //                 ->select(DB::raw('count(*) as user_count'))
     //                 ->where('status', '<>', 1)
     //                 ->groupBy('status')
     //                 ->where('hot', '=', 1)
     //                 ->get();

    	//havingTo sử dụng để lọc sau khi groupBy
    	// $product = DB::table('products')
     //                 ->select(DB::raw('count(*) as user_count'))
     //                 ->where('status', '<>', 1)
     //                 ->groupBy('hot', 'status')
     //                 ->having('hot', '=', 0)
     //                 ->get();

    	// $product = Product::where('status', '<>', 1)->count();

        $prd = new Category();
    	$product = $prd->product();


    	// return $product;
    	return view('photo', compact($product));
    }
}
