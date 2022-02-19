<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ["name", "excerpt", "content"];

    /*Recoger los eventos de Eloquent a traves de la tabla, si no se esta ejecutandose en la consola
    se esta ejecutando desde la terminal user_id = usuario autorizado*/
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($table) {
            if ( ! app()->runningInConsole()) {
                $table->user_id = auth()->id();
            }
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter(Builder $query, array $filters) {
//        TODO filtrar listado del cliente con Vuejs
    }
}
