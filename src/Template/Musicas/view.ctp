<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Musica $musica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Musica'), ['action' => 'edit', $musica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Musica'), ['action' => 'delete', $musica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $musica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Musicas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Musica'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="musicas view large-9 medium-8 columns content">
    <h3><?= h($musica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($musica->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Artista') ?></th>
            <td><?= h($musica->artista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($musica->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($musica->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($musica->modified) ?></td>
        </tr>
    </table>
</div>
