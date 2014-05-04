<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <h2>Upload your pictures...</h2>
            <?= $this->render('/dmsys/_upload_form', ['model'=> $dmsysmodel]); ?>
        </div>
        <div class="col-lg-7">
            <h2>Tell us your story...</h2>

            <div class="bg-color-darken opacity">
                <?= $this->render('/story/_form', ['model'=> $model]); ?>
            </div>
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
