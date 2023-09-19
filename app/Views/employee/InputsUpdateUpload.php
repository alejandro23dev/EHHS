<?php
$arr=array();
if(isset($data['form']['data']->form_sign))
{
    $json=stripslashes(html_entity_decode($data['form']['data']->form_sign));//echo $json;
    $arr= json_decode($json, true);
}
?>
	<div class="col-sm-12">


		<div class="row">   
			<section class="col col-3">
				<div class="form-group">
					<label>Elder abuse and neglect</label>
					<label for="file" class="input input-file">
						<span class="btn button" style="margin-top:0px;line-height: 32px !important;">
							<i class="glyphicon glyphicon-plus"></i>
							<span>Add files</span>
                            <?php $type='elder';?>
							<input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
						</span>
					</label>
					<div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
				</div>
			</section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php $key=$type.'_expiration';if(isset($arr[0][$key]))print $arr[0][$key];?>" class="form-control datepicker">
			</section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
			</section>

            <section class="col col-3">
                <div class="form-group">
                    <label>Hippa</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='Hippa';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>

		</div>

        <div class="row">
            <section class="col col-3">
                <div class="form-group">
                    <label>HIV/AIDS/Infection control</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='hiv';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>

            <section class="col col-3">
                <div class="form-group">
                    <label>Alzheimer disease</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='Alzheimer';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>
		</div>

        <div class="row">
            <section class="col col-3">
                <div class="form-group">
                    <label>Domestic violence</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='violence';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>

            <section class="col col-3">
                <div class="form-group">
                    <label>OSHA</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='OSHA';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>
        </div>

        <div class="row">
            <section class="col col-3">
                <div class="form-group">
                    <label>Self administration of medication</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='self';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>

            <section class="col col-3">
                <div class="form-group">
                    <label>CPR / First AID card</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='cpr';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>
        </div>

        <div class="row">
            <section class="col col-3">
                <div class="form-group">
                    <label>Professional license verification</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='Professional';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>

            <section class="col col-3">
                <div class="form-group">
                    <label>Professional liability insurance</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='liability';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>
        </div>

        <div class="row">
            <section class="col col-3">
                <div class="form-group">
                    <label>SSN</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='ssn';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>

            <section class="col col-3">
                <div class="form-group">
                    <label>Immigration status</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='inmigration';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>
        </div>

        <div class="row">
            <section class="col col-3">
                <div class="form-group">
                    <label>Driver license</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='driver';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>

            <section class="col col-3">
                <div class="form-group">
                    <label>Car insurance</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='car';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>
        </div>

        <div class="row">
            <section class="col col-3">
                <div class="form-group">
                    <label>Car registration</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='registration';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>

            <section class="col col-3">
                <div class="form-group">
                    <label>Criminal history check</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='criminal';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>
        </div>

        <div class="row">
            <section class="col col-3">
                <div class="form-group">
                    <label>Tuberculosis</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='tuberculosis';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>

            <section class="col col-3">
                <div class="form-group">
                    <label>Physical Exam</label>
                    <label for="file" class="input input-file">
                            <span class="btn button" style="margin-top:0px;line-height: 32px !important;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files</span>
                                <?php $type='physical_exam';?>
                                <input style="margin-top: -5px;" datafld='ignore' data-text="<?php print $type;?>" data-url="Employee/UploadFile/<?php print $type.'/'.$data['id_employee'];?>" class="fileupload" id="fileupload_<?php print $type;?>" type="file" name="fileupload_<?php print $type;?>">
                            </span>
                    </label>
                    <div class="files" style="margin-top: -5px;">Allowed: jpg<br><div id="<?php print $type;?>_files"></div></div>
                </div>
            </section>

            <section class="col col-2">
                <label>Expiration</label>
                <input type="text" name="<?php print $type;?>_expiration" id="<?php print $type;?>_expiration" value="<?php if(isset($arr[0][$type.'_expiration']))print $arr[0][$type.'_expiration'];?>" class="form-control datepicker">
            </section>

            <section class="col col-1">
                <img style="display: inline-block;height: 80px;background-repeat: no-repeat;background-position: center center;background-size: cover;width: 80px;border-radius: 50% !important;cursor: pointer;"src="<?php print base_url('/assets/images/no_doc.png');?>" id="<?php print $type;?>_pic" alt="" />
                <input type="hidden" id="<?php print $type;?>_required" value="0">
            </section>
        </div>


        <div class="form-group pull-right">
			<button type="button" id="btn_save_upload" class="btn btn-primary">Save</button>
            <input type="hidden" name="upload_id_form" id="upload_id_form" value="<?php if(isset($data['form']['data']->id_form)) print $data['form']['data']->id_form;?>" />
            <input type="hidden" name="upload_today_date" id="upload_today_date" class="form-control required" readonly  value="<?php print date('m/d/Y');?>" />
		</div>

	</div>
