<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h2>Upload your pictures...</h2>
            <?= $this->render('/dmsys/_upload_form', ['model'=> new app\models\Dmsys]); ?>
        </div>
        <div class="col-lg-8">
            <h2>Tell us your story...</h2>

            <p class="bg-color-darken opacity">
                <?= $this->render('/story/_form', ['model'=> $model]); ?>
            </p>
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
        <div class="col-md-4"></div>
        <div class="col-md-8"><h2>Scroll down to read more...</h2></div>            
    </div>
</div>
