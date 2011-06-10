<div class="grid_3"></br></div>
<div class="grid_10">
<div class="blue_box">
	<h1 style="text-align:center;color:yellow;"><?php  __('User Information');?></h1>
  <h2 style="text-align:center;"><?php echo $this->Html->link(__('Edit Your Information', true), array('controller' => 'users', 'action' => 'edit_info')); ?></h2>
      <table>
        <tr>
        <td><?php __('Last Name'); ?></td>
        <td><?php echo $user['PersonalInformation'][0]['last_name']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('First Name'); ?></td>
        <td><?php echo $user['PersonalInformation'][0]['first_name']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Scientific Name'); ?></td>
        <td><?php echo $user['PersonalInformation'][0]['scientific_name']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Current Position'); ?></td>
        <td><?php echo $user['PersonalInformation'][0]['current_position']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('University'); ?></td>
        <td><?php echo $user['PersonalInformation'][0]['university']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Department'); ?></td>
        <td><?php echo $user['PersonalInformation'][0]['department']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Professor'); ?></td>
        <td><?php echo $user['PersonalInformation'][0]['professor']; ?>&nbsp;</td>
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
        <td><?php echo $user['PersonalInformation'][0]['city_state']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Address'); ?></td>
        <td><?php echo $user['PersonalInformation'][0]['address']; ?>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Lattes'); ?></td>
        <td><?php echo $user['PersonalInformation'][0]['lattes']; ?>&nbsp;</td>
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
        <td><p><?php echo nl2br(htmlspecialchars($user['AbstractIl'][0]['abstract'])); ?></p>&nbsp;</td>
        </tr>
        <tr>
        <td><?php __('Intention Letter'); ?></td>
        <td><p><?php echo nl2br(htmlspecialchars($user['AbstractIl'][0]['intention_letter'])); ?></p>&nbsp;</td>
        </tr>
			</table>
</div>
</div>
<div class="clear"></div>
