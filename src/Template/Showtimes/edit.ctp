<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $showtime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $showtime->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $showtime->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Showtimes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="showtimes form large-9 medium-8 columns content">
    <?= $this->Form->create($showtime) ?>
    <fieldset>
        <legend><?= __('Edit Showtime') ?></legend>
        <?php
            echo $this->Form->control('movie_id');
            echo $this->Form->control('room_id');
            echo $this->Form->control('start');
            echo $this->Form->control('end');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
