<?php

namespace App\Models;

use Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    /** @use HasFactory<ProjectFactory> */
    use HasFactory;

    protected $guarded = [];

    protected static function booted(): void
    {
        static::saving(function (Project $project) {
            if (empty($project->slug) || $project->isDirty('title')) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'sort_order' => 'integer',
        ];
    }
}
