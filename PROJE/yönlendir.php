<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Müşteri Girişi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e83e8c, #6f42c1);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            background-color: rgba(255, 245, 250, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 90%;
            max-width: 400px;
            padding: 40px 30px;
            text-align: center;
        }
        
        h1 {
            color: #5B6BF9;
            margin-bottom: 10px;
            font-size: 28px;
            letter-spacing: 1px;
        }
        
        p {
            color: #666;
            font-size: 16px;
            margin-bottom: 25px;
        }
        
        .colorful-divider {
            height: 4px;
            background: linear-gradient(90deg, #e83e8c, #00c3ff, #5BF9A7);
            margin: 25px 0;
            border-radius: 5px;
        }
        
        .buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .btn {
            padding: 15px;
            border-radius: 50px;
            border: none;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }
        
        .btn i {
            margin-right: 10px;
            font-size: 18px;
        }
        
        .btn-bireysel {
            background: linear-gradient(90deg, #00c3ff, #5BF9A7);
            color: #000;
            box-shadow: 0 4px 10px rgba(0, 195, 255, 0.3);
        }
        
        .btn-kurumsal {
            background: linear-gradient(90deg, #9370DB, #6A5ACD);
            color: #fff;
            box-shadow: 0 4px 10px rgba(147, 112, 219, 0.3);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
        
        .footer {
            margin-top: 25px;
            color: #777;
            font-size: 13px;
        }
        
        @media (max-width: 600px) {
            .container {
                padding: 30px 20px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>MÜŞTERİ GİRİŞİ</h1>
        <p>Lütfen giriş tipini seçiniz</p>
        
        <div class="colorful-divider"></div>
        
        <div class="buttons">
            <!-- Bireysel Müşteri Butonu - Aktif -->
            <!-- AŞAĞIDAKİ HREF KISMINA BİREYSEL MÜŞTERİ LİNKİNİ EKLEYİN -->
            <a href="/say/giriş.php" class="btn btn-bireysel">
                <i class="fas fa-user"></i> Bireysel Müşteri Girişi
            </a>
            
            <!-- Kurumsal Müşteri Butonu - Aktif ama şuanlık işlevsiz -->
            <!-- AŞAĞIDAKİ HREF KISMINA KURUMSAL MÜŞTERİ LİNKİNİ EKLEYİN -->
            <a href="#" class="btn btn-kurumsal">
                <i class="fas fa-building"></i> Kurumsal Müşteri Girişi
            </a>
        </div>
        
        <div class="colorful-divider"></div>
        
        <div class="footer">
            <p>&copy; <?php echo date('Y'); ?> Tüm Hakları Saklıdır</p>
        </div>
    </div>
</body>
</html>