<?php 
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $nguoigui = 'hoangxuan14022014@gmail.com';
        $matkhau = 'vrgeqwtzznjwkdkd';
        $tennguoigui = 'Dương Hoàng Xuân - Website Bán LapTop';
        $mail->Username = $nguoigui;
        $mail->Password = $matkhau;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;              
        $mail->setFrom($nguoigui, $tennguoigui);
        $mail->addAddress("dh51800203@student.stu.edu.vn");
        $mail->isHTML(true);
        $mail->Subject = 'Gửi thư từ php';
        $noidungthu = "<h2>Đây là code xác nhận của bạn: 20202</h2>";
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }
