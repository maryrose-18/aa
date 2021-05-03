<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CompanyManagement;


class CompanyManagementController extends Controller
{
    //@error('title)

    // public function storeData(CompanyManagement $CompanyManagement)
    // {
    //     $result =
    //     [
    //         'company_name'      => "Fujitsu",
    //         'company_address'   => "Technopark",
    //         'status'            => "1"
    //     ];
    //     return $result;
    // }


    protected $company_management;

    public function __construct()
    {
        $this->company_management = new CompanyManagement();
    }

    public function storeData(Request $request)
    {
        return response()
        ->json([
            'message'   =>  "success",
            'data'      =>  $result
        ]);
    }


    public function store(Request $request)
    {
        $data =
        [
            'company_name'      => $request->company_name,
            'company_address'   => $request->company_address,
            'status'            => "1"
        ];

        $result = $this->company_management->storeData($data);

        return response()
        ->json([
            'message'   => "success",
            'data'      => $result
        ]);
    }

    public function update(Request $request, $id)
    {
        $data =
        [
            'company_name'      =>  $request->company_name,
            'company_address'   =>  $request->company_address,
            'status'            =>  $request->status
        ];
       $result = $this->company_management->updateData($data, $id);

        return response ()
        ->json([
            'message'   =>"success",
            'data'      =>$result
        ]);
    }

    public function loadData()
    {
        $data = $this->company_management->loadData();

        return response()
        ->json([
            'message'   =>"success",
            'data'      =>$data
        ]);
    }

    public function deleteData(Request $request)
    {
        $data =$this->company_management->deleteData($request->id);

        return response ()
        ->json([
            'message'   => "successfully deleted",
            'data'      => $data     
        ]);
    }


}
