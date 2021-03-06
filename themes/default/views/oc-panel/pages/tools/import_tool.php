<?php defined('SYSPATH') or die('No direct script access.');?>

<div class="page-header">
    <h1><?=__('Import tool for locations and categories')?></h1>
	<p><a href="http://open-classifieds.com/2014/06/06/use-import-tool-categories-locations/" target="_blank"><?=__('Read more')?></a></p>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <span class="label label-info"><?=__('Heads Up!')?></span> 
                <?=__('Select .csv file to upload categories or locations. Valid format must be:')?>
                <table class="table table-striped ">
                      <thead>
                    <tr>
                          <th>Name</th>
                          <th>Seoname</th>
                    </tr>
                      </thead>
                      <tbody>
                    <tr>
                      <td>Category 1</td>
                      <td>category-seoname</td>
                    </tr>
                    <tr>
                          <td>Category 2</td>
                          <td></td>
                    </tr>
                </table>
                <?=__('Name is mandatory. But seoname is not, if not provided it is automatically generated')?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?=__('Upload CSV file')?></h3>
            </div>
            <div class="panel-body">
                <?= FORM::open(Route::url('oc-panel',array('controller'=>'tools','action'=>'import_tool')), array('class'=>'', 'enctype'=>'multipart/form-data'))?>
                    <div class="form-group">
                        <label for=""> <?=__('import Categories')?></label>
                        <input type="file" name="csv_file_categories" id="csv_file_categories" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for=""><?=__('import Locations')?></label>
                        <input type="file" name="csv_file_locations" id="csv_file_locations" class="form-control"/>
                    </div>
                        <?= FORM::button('submit', __('Upload'), array('type'=>'submit', 'class'=>'btn btn-primary', 'action'=>Route::url('oc-panel',array('controller'=>'tools','action'=>'import_tool'))))?>
                <?= FORM::close()?>
            </div>
        </div>
    </div>
</div>
