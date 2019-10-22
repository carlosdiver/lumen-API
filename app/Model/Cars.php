<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Cars extends Model
{

    /**
     * @var string
     * Determina a tabela do Banco de dados que faz referência a esse model
     */
    protected $table = 'cars';
    /**
     * @var array
     * Determina quais o campos que devem ser inseridos no banco de dados
     * Evita problemas como SQL inject
     */
    protected $fillable = [
      'name',
      'description',
      'model',
      'date',
    ];
    /**
     * @var array
     * Converte a data para timestamp em consultas ao banco de dados
     */
    protected $casts = [
      'date' => 'Timestamp'
    ];


    /**
     * @var bool
     * Desabilita as colunas create_at, update_at e deleted_at da tabela no banco de dados
     */
    public $timestamps = false;


}