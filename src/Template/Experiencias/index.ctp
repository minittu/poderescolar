<?php
/**
  * @var \App\View\AppView $this


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Experiencia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="experiencias index large-9 medium-8 columns content">
    <h3><?= __('Experiencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dt_nasc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nec_especiais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eixo_tematico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo_experiencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('escola') ?></th>
                <th scope="col"><?= $this->Paginator->sort('escola_munic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deposito') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resumo_titulo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($experiencias as $experiencia): ?>
            <tr>
                <td><?= $this->Number->format($experiencia->id) ?></td>
                <td><?= h($experiencia->nome) ?></td>
                <td><?= $this->Number->format($experiencia->cpf) ?></td>
                <td><?= h($experiencia->dt_nasc) ?></td>
                <td><?= h($experiencia->endereco) ?></td>
                <td><?= h($experiencia->telefone) ?></td>
                <td><?= h($experiencia->telefone2) ?></td>
                <td><?= h($experiencia->email) ?></td>
                <td><?= h($experiencia->nec_especiais) ?></td>
                <td><?= h($experiencia->eixo_tematico) ?></td>
                <td><?= h($experiencia->titulo_experiencia) ?></td>
                <td><?= h($experiencia->autor1) ?></td>
                <td><?= h($experiencia->autor2) ?></td>
                <td><?= h($experiencia->autor3) ?></td>
                <td><?= h($experiencia->autor4) ?></td>
                <td><?= h($experiencia->autor5) ?></td>
                <td><?= h($experiencia->escola) ?></td>
                <td><?= h($experiencia->escola_munic) ?></td>
                <td><?= h($experiencia->resumo) ?></td>
                <td><?= h($experiencia->deposito) ?></td>
                <td><?= h($experiencia->resumo_titulo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $experiencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $experiencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $experiencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experiencia->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
  */
?>