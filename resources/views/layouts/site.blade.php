<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="asset/css/layoutsite.css">
    <script src="asset/jquery/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>@yield('title')</title>


@yield('header')
</head>
<body>
  
    <header class="section_header bg-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3  py-2">
                    <a href="index.html">
                        <img src="asset/images/logo.webp" 
                        class="img-fluid"  alt="">
                    </a>
                </div>
                <div class="col-md-6 bg-white py-2" >
                  <div class="container">
                    <nav>
                      <ul>
                        <li>Trang Chủ</li>
                        <li>Liên Hệ</li>
                        <li>Sản Phẩm</li>
                        <li>Blog</li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <div class="col-md-3 py-3">
                  <div class="container">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  <i class="fa-regular fa-user"></i>
                  <i class="fa-regular fa-heart"></i>
                  <i class="fa-regular fa-bell"></i>
                  <i class="fa-solid fa-cart-shopping"></i>
                </div>
                </div>
            </div>
        </div>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="asset/images/banner3.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item" data-bs-interval="6000">
                <img src="asset/images/banner4.jpg" class="d-block w-100">
              </div>
      
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </header>



<main>
    @yield('content')
</main>

<footer class="section_footer bg-dark py-2  text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4>Thông Tin</h4>
            <p>Chúng tôi luôn trân trọng và mong đợi nhận được mọi ý kiến đóng góp từ khách hàng để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.</p>
          <p > <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-301q99-80 149.5-154T680-594q0-56-20.5-95.5t-50.5-64Q579-778 544-789t-64-11q-29 0-64 11t-65 35.5q-30 24.5-50.5 64T280-594q0 65 50.5 139T480-301Zm0 101Q339-304 269.5-402T200-594q0-71 25.5-124.5T291-808q40-36 90-54t99-18q49 0 99 18t90 54q40 36 65.5 89.5T760-594q0 94-69.5 192T480-200Zm0-320q33 0 56.5-23.5T560-600q0-33-23.5-56.5T480-680q-33 0-56.5 23.5T400-600q0 33 23.5 56.5T480-520ZM200-80v-80h560v80H200Zm280-514Z" /></svg>70 Lữ Gia, Phường 15, Quận 9, TP. HCM <br>
           
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M760-480q0-117-81.5-198.5T480-760v-80q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-480h-80Zm-160 0q0-50-35-85t-85-35v-80q83 0 141.5 58.5T680-480h-80Zm198 360q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg>1900 6750 <br>
            
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>duonghoai@gmail.com</p>
          
            <h5>Folower chúng tôi:</h5>
            <ul>
              <li style="--clr: #ff0050;">
                <a href="#">
                  <i class="fa-brands fa-tiktok"></i>
                </a>
              </li>
              <li style="--clr: #55acee;">
                <a href="#">
                  <i class="fa-brands fa-twitter"></i>
                </a>
              </li>
              <li style="--clr: #0a66c2;">
                <a href="#">
                  <i class="fa-brands fa-linkedin"></i>
                </a>
              </li>
              <li style="--clr: #333333;">
                <a href="#">
                  <i class="fa-brands fa-github"></i>
                </a>
              </li>
            </ul>           
            
          </div>

          <div class="col-md">
            <h4>Chính Sách</h4>
            <p>Chính sách thành viên <br>
              Chính sách vận chuyển <br>
              Chăm sóc khách hàng<br>
              Phương thức thanh toán<br>
              Chính sách đổi trả / bảo hành</p>
          </div>
          <div class="col-md">
            <h4>Hướng Dẫn</h4>
            <p>Denny Member<br>
              Mua hàng dễ dàng<br>
              Hợp tác nhượng quyền<br>
              Hướng dẫn mua hàng online<br>
              Hướng dẫn kiểm tra hạng thẻ thành viên</p>
          </div>
          <div class="col-md-3">
            <h4>Đăng Ký Nhận Tin</h4>
            <div class="login-box">
              
              <form>
                <div class="user-box">
                  <input type="text">
                  <label>Nhập Email:</label>
                  
                </div>
              </form>
            </div>
          <p>Hình thức thanh toán </p>
<div class="container">
  <img src="asset/images/tienmat.webp">
  <img src="asset/images/chuyenkhoan.webp">
  <img src="asset/images/visa.webp">
</div>

          </div>
        </div>
        <hr class="m-0 p-0">
        <div class="row py-3">
          <div class="col-md-12 text-center">
            Bản quyền thuộc về Sudes theme. Cung cấp bởi Sapo
          </div>
        </div>

      </div>
   
</footer>
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/layoutsite.js"></script>
    @yield('footer')
</body>
</html> 
