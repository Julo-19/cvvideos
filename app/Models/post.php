<?php

namespace App\Models;

use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = ['video', 'content','user_id'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function commentaire()
    {
        return $this->hasMany(Commentaire::class)->latest();
    }

//     public function commentaires()
// {
//     return $this->hasMany(Commentaire::class)->latest();
// }

}
