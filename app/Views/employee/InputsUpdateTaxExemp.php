
	<div class="col-sm-12">
		<fieldset class="myfieldset">
            <?php $lg='Staff conflict of interest';?>
            <legend class="mylegend" id="tax_lg1"><?php print $lg;?></legend>
            <?php
            if(isset($data['consent']['data']) && $data['consent']['data']!='')
            {
                foreach ($data['consent']['data'] as $row)
                {
                    if($row->consent_name==$lg)
                    {
                        $id_consent=$row->id_consent;
                        $sign=$row->sign;
                        break;
                    }
                }
            }
            ?>
            <input  type="hidden" name="tax_id_consent1" id="tax_id_consent1" value="<?php if(isset($id_consent)) print $id_consent;?>" />


			<div style='text-align:justify;'>

                   <p>Purpose:</p>

                   <p>To ensure employees avoid any personal interest that may conflict with the interests of the agency.</p>

                   <p>Policy:</p>

                   <p>The Agency expect all of its employee to understand and be aware of potential situations where their personal interest may conflict with the business interests of the Agency.</p>

 

                  <p>Procedure:</p>

					<p>1.         All employees will report to their immediate supervisor any interests in or employment with an entity that interacts with Agency including, but not limited to:</p>
					<p>A.       Employee participation in any business transactions where where might appear to be a conflict between the employee's personal interest and that of the agency.</p>
					<p>B.       Employee participation in any entity which buys services from or provides services/products to the Agency.</p>
					<p>C.       Outside employment that interferes with satisfactory performance of an employee's duties and responsibilities for the Agency.</p>
					<p>D.      Any outside relationship, financial interest, or participation in a business transaction which might appear to influence the performance of en employee's duties and responsibilities for the Agency.</p>
					<p>E.       Acceptance/giving of gifts, including cash payments, fees, services, discounts, valuables, privileges or other favors which would or might appear to improperly influence an employee in the performance of the employee's duties and responsibilities for the agency.</p>
					<p>2.        If a conflict of inters is discovered or suspected the supervisor/manager and employee will discuss its impact with the Administrator.</p>
					<p>3.       After the above discussion, a recommendation may be made for the employee to end his/her association with the entity or the Agency within a specified period of time.</p>
					<p>4.       The failure of an employee to cease activity that management determines to be a conflict interest will subject the employee to disciplinary action up to and including termination.</p>
					<p>5.       Upon hire, agency staff will sign a Conflict of Interest Statement 

			</div>

			<div class="form-group">
				<label>
					Initials 
					<?php 
					if(isset($data['role']['data']->first_name)) print 'of '.$data['role']['data']->first_name;
					if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
					if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
					?>
				</label>
				<input  type="text" name="tax_initial1" id="tax_initial1" class="form-control required" size='4' style='width:100px !important;' value="<?php if(isset($sign) && $sign!='') print $sign;$sign='';?>"/>
			</div>
		
		</fieldset>
	
		<fieldset class="myfieldset">
            <?php $lg='Tax exempt';?>
            <legend class="mylegend" id="tax_lg2"><?php print $lg;?></legend>
            <?php
            if(isset($data['consent']['data']) && $data['consent']['data']!='')
            {
                foreach ($data['consent']['data'] as $row)
                {
                    if($row->consent_name==$lg)
                    {
                        $id_consent=$row->id_consent;
                        $sign=$row->sign;
                        break;
                    }
                }
            }
            ?>
            <input  type="hidden" name="tax_id_consent2" id="tax_id_consent2" value="<?php if(isset($id_consent)) print $id_consent;?>" />


            <div style='text-align:justify;'>
				<p>I, <b><?php 
				if(isset($data['role']['data']->first_name)) print $data['role']['data']->first_name;
				if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
				if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
				?></b> hereby acknowledge that I am an Independent Contractor. Therefore, I am responsible for my social security and other taxes, and will receive an IRS 1099 Form for the preceding year by February of each year which is also sent to the Internal Revenue Services (IRS).</p>

				<p>Social Security Number: <b><?php if(isset($data['role']['data']->ssn)) print $data['role']['data']->ssn;?></b></p>

			</div>

			<div class="form-group">
				<label>
					Initials 
					<?php 
					if(isset($data['role']['data']->first_name)) print 'of '.$data['role']['data']->first_name;
					if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
					if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
					?>
				</label>
                <input  type="text" name="tax_initial2" id="tax_initial2" class="form-control required" size='4' style='width:100px !important;' value="<?php if(isset($sign) && $sign!='') print $sign;$sign='';?>"/>
			</div>
		
		</fieldset>
		
		<div class="row">   
			<section class="col col-8">
				<div class="form-group">
					<label>
						Sign typing your full name 
						<?php 
						if(isset($data['role']['data']->first_name)) print 'like this: '.$data['role']['data']->first_name;
						if(isset($data['role']['data']->second_name)) print ' '.$data['role']['data']->second_name;
						if(isset($data['role']['data']->last_name)) print ' '.$data['role']['data']->last_name;
						?>
					</label>
                    <input  type="text" name="tax_form_sign" id="tax_form_sign" class="form-control required" value="<?php if(isset($data['form']['data']->form_sign)) print $data['form']['data']->form_sign;?>"/>
				</div>
			</section>
			
			<section class="col col-4">
				<label>Date</label>
                <input type="text" name="tax_today_date" id="tax_today_date" class="form-control required" disabled='disabled'  value="<?php print date('m/d/Y');?>" />
			</section>
		</div>

		<div class="form-group pull-right">
			<button type="button" id="btn_save_tax" class="btn btn-primary">Next <span style="vertical-align: middle;font-size: 16px;" class="icon-control-forward"></span></button>
            <input type="hidden" name="tax_id_form" id="tax_id_form" value="<?php if(isset($data['form']['data']->id_form)) print $data['form']['data']->id_form;?>" />
		</div>

	</div>
