<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function indexx()
    {
        // return view('admin.cars');
        $cars= Car::get();
        return view('admin.cars', compact('cars'));
    

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.createCar');
        $categories = Category::select(['id','categoryName'])->get();
        return view('admin.createCar', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'name'            => 'required|string|max:255',
            'comment'         => 'required',
            'luggage'         => 'required',
            'doors'           => 'required',
            'passenger'       => 'required',
            'price'           => 'required',
            'published'       => 'required',
            'image'           => 'required|mimes:png,jpg,jpeg|max:2048',
            'category_id'     => 'required',
          
            
        ]);
        $data['published'] = isset($request->published);
        $data['image'] = $this->uploadFile($request->image, 'adminAssets/./images');

        Car::create($data);

        return 'true';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $car = Car::findOrFail($id);
        $categories = Category::select(['id','categoryName'])->get();
        return view('admin.editCar', compact(['car', 'categories']));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'            => 'required|string|max:255',
            'comment'         => 'required',
            'luggage'         => 'required',
            'doors'           => 'required',
            'passenger'       => 'required',
            'price'           => 'required',
            'published'       => 'required',
            'image'           => 'required|mimes:png,jpg,jpeg|max:2048',
            'category_id'     => 'required',
         
        ]);

        if(isset($request->image)){
            $data['image'] = $this->uploadFile($request->image, 'adminAssets/./images');
        }

        Car::where('id', $id)->update($data);
        return 'true';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return 'true';
    }
}

?>
