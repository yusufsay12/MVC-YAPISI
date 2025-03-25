
<?php
session_start(); // Oturum başlat
?>
<?php
// index.php
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nalburdayım.com - Nöbetçi Nalburunuz</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Header Styles */
header {
    background: white;
    padding: 15px 0;
    border-bottom: 1px solid #e0e0e0;
}

.container {
    width: 100%; /* Tam genişlik */
    padding: 0 15px; /* Kenar boşlukları */
}

.header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.logo img {
    max-width: 300px; /* Logonun maksimum genişliği */
    max-height: 100px; /* Logonun maksimum yüksekliği */
}

.search-bar {
    flex: 1;
    position: relative;
}

.search-bar input {
    width: 100%;
    padding: 10px 20px;
    border: 2px solid #ff6b01;
    border-radius: 25px;
}

.user-actions {
    display: flex;
    gap: 20px;
}

.action-button {
    text-decoration: none;
    color: #333;
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Categories Style */
.categories {
    background: #f8f8f8;
    padding: 15px 0;
    margin-bottom: 20px;
}

.category-list {
    display: flex;
    justify-content: space-between;
    list-style: none;
}

.category-item {
    padding: 10px;
    cursor: pointer;
    text-align: center; /* Başlıkları ortala */
    position: relative; /* Alt başlıkların konumlandırması için */
}

.sub-category {
    display: none; /* Başlangıçta gizli */
    list-style: none;
    padding: 5px 0;
    position: absolute; /* Alt başlıkları konumlandır */
    left: 50%;
    transform: translateX(-50%); /* Ortala */
    background: white; /* Arka plan */
    border: 1px solid #ccc; /* Kenar çizgisi */
    z-index: 1; /* Üstte görünmesi için */
    width: 150px; /* Alt başlık genişliği */
    box-shadow: 0 2px 5px rgba(0,0,0,0.2); /* Gölgelendirme efekti */
}

.category-item:hover .sub-category {
    display: block; /* Üstüne gelindiğinde göster */
}

.sub-category a {
    text-decoration: none;
    color: #007bff; /* Mavi renk */
    display: block; /* Her bir linkin tam alan kaplaması için */
    padding: 5px; /* İç boşluk */
}

/* Product Section Styles */
.product-section {
    margin-bottom: 40px;
    text-align: center; /* Başlık ve ürünlerin ortalanması */
}

.section-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 10px;
    margin-bottom: 20px;
}

.product-card {
    border: 2px solid #000;
    padding: 10px;
    text-align: center;
    cursor: pointer; /* Tıklanabilir olduğunu belirtir */
    transition: transform 0.3s;
}

.product-card:hover {
    transform: scale(1.05); /* Hover efekti */
}

.product-image {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.product-name {
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 14px;
}

.product-price {
    color: #ff6b01; /* Turuncu fiyat rengi */
    font-weight: bold;
}

/* Footer Styles */
.site-footer {
    background-color: #dddddd; /* Açık gri arka plan rengi */
    padding: 40px 0; /* Üst ve alt boşluk */
}

.footer-content {
    display: flex;
    justify-content: space-between; /* Boşlukları dağıt */
    flex-wrap: wrap; /* Taşma durumunda taşımak için */
}

.footer-section {
    flex: 1; /* Her bölüm eşit alan kaplar */
    margin: 10px; /* Kenar boşluğu */
}

.footer-section h3 {
    font-size: 18px; /* Başlık boyutu */
    margin-bottom: 15px; /* Alt boşluk */
}

.footer-section ul {
    list-style: none; /* Noktaları gizle */
    padding: 0; /* Boşlukları sıfırla */
}

.footer-section ul li {
    margin-bottom: 10px; /* Alt boşluk */
}

.footer-section ul li a {
    text-decoration: none; /* Altı çizili yok */
    color: #333; /* Metin rengi */
}

.social-links {
    display: flex; /* Sosyal bağlantıları alt alta diz */
    flex-direction: column; /* Dikey hizalama */
    gap: 10px; /* Aralarındaki boşluk */
}

.social-links a {
    color: #007bff; /* Sosyal bağlantı rengi */
    text-decoration: none; /* Altı çizili yok */
}

.contact {
    text-align: left; /* İletişim kısmını sola hizala */
}

/* Banner Styles */
.banner {
    background-color: #bebebe; /* Açık gri arka plan rengi */
    padding: 40px 0; /* Üst ve alt boşluk */
    text-align: center; /* Metin ortalama */
    color: white; /* Metin rengi */
}

/* Responsive Design */
@media (max-width: 1024px) {
    .product-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }

    .product-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .footer-content {
        grid-template-columns: 1fr;
    }

    .product-grid {
        grid-template-columns: 1fr;
    }
}

