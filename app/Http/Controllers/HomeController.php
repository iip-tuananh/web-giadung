<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\BannerAds;
use App\models\PageContent;
use  App\models\ReviewCus;
use App\models\website\Prize;

class HomeController extends Controller
{
    public function home()
    {
        $data['bannerAds'] = BannerAds::where('status',1)->first(['name','image','id']);
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['prizes'] = Prize::where(['status'=>1])->limit(3)->get();
        $data['aboutUs'] = PageContent::where(['status'=>1, 'type'=>'ve-chung-toi', 'language'=>'vi'])->first();
        $data['cateProductHome'] = Category::with([
            'product'=> function($query) {
                $query->where(['status'=>1, 'discountStatus'=>1])->get(['id','category','name','discount','price','images','slug','cate_slug','type_slug']);
            }
        ])->where('status',1)->orderBy('id','asc')->get(['id','name','imagehome','avatar','slug']);
        $data['bestsellerProducts']= Product::where(['status'=>1, 'bestsellerStatus'=>1, 'discountStatus'=>1])->limit(9)->get(['id','category','name','discount','price','images','slug','cate_slug','type_slug']);
        $data['newProductsHome']= Product::where(['status'=>1, 'discountStatus'=>1])->orderBy('id', 'desc')->limit(9)->get(['id','category','name','discount','price','images','slug','cate_slug','type_slug']);
        $data['discountProductsHome']= Product::where(['status'=>1, 'discountStatus'=>1])->where('discount', '>',0)->limit(9)->get(['id','category','name','discount','price','images','slug','cate_slug','type_slug']);
        $data['homeBlog'] = Blog::where(['status'=>1, 'home_status'=>1])->orderBy('id', 'desc')->limit(4)->get(['id','title','image','description','created_at','slug','category']);
        return view('home',$data);
    }
}
