<?php
$arr=array();
if(isset($data['form']['data']->form_sign))
{
	$json=stripslashes(html_entity_decode($data['form']['data']->form_sign));//echo $json;
	$arr= json_decode($json, true);
}
?>

<div class="col-sm-12">

    <fieldset class="myfieldset">
        <?php $lg='Nurse aide quiz';?>
        <legend class="mylegend" id="references_lg1"><?php print $lg;?></legend>

        <div style='text-align:justify;'>
            <fieldset class="myfieldset">
                <?php $lg='Please match each word with the correct definition';?>
                <legend class="mylegend" id="references_lg2"><?php print $lg;?></legend>

                <div style='text-align:justify;'>
                    <div class="col-sm-3">
                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label>Ambulatory</label>
                                <input type="text" name="Ambulatory" id="Ambulatory" value="<?php if(isset($arr[0]['Ambulatory']))print $arr[0]['Ambulatory'];?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label>Catheter</label>
                                <input type="text" name="Catheter" id="Catheter" value="<?php if(isset($arr[0]['Catheter']))print $arr[0]['Catheter'];?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label>Stool</label>
                                <input type="text" name="Stool" id="Stool" value="<?php if(isset($arr[0]['Stool']))print $arr[0]['Stool'];?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label>TPR</label>
                                <input type="text" name="TPR" id="TPR" value="<?php if(isset($arr[0]['TPR']))print $arr[0]['TPR'];?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label>BP</label>
                                <input type="text" name="BP" id="BP" value="<?php if(isset($arr[0]['BP']))print $arr[0]['BP'];?>" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label>Ad Lib</label>
                                <input type="text" name="Ad_Lib" id="Ad_Lib" value="<?php if(isset($arr[0]['Ad_Lib']))print $arr[0]['Ad_Lib'];?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label>Stat</label>
                                <input type="text" name="Stat" id="Stat" value="<?php if(isset($arr[0]['Stat']))print $arr[0]['Stat'];?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label>S & A</label>
                                <input type="text" name="sa" id="sa" value="<?php if(isset($arr[0]['sa']))print $arr[0]['sa'];?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label>NPO</label>
                                <input type="text" name="NPO" id="NPO" value="<?php if(isset($arr[0]['NPO']))print $arr[0]['NPO'];?>" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <label>I & O</label>
                                <input type="text" name="IO" id="IO" value="<?php if(isset($arr[0]['IO']))print $arr[0]['IO'];?>" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>1. Temperature,  pulse, and respiration</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>2. At liberty</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>3. Immediately</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>4. Sugar and acetone</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>5. Nothing by mouth</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>6. Able to work</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>7. Intake and output</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>8. Blood Pressure</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>9. Waste, bowel movement</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>10. Tube to remove urine</label>
                            </div>
                        </div>

                    </div>
                </div>

            </fieldset>

            <fieldset class="myfieldset">
                <?php $lg='Please choose the best answer to the question';?>
                <legend class="mylegend" id="references_lg3"><?php print $lg;?></legend>

                <div class="col-sm-12" style='text-align:justify;'>
                    <p>
                        1. If a patient who is recovering from a long illness is cranky and puts on his signal light frequently for little things, which of this actions by the aide be most helpful to the patient and the nursing staff?
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='1' id='1a' value="1a" type='radio' class="required" <?php if(isset($arr[0]['1']) && $arr[0]['1']=='1a')print 'checked';?>><i class="rounded-x"></i> Leave the mans room as quickly as possible each time you answer the light</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='1' id='1b' value="1b" type='radio' class="required" <?php if(isset($arr[0]['1']) && $arr[0]['1']=='1b')print 'checked';?>><i class="rounded-x"></i> Go to see him sometime when he has not signaled and asked if there is anything he would like</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='1' id='1c' value="1c" type='radio' class="required" <?php if(isset($arr[0]['1']) && $arr[0]['1']=='1c')print 'checked';?>><i class="rounded-x"></i> Ask him why he is so fussy , or suggest that he needs to be more reasonable</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='1' id='1d' value="1d" type='radio' class="required" <?php if(isset($arr[0]['1']) && $arr[0]['1']=='1d')print 'checked';?>><i class="rounded-x"></i> Say as little to him as possible</label>
                    </div>

                </div>

                <div class="col-sm-12" style='text-align:justify;margin-top: 20px;'>

                    <?php $i=2;?>
                    <p>
                        2. Mrs . T. Has been in bed for several days, and he is now supposed to wake up. Before she gets up, she will be helped to sit on the side of the bed and “ dangle “ for a few minutes. THE MOST IMPORTANT reason for this is to:
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>a' value="<?php print $i;?>a" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'a')print 'checked';?>><i class="rounded-x"></i> Prevent dizziness or fainting</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>b' value="<?php print $i;?>b" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'b')print 'checked';?>><i class="rounded-x"></i> Make it easier to put on her robe slippers</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>c' value="<?php print $i;?>c" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'c')print 'checked';?>><i class="rounded-x"></i> Make her feel less afraid to get up</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>d' value="<?php print $i;?>d" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'d')print 'checked';?>><i class="rounded-x"></i> Provide time to get a chair and pillows to proper position</label>
                    </div>

                </div>

                <div class="col-sm-12" style='text-align:justify;margin-top: 20px;'>

                    <?php $i=3;?>
                    <p>
                        3.In turning over a weak, elderly patient to rub his back , the aide finds a slightly red area about the rise of a quarter at the base of his spine. The aide will report, this. What would it be best to do for the patient before reporting the finding?
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>a' value="<?php print $i;?>a" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'a')print 'checked';?>><i class="rounded-x"></i> Omit the back rub and just powder his back</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>b' value="<?php print $i;?>b" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'b')print 'checked';?>><i class="rounded-x"></i> Rub his back well and tape a large doughnut around the red spot</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>c' value="<?php print $i;?>c" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'c')print 'checked';?>><i class="rounded-x"></i> Apply an antiseptic to the spot and avoid rubbing the lower part of the back</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>d' value="<?php print $i;?>d" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'d')print 'checked';?>><i class="rounded-x"></i> Rub this back thoroughly and leave him supported on his side</label>
                    </div>

                </div>

                <div class="col-sm-12" style='text-align:justify;margin-top: 20px;'>

                    <?php $i=4;?>
                    <p>
                        4. If pulse beats occur at the rate of two per second, then two per second again , the pulse is called:
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>a' value="<?php print $i;?>a" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'a')print 'checked';?>><i class="rounded-x"></i> Irregular</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>b' value="<?php print $i;?>b" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'b')print 'checked';?>><i class="rounded-x"></i> Bounding</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>c' value="<?php print $i;?>c" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'c')print 'checked';?>><i class="rounded-x"></i> Compressible</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>d' value="<?php print $i;?>d" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'d')print 'checked';?>><i class="rounded-x"></i> Thready</label>
                    </div>

                </div>

                <div class="col-sm-12" style='text-align:justify;margin-top: 20px;'>

                    <?php $i=5;?>
                    <p>
                        5. When a person breathes in and then breathes out the breathes in and out again, this is counted as:
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>a' value="<?php print $i;?>a" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'a')print 'checked';?>><i class="rounded-x"></i> One respiration</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>b' value="<?php print $i;?>b" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'b')print 'checked';?>><i class="rounded-x"></i> Two respirations</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>c' value="<?php print $i;?>c" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'c')print 'checked';?>><i class="rounded-x"></i> Three respirations</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>d' value="<?php print $i;?>d" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'d')print 'checked';?>><i class="rounded-x"></i> Four respirations</label>
                    </div>

                </div>

                <div class="col-sm-12" style='text-align:justify;margin-top: 20px;'>

                    <?php $i=6;?>
                    <p>
                        6. On her way the bathroom, Mrs. C. Falls and complains she has much pain in her leg and hip. You should:
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>a' value="<?php print $i;?>a" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'a')print 'checked';?>><i class="rounded-x"></i> Get her up before she gets cold</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>b' value="<?php print $i;?>b" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'b')print 'checked';?>><i class="rounded-x"></i> Rub her hip and leg</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>c' value="<?php print $i;?>c" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'c')print 'checked';?>><i class="rounded-x"></i> Go get a neighbor to help get her up</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>d' value="<?php print $i;?>d" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'d')print 'checked';?>><i class="rounded-x"></i> Call an ambulance or the emergency number</label>
                    </div>

                </div>

                <div class="col-sm-12" style='text-align:justify;margin-top: 20px;'>

                    <?php $i=7;?>
                    <p>
                        7. Mr X. wakes  up having trouble breathing and pain in his chest. He starts to sweat. You should:
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>a' value="<?php print $i;?>a" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'a')print 'checked';?>><i class="rounded-x"></i> Just pretend everything everything is all right</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>b' value="<?php print $i;?>b" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'b')print 'checked';?>><i class="rounded-x"></i> Get him up to walk</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>c' value="<?php print $i;?>c" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'c')print 'checked';?>><i class="rounded-x"></i> Call an ambulance or the emergency number</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>d' value="<?php print $i;?>d" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'d')print 'checked';?>><i class="rounded-x"></i> Open the windows to cool him off</label>
                    </div>

                </div>

                <div class="col-sm-12" style='text-align:justify;margin-top: 20px;'>

                    <?php $i=8;?>
                    <p>
                        8. Mr T. Has had his morning insulin. That afternoon he becomes shaky, nervous and weak. You should:
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>a' value="<?php print $i;?>a" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'a')print 'checked';?>><i class="rounded-x"></i> Let him sleep</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>b' value="<?php print $i;?>b" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'b')print 'checked';?>><i class="rounded-x"></i> Give him orange juice or sugar water, agnate call a doctor</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>c' value="<?php print $i;?>c" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'c')print 'checked';?>><i class="rounded-x"></i> Wait a few hours to see if it passes</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>d' value="<?php print $i;?>d" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'d')print 'checked';?>><i class="rounded-x"></i> Tell him to behave himself</label>
                    </div>

                </div>

                <div class="col-sm-12" style='text-align:justify;margin-top: 20px;'>

                    <?php $i=9;?>
                    <p>
                        9. The first thing you do when you start to move a patient from bed to chair or back again is:
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>a' value="<?php print $i;?>a" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'a')print 'checked';?>><i class="rounded-x"></i> Make sure the furniture will not move</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>b' value="<?php print $i;?>b" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'b')print 'checked';?>><i class="rounded-x"></i> Keep your knees locked and pull</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>c' value="<?php print $i;?>c" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'c')print 'checked';?>><i class="rounded-x"></i> Grab from behind and lift</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>d' value="<?php print $i;?>d" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'d')print 'checked';?>><i class="rounded-x"></i> Do not try unless there are two people in the house</label>
                    </div>

                </div>

                <div class="col-sm-12" style='text-align:justify;margin-top: 20px;'>

                    <?php $i=10;?>
                    <p>
                        10. Which is the best breakfast for Mrs. Z. , who is on a low slat diet?
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>a' value="<?php print $i;?>a" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'a')print 'checked';?>><i class="rounded-x"></i> Fried eggs, crisp bacon, buttered toast, milk orange juice</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>b' value="<?php print $i;?>b" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'b')print 'checked';?>><i class="rounded-x"></i> Hot cereal made without salt and fresh orange juice</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>c' value="<?php print $i;?>c" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'c')print 'checked';?>><i class="rounded-x"></i> Toast, jelly and tea</label>
                    </div>

                </div>

                <div class="col-sm-12" style='text-align:justify;margin-top: 20px;'>

                    <?php $i=11;?>
                    <p>
                        11. Mr L. Has a stroke and is paralyzed on the right side. He gets in a chair twice a day for a short time. When he is in bed, you should:
                    </p>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>a' value="<?php print $i;?>a" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'a')print 'checked';?>><i class="rounded-x"></i> Keep him on his right side so he can do things with his left hand</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>b' value="<?php print $i;?>b" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'b')print 'checked';?>><i class="rounded-x"></i> Keep him on his back for left side, with his swollen right arm and leg up on the pillows</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>c' value="<?php print $i;?>c" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'c')print 'checked';?>><i class="rounded-x"></i> Tie his paralyzed arm in a sling</label>
                    </div>

                    <div class="col-lg-12">
                        <label class="radio"><input name='<?php print $i;?>' id='<?php print $i;?>d' value="<?php print $i;?>d" type='radio' class="required" <?php if(isset($arr[0][$i]) && $arr[0][$i]==$i.'d')print 'checked';?>><i class="rounded-x"></i> Keep him lying on his back</label>
                    </div>

                </div>

            </fieldset>
        </div>
    </fieldset>

    <div class="form-group pull-right" style="margin-top: 30px;">
        <button type="button" id="btn_save_quiz" class="btn btn-primary">Next <span style="vertical-align: middle;font-size: 16px;" class="icon-control-forward"></span></button>
        <input type="hidden" name="quiz_id_form" id="quiz_id_form" value="<?php if(isset($data['form']['data']->id_form)) print $data['form']['data']->id_form;?>" />
        <input type="hidden" name="quiz_today_date" id="quiz_today_date" class="form-control required" readonly  value="<?php print date('m/d/Y');?>" />
    </div>

