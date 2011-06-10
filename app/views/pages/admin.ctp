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
    </ul>
    </div>
</div>
