<div class="slide" data-anchor="slide1" id="slide1">
    <div class="container">
        <div class="row">
            <h2>&nbsp;</h2>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <h2>Do you have:</h2>

                        <div class="bg-color-darken opacity">
                            <h4>A favorite place?</h4>
                            <p>
                                It can be a restaurant, a street, or just a place in a park or the middle of nowhere. 
                                Something you think it unique to Texas and that you’d like to share with others.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    &nbsp;
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="ultrabig">Are you reading this from Texas ?</h1>
                        <h3 class="subultra">(or are you from there ?)</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <h2>&nbsp;</h2>                
                <div class="bg-color-darken opacity">
                    <h4>A tattoo about Texas?</h4>
                    <p>
                        I’ve never seen a place with more proud people and proud tattoos of where they’re from than Texas. 
                        If you have one, and want to share, let us know! 
                    </p>
                </div>                
                <p>&nbsp;</p>
                <div class="bg-color-darken opacity">
                    <h4>Anything else you’d like to share?</h4>
                    <p>
                        A song, a quote, a memory. If you know others who might want to contribute, 
                        share with them too!  
                    </p>
                </div>
            </div>        
        </div>        
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-4 center-block">
                <i class="fa fa-chevron-down fa-5x"></i>                
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8"><h2>Scroll down to read more ...</h2></div>            
        </div>
    </div>
</div>

<div class="slide" data-anchor="slide2" id="slide2">
    <div class="container">
        <div class="row">
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
</div>

<div class="slide" data-anchor="slide3" id="slide3">
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
