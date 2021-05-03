<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CompanyManagement extends Model
{
    use HasFactory;


    protected $table ='companies'; //if table name in database is not equal in model name

    // private $table = "companies";
    public function storeData($data)
    {
        return DB::connection() //query builder
        ->table('companies')
        ->insert([$data]);
    }

    public function updateData($data, $where)
    {
        return CompanyManagement::where($where) //eloquent
        ->update($data);
    }

    public function loadData()
    {
        return DB::connection()
        ->table('companies')
        ->get();
    }

    public function deleteData($id)
    {
        return CompanyManagement::destroy($id);
    }
}
