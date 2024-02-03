<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::get();

        return view('admin.testimonials', compact('testimonials'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createTestimonial');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'name'            => 'required|string|max:255',
            'job'              => 'required',
            'comment'         => 'required',
            'image'           => 'required|mimes:png,jpg,jpeg|max:2048',
          
            
        ]);
        $data['published'] = isset($request->published);
        $data['image'] = $this->uploadFile($request->image, 'adminAssets/./images');

        Testimonial::create($data);

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
        
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.editTestimonials', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'            => 'required|string|max:255',
            'job'              => 'required',
            'comment'         => 'required',
            'image'           => 'required|mimes:png,jpg,jpeg|max:2048',
          
        ]);

        if(isset($request->image)){
            $data['image'] = $this->uploadFile($request->image, 'adminAssets/./images');
        }

        Testimonial::where('id', $id)->update($data);
        return 'true';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return 'true';
    }
}
