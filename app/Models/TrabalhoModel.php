<?php namespace App\Models;

use CodeIgniter\Model;

class TrabalhoModel extends Model
{
    protected $table = 'trabalhos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['protocolo', 'resumo', 'curso', 'modelo_avaliativo', 'avaliadores', 'created_at', 'updated_at'];
}
