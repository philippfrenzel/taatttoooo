<div class="slide" data-anchor="slide1" id="slide1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="ultrabig">Show us your Tattoo and tell us the Story!</h1>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>

       <div class="row">
           &nbsp;
       </div>

        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <h2>Show us your Tattoo!</h2>

                <p class="bg-color-darken opacity">We care about body art and so we would like to share your style and thoughts. Pls. post us your
                    pictures in "RAW"-format and we'll prepare a "set" for you. None tattoo will be published without
                    your aggreament of what our "photoshopers" made out of it!
                </p>
            </div>
            <div class="col-lg-4">
                <h2>And tell us the Story!</h2>

                <p class="bg-color-darken opacity">
                    As you matter! Pls. tell us the Story that belongs to your tattoo, what it means to you and 
                    share your thoughts about your life. If you like, let us know about your past, the present and
                    your future!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="slide" data-anchor="slide2" id="slide2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-color-darken">
<?php 
echo philippfrenzel\yii2imageslider\yii2imageslider::widget(array(
    'id' => 'sp_slider',
    'items'=> array(
        array(
            'caption'=>'Sample Image',
            'content' => '<img src="articles/1.jpg" alt="Sample" class="reponsive">'
        ),
        array(
            'caption'=>'Longtail',
            'content' => '<img style="height:400px;width:400px;" src="/powershopyii2/powershop/web/filemanager/modelle/2014/14-hd-1200-custom-bs.png" alt="">'
        ),
        array(
            'caption'=>'Blobber',
            'content' => '<img style="height:400px;width:400px;" src="/powershopyii2/powershop/web/filemanager/modelle/2014/14-hd-1200-custom-bs.png" alt="">'
        )                           
    ),
    'clientOptions' => array(
        'visible_items'=>1,
        'circular' => 'yes',
    ),
));
?> 
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
    </div>
</div>
