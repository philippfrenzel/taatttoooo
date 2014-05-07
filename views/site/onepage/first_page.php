<div class="slide" data-anchor="slide1" id="slide1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <h2>Do you have:</h2>

                <div class="bg-color-darken opacity">
                    <h4>A favorite place?</h4>
                    <p>
                        It can be a restaurant
                    </p>
                </div>
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
        <div class="row">
            <div class="col-md-6">
                <h1 class="ultrabig">Are you reading this from Texas ?</h1>
                <h3 class="subultra">(or are you from there ?)</h3>
            </div>
            <div class="col-md-2">
                
            </div>
            <div class="col-md-4">
<?php
    if(class_exists('app\widgets\PortletUserStory'))
    {
        echo app\widgets\PortletUserStory::widget([
            'title' => NULL
        ]);
    }
?>
            </div>
        </div>
        <div class="row">
            <h2>&nbsp;</h2>
        </div>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-4 center-block">
                <i class="fa fa-chevron-down fa-5x"></i>                
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7"><h2>read more ...</h2></div>            
        </div>
    </div>
</div>

<div class="slide" data-anchor="slide2" id="slide2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-color-darken">
<?php 
echo philippfrenzel\yii2sly\yii2sly::widget(array(
    'id' => 'sp_slider',
    'items'=> array(
        array(
            'content' => '<img src="articles/2.jpg" alt="Sample">'
        ),
        array(
            'content' => '<img src="articles/3.jpg" alt="Sample">'
        ),
        array(
            'content' => '<img src="articles/1.jpg" alt="Sample">'
        )                          
    ),
    /*'clientOptions' => array(
        'visible_items'=>1,
        'circular' => 'true',
    ),*/
));
?> 
            </div>
            <div class="col-md-6">
                <h2>Tattoo</h2>
                <p class="bg-color-darken opacity">
                    I'm wearing this tattoo because I can. As a child I always wanted to be a fire fighter!
                </p>
                <h2>Past</h2>
                <p class="bg-color-darken opacity">
                    Grewn up in germany on the country side, you sometimes feel bored - so watching cartoons has
                    been my only fun! My favorite cartoon was grisu the small dragon, specially of his father...
                </p>
                <h2>Present</h2>
                <p class="bg-color-darken opacity">
                    Living in vienna and working at a big software companie... watching my little dragon tattoo makes
                    me miss the boring times when I was young...
                </p>
                <h2>Future</h2>
                <p class="bg-color-darken opacity">
                    Who knows... Stay healthy, have fun and maybe a little baby dragon...
                </p>
            </div>
        </div>
    </div>
</div>
