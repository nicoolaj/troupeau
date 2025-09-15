<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    // Les propriétés qui peuvent être assignées en masse.
    protected $fillable = [
        'identifier',
        'name',
        'sex',
        'birth_date',
        'death_date',
        'parent_male_id',
        'parent_female_id',
    ];

    // Définir les relations pour les parents.
    public function parentMale()
    {
        return $this->belongsTo(Animal::class, 'parent_male_id');
    }

    public function parentFemale()
    {
        return $this->belongsTo(Animal::class, 'parent_female_id');
    }
}