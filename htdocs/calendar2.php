/**----------------------日期表格---------------------**/
$year = date('Y');      //获得年份
$month= date('n');     //获得月份
$day  = date('j');       //获得日期

// 如果月份为2月，判断是否为闰年，如果是则总天数为29，否则为28
if($month==2){
    if ($year%4==0 && ($year%100!=0 || $year%400==0)){
        $daysInMonth = 29;
    }else{
        $daysInMonth = 28;
    }
}else{
    $daysInMonth = date("t",mktime(0,0,0,$month,1,$year));   //获得当月的总天数
}


$firstDay = date("w", mktime(0,0,0,$month,1,$year));     //获得每个月的第一天为星期几，0代表周日（0-6）

$tempDays = $firstDay + $daysInMonth;   //计算数组中的日历表格数 = 星期几+当月总天数

$weeksInMonth = ceil($tempDays/7);    //每月有几周，及表格的行数

//创建一个二维数组用来存放日期信息
$counter = 0;
for($j=0;$j<$weeksInMonth;$j++)
{
    for($i=0;$i<7;$i++)
    {
        $counter ++;
        $week [$j] [$i] = $counter;   //日历的坐标信息，$j代表第几行、$i代表第几列
        
        $week [$j] [$i] -= $firstDay;
        if (($week [$j] [$i] < 1) || ($week [$j] [$i] > $daysInMonth)) {
            $week [$j] [$i] = "";
        }
    }
}
$this->set("week",$week);


HTML页调用：
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" border="0" >
<tbody>
<tr>
<th class="bg_tr" align="center" colspan="7" height="25">
<div style="float:left;width:30%;"><span style="color: red; font-size: 16px;text-align:center;" align="left"><a href=""> < </a></span></div>
<div style="float:left;width:40%;"><span style="color: red; font-size: 15px;text-align:center;"> 2015年1月价格表 </span></div>
<div style="float:left;width:30%;"><span style="color: red; font-size: 16px;text-align:center;"><a href=""> > </a></span></div>
</th>
</tr>
<tr>
<td style="text-align:center;">周日</td>
<td style="text-align:center;">周一</td>
<td style="text-align:center;">周二</td>
<td style="text-align:center;">周三</td>
<td style="text-align:center;">周四</td>
<td style="text-align:center;">周五</td>
<td style="text-align:center;">周六</td>
</tr>
<?php
    $crprice=explode(',',$tourdetail[0]['products']['crprice']);
    $etprice=explode(',',$tourdetail[0]['products']['etprice']);
    foreach ( $week as $key => $val ) {
        $result = "<tr>";
        for($i = 0; $i < 7; $i ++) {
            $result .= "<td align='center'>"
            ."<div style='height:30px;text-align:center;'>".$val[$i]."</div>";
            if($val[$i]){
                $result .= "<div style='width:100px;height:45px;'>
                <div style='float:left;width:37px;height:32px;'><img src='/img/qtimg/order_desc.gif'></div>
                <div style='width:30px;float:left;'>
                <div style='width:28px;height:19px;'><img src='/img/qtimg/chd.gif'></div>
                <div style='width:28px;height:19px;'><img src='/img/qtimg/people.gif'></div>
                </div>
                <div style='width:30px;float:left;'>
                <div style='width:28px;height:19px;'>$crprice[0]</div>
                <div style='width:28px;height:19px;'>$etprice[0]</div>
                </div>
                </div></td>";
            }
            
        }
        $result .= "</tr>";
        echo $result;
    }  ?>
</tbody>
</table>


CSS样式：
/**新式版本**/
.table {
border: 0px solid #fcf8e3;
margin: 0px auto;
}
tbody {
display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
}
tr {
display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
.bg_tr {
    font-family: "微软雅黑,Verdana, 新宋体";
color:#633e13;/*标题字体色*/
    font-size:12px;
    font-weight:bolder;
background:#fcf8e3;/*标题背景色*/
    
    line-height: 22px;
}
.bg_tr1 {
    font-family: "微软雅黑,Verdana, 新宋体";
color:#633e13;/*标题字体色*/
    font-size:12px;
    font-weight:bolder;
background:#E4F1FA;/*标题背景色*/
    text-align: left;
    line-height: 22px;
}
.bg_trnodata {
    font-family: "微软雅黑,Verdana, 新宋体";
color:#633e13;/*标题字体色*/
    font-size:12px;
    font-weight:bolder;
background:#E4F1FA;/*标题背景色*/
    line-height: 160px;
}
.style2 {
background: #fcf8e3;
height: 24px;
}
td {
border: 1px solid #E4F1FA;
}
td {
color: #000000;
    font-size: 12px;
    line-height: 40px;
height: 60px;
}
table tbody tr{
background: #fcf8e3;
}
table tbody tr:hover{
background: #fbeed5;
}