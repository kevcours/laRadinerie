<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey='idUtilisateur';

    public function getAuthPassword(){
        return $this->mdpUtilisateur;
    }

    protected $fillable = [
        'prenomUtilisateur','nomUtilisateur', 'mailUtilisateur', 'mdpUtilisateur','role','newsletter',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'mdpUtilisateur', 'remember_token',
    ];
}
