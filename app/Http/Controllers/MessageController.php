<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Traits\Common;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.messages');
        $messages = Message::get();

        return view('admin.messages', compact('messages'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createMessage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'fullName'            => 'required|string|max:255',
            'email'              => 'required',
            
          
            
        ]);

       Message::create($data);

        return 'true';
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id);

        return view('admin.showMessage', compact('message'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    
        {
            Message::where('id', $id)->delete();
            return 'true';
        }
   
}
