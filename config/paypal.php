<?php
return [
    // Client ID của app mà bạn đã đăng ký trên PayPal Dev
    'client_id' => 'ARilDfG5R1yG-HmWpybI6Jsaj1FEyKgF0BO595WsWl0d7DuNaIBHMdybkmmtjyv78HUWq-LoNQcgKMgx',
    // Secret của app
    'secret' => 'EFdd3NiZCJa90W5RDh1JocGkRykxCXBsvZiay78eVAIQjyIvb8Ytlcf90ksnnfXC7j8V0jL5-wkLNpnc',
    'settings' => [
        // PayPal mode, sanbox hoặc live
        'mode' => env('PAYPAL_MODE'),
        // Thời gian của một kết nối (tính bằng giây)
        'http.ConnectionTimeOut' => 30,
        // Có ghi log khi xảy ra lỗi
        'log.logEnabled' => true,
        // Đường dẫn đền file sẽ ghi log
        'log.FileName' => storage_path() . '/logs/paypal.log',
        // Kiểu log
        'log.LogLevel' => 'FINE'
    ],
]

?>
