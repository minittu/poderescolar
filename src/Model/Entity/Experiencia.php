<?php
namespace App\Experiencia\Entity;

use Cake\ORM\Entity;

/**
 * Experiencia Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $cpf
 * @property \Cake\I18n\Time $dt_nasc
 * @property string $endereco
 * @property string $telefone
 * @property string $telefone2
 * @property string $email
 * @property string $nec_especiais
 * @property string $eixo_tematico
 * @property string $titulo_experiencia
 * @property string $autor1
 * @property string $autor2
 * @property string $autor3
 * @property string $autor4
 * @property string $autor5
 * @property string $escola
 * @property string $escola_munic
 * @property string $resumo
 * @property string $deposito
 * @property string $resumo_titulo
 */
class Experiencia extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];	
}