<?php

function daftarTable($dataNya){

   $headTable = $dataNya;
   $bodyTable = $dataNya;
    echo "<div class='table-responsive ' style='background-color:white'><table id='table2excel2' class='table ' style='white-space: nowrap;'>";
    $no=1;
        echo "<tr>";
        echo "<th>NO</th>";
        
    for ($y=0; $y < count($headTable[0]); $y++) { 
        $keyData  = array_keys($headTable[0]);
        echo "<th>".strtoupper(str_replace("_"," ",$keyData[$y]))."</th>";
    }
    echo "<tr>";


    for ($i=0; $i < count($bodyTable); $i++) { 
        echo "<tr>";
            echo "<td>".$no++."</td>";
            foreach ($bodyTable[$i] as $key => $value) {
                echo "<td>".$value."</td>";
            }
           
        echo "</tr>";   
    }
    echo "</table></div>";
}
function timeOut($number=3000,$link='')
{
    ?>
    <script type="text/javascript">
        setTimeout(function() {window.location.href='<?=$link?>'}, <?=$number?>);
    </script>
    <?php
}
function bcceil($number)
{
    if (strpos($number, '.') !== false) {
        if (preg_match("~\.[0]+$~", $number)) return bcround($number, 0);
        if ($number[0] != '-') return bcadd($number, 1, 0);
        return bcsub($number, 0, 0);
    }
    return $number;
}
function selectedData($a,$b){
    if ($a == $b) {
        echo ' selected ';
    }
}
function garis_datar($text)
{
    if (empty($text)) {
        echo "-";
    }
}
//PARA: Date Should In YYYY-MM-DD Format
//RESULT FORMAT:
// '%y Year %m Month %d Day %h Hours %i Minute %s Seconds'        =>  1 Year 3 Month 14 Day 11 Hours 49 Minute 36 Seconds
// '%y Year %m Month %d Day'                                    =>  1 Year 3 Month 14 Days
// '%m Month %d Day'                                            =>  3 Month 14 Day
// '%d Day %h Hours'                                            =>  14 Day 11 Hours
// '%d Day'                                                        =>  14 Days
// '%h Hours %i Minute %s Seconds'                                =>  11 Hours 49 Minute 36 Seconds
// '%i Minute %s Seconds'                                        =>  49 Minute 36 Seconds
// '%h Hours                                                    =>  11 Hours
// '%a Days                                                      =>  468 Days

function umur_hari($tanggalAwal){
    $lahir    = new DateTime($tanggalAwal);
    $today    = new DateTime();
    $umur = $today->diff($lahir);

    return $umur;
    // echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";
}
function hitung_umur($tanggalLahir,$mauapa){
    $hours_in_day   = 24;
    $minutes_in_hour= 60;
    $seconds_in_mins= 60;
                                                // SELECT TIMESTAMPDIFF(YEAR, '1970-02-01', CURDATE()) AS age
    $diff = umur_hari($tanggalLahir);
    switch ($mauapa) {
        case 'tahun':
            return $years     = $diff->y . " Tahun " . $diff->m . " Bulan " . $diff->d . " Hari";
            break;
        case 'bulan':
            return $months    = ($diff->y * 12) + $diff->m . " Bulan " . $diff->d . " Hari";
            break;
        case 'minggu':
            return $weeks     = floor($diff->days/7) . " Minggu " . $diff->d%7 . " Hari";
            break;
        case 'hari':
            return $days      = $diff->days . " Hari";
            break;
        case 'jam':
            return $hours     = $diff->h + ($diff->days * $hours_in_day) . " Jam";
            break;
        case 'menit':
            return $mins      = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour) . " Menit";
            break;
        case 'detik':
            return $seconds   = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins) . " Detik";
            break;
        default:
            echo $years     = $diff->y . " years " . $diff->m . " months " . $diff->d . " day(s)";
            echo $months    = ($diff->y * 12) + $diff->m . " months " . $diff->d . " day(s)";
            echo $weeks     = floor($diff->days/7) . " weeks " . $diff->d%7 . " day(s)";
            echo $days      = $diff->days . " days";
            echo $hours     = $diff->h + ($diff->days * $hours_in_day) . " hours";
            echo $mins      = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour) . " minutest";
            echo $seconds   = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins) . " seconds";
            break;
    }

}
function karakteristik_bayi($jmlh_hari){

}
function active($url,$aktif)
{
   
    if (is_array($aktif)) {
        if (array_key_exists($url, $aktif)) {
            echo " active ";
        }
    }else{
         if ($url == $aktif) {
                echo " active ";
            }
    }
}
function bcfloor($number)
{
    if (strpos($number, '.') !== false) {
        if (preg_match("~\.[0]+$~", $number)) return bcround($number, 0);
        if ($number[0] != '-') return bcadd($number, 0, 0);
        return bcsub($number, 1, 0);
    }
    return $number;
}