<?php require_once(APPPATH."views/includes/footer_scripts.php");?>
<script type="text/javascript">
    jQuery(document).ready(function()
    {
		jQuery('#btn_save_tax').on('click', function ()
        {
            ValidateFrm('frm9');
			if (jQuery("#frm9").valid()) 
			{
                var consent_name1=jQuery('#tax_lg1').html();
                var consent_name2=jQuery('#tax_lg2').html();

                var sign1=jQuery('#tax_initial1').val();
                var sign2=jQuery('#tax_initial2').val();

                var id_consent1=jQuery('#tax_id_consent1').val();
                var id_consent2=jQuery('#tax_id_consent2').val();

                var form_name='tax';
                var form_sign=jQuery('#tax_form_sign').val();
                var date=jQuery('#tax_today_date').val();

                var id_employee=jQuery('#id_employee').val();
                var id_form=jQuery('#tax_id_form').val();

                var completed_percent=35;

                var data =
                    {
                        consent_name1:consent_name1,
                        consent_name2:consent_name2,
                        sign1:sign1,
                        sign2:sign2,
                        id_consent1:id_consent1,
                        id_consent2:id_consent2,
                        form_name:form_name,
                        form_sign:form_sign,
                        date:date,
                        completed_percent:completed_percent,
                        id_employee:id_employee,
                        id_form:id_form
                    };

                var url = 'Employee/SaveEmployeeFormConsent';

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

                        jQuery("#frm9 input").prop("disabled", true);
                        jQuery('#btn_save_tax').hide();

                        if('<?php print $data['role']['data']->rol;?>'=='worker')
                        {
                            LoadDataInService(response);
                            jQuery('#tab10').show().tab('show');
                            jQuery('#s9').removeClass('active').addClass('fade');
                            jQuery('#s10').removeClass('fade').addClass('active');
                            goToByScroll('tab10');
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

        function LoadDataInService(id_employee)
        {
            jQuery.ajax({
                url: 'Main/LlenarDataTable',
                type: 'POST',
                data: {data_type:'data_inservice',view_url:'employee/InputsUpdateInService', id_employee:id_employee}
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    jQuery('#data_inservice').html(response);
                }
            });
        }
    });
</script>