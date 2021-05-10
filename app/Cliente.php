<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
    	'id',
    	'cli_rif',
    	'cli_razon',
    	'cli_dir',
    	'cli_telf1',
    	'cli_telf2',
    	'cli_telf3',
    	'cli_tipo',
    	'cli_activo',
    	'cli_mail1',
    	'cli_mail2'
    ];
}
