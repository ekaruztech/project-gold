<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class BaseModel extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * @param $sql_stmt
     * @return mixed
     */
    public function selectQuery($sql_stmt)
    {
        return DB::select($sql_stmt);
    }

    /**
     * @param $sql_stmt
     */
    public function sqlStatement($sql_stmt)
    {
        DB::statement($sql_stmt);
    }
}
