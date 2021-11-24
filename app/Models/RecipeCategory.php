<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RecipeCategory
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property bool $is_active
 */
class RecipeCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_active'];

    /**
     * @return string
     */
    public function getIsActiveLabel(): string
    {
        return $this->is_active ? 'Активна' : 'Отключена';
    }
}
