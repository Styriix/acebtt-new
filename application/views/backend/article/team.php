<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h2><?php echo (!empty($title)?$title:null) ?></h2>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="border_preview">
                <?php echo form_open_multipart("backend/cms/team/form/$article->article_id") ?>
                <?php echo form_hidden('article_id', $article->article_id) ?> 
                    <div class="form-group row">
                        <label for="headline_en" class="col-sm-2 col-form-label"><?php echo display('name') ?><i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <input name="headline_en" value="<?php echo htmlspecialchars($article->headline_en) ?>" class="form-control" placeholder="<?php echo display('name') ?>" type="text" id="headline_en">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article_image" class="col-sm-2 col-form-label"><?php echo display('image') ?></label>
                        <div class="col-sm-10">
                            <input name="article_image" class="form-control" placeholder="<?php echo display('image') ?>" type="file" id="article_image">
                             <input type="hidden" name="article_image_old" value="<?php echo $article->article_image ?>">
                             <?php if (!empty($article->article_image)) { ?>
                                <img src="<?php echo base_url().$article->article_image ?>" width="150">
                             <?php } ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article1_en" class="col-sm-2 col-form-label"><?php echo display('article_en') ?></label>
                        <div class="col-sm-10">
                            <textarea  id="summernote" name="article1_en" class="form-control editor" placeholder="<?php echo display('article_en') ?>" type="text" id="article1_en"><?php echo htmlspecialchars($article->article1_en) ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article1_fr" class="col-sm-2 col-form-label"><?php echo display('article')." ".$web_language->name ?></label>
                        <div class="col-sm-10">
                            <textarea name="article1_fr" class="form-control" placeholder="<?php echo display('article')." ".$web_language->name ?>" type="text" id="article1_fr"><?php echo htmlspecialchars($article->article1_fr) ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position_serial" class="col-sm-2 col-form-label"><?php echo display('position_serial') ?><i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <input name="position_serial" value="<?php echo $article->position_serial ?>" class="form-control" placeholder="<?php echo display('position_serial') ?>" type="text" id="position_serial">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <a href="<?php echo base_url('admin'); ?>" class="btn btn-primary  w-md m-b-5"><?php echo display("cancel") ?></a>
                            <button type="submit" class="btn btn-success  w-md m-b-5"><?php echo $article->article_id?display("update"):display("create") ?></button>
                        </div>
                    </div>
                <?php echo form_close() ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>