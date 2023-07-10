<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentmanagementController extends Controller
{
    public function admission(){
        return view('admission');
        
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'mobile_no'=>'required|max:15',
            'password'=> 'required',
            'address'=> 'required',
            'class'=> 'required',  
        ],
        [
            'name.required'=>'fill your name address',
            'mobile_no.required'=>'fill your mobile_no',
            'password.required'=>'fill your password',
            'address.required'=>'fill your address',
            'class.required'=>'fill your class'
            ]
        
        
        );
        
        Student::create([
            'name'=>$request->name,
            'mobile_no'=>$request->mobile_no,
            'password'=>$request->password,
            'address'=>$request->address,
            'class'=>$request->class,
         ]);
         return redirect()->to('/');   
        }
     public function dashboard(){
            $students=Student::get();
            return view('dashboard',compact('students'));
         }


public function edit($id){
    $student=Student::find($id);
    return view('edit',compact('student'));
 }


    
    public function update(Request $request, $id){

        $request->validate([
            'name'=>'required',
            'mobile_no'=>'required|max:15',
            'password'=> 'required',
            'address'=> 'required',
            'class'=> 'required',  
        ],
        [
            'name.required'=>'fill your name address',
            'mobile_no.required'=>'fill your mobile_no',
            'password.required'=>'fill your password',
            'address.required'=>'fill your address',
            'class.required'=>'fill your class'
            ]
    );
         $student=Student::find($id);
         $student->update([
            'name'=>$request->name,
            'mobile_no'=>$request->mobile_no,
            'password'=>$request->password,
            'address'=>$request->address,
            'class'=>$request->class,
         ]);
         return redirect()->to('/dashboard');   
        }
        public function delete(Request $request, $id){
             $student=Student::find($id);
             $student->delete();
             return redirect()->to('/dashboard');   
 }





/**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'mobile_no.required' => 'A title is required',
        'name.required' => 'A message is required',
    ];
}





}
