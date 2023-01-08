<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'title'];
    static public $createValidationRules = [
        'title' => 'required|unique:tasks|max:255|min:4',
        'description' => 'required|min:10',
    ];

    static public $updateValidationRules = [
        'title' => 'required|max:255|min:4',
        'description' => 'required|min:10',
    ];

    public function files()
    {
        return $this->hasMany(TaskFile::class);
    }
}
