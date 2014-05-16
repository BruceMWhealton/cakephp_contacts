<!-- File: /app/View/Contacts/view.ctp -->


<h2><?php echo $content['Contact']['name']; ?> (<?php echo $content['Contact']['organization']; ?>)</h2>
<?php if($content['Contact']['title']) : ?>
<p>Title: <?php echo $content['Contact']['title']; ?></p>
<?php endif; ?>
<h3>Address:</h3>
<?php if($content['Contact']['street_address_1']) : ?>
<div><?php echo $content['Contact']['street_address_1']; ?><br>
<?php endif; ?>
<?php if($content['Contact']['street_address_2']) : ?>
<?php echo $content['Contact']['street_address_2']; ?></div>
<?php endif; ?>
<?php if($content['Contact']['city']) : ?>
<div><?php echo $content['Contact']['city']; ?>,&nbsp;
<?php endif; ?>
<?php if($content['Contact']['state']) : ?>
    <?php echo $content['Contact']['state']; ?>&nbsp;
<?php endif; ?>
<?php if($content['Contact']['zip']) : ?>
<?php echo $content['Contact']['zip']; ?></div>
<br><br>
<?php endif; ?>

<?php if($content['Contact']['home_phone']) : ?>
<h3>Home Phone: </h3>
<div><?php echo $content['Contact']['home_phone']; ?></div>
<br>
<?php endif; ?>

<?php if($content['Contact']['work_phone']) : ?>
<h3>Work Phone: </h3>
<div><?php echo $content['Contact']['work_phone']; ?></div>
<br>
<?php endif; ?>

<?php if($content['Contact']['fax']) : ?>
<h3>Fax Number: </h3>
<div><?php echo $content['Contact']['fax']; ?></div>
<br>
<?php endif; ?>

<?php if($content['Contact']['phone_other']) : ?>
<h3>Other Phone Number: </h3>
<div><?php echo $content['Contact']['phone_other']; ?></div>
<br>
<?php endif; ?>

<?php if($content['Contact']['email']) : ?>
<h3>Email: </h3>
<div><?php echo $content['Contact']['email']; ?></div>
<br>
<?php endif; ?>

<?php if($content['Contact']['website']) : ?>
<h3>Website: </h3>
<div><?php echo $this->Html->link($content['Contact']['website'], $content['Contact']['website']); ?></div>
<?php endif; 