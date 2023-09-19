<thead>
    <tr>
        <th style="width: 3%"></th>
        <th style="width: 15%">Client</th>
        <th style="width: 10%">Start Time</th>
        <th style="width: 10%">End Time</th>
        <th style="width: 10%">Start Date</th>
        <th style="width: 10%">End Date</th>
        <th style="">Days</th>
        <th style="width: 8%">N Week</th>
        <th style="width: 1%" class="text-center">Status</th>
        <th style="width: 1%" class="text-center">Approved</th>
        <th style="width: 3%; text-align: center;">Emp</th>
        <th style="width: 2%"></th>
    </tr>
</thead>

<tbody>

<?php
if(isset($data['job']['error_code']) && $data['job']['error_code']=='0')
{
    $x=0;//var_dump($data['job']);

    foreach ($data['job']['data'] as $row)
    {
        $var = explode(",", $row->week_days);

        if(sizeof($var) != 0)
        {
            $cant = sizeof($var);
            $week_days='';

            for ($i = 0; $i < $cant; next($var), $i++)
            {
                if($i==0 && current($var)=='1')$week_days = 'Sun';
                if($i==1 && current($var)=='1')$week_days.= ' Mon';
                if($i==2 && current($var)=='1')$week_days.= ' Tue';
                if($i==3 && current($var)=='1')$week_days.= ' Wen';
                if($i==4 && current($var)=='1')$week_days.= ' Thu';
                if($i==5 && current($var)=='1')$week_days.= ' Fri';
                if($i==6 && current($var)=='1')$week_days.= ' Sat';
            }
        }

        if($row->status_e=='1')$status='<span class="fa fa-check"></span>';else $status='<span class="fa fa-ban"></span>';
        if($row->approved=='1')$approve='<span class="fa fa-check"></span>';else $approve='<span class="fa fa-ban"></span>';

        if($row->HAVE_ASIST_CARE=='0')$can_del='<a id="'.$row->id_employee_care.'" class="btn_del_employee_care"><span class="glyphicon glyphicon-trash"></span></a>';else $can_del='';
        ?>


        <tr id="<?php print "tr" . $x;?>">
            <td>
                <?php if(isset($row->id_person)){?>
                <img class="photo_person_row" src="<?php print base_url('/assets/upload/person_photo/photo_'.$row->id_person.'.jpg');?>" alt="<?php if(isset($row->first_name)) print $row->first_name;?>" />
                    <script>ShowPhoto(<?php print $row->id_person;?>);</script>
                <?php }else{?>
                <img class="photo_person_row" src="<?php print base_url('/assets/images/male.png');?>" alt="" />
                <?php }?>
            </td>
            <td><?php print $row->first_name.' '.$row->second_name;?></td>
            <td><?php print $row->start_time;?></td>
            <td><?php print $row->end_time;?></td>
            <td><?php print $row->start_date;?></td>
            <td><?php print $row->end_date;?></td>
            <td><?php print $week_days;?></td>
            <td class="text-center"><?php print $row->repeat_every_week;?></td>
            <td class="text-center"><?php print $status;?></td>
            <td class="text-center"><?php print $approve;?></td>
            <td class="text-center">

                <div class="mytooltip">
                    <?php if(isset($row->id_p)){?>
                        <img class="photo_person_row" src="<?php print base_url('/assets/upload/person_photo/photo_'.$row->id_p.'.jpg');?>" alt="<?php if(isset($row->f_n)) print $row->f_n;?>" />
                            <script>ShowPhoto(<?php print $row->id_p;?>);</script>
                    <?php }else{?>
                        <img class="photo_person_row" src="<?php print base_url('/assets/images/male.png');?>" alt="" />
                    <?php }?>

                    <span class="mytooltiptext mytooltip-left" style="text-align: left;width: 220px;padding-left: 5px;" id="tooltip"><?php print $row->f_n.' '.$row->s_n.' '.$row->l_n;?></span>
                </div>

            </td>
            <td class="text-center"><?php print $can_del;?></td>
        </tr>

        <?php
        $x++;
    }
}
?>
</tbody>

<script>



</script>