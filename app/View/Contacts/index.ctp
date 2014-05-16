<h1>List of <?php echo $count ?> Contacts</h1>
<?php echo $this->Html->link('Add Contact',
        array('controller' => 'contacts', 'action' => 'add')); ?>
<table>
    <tr>
        <th>Name</th>
        <th>Organization</th>
        <th>Actions</th>
     </tr>
     <?php foreach ($contacts as $contact): ?>
     <tr>
         <td>
             <?php echo $this->Html->link($contact['Contact']['name'],
                     array('controller' => 'contacts', 'action'=> 'view', $contact['Contact']['id'])); ?>
         </td>
         <td>
             <?php echo h($contact['Contact']['organization']); ?>
         </td>
         <td>
             <?php echo $this->Html->link('Edit',
                     array('action' => 'edit', $contact['Contact']['id'])); ?> | 
            <?php echo $this->Form->postLink('Delete',
			array('action' => 'delete', $contact['Contact']['id']),
			array('confirm' => 'Are you sure you want to delete contact, '. $contact['Contact']['name'].'?'));
	?>    
         </td>
     </tr>
     <?php endforeach; ?>
     <?php unset($contact); ?>
</table>