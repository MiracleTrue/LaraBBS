<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'category';

//    /**
//     * 可以通过 $primaryKey 属性，重新定义主键字段
//     * @var string
//     */
//    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name', 'description',
    ];

    protected $hidden = [

    ];
}
