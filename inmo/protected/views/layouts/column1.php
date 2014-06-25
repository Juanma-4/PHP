<?php $this->beginContent('/layouts/main'); ?>

<div class="container">
<div class="rowMenu">
    <?php 

    if(Yii::app()->user->checkAccess('Director')){
        $this->widget(
        'bootstrap.widgets.TbMenu',
        array(
        
        'type' => 'list',
        'items' => array(
        array(
        'label' => 'List header',
        'itemOptions' => array('class' => 'nav-header')
        ),
        array('label' => 'Home', 'url' => '#','itemOptions' => array('class' => 'active')),

        array('label' => 'Library', 'url' => '#','class'=>'red'),
        array('label' => 'Applications', 'url' => '#'),
        array('label' => 'Another list header','itemOptions' => array('class' => 'nav-header')),

        array('label' => 'Profile', 'url' => '#'),
        array('label' => 'Settings', 'url' => '#'),
        '',
        array('label' => 'CrearEmpleado', 'url' => array('user/Create')),
        array('label' => 'Administrar Empleados', 'url' => array('user/Admin')),
        )
        )
        );


    }else{
        $this->widget(
        'bootstrap.widgets.TbMenu',
        array(
        'type' => 'list',
        'items' => array(
        array(
        'label' => 'List header',
        'itemOptions' => array('class' => 'nav-header')
        ),
        array('label' => 'Home', 'url' => '#','itemOptions' => array('class' => 'active')),

        array('label' => 'Library', 'url' => '#','class'=>'red'),
        array('label' => 'Applications', 'url' => '#'),
        array('label' => 'Another list header','itemOptions' => array('class' => 'nav-header')),

        array('label' => 'Profile', 'url' => '#'),
        array('label' => 'Settings', 'url' => '#'),
        '',
      
        )
        )
        );




    }
    

    ?>  
</div>

	<div id="content" class="rowContent">
	 
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>