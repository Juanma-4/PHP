<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	
	
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" /> -->
   
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stylepropio.css" /> 
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

<?php
$this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'type' => null,//'inverse',
        'brand' => 'Inmobiliaria',
        'brandUrl' => '#',
        'collapse' => true, // requires bootstrap-responsive.css
        'fixed' => false,
        'items' => array(
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'items' => array(
                    array('label' => 'Home', 'url' => '#', 'active' => true),
                    array('label' => 'Link', 'url' => '#'),
                    array(
                        'label' => 'Dropdown',
                        'url' => '#',
                        'items' => array(
                            array('label' => 'Action', 'url' => '#'),
                            array('label' => 'Another action', 'url' => '#'),
                            array(
                                'label' => 'Something else here',
                                'url' => '#'
                            ),
                            '---',
                            array('label' => 'NAV HEADER'),
                            array('label' => 'Separated link', 'url' => '#'),
                            array(
                                'label' => 'One more separated link',
                                'url' => '#'
                            ),
                        )
                    ),
                ),
            ),
            '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'htmlOptions' => array('class' => 'pull-right'),
                'items' => array(
                    array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    '---',
                    array(
                        'label' => 'Dropdown',
                        'url' => '#',
                        'items' => array(
                            array('label' => 'Action', 'url' => '#'),
                            array('label' => 'Another action', 'url' => '#'),
                            array(
                                'label' => 'Something else here',
                                'url' => '#'
                            ),
                            '---',
                            array('label' => 'Separated link', 'url' => '#'),
                        )
                    ),
                ),
            ),
        ),
    )
);
?>


	<div id="mainmenu">


    
	<!--<?php
	/*$this->widget(
    'bootstrap.widgets.TbMenu',
		    array(
		        'type' => 'list',
		        'items' => array(
		            array(
		                'label' => 'List header',
		                'itemOptions' => array('class' => 'nav-header')
		            ),
		            array(
		                'label' => 'Home',
		                'url' => '#',
		                'itemOptions' => array('class' => 'active')
		            ),
		            array('label' => 'Library', 'url' => '#'),
		            array('label' => 'Applications', 'url' => '#'),
		            array(
		                'label' => 'Another list header',
		                'itemOptions' => array('class' => 'nav-header')
		            ),
		            array('label' => 'Profile', 'url' => '#'),
		            array('label' => 'Settings', 'url' => '#'),
		            '',
		            array('label' => 'Help', 'url' => '#'),
		        )
		    )
);*/

/*$this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'brand' => 'Title',
        'fixed' => false,
        'items' => array(
            '<form class="navbar-form pull-left">
                    <input type="text" class="span2">
                    <button type="submit" class="btn">Submit</button>
                </form>'
        )
    )
);*/


	?>

		<?php 
		/*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('post/index')),
				array('label'=>'About', 'url'=>array('site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('site/contact')),
				array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
		*/?>-->
        
        
	</div><!-- mainmenu -->
<?php echo $content; ?>


	


	<div id="footer" style="width:100%;text-align: center; background-color:#600000; color:#ffffff; float:left;">
		Copyright &copy; <?php echo date('Y'); ?> by Grupo 3.<br/>
		None Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
        
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>