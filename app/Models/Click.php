<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Click extends Model {
    protected $table = 'clicks';

    protected $fillable = ['ip', 'country', 'referer', 'referer_host', 'user_agent', 'link_id'];
}
