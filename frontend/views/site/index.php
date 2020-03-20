<?php
 use frontend\widgets\frontadvert\FrontAdvert;
 use frontend\models\Advert;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.<br />
		Spodaj so zadnje 3 novice, če te obstajajo.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

				<?php	
				// predzadnji Advert v bazi (offset je 1)
				// $fakedModel = (object)['title'=> 'Heading', 'image' => 'http://placehold.it/350x150'];	
				$model=Advert::find()->orderBy(['id' => SORT_DESC])->offset(1)->one();
				
				// <?= FrontAdvert::widget(['model' => $fakedModel]); \?\>	
				
				?>	
					
                <?= FrontAdvert::widget(['model' => $model]); ?>		
					
					
                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
			   
			 
			
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
					

				<?php	
				// tretji Advert od zadaj v bazi (offset=2)
				//$fakedModel = (object)['title'=> 'Heading', 'image' => 'http://placehold.it/350x150'];	
				$model=Advert::find()->orderBy(['id' => SORT_DESC])->offset(2)->one();
				
				// <?= FrontAdvert::widget(['model' => $fakedModel]); \?\>	
				
				?>	
					
                <?php if ($model) echo FrontAdvert::widget(['model' => $model]); ?>				
				
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
