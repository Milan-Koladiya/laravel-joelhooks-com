<?php
/* for database model */
namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use App\Blog;

class Post extends Authenticatable
{
    use Notifiable;

    public function User() {
        return $this->B
    }
}