/* User Menu Styles */
.user-menu {
    position: relative;
    display: inline-block;
}

.user-trigger {
    display: flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
    padding: 8px;
    border-radius: 4px;
    color: #333;
}

.user-trigger:hover {
    background-color: #f5f5f5;
}

.user-dropdown {
    position: absolute;
    top: 100%;
    right: 0;
    background: white;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    min-width: 200px;
    display: none;
    z-index: 1000;
}

.user-menu:hover .user-dropdown {
    display: block;
}

.dropdown-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 16px;
    text-decoration: none;
    color: #333;
    transition: background-color 0.2s;
}

.dropdown-item:hover {
    background-color: #f5f5f5;
}

.dropdown-divider {
    height: 1px;
    background-color: #e0e0e0;
    margin: 8px 0;
}

/* Font Awesome ikonları için stil */
.dropdown-item i {
    width: 20px;
    text-align: center;
    color: #666;
}



.cart-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1000;
}

.cart-modal-content {
    position: fixed;
    right: 0;
    top: 0;
    width: 400px;
    height: 100%;
    background-color: white;
    padding: 20px;
    box-shadow: -2px 0 5px rgba(0,0,0,0.2);
    display: flex;
    flex-direction: column;
}

.cart-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 20px;
    border-bottom: 1px solid #e0e0e0;
}

.close {
    font-size: 28px;
    cursor: pointer;
    color: #666;
}

.cart-items {
    flex: 1;
    overflow-y: auto;
    padding: 20px 0;
}

.cart-item {
    display: flex;
    padding: 10px 0;
    border-bottom: 1px solid #e0e0e0;
}

.cart-item-image {
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin-right: 15px;
}

.cart-item-details {
    flex: 1;
}

.cart-item-title {
    font-weight: bold;
    margin-bottom: 5px;
}

.cart-item-price {
    color: #ff6b01;
    font-weight: bold;
}

.quantity-controls {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 10px;
}

