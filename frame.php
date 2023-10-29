php
// تعریف متغیر‌های اطلاعات هاست
$ftp_server = "example.com";
$ftp_username = "username";
$ftp_password = "password";

// ایجاد یک شیء FTP جدید
$conn_id = ftp_connect($ftp_server);

// ورود به سیستم با نام کاربری و رمز عبور
$login_result = ftp_login($conn_id, $ftp_username, $ftp_password);

// بررسی وضعیت ورود به سیستم
if ((!$conn_id) || (!$login_result)) {
    echo "Could not connect to host or login failed";
    exit;
} else {
    echo "Connected to $ftp_server, for user $ftp_username";
}