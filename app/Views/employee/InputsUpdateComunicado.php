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
			<?php $lg='Comunicado';?>
			<legend class="mylegend" id="comunicado_lg1"><?php print $lg;?></legend>
            
			<div style='text-align:justify;'>
				<p>
                    En días pasados la agencia ha estado entregado a los trabajadores un solapin donde aparece el nombre del trabajador y de la agencia , esto le servira como identificación y debe prestarla a cada cliente con el cual este presentando servicio.

                    Llevar esta identificación es de obligatorio cumplimiento, si al recibir una visita sorpresiva por parte del estado , el trabajador no esta haciendo uso de su identificación puede recibir una  SANCION , si se repite la falta sera automáticamente separado de la agencia.
                </p>
                <p>
                    La perdida de la identificación entregada por la agencia al trabajador derivara en el pago de $10 doblares para obtener una nueva al cancelar los servicios deberá devolverla, de lo contrario se le descontara del ultimo cheque .
                </p>
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
				<input  type="text" name="comunicado_initial1" id="comunicado_initial1" class="form-control required" size='4' style='width:100px !important;' value="<?php if(isset($arr[0]['comunicado_initial1']))print $arr[0]['comunicado_initial1'];?>"/>
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
					<input  type="text" name="comunicado_form_sign" id="comunicado_form_sign" class="form-control required" value="<?php if(isset($arr[0]['comunicado_form_sign']))print $arr[0]['comunicado_form_sign'];?>"/>
				</div>
			</section>
			
			<section class="col col-4">
				<label>Date</label>
				<input type="text" name="comunicado_today_date" id="comunicado_today_date" class="form-control required" disabled='disabled'  value="<?php print date('m/d/Y');?>" />
			</section>
		</div>
		
		<div class="form-group pull-right" style="margin-top: 30px;">
			<button type="button" id="btn_save_comunicado" class="btn btn-primary">Next <span style="vertical-align: middle;font-size: 16px;" class="icon-control-forward"></span></button>
            <input type="hidden" name="comunicado_id_form" id="comunicado_id_form" value="<?php if(isset($data['form']['data']->id_form)) print $data['form']['data']->id_form;?>" />
            <input type="hidden" name="comunicado_today_date" id="comunicado_today_date" class="form-control required" readonly  value="<?php print date('m/d/Y');?>" />
		</div>

	</div>
<?php require_once(APPPATH."views/includes/footer_scripts.php");?>
<script type="text/javascript">
    jQuery(document).ready(function()
    {
        App.init();
        Masking.initMasking();
        Datepicker.initDatepicker();

        jQuery('#btn_save_comunicado').on('click', function ()
        {
            ValidateFrm('frm16');
            if (jQuery("#frm16").valid())
            {
                var form_name='comunicado';
                var x=jQuery('#frm16').find('input[datafld!=ignore], select[datafld!=ignore]').serializeArray();
                var date=jQuery('#comunicado_today_date').val();
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
                var id_form=jQuery('#comunicado_id_form').val();

                var completed_percent=70;

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

                        jQuery("#frm16 input").prop("disabled", true);
                        jQuery('#btn_save_comunicado').hide();

                        if('<?php print $data['role']['data']->rol;?>'=='worker')
                        {
                            LoadDataReferences(response);
                            jQuery('#tab17').show().tab('show');
                            jQuery('#s16').removeClass('active').addClass('fade');
                            jQuery('#s17').removeClass('fade').addClass('active');
                            goToByScroll('tab17');
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

        function LoadDataReferences(id_employee)
        {
            jQuery.ajax({
                url: 'Main/LlenarDataTable',
                type: 'POST',
                data: {data_type:'data_references',view_url:'employee/InputsUpdateReferences', id_employee:id_employee}
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    jQuery('#data_references').html(response);
                }
            });
        }
    });
</script>