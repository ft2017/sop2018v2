<?php require 'index_header.php'; ?>


<div class="container-fluid">
    <h1>FT SOP 版本2 (2018年3月)</h1>

</div>

<div class="container-fluid">

    <?php
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $query_string = $_SERVER["QUERY_STRING"];

    $actual_link_no_query_with_question_mark = str_replace($query_string, "", $actual_link);
    $actual_link_no_query = str_replace("?", "", $actual_link_no_query_with_question_mark);


//    $arrABM = array('001', '002', '003');
//    $arrAIM = array('001', '002', '003');
//    $arrAIC = array('001', '002', '003');
//    $arrAll["ABM"] = $arrABM;
//    $arrAll["AIM"] = $arrAIM;
//    $arrAll["AIC"] = $arrAIC;



//    $arrDept['CG'] = '采购';
    $arrDept['SG'] = '生管';
    $arrDept['KQ'] = '烤漆';
    $arrDept['ZZ'] = '组装';
    $arrDept['JG'] = '加工';
    $arrDept['YZ'] = '压铸';
    $arrDept['SY'] = '素研';
    $arrDept['GC'] = '工程';
    $arrDept['CG'] = '采购';
    $arrDept['MJ'] = '模具';
    $arrDept['CW'] = '财务';
    $arrDept['ZC'] = '资材';
    $arrDept['YW'] = '业务';
    $arrDept['ZX'] = '资讯';
//sort($arrDept);

//    
    $arrSG = array('001_MDS计算流程');
    $arrKQ = array('001_不合格品处理流程','002_BOM料领用','003_工单发料','004_工单退料','005_报工及完工作业流程','006_杂收单','007_消耗品请购及领用流程');
    $arrZZ = array('001BOM料领用','002工单发料','003工单退料','004消耗品请购及领用流程','005报工及完工作业流程','006杂收单','007不合格品处理流程');
    $arrJG = array('001_报工作业流程','002_杂收作业流程','003_不良品处理流程','004_消耗品请购、变更及领用流程','005_成套发料作业','006_退料流程','007_一阶段调拨作业');
    $arrYZ = array('001_模具领用流程','002-模具归还流程','003-原料入库流程','004-领料流程','005-成套发料作业','006-报工作业流程','007-不合格品处理流程','008-杂收作业流程');
    $arrSY = array('001_消耗品请购及领用流程','002_工单发料','003_BOM料领用','004_工单退料','005_报工作业流程','006_杂收单','007不合格品处理流程');
    $arrGC = array('001_主分群码建立流程','002_集团料号建立流程','003_据点料号引入流程');
    $arrCG = array();
    $arrMJ = array('002_模具资料建立','003_模具保养流程','004_模具领用作业');
    $arrCW = array();
    $arrZC = array();
    $arrYW = array();
    $arrZX = array('001_測試AAA', '002_測試BBB', '003_測試CCC');
    $arrAll["SG"] = $arrSG;
    $arrAll["KQ"] = $arrKQ;
    $arrAll["ZZ"] = $arrZZ;
    $arrAll["JG"] = $arrJG;
    $arrAll["YZ"] = $arrYZ;
    $arrAll["SY"] = $arrSY;
    $arrAll["GC"] = $arrGC;
    $arrAll["CG"] = $arrCG;
    $arrAll["MJ"] = $arrMJ;
    $arrAll["CW"] = $arrCW;
    $arrAll["ZC"] = $arrZC;
    $arrAll["YW"] = $arrYW;
    $arrAll["ZX"] = $arrZX;

    echo "<a name='top'></a>";



    parse_str($_SERVER["QUERY_STRING"], $query_array);
//    var_dump($query_array);

    if (isset($query_array['cat'])) {
        $cat = $query_array['cat'];
        $catName = $arrDept[$cat];
    } else {
        $cat = '(未使用分類)';
        echo"<a class='btn btn-info' href='$actual_link'>Ver2 目錄</a><hr>";
        echo "<h2>部門列表</h2>";

        foreach ($arrDept as $key => $val) {

//            echo"<div class='sop_cat'> <a class='btn btn-primary' href='$actual_link?cat=$key'>$key $val</a></div>";
            echo" <a  class='btn btn-primary' href='$actual_link?cat=$key'>$key $val</a>";
        }
        echo "</div>";
        require 'index_footer.php';
        return 0;
    }


    if (isset($arrAll[$cat])) {
        $arr = $arrAll[$cat];
//        var_dump($arr);


        echo"<a class='btn btn-info' href='$actual_link_no_query'>Ver2 目錄</a><hr>";
        echo "<h2> 部門: $cat $catName</h2>";
        foreach ($arr as $key => $val) {

//            echo "<h3>$cat$val</h3>";
//            echo "<div class='sop_cat'>$cat$val </div>";
            echo "<a class='btn btn-primary' href='#$cat$val'>$cat$val </a>&nbsp;";

//            echo"<img src='sop/ver01/$cat$val.svg' >";
//            echo "<br>";
        }
        echo "<hr>";

        foreach ($arr as $key => $val) {
            echo "<a name='$cat$val'></a>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
//            echo "<br>";
//            echo "<div style='top-margin:300px'>&nbsp;<br></div>";
            echo "<h3>$cat$val  <a class='btn btn-primary' href='sop/ver02/$cat$val.xml'>查看或下載原代碼</a>&nbsp;<a class='btn btn-success' href='#top'>go Top</a></h3>";
//            echo "<h3>$key$val   <a class='btn btn-primary' href='sop/ver01/$cat$val.xml'>查看或下載原代碼</a></h3>";
            echo"<img src='sop/ver02/$cat$val.svg' >";
            echo "<hr>";
        }
    } else {
        echo "<h2> 該分類無信息</h2>";
//        echo "<h2>list all cat</h2>";
        echo"<a class='btn btn-info' href='$actual_link_no_query'>Ver2 目錄</a><hr>";
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
