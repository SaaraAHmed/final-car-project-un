<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\Common;


class UserController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $users = User::get();

        return view('admin.users', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createUser');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([ 
            'name'                => 'required|string|max:255',
            'userName'            => 'required|string|max:255',
            'email'               => 'required',               
            'password'            => 'required'
            
        ]);
        $data['published'] = isset($request->published);

        User::create($data);

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
        $user=User::findOrFail($id);

        return view('admin.editUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            
            'name'            => 'required|string|max:255',
            'userName'            => 'required|string|max:255',
            'email'               => 'required',               
            'password'            => 'required'
        ]);

    

        User::where('id', $id)->update($data);
        return 'true';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            User::where('id', $id)->delete();
            return 'true';
        }
    }
}
