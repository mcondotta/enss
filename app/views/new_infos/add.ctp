<div class="grid_16" id="admin_menu">
    <h1 style="text-align:center;color:yellow;">Administra&ccedil;&atilde;o</h1>
    <div>
    <ul id="admin-menu">
        <li class="has-sub-menu"><h3 style="text-align:center;"><?php echo $html->link(__('Events', true), array('controller'=>'events', 'action'=>'index')); ?></h3>
          <ul><li class="first-item"><?php echo $html->link(__('Add New Event', true), array('controller'=>'events', 'action'=>'add')); ?></li></ul>
        </li>
        <li><h3 style="text-align:center;"><?php echo $html->link(__('Users', true), array('controller'=>'users', 'action'=>'index')); ?></h3></li>
        <li><h3 style="text-align:center;"><?php echo $html->link(__('Pages', true), array('controller'=>'pages', 'action'=>'index')); ?></h3></li>
        <li><h3 style="text-align:center;"><?php echo $html->link(htmlentities(__('Subpages', true)), array('controller'=>'subpages', 'action'=>'index')); ?></h3></li>
        <li><h3 style="text-align:center;"><?php echo $html->link(htmlentities(__('News', true)), array('controller'=>'new_infos', 'action'=>'news_list')); ?></h3></li>
    </ul>
    </div>
</div>
<div class="grid_4"></br></div>
<div class="grid_8">
    <h2 id="page-heading"><?php printf(__('Add %s', true), __('News', true)); ?></h2>

  <div class="pages form">
  <?php echo $this->Form->create('NewInfo');?>
    <fieldset>
      <legend><?php printf(__('English News', true)); ?></legend>
<?php
    echo $this->Form->input('event_id');
    echo $this->Form->input('date');
    echo $this->Form->input('text');
  ?>
    </fieldset>
    <fieldset>
      <legend><?php printf(__('Portuguese News', true)); ?></legend>
    <?php
    echo $this->Form->input('texto', array('type' => 'textarea'));
  ?>
    </fieldset>

  <?php echo $this->Form->end(__('Submit', true));?>
  </div>

</div>
