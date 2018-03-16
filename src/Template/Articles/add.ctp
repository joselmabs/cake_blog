<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <h1>Add Article</h1>
       <?php
       echo $this->Form->create($article);
       // just added the categories input
       echo $this->Form->input('category_id');
       echo $this->Form->input('title');
       echo $this->Form->input('body', ['rows' => '3']);
       echo $this->Form->button(__('Save Article'));
       echo $this->Form->end();
       ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