</div>
<?php require_once(APPPATH."views/includes/footer_scripts.php");?>
<script type="text/javascript">
    jQuery(document).ready(function()
    {
        jQuery('#btn_save_quiz').on('click', function ()
        {
            ValidateFrm('frm18');
            if (jQuery("#frm18").valid())
            {
                var form_name='quiz';
                var x=jQuery('#frm18').find('input[datafld!=ignore], select[datafld!=ignore]').serializeArray();
                var date=jQuery('#quiz_today_date').val();
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
                var id_form=jQuery('#quiz_id_form').val();

                var completed_percent=80;

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

                        jQuery("#frm18 input").prop("disabled", true);
                        jQuery('#btn_save_quiz').hide();

                        if('<?php print $data['role']['data']->rol;?>'=='worker')
                        {
                            LoadDataI9(response);
                            jQuery('#tab19').show().tab('show');
                            jQuery('#s18').removeClass('active').addClass('fade');
                            jQuery('#s19').removeClass('fade').addClass('active');
                            goToByScroll('tab19');
                        }
                    }
                    else{alertify.error('Error: The element could not be Saved. '+ response);}
                    spinner.stop();

                }).fail(function(jqHTR, textStatus, thrown)
                {
                    alertify.error('Something is wrong with AJAX:' + textStatus);
                });
            }
        });

        function RebuildHeader()
        {
            jQuery('#div_header').empty();

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

        function LoadDataI9(id_employee)
        {
            jQuery.ajax({
                url: 'Main/LlenarDataTable',
                type: 'POST',
                data: {data_type:'data_i9',view_url:'employee/InputsUpdateI9', id_employee:id_employee}
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    jQuery('#data_i9').html(response);
                }
            });
        }
    });
</script>