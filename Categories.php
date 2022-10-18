<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public static function getCategories(){
        // Получаем одним запросом все разделы
        $arr = self::orderBy('name')->get();
        // Запускаем рекурсивную постройку дерева и отдаем на выдачу
        return self::buildTree($arr, 0);
    }

    public static function buildTree($arr, $pid = 0) {
        // Находим всех детей раздела
        $found = $arr->filter(function($item) use ($pid){return $item->p_id == $pid; });

        // Каждому детю запускаем поиск его детей и записываем в свойство sub
        foreach ($found as $key => $cat) {
            $sub = self::buildTree($arr, $cat->id);
            // То что ниже можно заменить на - $cat->sub = $sub;
            $found[$key]->sub = $sub;
        }

        return $found;
    }

    // Альтернативный вариант

    public static function getCategories2(){ // получаем корневые категории (у которых нету родителей) с жадной загрузкой отношения categories()
        return self::where('p_id','=',0)->with('categories')->get();
    }

    public function categories(){ // отношение категории к дочерним категориям, отдаётся сразу с жадной загрузкой
        return $this->hasMany(self::class,'p_id','id')->with('categories');
    }
}
