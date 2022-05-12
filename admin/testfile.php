<?php 
require_once "../config/connect.php";
$connect = new mysqli(HOST, USERNAME, PASSWORD,DATABASE );
$objPDO = new PDO("mysql:host=".HOST."; dbname=".DATABASE."", USERNAME, PASSWORD);
$objPDO->query('set names utf8');
$sql = "select *from chitietsp";
function executeResult($sql){
    //CONNECT DB
    $con = new mysqli("localhost","root","", "store");
    mysqli_set_charset($con, "utf8");

    //create query
    $data = [];
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result, 1)){
        $data[] = $row;
    }
    //close db
    mysqli_close($con);

    return $data;
}
$detailsp = executeResult($sql);
// echo'<pre>';
// print_r($detailsp);
// echo'</pre>';
// exit();
?>
<div class="scroll-table">
    <table border="1" cellspacing="0" style="background-color:#ffffff; border-collapse:collapse; border-spacing:0px; border:1px solid #eeeeee; box-sizing:border-box; color:#333333; font-family:Roboto,sans-serif; font-size:13px; height:500px; line-height:20px; margin-bottom:20px; max-width:100%; min-width:500px; width:1200px" class="mce-item-table table table-bordered">
        <tbody style="box-sizing: border-box;">
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><a href="https://gearvn.com/collections/cpu-bo-vi-xu-ly"><span style="color:#000000">CPU</span></a></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px">AMD Ryzen 5 – 5500U (6 nhân 12 luồng)</span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><a href="https://gearvn.com/collections/ram-laptop"><span style="color:#000000">RAM</span></a></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px">8GB DDR4 (2x SO-DIMM socket, up to 32GB SDRAM)</span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><a href="https://gearvn.com/collections/ssd-o-cung-the-ran"><span style="color:#000000">Ổ cứng</span></a></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px">512GB PCIe® NVMe™ M.2 SSD</span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><a href="https://gearvn.com/collections/vga-card-man-hinh"><span style="color:#000000">Card đồ họa</span></a></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px">NVIDIA GeForce GTX 1650 4GB GDDR6</span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><a href="https://gearvn.com/collections/man-hinh"><span style="color:#000000">Màn hình</span></a></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px">15.6" FHD (1920 x 1080) IPS, Anti-Glare, 144Hz</span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><span style="color:#000000">Cổng giao tiếp</span></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px"><span style="color:#000000">1x USB 3.0</span><br><span style="color:#000000">1x USB Type C</span><br><span style="color:#000000">2x USB 2.0</span><br><span style="color:#000000">1x HDMI</span><br><span style="color:#000000">1x RJ45</span></span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><a href="https://gearvn.com/collections/hdd-o-cung-pc"><span style="color:#000000">Ổ quang</span></a></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px"><span style="color:#000000">None</span></span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><a href="https://gearvn.com/collections/thiet-bi-tai-nghe-loa-audio-chuyen-nghiep"><span style="color:#000000">Audio</span></a></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px">True Harmony; Dolby® Audio Premium</span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><span style="color:#000000">Đọc thẻ nhớ</span></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px"><span style="color:#000000">None</span></span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><span style="color:#000000">Chuẩn LAN</span></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px"><span style="color:#000000">10/100/1000/Gigabits Base T</span></span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><span style="color:#000000">Chuẩn WIFI</span></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px">Wi-Fi 6(Gig+)(802.11ax) (2x2)</span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><span style="color:#000000">Bluetooth</span></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px"><span style="color:#000000">v5.0</span></span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><a href="https://gearvn.com/collections/webcam"><span style="color:#000000">Webcam</span></a></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px"><span style="color:#000000">HD Webcam</span></span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><span style="color:#000000">Hệ điều hành</span></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px"><a href="https://gearvn.com/collections/window"><span style="color:#000000">Windows 11 Home</span></a></span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><span style="color:#000000">Pin</span></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px">4 Cell 48Whr</span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><span style="color:#000000">Trọng lượng</span></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px"><span style="color:#000000">2.1 kg</span></span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><span style="color:#000000">Màu sắc</span></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px">Đen, Có đèn bàn phím</span></td>
            </tr>
            <tr style="box-sizing:border-box" class="row-info">
                <td style="background-color:#f7f7f7 !important; border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:18.5209%"><strong><span style="font-size:16px"><span style="color:#000000">Kích thước</span></span></strong></td>
                <td style="border-color:#eeeeee; border-style:solid; border-width:1px; box-sizing:border-box; padding:8px; vertical-align:top; width:78.4791%"><span style="font-size:16px">363.4 x 254.5 x 23.25 (mm)</span></td>
            </tr>
        </tbody>
    </table>
</div>