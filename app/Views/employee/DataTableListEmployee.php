
<thead>
    <tr>
        <th style="width: 1%" class="text-center">#</th>
        <th style="width: 3%" class="text-center">&nbsp;</th>
        <th style="width: 15%">Name</th>
        <th style="width: 15%">Last Name</th>
        <th style="width: 10%" class="hidden-xs hidden-sm">Birth</th>
        <th style="width: 5%" class="hidden-xs hidden-sm">Gender</th>
        <th style="width: 13%">Email</th>
        <th style="width: 8%">Phone</th>
        <th style="width: 8%">Rol</th>
        <th style="width: 4%">%</th>
        <th style="text-align: center;">Active</th>
        <th style="text-align: center;">Approved</th>
        <th class="text-center" style="width: 1%"></th>
    </tr>
</thead>


<tbody>

<?php
if(isset($data['employee']['data']))
{
    $i=0;

    foreach ($data['employee']['data'] as $row)
    {
        if($row->rol=='admin')$role='Administrator';
        if($row->rol=='asist')$role='Asistant';
        if($row->rol=='worker')$role='Caregiver';

        if($row->gender=='male')$gender='Male';
        if($row->gender=='female')$gender='Female';

        if($row->status=='1')$status='<span class="fa fa-check"></span>';else $status='<span class="fa fa-ban"></span>';
        if($row->approved=='1')$approved='<span class="fa fa-check"></span>';else $approved='<span class="fa fa-ban"></span>';

        if($row->completed_percent==100)
        {
            $completed_percent='<span class="badge badge-green rounded-2x">'.$row->completed_percent.'</span>';
        }
        else
            $completed_percent='<span class="badge badge-red rounded-2x">'.$row->completed_percent.'</span>';
        ?>


        <tr id="<?php print "tr" . $i;?>">

            <td class="row_update text-center" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $i+1;?></td>
            <td class="row_update" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>">

                <?php if(isset($row->id_user)){?>
                    <img class="photo_person_row" id="photo_person_row_<?php print $row->id_person;?>" src="<?php print base_url('/assets/upload/person_photo/photo_'.$row->id_person.'.jpg');?>" alt="<?php if(isset($row->first_name)) print $row->first_name;?>" />
                    <script>ShowPhoto(<?php print $row->id_person;?>);</script>
                <?php }else{?>
                    <img class="photo_person_row" src="<?php print base_url('/assets/images/male.png');?>" alt="" />
                <?php }?>

            </td>
            <td class="row_update" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $row->first_name.' '.$row->second_name;?></td>
            <td class="row_update" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $row->last_name;?></td>
            <td class="row_update hidden-xs hidden-sm" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $row->birthday;?></td>
            <td class="row_update hidden-xs hidden-sm" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $gender;?></td>
            <td class="row_update" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $row->email;?></td>
            <td class="row_update" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $row->cel;?></td>
            <td class="row_update" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $role;?></td>
            <td class="row_update" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $completed_percent;?></td>
            <td class="row_update text-center" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $status;?></td>
            <td class="row_update text-center" data-goto="general-Update&<?php print $row->id_user.'-'.$row->id_person;?>"><?php print $approved;?></td>
            <td class="text-center"><input name='cbx' type='checkbox' data-goto="<?php print $row->id_user;?>" id='<?php print $row->id_employee;?>' class="cbx_row"></td>

        </tr>

        <?php

        $i++;
    }
}
?>
</tbody>

<script>


    jQuery('.row_update').on('click', function (e)
    {
        var string=jQuery(this).attr("data-goto");
        var result=string.split('&');

        Update(result[0],result[1]);
    });

    function Update(go_view, id)
    {
        if(id)
        {//alert(id);
            var go_function='Employee/GoUpdateEmployee';
            var go_back=jQuery('#view').val();

            UpdateContent(go_function, go_view, go_back, id);
        }
        else
            alertify.error('You have to select a row.');
    }

    jQuery('#btn_activate').on('click', function (e)
    {
        ActivateInactivateUser(1);
    });

    jQuery('#btn_inactivate').on('click', function (e)
    {
        ActivateInactivateUser(0);
    });

    jQuery('#btn_approve').on('click', function (e)
    {
        ApproveRejectEmployee(1);
    });

    jQuery('#btn_reject').on('click', function (e)
    {
        ApproveRejectEmployee(0);
    });

    function ActivateInactivateUser(status)
    {
        var id='';
        jQuery('.cbx_row:checked').each(
            function()
            {
                if(id=='')
                    id = jQuery(this).attr("data-goto");
                else
                    id = id + '-' + jQuery(this).attr("data-goto");
            }
        );

        if(id!='')
        {
            var url='User/ActivateInactivateUser';

            var data =
            {
                table:'user',
                type:'UPDATE',
                status:status,
                field_id:'id_user',
                id:id,
                user_type:'employee'
            };

            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-success";
            alertify.defaults.theme.cancel = "btn btn-default";
            alertify.confirm("<h4>Do you confirm the action?</h4>", function (e)
            {
                var target = document.getElementById('container');
                var spinner = new Spinner(opts).spin(target);

                jQuery.ajax({
                    type: "POST",
                    dataType: "html",
                    url: url,
                    data:data
                }).done(function(response, textStatus, jqXHR)
                {
                    if(response!='NO_LOGGED')
                    {
                        if(jQuery.isNumeric(response) && response>0)
                        {
                            alertify.success('Data Saved.');
                            LoadContent('Main/GoView/employee-ListEmployee');
                        }
                    }
                    else if(response=='NO_LOGGED')
                    {
                        alertify.error("You don\'t have access.");
                        window.location.replace("Main");
                    }
                }).fail(function(jqHTR, textStatus, thrown)
                {
                    alertify.error('Something is wrong with AJAX:' + textStatus);
                });
            }
            ,function()
            {
                alertify.error('Declined.');
            });
        }
        else
            alertify.error('You have to select a row.');
    }

    function ApproveRejectEmployee(approved)
    {
        var id='';
        jQuery('.cbx_row:checked').each(
            function()
            {
                if(id=='')
                    id = jQuery(this).attr('id');
                else
                    id = id + '-' + jQuery(this).attr('id');
            }
        );

        if(id!='')
        {
            var url='Employee/ApproveRejectEmployee';

            var data =
            {
                table:'employee',
                type:'UPDATE',
                approved:approved,
                field_id:'id_employee',
                id:id
            };

            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-success";
            alertify.defaults.theme.cancel = "btn btn-default";
            alertify.confirm("<h4>Do you confirm the action?</h4>", function (e)
                {
                    var target = document.getElementById('container');
                    var spinner = new Spinner(opts).spin(target);

                    jQuery.ajax({
                        type: "POST",
                        dataType: "html",
                        url: url,
                        data:data
                    }).done(function(response, textStatus, jqXHR)
                    {
                        if(response!='NO_LOGGED')
                        {
                            if(jQuery.isNumeric(response) && response>0)
                            {
                                alertify.success('Data Saved.');
                                LoadContent('Main/GoView/employee-ListEmployee');
                            }
                        }
                        else if(response=='NO_LOGGED')
                        {
                            alertify.error("You don\'t have access.");
                            window.location.replace("Main");
                        }
                    }).fail(function(jqHTR, textStatus, thrown)
                    {
                        alertify.error('Something is wrong with AJAX:' + textStatus);
                    });
                }
                ,function()
                {
                    alertify.error('Declined.');
                });
        }
        else
            alertify.error('You have to select a row.');
    }
</script>