.quantity-btn {
    background: #f0f0f0;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

.cart-footer {
    padding-top: 20px;
    border-top: 1px solid #e0e0e0;
}

.cart-total {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
}

.checkout-button {
    width: 100%;
    padding: 15px;
    background-color: #ff6b01;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.checkout-button:hover {
    background-color: #e55e00;
}

.remove-item {
    color: #ff0000;
    cursor: pointer;
    margin-top: 5px;
}

.add-to-cart-btn {
    background-color: #ff6b01;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
    width: 100%;
    font-size: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    transition: background-color 0.3s;
}

.add-to-cart-btn:hover {
    background-color: #e55e00;
}

.product-card {
    border: 2px solid #000;
    padding: 10px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 10px;
}

.clear-cart-button {
    width: 100%;
    padding: 10px;
    background-color: #dc3545;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    margin-top: 10px;
}

.clear-cart-button:hover {
    background-color: #c82333;
}

.sidebar {
          width: 300px;
          float: left;
          margin-right: 20px;
          background-color: #ffffff;
          border-radius: 8px;
          padding: 20px;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
          height: calc(120vh - 40px);
          overflow-y: auto;
      }

      h2 {
          text-align: center;
          color: #FF6F00;
          font-family: 'Arial', sans-serif;
          margin-bottom: 20px;
      }

      .filter {
          margin-bottom: 15px;
      }

      .filter h3 {
          margin: 10px 0;
          color: #333;
          font-size: 1.2em;
          padding-bottom: 5px;
          border-bottom: 2px solid #FF6F00;
      }

      .quick-filter-buttons {
          display: flex;
          flex-direction: column;
          gap: 10px;
      }

      .quick-filter-btn {
          width: 100%;
          padding: 10px;
          text-align: left;
          background-color: #f8f9fa;
          border: 1px solid #dee2e6;
          border-radius: 5px;
          transition: all 0.3s ease;
      }

      .quick-filter-btn:hover {
          background-color: #FF6F00;
          color: white;
          transform: translateX(5px);
      }

      select, input[type="number"], button {
          width: 100%;
          padding: 12px;
          margin-top: 5px;
          border: 1px solid #ccc;
          border-radius: 5px;
          font-size: 1em;
      }

      .filter-button {
          background-color: #FF6F00;
          color: white;
          border: none;
          cursor: pointer;
          font-size: 1.1em;
          padding: 12px;
          transition: background-color 0.3s, transform 0.3s;
      }

      .filter-button:hover {
          background-color: #FF8F00;
          transform: translateY(-2px);
      }
    </style>
</head>
<body>
  <header>
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <img src="/yusuf/resim/logo21.jpg" alt="Nalburdayım Logo">
            </div>
            
            <div class="search-bar">
                <input type="text" placeholder="Ürün, kategori ara...">
            </div>
            
            <!-- Header içindeki user-actions div'ini güncelle -->
<div class="user-actions">
    <?php if (isset($_SESSION['adsoyad'])): ?>
        <div class="user-menu">
            <span class="user-trigger">
                <i class="fas fa-user"></i>
                Hoşgeldiniz, <?php echo htmlspecialchars($_SESSION['adsoyad']); ?>
            </span>
            <div class="user-dropdown">
                <a href="/hesap-bilgileri" class="dropdown-item">
                    <i class="fas fa-id-card"></i> Hesap Bilgileri
                </a>
                <a href="/siparislerim" class="dropdown-item">
                    <i class="fas fa-box"></i> Siparişlerim
                </a>
                <a href="/adreslerim" class="dropdown-item">
                    <i class="fas fa-map-marker-alt"></i> Adreslerim
                </a>
                <a href="/ayarlar" class="dropdown-item">
                    <i class="fas fa-cog"></i> Ayarlar
                </a>
                <div class="dropdown-divider"></div>
                <a href="/say/cikis.php" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i> Çıkış Yap
                </a>
            </div>
        </div>
    <?php else: ?>
        <a href="/say/yönlendir.php" class="action-button">
            <i class="fas fa-user"></i>
            Üye Girişi
        </a>
    <?php endif; ?>
    <a href="#" class="action-button" onclick="toggleCart()">
    <i class="fas fa-shopping-cart"></i>
    Sepetim
    <span id="cart-count" class="cart-count">0</span>
</a>
<div id="cart-modal" class="cart-modal">
    <div class="cart-modal-content">
        <div class="cart-header">
            <h2>Alışveriş Sepetim</h2>
            <span class="close" onclick="toggleCart()">&times;</span>
        </div>
        <div id="cart-items" class="cart-items">
            <!-- Sepet ürünleri buraya gelecek -->
        </div>
        <div class="cart-footer">
            <div class="cart-total">
               
            </div>
           
            <div class="cart-footer">
    <div class="cart-total">
        Toplam: <span id="cart-total-price">0.00 TL</span>
    </div>
    <button class="checkout-button" onclick="checkout()">Siparişi Tamamla</button>
    <button class="clear-cart-button" onclick="clearCart()">Sepeti Temizle</button>
</div>
        </div>
    </div>
</div>
</div>
        </div>
    </div>
    
</header>



    <nav class="categories">
        <div class="container">
            <ul class="category-list">
                <li class="category-item">
                    Toz Grubu
                  
                </li>
                <li class="category-item">
                    Boya Grubu
                   
                </li>
                <li class="category-item">
                    Vida Grubu
                   
                </li>
                <li class="category-item">
                    Isıtıcı Grubu
                   
                </li>
                <li class="category-item">
                    Matkap Grubu
                   
                </li>
                <li class="category-item">
                    Strafor Grubu
                 
                </li>
                <li class="category-item">
                    Musluk Grubu
                    
                </li>
            </ul>
        </div>
    </nav>

    <aside class="sidebar">
      <h2></h2>
      
      <div class="filter">
          <h3>Hızlı Filtreler</h3>
          <div class="quick-filter-buttons">
              <button class="quick-filter-btn" onclick="applyQuickFilter('cok-satanlar')">
                  <i class="fas fa-fire me-2"></i> Çok Satanlar
              </button>
              <button class="quick-filter-btn" onclick="applyQuickFilter('yeni-urunler')">
                  <i class="fas fa-star me-2"></i> Yeni Ürünler
              </button>
              <button class="quick-filter-btn" onclick="applyQuickFilter('profesyonel-urunler')">
                  <i class="fas fa-hard-hat me-2"></i> Profesyonel Ürünler
              </button>
          </div>
      </div>
      
      <div class="filter">
          <h3>Ürün Kategorisi</h3>
          <select id="product-category" onchange="updateProducts()">
              <option value="">Tüm Kategoriler</option>
              <option value="boya">Boya ve Boyama Ürünleri</option>
              <option value="el-aleti">El Aletleri</option>
              <option value="hirdavat">Hırdavat</option>
              <option value="inşaat-malzemeleri">İnşaat Malzemeleri</option>
              <option value="elektrikli-aletler">Elektrikli Aletler</option>
              <option value="bahce-malzemeleri">Bahçe Malzemeleri</option>
          </select>
      </div>

      <div class="filter">
          <h3>Markalar</h3>
          <select id="brand" onchange="updateProducts()">
              <option value="">Tüm Markalar</option>
              <option value="bosch">Bosch</option>
              <option value="makita">Makita</option>
              <option value="stanley">Stanley</option>
              <option value="dewalt">DeWalt</option>
              <option value="marshall">Marshall</option>
              <option value="filli-boya">Filli Boya</option>
          </select>
      </div>

      <div class="filter">
          <h3>Fiyat Aralığı</h3>
          <input type="number" id="min-price" placeholder="Min Fiyat (TL)" oninput="updateProducts()">
          <input type="number" id="max-price" placeholder="Max Fiyat (TL)" oninput="updateProducts()">
      </div>

      <button class="filter-button" onclick="updateProducts()">Ürünleri Filtrele</button>
  </aside>

    <main class="container">
       

        <!-- B Firması Ürünleri -->
        <section class="product-section">
            <div class="section-title"> En Çok Tercih Edilen Matkaplar</div>
            <div class="product-grid">
                <div class="product-card">
    <img src="/yusuf/resim/bosch.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">BOSCH ŞARJLI</div>
    <div class="product-price">3500 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('filli1', 'BOSCH ŞARJLI', 3500, '/yusuf/resim/bosch.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
                <div class="product-card">
    <img src="/yusuf/resim/bosch2.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">BOSCH DARBELİ</div>
    <div class="product-price">4000 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('dyo2', 'BOSCH DARBELİ', 4000, '/yusuf/resim/bosch2.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
                <div class="product-card">
    <img src="/yusuf/resim/dewalt.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">DEWALT SET</div>
    <div class="product-price">5000 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('filli2', 'DEWALT SET', 5000, '/yusuf/resim/dewalt.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
                <div class="product-card">
    <img src="/yusuf/resim/dewalt2.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">DEWALT ŞARJLI</div>
    <div class="product-price">2300 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('filli3', 'DEWALT ŞARJLI', 2300, '/yusuf/resim/dewalt2.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
                <div class="product-card">
    <img src="/yusuf/resim/makita.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">MAKİTA DELİCİ</div>
    <div class="product-price">3000 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('filli4', 'MAKİTA DELİCİ', 3000, '/yusuf/resim/makita.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
               <div class="product-card">
    <img src="/yusuf/resim/makita2.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">MAKİTA ŞARJLI</div>
    <div class="product-price">2000 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('filli5', 'MAKİTA ŞARJLI', 2000, '/yusuf/resim/makita2.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
            </div>
        </section>

        <!-- C Firması Ürünleri -->
        <section class="product-section">
            <div class="section-title"> En Çok Tercih Edilen Musluklar</div>
            <div class="product-grid">
               <div class="product-card">
    <img src="/yusuf/resim/artema.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">ARTEMA BANYO BÜYÜK</div>
    <div class="product-price">1000 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('polisan1', 'ARTEMA BANYO BÜYÜK', 1000, '/yusuf/resim/artema.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
                 <div class="product-card">
    <img src="/yusuf/resim/artema2.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">ARTEMA BANYO KÜÇÜK</div>
    <div class="product-price">800 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('polisan2', 'ARTEMA BANYO KÜÇÜK', 800, '/yusuf/resim/artema2.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
                 <div class="product-card">
    <img src="/yusuf/resim/eca.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">ECA MUTFAK</div>
    <div class="product-price">450 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('polisan3', 'ECA MUTFAK', 450, '/yusuf/resim/eca.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
                <div class="product-card">
    <img src="/yusuf/resim/eca2.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">ECA LAVABO</div>
    <div class="product-price">500 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('polisan4', 'ECA LAVABO', 500, '/yusuf/resim/eca2.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
                <div class="product-card">
    <img src="/yusuf/resim/vitra.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">VİTRA LAVABO </div>
    <div class="product-price">700 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('polisan5', 'VİTRA LAVABO', 700, '/yusuf/resim/vitra.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
                <div class="product-card">
    <img src="/yusuf/resim/vitra2.jpeg" alt="DYO TEKNOPLAST" class="product-image">
    <div class="product-name">VİTRA LAVABO</div>
    <div class="product-price">600 TL</div>
    <button class="add-to-cart-btn" onclick="addToCart('polisan6', 'VİTRA LAVABO', 600, '/yusuf/resim/vitra2.jpeg')">
        <i class="fas fa-shopping-cart"></i> Sepete Ekle
    </button>
</div>
            </div>
        </section>
    </main>

   <footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Kurumsal</h3>
                <ul>
                    <li><a href="#">Hakkımızda</a></li>
                    <li><a href="#">İletişim</a></li>
                    <li><a href="#">Kariyer</a></li>
                    <li><a href="#">Kişisel Verilerin Korunması</a></li>
                    <li><a href="#">Güvenli Alışveriş</a></li>
                    <li><a href="#">Sıkça Sorulan Sorular</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Bizi Takip Edin</h3>
                <div class="social-links">
                    <a href="#">Instagram</a>
                    <a href="#">Youtube</a>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">LinkedIn</a>
                    <a href="#">Pinterest</a>
                </div>
            </div>

            <div class="footer-section contact">
                <h3>Aklınıza Takılan Bir Soru Mu Var?</h3>
                <p>Çözüm Merkezimize Bağlanın</p>
                <p>Telefon: 0850 252 40 00</p>
                <p>Whatsapp Destek</p>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script>
let cart = [];

function toggleCart() {
    const modal = document.getElementById('cart-modal');
    modal.style.display = modal.style.display === 'block' ? 'none' : 'block';
    if(modal.style.display === 'block') {
        updateCartDisplay();
    }
}

function addToCart(productId, name, price, image) {
    // Ürünün sepette olup olmadığını kontrol et
    const existingItemIndex = cart.findIndex(item => item.id === productId);
    
    if (existingItemIndex !== -1) {
        // Ürün zaten sepette varsa sadece miktarını artır
        cart[existingItemIndex].quantity += 1;
    } else {
        // Ürün sepette yoksa yeni ürün olarak ekle
        cart.push({
            id: productId,
            name: name,
            price: price,
            image: image,
            quantity: 1
        });
    }
    
    // Local Storage'a kaydet
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Sepet görünümünü güncelle
    updateCartCount();
    updateCartDisplay();
    
    // Kullanıcıya bildirim göster
    showNotification('Ürün sepete eklendi');
}

function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    updateCartDisplay();
    showNotification('Ürün sepetten çıkarıldı');
}

function updateQuantity(productId, change) {
    const itemIndex = cart.findIndex(item => item.id === productId);
    if (itemIndex !== -1) {
        cart[itemIndex].quantity += change;
        if (cart[itemIndex].quantity <= 0) {
            removeFromCart(productId);
        } else {
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartDisplay();
        }
    }
}

function updateCartCount() {
    const count = cart.reduce((total, item) => total + item.quantity, 0);
    document.getElementById('cart-count').textContent = count;
}

function updateCartDisplay() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';
    
    cart.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.className = 'cart-item';
        itemElement.innerHTML = `
            <img src="${item.image}" alt="${item.name}" class="cart-item-image">
            <div class="cart-item-details">
                <div class="cart-item-title">${item.name}</div>
                <div class="cart-item-price">${item.price} TL</div>
                <div class="quantity-controls">
                    <button class="quantity-btn" onclick="updateQuantity('${item.id}', -1)">-</button>
                    <span>${item.quantity}</span>
                    <button class="quantity-btn" onclick="updateQuantity('${item.id}', 1)">+</button>
                </div>
                <div class="remove-item" onclick="removeFromCart('${item.id}')">
                    <i class="fas fa-trash"></i> Ürünü Sil
                </div>
            </div>
        `;
        cartItems.appendChild(itemElement);
    });
    
    const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    document.getElementById('cart-total-price').textContent = `${total.toFixed(2)} TL`;
}

// Sayfa yüklendiğinde sepeti Local Storage'dan yükle
document.addEventListener('DOMContentLoaded', function() {
    const savedCart = localStorage.getItem('cart');
    if (savedCart) {
        cart = JSON.parse(savedCart);
        updateCartCount();
    }
});

// Bildirim gösterme fonksiyonu
function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 2000);
}

// Bildirimin CSS'i
const style = document.createElement('style');
style.textContent = `
    .notification {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #4CAF50;
        color: white;
        padding: 15px 25px;
        border-radius: 5px;
        animation: slideIn 0.5s ease-out;
        z-index: 1000;
    }
    
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
`;
document.head.appendChild(style);

document.addEventListener('DOMContentLoaded', function() {
    try {
        const savedCart = localStorage.getItem('cart');
        if (savedCart) {
            cart = JSON.parse(savedCart);
            updateCartCount();
            updateCartDisplay();
        }
    } catch (error) {
        console.error('Sepet yüklenirken hata oluştu:', error);
        // Hata durumunda sepeti sıfırla
        clearCart();
    }
});

function clearCart() {
    // Sepeti tamamen temizle
    cart = [];
    // LocalStorage'ı temizle
    localStorage.removeItem('cart');
    // Sepet görünümünü güncelle
    updateCartCount();
    updateCartDisplay();
    // Bildirim göster
    showNotification('Sepet temizlendi');
}

 function applyQuickFilter(filterType) {
          console.log(`Hızlı Filtre Uygulandı: ${filterType}`);
          
          switch(filterType) {
              case 'cok-satanlar':
                  alert('Çok Satanlar filtreleniyor...');
                  break;
              case 'yeni-urunler':
                  alert('Yeni Ürünler gösteriliyor...');
                  break;
              case 'profesyonel-urunler':
                  alert('Profesyonel Ürünler filtreleniyor...');
                  break;
          }
      }

      function updateProducts() {
          const productCategory = document.getElementById('product-category').value;
          const brand = document.getElementById('brand').value;
          const minPrice = parseFloat(document.getElementById('min-price').value) || 0;
          const maxPrice = parseFloat(document.getElementById('max-price').value) || Infinity;

          console.log("Filtre Parametreleri:", {
              productCategory,
              brand,
              minPrice,
              maxPrice
          });
      }
</script>
    
</body>
</html>