function bcround($number, $precision = 0)
{
    if (strpos($number, '.') !== false) {
        if ($number[0] != '-') return bcadd($number, '0.' . str_repeat('0', $precision) . '5', $precision);
        return bcsub($number, '0.' . str_repeat('0', $precision) . '5', $precision);
    }
    return $number;
}
function _ts($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $filter = htmlspecialchars(stripslashes(trim(addslashes($data))));

    $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
    $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");

    return str_replace($search, $replace, $filter);
}
function alihkan($alihkan) {
    ?>
    <script type="text/javascript">
        setTimeout(function(){
            window.location.href='<?=$alihkan;?>';}, 
        2000);
    </script>
    <?php
}
function status_toast($pesan){
    ?>
    <div class="toast position-fixed  top-0 end-0 p-3 m-3" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000" style="z-index: 999999999999">
      <div class="toast-header">
        <span class="fa fa-info-circle text-info fa-2" style="font-size: 20px;"></span> 
        <strong class="ml-2 me-auto"> Pemberitahuan</strong>
        <small class="text-muted">baru saja</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <?=$pesan?>
      </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".toast").toast('show');
        });
    </script>
    <?php
}

function status($a,$ps){

    ?>
    <script type="text/javascript">
        $('.alert').fadeIn().delay(5000).fadeOut('slow'); 
    </script>
    <div class="container-fluid">
        <div class="row">
         <div style="width: 100%;margin-left: 10px;margin-right: 10px;" class="alert alert-<?php echo $a; ?> " >
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $ps; ?>
        </div>
            
        </div>
    </div>
    <?php

}
function ajaxSubmit($idForm,$var_value,$url,$dataValue,$hasil,$hasil2){
    ?>
    <script type="text/javascript">
  $(document).ready(function(){

    var request;

// Bind to the submit event of our form
$("<?php echo $idForm; ?>").submit(function(event){
    event.preventDefault();
    <?php echo $var_value; ?>
    if (request) {
        request.abort();
    }
    var $form = $(this);
    var $inputs = $form.find("input, select, button, textarea");
    $inputs.prop("disabled", true);
    request = $.ajax({
        url: "<?php echo $url; ?>",
        type: "post",
        data: <?php echo $dataValue; ?>
    });
    request.done(function (response, textStatus, jqXHR){
        $("<?php echo $hasil; ?>").html(response);
        <?php echo $hasil2; ?>
    });
    request.fail(function (jqXHR, textStatus, errorThrown){

        alert("The following error occurred: "+ textStatus + errorThrown)+ jqXHR;
    });
    request.always(function () {
        $inputs.prop("disabled", false);
    });
});

    
  });
</script>
    <?php
}

function get_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
function enc($_data) {
    return base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(strrev($_data)))))));
}
function dec($_data) {
    return strrev(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_data)))))));
}
function price($harganya){
    $hasil = number_format($harganya,0,',','.');
    return $hasil;
}
function priceDecimal($harganya){
    $hasil = number_format($harganya,2,',','.');
    return $hasil;
}
?>