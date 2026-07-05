<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model {

    // klasa treba da se zovi isto kao i naziv tabele u bazi samo u jednini, ako to nije slucaj mozemo postaviti vrednost $table sa nazivom nase tabele u bazi
    protected $table = 'job_listings';

    // ovde navodimo kolone koje mogu biti popunjene od strane korisnika
    protected $fillable = ['title', 'salary'];
}
?>
