<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- เพิ่ม ส่วน Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- เพิ่มฟอนต์ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        /* อันนี้กำหนดfont ให้ส่วน Body */
        body {
            font-family: "Kanit", sans-serif;
            margin-left: 10px;
            margin-top: 50px;
        }

        h1 {
            /* อันนี้กำหนดส่วนย่อหน้าด้านซ้าย */
            margin-left: 10px;
            /* อันนี้กำหนดส่วนย่อหน้าด้านบน */
            margin-top: 50px;
        }

        .login-error-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            border: 1px solid #dc3545;
            border-radius: 10px;
            background-color: #f8d7da;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
    
    <title>ตรวจสอบ login</title>
</head>

<body>
    <div class="login-error-container">
        <h1>Login ผิดพลาด</h1>
        <h2>กรุณาตรวจสอบ ชื่อผู้ใช้และรหัสผ่าน</h2>
        <a href="login.php" class="btn btn-danger btn-back">กลับสู่หน้าจอ Login</a>
    </div>

    <footer class="fixed-bottom text-center mb-3">
        พัฒนาโดย 664485010 นายประกฤษฎิ์ ปลัดโส
    </footer>
</body>

</html>