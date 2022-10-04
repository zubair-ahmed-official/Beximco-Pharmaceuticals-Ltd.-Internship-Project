<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Medicine;
use App\Models\Disease;
use App\Models\Medicines_Diseases;
use App\Models\Order; 
use App\Models\Delivered_order;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index()
    {
        $student = Doctor::all();
        return view('Medical.index', compact('student'));
    }

    public function doctor_appointment()
    {
        $student = Doctor::all();
        return view('Medical.Doctors_Appointment', compact('student'));
    }

    public function index_med()
    {
        $med = Medicine::all();
        return view('Medical.Medicine_index', compact('med'));
    }

    public function cust_med()
    {
        $cust_med = Medicine::all();
        //return redirect()->route('cust_med')->compact('cust_med');
        return view('Medical.Cust_Med_Index', compact('cust_med'));
    }
    public function cust_index_medis()
    {
        $dis = Disease::all();
        return view('Medical.Cust_Medis', compact('dis'));
    }

    public function index_medis()
    {
        $dis = Disease::all();
        return view('Medical.Medis', compact('dis'));
    }

    public function cust_dis()
    {
        $dis = Disease::all();
        return view('Medical.Cust_Disease_index', compact('dis'));
    }

    public function index_dis()
    {
        $dis = Disease::all();
        return view('Medical.Disease_index', compact('dis'));
    }

    public function index_orders()
    {
        $order = Order::all();
        return view('Medical.Order_index', compact('order')); //Cust_Medicines_Diseases
    }

    public function deliver_index()
    {
        $order = Delivered_order::all();
        return view('Medical.Deliver_index', compact('order')); //Cust_Medicines_Diseases
    }

    public function Cust_Medicines_Diseases(Request $req)
    {
        $Diseases = Disease::where('id',$req->id)->first();
       
        return view('Medical.cust_medicines_diseases')->with('Diseases',$Diseases);

        return view('Medical.DiseasesList')->with('Diseases',$Diseases);
    }

    public function Medicines_Diseases(Request $req)
    {
        $Diseases = Disease::where('id',$req->id)->first();
       
        return view('Medical.medicines_diseases')->with('Diseases',$Diseases);

        return view('Medical.DiseasesList')->with('Diseases',$Diseases);
    }
    public function MeDis(Request $req)
    {
        $Diseases = Disease::all();
        $Medi = Medicine::all();

        return view('Medical.DiseasesList')->with('Diseases',$Diseases)->with('Medi',$Medi);
    }

    public function create()
    {
        return view('Medical.create');
    }

    public function create_med()
    {
        return view('Medical.create_med');
    }

    public function create_dis()
    {
        return view('Medical.create_dis');
    }


    public function dlist()
    {
        return view('Medical.DiseasesList');
    }

    public function store(Request $request)
    {
        $student = new Doctor;
        $student->name = $request->input('name');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->department = $request->input('department');
        $student->bio = $request->input('bio');
        $student->joining_date = $request->input('joining_date');
        $student->save();
        return redirect()->back()->with('status','Doctors Information Added Successfully');
    }

    public function store_med(Request $request)
    {
        $request->validate(
            [
              'name'=>'required', 
              'disease'=>'required',
              'details'=>'required',
              'price'=>'required|regex:/^[0-9]+$/',
            ],
            [
              'name.required'=>'Please Enter a valid Name',
              'disease.required'=>'Please Enter a valid Disease',
              'details.required'=>'Please Enter a valid Details',
              'price.required'=>'Please Enter a valid Price',
              'price.regex'=>'Please Enter a Numeric Price',
            ]
          );

        $med = new Medicine;
        $med->name = $request->input('name');
        $med->disease = $request->input('disease');
        $med->details = $request->input('details');
        $med->price = $request->input('price');
        
        $med->save();
        return redirect()->back()->with('status','Medicine Information Added Successfully');
    }

    public function store_dis(Request $request)
    {
        $request->validate(
            [
              'name'=>'required', 
              'medicine'=>'required',
              'details'=>'required',
            ],
            [
              'name.required'=>'Please Enter a valid Name',
              'medicine.required'=>'Please Enter a valid medicine',
              'details.required'=>'Please Enter a valid Details',
            ]
          );
        $dis = new Disease;
        $dis->name = $request->input('name');
        $dis->medicine = $request->input('medicine');
        $dis->details = $request->input('details');
        
        $dis->save();
        return redirect()->back()->with('status','Disease Information Added Successfully');
    }
    
    public function store_MeDis(Request $request)
    {
        $md = new Medicines_Diseases;
        
        $md->Medicines_id = $request->Medicines_id;
        $md->Diseases_id = $request->Diseases_id;
        
        $md->save();
        return redirect()->back()->with('status','Medicines & Diseases Information Merged Successfully');
    }


    public function edit($id)
    {
        $student = Doctor::find($id);
        return view('Medical.edit', compact('student'));
    }

    public function book_doctor_appointment($id)
    {
        $student = Doctor::find($id);
        return view('Medical.Booking_DrAppointment', compact('student'));
    }

    public function edit_med($id)
    {
        $med = Medicine::find($id);
        return view('Medical.edit_med', compact('med'));
    }
    public function edit_dis($id)
    {
        $dis = Disease::find($id);
        return view('Medical.edit_dis', compact('dis'));
    }

    public function update(Request $request, $id)
    {
        $student = Doctor::find($id);
        $student->name = $request->input('name');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->department = $request->input('department');
        $student->bio = $request->input('bio');
        $student->joining_date = $request->input('joining_date');
        
        $student->update();
        return redirect()->back()->with('status','Doctors Information Updated Successfully');
    }

    public function update_med(Request $request, $id)
    {
        $med = Medicine::find($id);
        $med->name = $request->input('name');
        $med->disease = $request->input('disease');
        $med->details = $request->input('details');
        $med->price = $request->input('price');
       
        $med->update();
        return redirect()->back()->with('status','Medicines Information Updated Successfully');
    }

    public function ordering_med($id)
    {
        $order_med = Medicine::find($id);
        return view('Medical.order_med', compact('order_med'));
    } 

    public function delivering_order($id)
    {
        $order_med = Order::find($id);
        return view('Medical.Deliver_order', compact('order_med'));
    }

    public function deliver_order(Request $request,$id)
    {
        $med = new Delivered_order;
        $med->cname = $request->input('cname');
        $med->address = $request->input('address');
        $med->phone = $request->input('phone');
        $med->name = $request->input('name');
        $med->disease = $request->input('disease');
        //$med->details = $request->input('details');
        $med->price = $request->input('price');
        $med->num = $request->input('num');
        $med->tprice = $med->price * $med->num;
        $med->payment = $request->input('payment');
        $med->save();

        $delete_order = Order::find($id);
        if($delete_order != null)
        {
            $delete_order->delete();
        }

        //$order = Order::all();
        //return view('Medical.Order_index', compact('order')); //Cust_Medicines_Diseases
        

        return redirect()->to('/index_orders')->with('status','Order delivered Successfully');     
        
    }

    public function order_med(Request $request, $id)
    {
        $request->validate(
            [
              'cname'=>'required', 
              'address'=>'required',
              'phone'=>'required',
              'name'=>'required', 
              'disease'=>'required',
              'price'=>'required|regex:/^[0-9]+$/',
              'num'=>'required',
              'payment'=>'required'
            ],
            [
              'cname.required'=>'Please Enter your Name', 
              'address.required'=>'Please Enter your Address',
              'phone.required'=>'Please Enter your Phone',
              'name.required'=>'Please Enter a valid Name',
              'disease.required'=>'Please Enter a valid Disease',
              'price.required'=>'Please Enter a valid Price',
              'price.regex'=>'Please Enter a Numeric Price',
              'payment.required'=>'Please Enter a payment method'
            ]
          );

       
        $med = new Order;
        $med->cname = $request->input('cname');
        $med->address = $request->input('address');
        $med->phone = $request->input('phone');
        $med->name = $request->input('name');
        $med->disease = $request->input('disease');
        //$med->details = $request->input('details');
        $med->price = $request->input('price');
        $med->num = $request->input('num');
        $med->tprice = $med->price * $med->num;
        $med->payment = $request->input('payment');
        $med->save();
        return redirect()->back()->with('status','Medicines Ordered Successfully');
    }

    public function update_dis(Request $request, $id)
    {
        $dis = Disease::find($id);
        $dis->name = $request->input('name');
        $dis->medicine = $request->input('medicine');
        $dis->details = $request->input('details');
       
        $dis->update();
        return redirect()->back()->with('status','Disease Information Updated Successfully');
    }
    public function destroy($id)
    {
        $student = Doctor::find($id);
        $student->delete();
        return redirect()->back()->with('status','Doctors Information Deleted Successfully');
    }
    public function destroy_med($id)
    {
        $med =Medicine::find($id)->leftJoin('medicines_diseases','medicines.id', '=','medicines_diseases.Medicines_id')->where('medicines.id', $id); 
        Medicines_Diseases::where('Medicines_id', $id)->delete();                           
        $med->delete();
        
        /*$med = Medicine::find($id);
        $med->delete($id);
        
        $Medicines_id = $id;
        $m = Medicines_Diseases::find($Medicines_id);
        $m->delete($id);*/

        return redirect()->back()->with('status','Medicines Information Deleted Successfully');
    }
    public function destroy_dis($id)
    {
        $dis =Disease::find($id)->leftJoin('medicines_diseases','diseases.id', '=','medicines_diseases.Diseases_id')->where('diseases.id', $id); 
        Medicines_Diseases::where('Diseases_id', $id)->delete();                           
        $dis->delete();

        /*$dis = Disease::find($id);
        $dis->delete();*/
        
        return redirect()->back()->with('status','Diseases Information Deleted Successfully');
    }
    public function destroy_md($id)
    {
        $md = Medicines_Diseases::find($id);
        $md->delete();
    
        return redirect()->back()->with('status',' Information Deleted Successfully');
    }
}