<?php require_once(APPPATH."views/includes/footer_scripts.php");?>
<script type="text/javascript">
	function DeleteFile(id, folder, name)
    {
        var target = document.getElementById('main-view');
        var spinner = new Spinner(opts).spin(target);

        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: 'Employee/DeleteFile',
            data:{folder:folder, name:name}
        }).done(function(response, textStatus, jqXHR)
        {//alert(response);
            if(response=='DELETED')
            {
                jQuery('#'+id).hide('slow',function() {
                    jQuery('#'+id).remove();
                });
				if(jQuery('#id_person').val()=='')jQuery('#random').val('');else jQuery('#random').val('no');
            }
            spinner.stop();
        }).fail(function(jqHTR, textStatus, thrown)
        {
            alertify.error('Something is wrong with AJAX:' + textStatus);
            spinner.stop();
        });
    }

    jQuery(document).ready(function()
    {
        App.init();
        Datepicker.initDatepicker();

        ShowPics();

		var random=Math.floor((Math.random() * 900000000000) + 1);

        jQuery('.fileupload').fileupload(
        {
            dataType: 'json',
            formData: {random:random},
            done: function (e, data)
            {
                var type=jQuery(this).attr('data-text');//alert(type);
                var files=jQuery("#"+type+"_files").html();

                //alert(files);
                //alert(files.indexOf(data.result.file_name));

                //if(files.indexOf(data.result.file_name) == -1)
                //{
                    var id_random=Math.floor((Math.random() * 900000000000) + 1);
                    //alert(data.result.status);
                    if (data.result.status == 'error')
                    {
                        alertify.error(data.result.msg);
                    }
                    else
                    {
                        //var url='/assets/upload/temp_files/<?php print $data['id_employee'];?>/'+type+'_<?php print $data['id_employee'];?>.jpg';
                        //jQuery("#"+type+"_pic").attr("src", "<?php print base_url();?>"+url+"?"+id_random);
                        ShowPicsAux(type);
                        jQuery("#"+type+"_required").val(1);
						alertify.success('File uploaded.');
                    }
                //}
            }
        }).prop('disabled', !jQuery.support.fileInput).parent().addClass(jQuery.support.fileInput ? undefined : 'disabled');

		jQuery('#btn_save_upload').on('click', function ()
        {
            //ValidateFrm('frm1');
			//if (jQuery("#frm1").valid())
			//{
            var form_name='upload';
            var x=jQuery('#frm21').find('input[datafld!=ignore], select[datafld!=ignore]').serializeArray();
            var date=jQuery('#upload_today_date').val();
            var form_sign='[{';

            jQuery.each(x, function(i, field)
            {
                if(field.value!='')
                {
                    if(i!=0)
                        form_sign=form_sign+',';

                    form_sign = form_sign + '"' + field.name + '":"' + field.value + '"';
                }
            });

            form_sign=form_sign+'}]';//alert(form_sign);

            var id_employee=jQuery('#id_employee').val();
            var id_form=jQuery('#upload_id_form').val();

            var completed_percent=100;

            var data ='form_name='+form_name+
                '&form_sign='+form_sign+
                '&date='+date+
                '&completed_percent='+completed_percent+
                '&id_employee='+id_employee+
                '&id_form='+id_form;

            var url = 'Employee/SaveEmployeeForm';

            var target = document.getElementById('container');
            var spinner = new Spinner(opts).spin(target);

            jQuery.ajax({
                type: "POST",
                dataType: "html",
                url: url,
                data:data
            }).done(function(response, textStatus, jqXHR)
            {
                if(jQuery.isNumeric(response) && response>0)
                {
                    RebuildHeader();
                    alertify.success('Data Saved.');

                    jQuery("#frm21 input").prop("disabled", true);
                    jQuery('#btn_save_upload').hide();
                }
                else{alertify.error('Error: The element could not be Saved. '+ response);}
                spinner.stop();

            }).fail(function(jqHTR, textStatus, thrown)
            {
                alertify.error('Something is wrong with AJAX:' + textStatus);
            });
            //}
        });



		function ShowPics()
		{
            ShowPicsAux('elder');
            ShowPicsAux('Hippa');
            ShowPicsAux('hiv');
            ShowPicsAux('Alzheimer');
            ShowPicsAux('violence');
            ShowPicsAux('OSHA');
            ShowPicsAux('self');
            ShowPicsAux('cpr');
            ShowPicsAux('Professional');
            ShowPicsAux('liability');
            ShowPicsAux('ssn');
            ShowPicsAux('inmigration');
            ShowPicsAux('driver');
            ShowPicsAux('car');
            ShowPicsAux('registration');
            ShowPicsAux('criminal');
            ShowPicsAux('tuberculosis');
            ShowPicsAux('physical_exam');
		}

        jQuery('body').on('click', '.file_uploaded', function ()
        {
            var sub_folder=jQuery(this).attr("data-text");//alert(sub_folder);
            DownloadFile(sub_folder);
        });

		function ShowPicsAux(e)
        {
            d = new Date();
            var ext="jpg";
            var sub_folder="<?php print $data['id_employee'].'/';?>"+e+"<?php print '_'.$data['id_employee'].'.'?>"+ext;
            var url = "<?php print base_url().'assets/upload/temp_files/';?>"+sub_folder;

            jQuery.get(url).done(function()
            {
                var elem="#"+e+"_pic";
                jQuery(elem).attr("src", url+"?"+d.getTime());
                jQuery(elem).attr("data-text", sub_folder);
                jQuery(elem).attr("class", "file_uploaded");
                jQuery("#"+e+"_required").val(1);
            }).fail(function (jqHTR, textStatus, thrown)
            {
                var ext="png";
                var sub_folder="<?php print $data['id_employee'].'/';?>"+e+"<?php print '_'.$data['id_employee'].'.'?>"+ext;
                var url = "<?php print base_url().'assets/upload/temp_files/';?>"+sub_folder;

                jQuery.get(url).done(function()
                {
                    var elem="#"+e+"_pic";
                    jQuery(elem).attr("src", url+"?"+d.getTime());
                    jQuery(elem).attr("data-text", sub_folder);
                    jQuery(elem).attr("class", "file_uploaded");
                    jQuery("#"+e+"_required").val(1);
                }).fail(function (jqHTR, textStatus, thrown)
                {
                    var ext="pdf";
                    var sub_folder="<?php print $data['id_employee'].'/';?>"+e+"<?php print '_'.$data['id_employee'].'.'?>"+ext;
                    var url = "<?php print base_url().'assets/upload/temp_files/';?>"+sub_folder;

                    jQuery.get(url).done(function()
                    {
                        var elem="#"+e+"_pic";
                        jQuery(elem).attr("src", "<?php print base_url().'assets/images/pdf.png';?>"+"?"+d.getTime());
                        jQuery(elem).attr("data-text", sub_folder);
                        jQuery(elem).attr("class", "file_uploaded");
                        jQuery("#"+e+"_required").val(1);
                    })
                });
            });
        }

		function RebuildHeader()
        {
            jQuery( '#div_header' ).empty();

            jQuery.ajax({
                url:'Main/RebuildHeader',
                type:'POST'
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    jQuery('#div_header').html(response);
                }
            });
        }

        function DownloadFile(sub_folder)
        {
            if(sub_folder=='' || sub_folder=='undefined')
                alertify.message('Nothing to download.')
            else
                document.location = 'Main/DownloadFile?sub_folder='+sub_folder;

            /*jQuery.ajax({
                url: 'Main/DownloadFile',
                type: 'POST',
                data: 'src=' + src
            });*/
        }
    });
</script>