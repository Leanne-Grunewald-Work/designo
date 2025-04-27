<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class SlugHelper
{
    /**
     * Generate a unique slug for a model.
     *
     * @param string $title
     * @param string $column
     * @param Model $model
     * @return string
     */
    public static function generateUniqueSlug(string $title, string $column, Model $model): string
    {
        $baseSlug = Str::slug($title);
        $slug = $baseSlug;
        $counter = 1;

        while ($model->where($column, $slug)
                    ->where('id', '!=', $model->id ?? 0)
                    ->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
