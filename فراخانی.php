<?php
// تعریف مقادیر ثابت
define('PAYMENT_AMOUNT', 1000); // مبلغ پرداخت به تومان
define('PAYMENT_CALLBACK_URL', 'http://example.com/payment/callback.php');// آدرس بازگشت به سایت بعد از پرداخت

// تعریف تابع پرداخت
function processPayment($name, $email, $phone)
{
    // فراخوانی API درگاه پرداخت
    $paymentResponse = callPaymentApi(PAYMENT_AMOUNT, PAYMENT_CALLBACK_URL, $name, $email, $phone);

    // بررسی وضعیت پاسخ API
    if ($paymentResponse['status'] == 'success') {
        // انتقال کاربر به صفحه پرداخت
        header('Location: ' . $paymentResponse['payment_url']);
        exit;
    } else {
        // نمایش پیغام خطا به کاربر
        echo 'Error: ' . $paymentResponse['message'];
    }
}

// تعریف تابع فراخوانی API درگاه پرداخت
function callPaymentApi($amount, $callbackUrl, $name, $email, $phone)
{
    // ارسال درخواست به API
    // ...

    // بازگشت پاسخ از API
    return [
        'status' => 'success',
        'payment_url' => 'https://example.com/payment/12345',
    ];
}

// فراخوانی تابع پرداخت با مقادیر ورودی
processPayment('John Doe', 'john@example.com', '+1 555-555-5555');
?>