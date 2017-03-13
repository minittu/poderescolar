<?php
/**
  * @var \App\View\AppView $this


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Experiencia'), ['action' => 'edit', $experiencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Experiencia'), ['action' => 'delete', $experiencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experiencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Experiencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Experiencia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="experiencias view large-9 medium-8 columns content">
    <h3><?= h($experiencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($experiencia->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= h($experiencia->endereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($experiencia->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone2') ?></th>
            <td><?= h($experiencia->telefone2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($experiencia->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nec Especiais') ?></th>
            <td><?= h($experiencia->nec_especiais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eixo Tematico') ?></th>
            <td><?= h($experiencia->eixo_tematico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo Experiencia') ?></th>
            <td><?= h($experiencia->titulo_experiencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor1') ?></th>
            <td><?= h($experiencia->autor1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor2') ?></th>
            <td><?= h($experiencia->autor2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor3') ?></th>
            <td><?= h($experiencia->autor3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor4') ?></th>
            <td><?= h($experiencia->autor4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor5') ?></th>
            <td><?= h($experiencia->autor5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Escola') ?></th>
            <td><?= h($experiencia->escola) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Escola Munic') ?></th>
            <td><?= h($experiencia->escola_munic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($experiencia->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deposito') ?></th>
            <td><?= h($experiencia->deposito) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo Titulo') ?></th>
            <td><?= h($experiencia->resumo_titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($experiencia->id) ?></td>
        </tr>
        <tr>                                             
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= $this->Number->format($experiencia->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Nasc') ?></th>
            <td><?= h($experiencia->dt_nasc) ?></td>
        </tr>
    </table>
</div>
  */
  ?>