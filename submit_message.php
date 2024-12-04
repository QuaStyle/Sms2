<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // البيانات القادمة من نموذج HTML
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    
    // إعداد بيانات Pushover
    $apiToken = 'agsk8yjbib2yyecp95caqodvmvbu3e'; // استبدل هذا بـ API Token الخاص بك
    $userKey = 'u7pzpudpqd8nxrq3ebcbwama5cww6o'; // استبدل هذا بـ User Key الخاص بك
    $url = 'https://api.pushover.net/1/messages.json';

    // إعداد البيانات للإرسال
    $data = [
        'token' => $apiToken,
        'user' => $userKey,
        'message' => "اسم المرسل: $name\nالرسالة:\n$message",
    ];

    // إرسال الطلب باستخدام cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    // التحقق من نجاح الإرسال
    if ($response) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة.";
    }
}
?>