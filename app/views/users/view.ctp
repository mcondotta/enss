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
<div class="grid_16">
<div class="blue_box"  style="width:600px; display: block; margin-left: auto; margin-right: auto;">
	<h1 style="text-align:center;color:yellow;"><?php  __('User Information');?></h1>
  <h2 style="text-align:center;"><?php echo $this->Html->link(__('Edit This Information', true), array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?></h2>
      <table>
        <tr>
        <td><?php __('Last Name'); ?></td>
        <td><?php echo $user['PersonalInformation']['last_name']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('First Name'); ?></td>
        <td><?php echo $user['PersonalInformation']['first_name']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Scientific Name'); ?></td>
        <td><?php echo $user['PersonalInformation']['scientific_name']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Current Position'); ?></td>
        <td><?php echo $user['PersonalInformation']['current_position']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('University'); ?></td>
        <td><?php echo $user['PersonalInformation']['university']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Department'); ?></td>
        <td><?php echo $user['PersonalInformation']['department']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Professor'); ?></td>
        <td><?php echo $user['PersonalInformation']['professor']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('CPF'); ?></td>
        <td><?php echo $user['User']['CPF']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Email'); ?></td>
        <td><?php echo $user['User']['email']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('City/State'); ?></td>
        <td><?php echo $user['PersonalInformation']['city_state']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Address'); ?></td>
        <td><?php echo $user['PersonalInformation']['address']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Lattes'); ?></td>
        <td><?php echo $user['PersonalInformation']['lattes']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Last Login'); ?></td>
        <td><?php echo $user['User']['last_login']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Last Access'); ?></td>
        <td><?php echo $user['User']['last_access']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Created'); ?></td>
        <td><?php echo $user['User']['created']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Modified'); ?></td>
        <td><?php echo $user['User']['modified']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Abstract'); ?></td>
        <td><p><?php echo nl2br(htmlspecialchars($user['AbstractIl']['abstract'])); ?></p>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Intention Letter'); ?></td>
        <td><p><?php echo nl2br(htmlspecialchars($user['AbstractIl']['intention_letter'])); ?></p>&nbsp;</td>
        </tr>
			</table>
</div>
</div>
<div class="clear"></div>
