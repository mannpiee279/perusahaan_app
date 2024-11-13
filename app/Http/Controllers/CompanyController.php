<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Service;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::all();
        $services = Service::all();
        $employees = Employee::all();
        return view('companies.index', compact('companies', 'services', 'employees'));
    }

    public function create(){
        $companies = Company::all();
        $services = Service::all();
        $employees = Employee::all();
        return view('companies.create', compact('companies', 'services', 'employees'));
    }
    public function edit(){
        $companies = Company::all();
        $services = Service::all();
        $employees = Employee::all();
        return view('companies.edit', compact('companies', 'services', 'employees'));
    }

    public function tambah(Request $request){
        Company::create($request->all());
        return redirect()->route('companies.index')->with('success', 'Sukses menambah Perusahaan!');
    }

    public function update(Request $request, Company $company){
        $company->update($request->all());
        return redirect()->route('companies.index')->with('success', 'Sukses memperbarui Perusahaan!');
    }

    public function destroy(Company $company){
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Sukses menghapus Perusahaan!');
    }
}
