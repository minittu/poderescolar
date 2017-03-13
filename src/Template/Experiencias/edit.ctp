<?php
/**
  * @var \App\View\AppView $this
  
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $experiencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $experiencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Experiencias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="experiencias form large-9 medium-8 columns content">
    <?= $this->Form->create($experiencia) ?>
    <fieldset>
        <legend><?= __('Edit Experiencia') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('cpf');
            echo $this->Form->input('dt_nasc', ['empty' => true]);
            echo $this->Form->input('endereco');
            echo $this->Form->input('telefone');
            echo $this->Form->input('telefone2');
            echo $this->Form->input('email');
            echo $this->Form->input('nec_especiais');
            echo $this->Form->input('eixo_tematico');
            echo $this->Form->input('titulo_experiencia');
            echo $this->Form->input('autor1');
            echo $this->Form->input('autor2');
            echo $this->Form->input('autor3');
            echo $this->Form->input('autor4');
            echo $this->Form->input('autor5');
            echo $this->Form->input('escola');
            echo $this->Form->input('escola_munic');
            echo $this->Form->input('resumo');
            echo $this->Form->input('deposito');
            echo $this->Form->input('resumo_titulo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
*/
?>