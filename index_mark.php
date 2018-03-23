<?php require 'index_header.php'; ?>

<style>
    .sop_cat{margin-top: 3px}
</style>
<div class="container-fluid">
    <h1>FT SOP 版本1 (最后更新日期2017-03-27)</h1>

</div>

<div class="container-fluid">

    <?php
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $query_string=$_SERVER["QUERY_STRING"];
    
   $actual_link_no_query_with_question_mark = str_replace($query_string, "", $actual_link);
   $actual_link_no_query = str_replace("?", "", $actual_link_no_query_with_question_mark);
   
    
//    $arrABM = array('001', '002', '003');
//    $arrAIM = array('001', '002', '003');
//    $arrAIC = array('001', '002', '003');
//    $arrAll["ABM"] = $arrABM;
//    $arrAll["AIM"] = $arrAIM;
//    $arrAll["AIC"] = $arrAIC;
    
   $arrABM = array('001', '002', '003', '004', '005', '006', '007', '008', '009'); 
    $arrAIC = array('001', '002', '003', '004');
$arrAIM = array('001', '002', '003', '004');
$arrAIN = array('001', '002', '003', '004', '005', '006', '007', '008', '009', '010', '011', '012', '013', '014', '015', '016', '024');
$arrAMR = array('001', '002', '003', '004', '005', '006', '007');
$arrAPM = array('001', '002', '003', '004', '005', '006-A', '006-B', '006', '007', '008', '009', '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020', '021', '022', '023', '024', '025', '026', '027', '028');
$arrAQC = array('001', '002', '003', '004', '005', '006', '008');
$arrASF = array('001', '002-1', '002-1_工艺委外申请流程BPM', '002', '003', '004', '005', '006', '007', '007_工单倒扣发料流程', '008', '009', '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020', '020_工单工艺变更流程（BPM)', '021', '022', '023');
$arrAXM = array('001', '002', '003', '004', '005', '006', '007', '008', '009', '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020', '021', '022', '023', '024', '025', '026', '027', '028', '029', '030');
$arrSOP_APS = array('001_MDS计算流程', '002_产能规画计算流程');
$arrAll["ABM"] = $arrABM;
$arrAll["AIM"] = $arrAIM;
$arrAll["AIC"] = $arrAIC;
$arrAll["AIN"] = $arrAIN;
$arrAll["AMR"] = $arrAMR;
$arrAll["APM"] = $arrAPM;
$arrAll["AQC"] = $arrAQC;
$arrAll["AXM"] = $arrAXM;
$arrAll["SOP_APS"] = $arrSOP_APS;
    
    
    
    
    parse_str($_SERVER["QUERY_STRING"], $query_array);
//    var_dump($query_array);

    if (isset($query_array['cat'])) {
        $cat = $query_array['cat'];
    } else {
        $cat = '(未使用分類)';
             echo"<a class='btn btn-info' href='$actual_link'>Ver1 目錄</a><hr>";
        echo "<h2>list all cat</h2>";

        foreach ($arrAll as $key => $val) {

//            echo "<h3>$key</h3>";
            echo"<div class='sop_cat'> <a class='btn btn-primary' href='$actual_link?cat=$key'>$key</a></div>";
//            echo "<hr>";
        }
        echo "</div>";
        require 'index_footer.php';
        return 0;
    }


    if (isset($arrAll[$cat])) {
        $arr = $arrAll[$cat];
//        var_dump($arr);


 echo"<a class='btn btn-info' href='$actual_link_no_query'>Ver1 目錄</a><hr>";
     echo "<h1> 模組:$cat</h1>";
        foreach ($arr as $key => $val) {

            echo "<h3>$cat$val</h3>";
                echo "<h3>$key$val   <a class='btn btn-primary' href='sop/ver01/$cat$val.xml'>查看或下載原代碼</a></h3>";
            echo"<img src='sop/ver01/$cat$val.svg' >";
            echo "<hr>";
        }
    } else {
        echo "<h2> 該分類無信息</h2>";
        echo "<h2>list all cat</h2>";
 echo"<a class='btn btn-info' href='$actual_link_no_query'>Ver1 目錄</a><hr>";
//        foreach ($arrAll as $key => $val) {
//
//            echo "<h3>$key</h3>";
////            echo"<img src='sop/ver01/$cat$val.svg' >";
//            echo "<hr>";
//        }
//        echo "</div>";
        require 'index_footer.php';
        return 0;
    }
    ?>
</div>
<?php require 'index_footer.php'; ?>
