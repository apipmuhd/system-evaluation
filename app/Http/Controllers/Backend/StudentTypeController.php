<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\StudentType;

class StudentTypeController extends Controller
{
    public function AllType()
    {
        $types = StudentType::latest()->get();
        return view('backend.type.all_type', compact('types'));
    }//End Method

    public function AddType()
    {
        return view('backend.type.add_type');
    }//End Method

    public function StoreType(Request $request)
    {
        //validation
        $request->validate([
            'contester_name'=>'required |unique:student_types|max:200',
            'project_title'=> 'required' 
        ]);

        StudentType::insert([
            'contester_name'=>$request->contester_name,
            'project_title'=>$request->project_title,
    
        ]);
        $notification = array(
            'message'=>'Contester Added Successfully!',
            'alert-type' =>'success'
        );
        return redirect()->route('all.type')->with($notification);
    }

    public function EditType($id)
    {
        $types = StudentType::findOrFail($id);
        return view('backend.type.edit_type',compact('types'));
    }

    public function UpdateType(Request $request)
    {
        $pid = $request->id;

    

        StudentType::findOrFail($pid)->update([
            'contester_name'=>$request->contester_name,
            'project_title'=>$request->project_title,
    
        ]);
        $notification = array(
            'message'=>'Contester updated Successfully!',
            'alert-type' =>'success'
        );
        return redirect()->route('all.type')->with($notification);
    }

    public function DeleteType($id)
    {
        StudentType::findOrFail($id)->delete();

        $notification = array(
            'message'=>'Contester Deleted Successfully!',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);
    }
    }//End Method

   
