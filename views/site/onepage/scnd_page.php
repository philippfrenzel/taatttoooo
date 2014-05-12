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
</div>
<footer id="footer" class="opacity">
    <div class="container">
        <p class="pull-left">&copy; cassandrapate.com <?= date('Y') ?></p>
        <p class="pull-right">&lt;frenzel.net&gt;</p>
    </div>
</footer>