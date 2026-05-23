<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Registration;    
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }
     public function ValidateData(Request $request)
    {
         $request->validate([
            'Full_name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|email|unique:registrations,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'marathon_category' => 'required|in:3KM,5KM,10KM,21KM,42KM',
            'Jersey_size' => 'required|in:XS,S,M,L,XL,XXL',
            'school_organization' => 'required|string|max:255',
            'emergency_name' => 'required|string|max:255',
            'emergency_phone' => 'required|string|max:20',
            'emergency_relationship' => 'required|string|max:255',
            'runner_number' => 'required|string|max:20|unique:registrations,runner_number',
            'registration_date' => 'required|date',
        ]);
    }
    public function storeData(Request $request)
    {
        $this->ValidateData($request);
        
        try{
            $item = new Registration();
            $item->Full_name = $request->input('Full_name');
            $item->age = $request->input('age');
            $item->gender = $request->input('gender');
            $item->email = $request->input('email');
            $item->phone = $request->input('phone');
            $item->address = $request->input('address');
            $item->marathon_category = $request->input('marathon_category');
            $item->Jersey_size = $request->input('Jersey_size');
            $item->school_organization = $request->input('school_organization');
            $item->emergency_contact_name = $request->input('emergency_name');
            $item->emergency_contact_phone = $request->input('emergency_phone');
            $item->emergency_contact_relationship = $request->input('emergency_relationship');
            $item->runner_number = $request->input('runner_number');
            $item->registration_date = $request->input('registration_date');

            $item->save();
            return redirect('/register')->with('success', 'Registration successful!');
        }catch (\Exception $e) {
            return redirect('/register')->with('error', 'Failed to add registration. Please try again.');
        }
    }
    public function index(Request $request)
    {
        $query = Registration::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('Full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('address', 'like', "%{$search}%")
                  ->orWhere('marathon_category', 'like', "%{$search}%")
                  ->orWhere('registration_date', 'like', "%{$search}%")
                  ->orWhere('gender', 'like', "%{$search}%");
            });
        }
        $registrations = $query->paginate(10)->withQueryString();
        $totalcount = $registrations->total();

        return view('registration', compact('registrations', 'totalcount'));
    }
   
}
