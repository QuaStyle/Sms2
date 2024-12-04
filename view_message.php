<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الرسائل المستلمة</title>
</head>
<body>
    <h1>الرسائل المستلمة</h1>
    <pre>
        <?php
        // قراءة محتويات ملف الرسائل
        $file = 'messages.txt';
        if (file_exists($file)) {
            echo file_get_contents($file); // عرض الرسائل
        } else {
            echo "لا توجد رسائل بعد.";
        }
        ?>
    </pre>
    <a href="index.html">عودة إلى الصفحة الرئيسية</a>
</body>
</html>