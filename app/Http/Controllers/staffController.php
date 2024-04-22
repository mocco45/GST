<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class staffController extends Controller
{
    public function index(){
        $allStaff = staff::all();

        return view('staffs', ['staffs' => $allStaff]);
    }

    public function store(Request $request){
        
              $request->validate([
                'staffImage' => 'nullable|image|mimes:jpeg,png,jpg,gif'
            ]); 
        
        if ($request->hasFile('staffImage')) {
            $uploadedFile = $request->file('staffImage');

            $customerFileName = time() . '.' . $uploadedFile->getClientOriginalExtension();
            
            $uploadedFile->storeAs('public/images/staff', $customerFileName);
        }
        staff::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'photo' => $customerFileName,
            'contact' => $request->contact,
        ]);
        return redirect()->back();
    }

    public function destroy(staff $staff){
        if($staff->photo){
            unlink(public_path('storage/images/posts/') . $staff->photo);
        }
        $staff->delete();
        return redirect()->back();
    }
}
