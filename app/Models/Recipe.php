<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
}

$recipe = new Recipe();

$recipe->title = 'Pollo empanizado';
$recipe->servings = 2;
$recipe->instructions = 'Cortar el pollo en trocitos, bañarlos en huevo crudo mezclado y después aplicar el empanizador...';

$recipe->save();
