<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
// use App\Models\Listing;
use App\Models\Car;
// use App\Models\Single;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(): View{
        $testimonials = Testimonial::where('published', 1)->take(3)->get();
        $cars = Car::take(6)->get(); 
        
        return view('index', compact(['cars','testimonials']));
       // return view('index');

    }

    public function listing(): View{
        //return view('listing');
        $cars = Car::get();
        $testimonials = Testimonial::where('published', 1)->take(3)->get();
        return view('listing',compact(['cars','testimonials']));
    }
   
    public function testimonial(): View{
        //return view('testimonial');
        $testimonials = Testimonial::where('published', 1)->get();
        return view('testimonial', compact('testimonials'));
    }

    public function blog(): View{   
        return view('blog');
    }


    public function about(): View{
        return view('about');
    }

    public function contact(): View{
        return view('contact');
    }

    public function single(): View{
        // return view('single');
        
        $cars = Car::take(2)->get();
        $categories = Category::get();
        return view('single',compact(['cars','categories']));

        // $car = Car::findOrFail($id);
        // $categories = Category::select(['id','categoryName'])->get();
        // return view('admin.editCar', compact(['car', 'categories']));
    }

    public function showNotFound(): View{
        return view('notFound');
    }


}
    




