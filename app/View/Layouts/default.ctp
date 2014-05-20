<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <?php 
        echo $this->Html->css('styles');
        echo $this->fetch('css');
        ?>
        <title>My Contacts App - <?php echo $title_for_layout; ?></title>
	</head>
	<body>
	    <div id="HeaderWrapper">
	        <div id="Header" class="widthWrapper">
	            <h1><a href=""><span>My Contacts App</span></a></h1>
	        </div>
	        <div id="Navigation" class="widthWrapper">
	            <ul>
	                <li><a href="/contacts">Contacts</a></li>
	                <li><a href="/categories">Categories</a></li>
	            </ul>
	        </div>
			<div id="Search" class="widthWrapper">
				<div class="searchInput">
				 <input type="text" value="" name="data['Contact']['name']" />
				</div>
				<div>
					<button>Search</button>
				</div>
			</div>
	    </div>
	    <div id="MainBody">
	        <div id="Content" class="widthWrapper">
                <?php echo $this->fetch('content'); ?>
	        </div>
	    </div>
	</body>
</html>
