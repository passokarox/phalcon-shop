<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->partial('index/header'); ?>
	</head>
	<body>
                <?php echo $this->partial('index/navbar'); ?>
                
		<?php echo $this->getContent(); ?>
                
                <?php echo $this->partial('index/footer'); ?>
	</body>
</html>