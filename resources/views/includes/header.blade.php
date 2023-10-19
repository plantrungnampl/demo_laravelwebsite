<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>trang chu</title>
    {{-- <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>


    <link href="{{ asset('themes/admin/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/admin/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('themes/admin/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/phone.css') }}">
</head>

<body>

    <!-- function-seacrch -->

    <div class="slide-wrapper">
        <div class="slide-img">
            <img src="{{ asset('images/LTMS-1200-44-1200x44.webp') }}" alt="" />
        </div>
    </div>
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav-header">
                <div class="logo">
                    <a href="{{ route('products.HomePage.index') }}">
                        <img src="{{ asset('images/download.png') }}" alt="" />
                    </a>
                </div>
                <!-- <div class="view-price">
        
         
        </div> -->
                <a class="view-price" href="">
                    Xem giá tồn kho
                    <span> Hồ Chí Minh </span>
                </a>
                <form action="{{ route('search.Page') }}" method="GET" class="form-mark">
                    <input class="form-search" type="text" name="q" placeholder="ban tim gi..." />

                    <button type="submit" class="btn-search"><i class="bx bx-search"></i></button>
                </form>


                <div class="Account-and-purchases">
                    @guest
                        <a style="text-decoration: none; color: #333" href="{{ route('frontend.login') }}">
                            Đăng nhập Tài khoản
                        </a>
                    @else
                        {{-- <a class="nav-link" href="{{ route('logout') }}">Logout</a> --}}
                        <li style="list-style:none;display: flex;
                        justify-content: center;
                        align-items: center;"
                            class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{-- <img src="{{ asset('themes/admin/images/users/profile.png') }}" alt="user"
                                    class="rounded-circle" width="31"> --}}
                                <a style="color:#333">
                                    {{ Auth::user()->email }}

                                </a>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logoutFrontend') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('logoutFrontend') }}><i class="ti-user m-r-5 m-l-5"></i>
                                </a>
                                {{-- <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ Auth::user()->email }}
                                </a> --}}
                            </ul>
                            <form id="logout-form" action="{{ route('logoutFrontend') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>


                    @endguest
                </div>
                {{-- @yield('content') --}}
                <div class="shopping-cart">

                    <a class="btn btn-warning" style="color: #333; font-size:11px; width:125px; height:34px "
                        href="/show">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> gio hang
                        <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
                    </a>
                </div>

                <div class="items"><a href="">24h công nghệ</a></div>
                <div class="border-col"></div>
                <div class="items"><a href="">Hỏi đáp</a></div>
                <div class="border-col"></div>
                <div class="items"><a href="">Game app</a></div>
            </div>
        </div>
    </div>
    <div class="nav-main">
        <div class="container">

            {{-- @if (isset($categories) && count($categories) > 0) --}}
            <ul class="main-menu">
                <li>
                    <i class="bx bx-mobile"></i>
                    <a href="{{ route('phone') }}"> <span> Điện thoại</span></a>
                </li>
                <li>
                    <i class="bx bx-laptop"></i>
                    <a href="{{ route('products.Laptop.index') }}"> <span>LapTop</span></a>
                </li>
                <li>
                    <i class="bx bx-building"></i>
                    <span>tablet</span>
                </li>
                <li>
                    <i class="bx bx-headphone"></i>
                    <span class="has-child">Phụ Kiện</span>
                </li>
                <li>
                    <i class="bx bxs-watch-alt"></i>
                    <span>SmartWatch</span>
                </li>
                <li>
                    <i class="bx bxs-watch"></i>
                    <span>Đồng hồ</span>
                </li>
                <li>
                    <i class="bx bxs-mobile"></i>
                    <span>Máy cũ giá rẻ</span>
                </li>
                <li>
                    <i class="bx bx-desktop"></i>
                    <span class="has-child">PC,máy in</span>

                    <ul class="subMenu">
                        <li class="hidden">
                            <a href="">máy in</a>
                        </li>
                        <li class="hidden"><a href="">mực in</a></li>
                        <li class="hidden"><a href="">màn hình máy tính</a></li>
                        <li><a href="">màn hình để bàn</a></li>
                    </ul>
                </li>
                <li>
                    <span>Sim, Thẻ cào</span>
                </li>
                <li>
                    <span class="has-child">Dịch vụ tiện ich</span>
                </li>
                {{-- @foreach ($categories as $category) --}}
                {{-- <li>
                            
                            @if ($category->name === 'Laptop')
                                <a style="text-decoration:none; color:#333" href="{{ route('products.Laptop.index') }}">
                                    {{ $category->name }}
                                </a>
                            @elseif ($category->name === 'điện thoại')
                                <a style="text-decoration:none; color:#333" href="{{ route('phone') }}">
                                    {{ $category->name }}
                                </a>
                            @else
                                {{ $category->name }}
                            @endif --}}
                {{-- </li> --}}
                {{-- @endforeach --}}
            </ul>
            {{-- @else
                <p>Không có danh mục nào.</p>
            @endif --}}

            <!-- <li>
                            <i class="bx bx-mobile"></i>
                            <a href="phone.html"> <span> Điện thoại</span></a>
                        </li>
                        <li>
                            <i class="bx bx-laptop"></i>
                            {{-- <a href="{{ route('products.Laptop.index') }}"> <span>LapTop</span></a> --}}
                        </li>
                        <li>
                            <i class="bx bx-building"></i>
                            <span>tablet</span>
                        </li>
                        <li>
                            <i class="bx bx-headphone"></i>
                            <span class="has-child">Phụ Kiện</span>
                        </li>
                        <li>
                            <i class="bx bxs-watch-alt"></i>
                            <span>SmartWatch</span>
                        </li>
                        <li>
                            <i class="bx bxs-watch"></i>
                            <span>Đồng hồ</span>
                        </li>
                        <li>
                            <i class="bx bxs-mobile"></i>
                            <span>Máy cũ giá rẻ</span>
                        </li>
                        <li>
                            <i class="bx bx-desktop"></i>
                            <span class="has-child">PC,máy in</span>

                            <ul class="subMenu">
                                <li class="hidden">
                                    <a href="">máy in</a>
                                </li>
                                <li class="hidden"><a href="">mực in</a></li>
                                <li class="hidden"><a href="">màn hình máy tính</a></li>
                                <li><a href="">màn hình để bàn</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>Sim, Thẻ cào</span>
                        </li>
                        <li>
                            <span class="has-child">Dịch vụ tiện ich</span>
                        </li> -->




        </div>
    </div>

    <script></script>

    <div class="banner-wrapper">
        <img src="{{ asset('images/des23232-1920x450.webp') }}" alt="" />
    </div>

    <div class="slide-banner-wrapper">
        <div class="container other">
            <div class="bg-tophome">
                <div class="home-slide big-campaign">
                    <div class="slide-banner other">
                        <div class="banner fade">
                            <img src="{{ asset('images/C53-720-220-720x220-7.webp') }}" alt="" />
                        </div>
                        <div class="banner fade">
                            <img src="{{ asset('images/Redmi12-720-220-720x220-1.webp') }}" alt="" />
                        </div>
                        <div class="banner fade">
                            <img src="{{ asset('images/LTMS-720-220-720x220-2.webp') }}" alt="" />
                        </div>
                        <div class="banner fade">
                            <img src="{{ asset('images/A24-720-220-720x220-5.webp') }}" alt="" />
                        </div>
                        <div class="banner fade">
                            <img src="{{ asset('images/Befit-720-220-720x220-1.webp') }}" alt="" />
                        </div>
                        <div class="banner fade">
                            <img src="{{ asset('images/A24-720-220-720x220-5.webp') }}" alt="" />
                        </div>
                        <div class="banner fade">
                            <img src="{{ asset('images/720-220-720x220-83.webp') }}" alt="" />
                        </div>
                        <div class="banner fade">
                            <img src="{{ asset('images/y36-720-220-720x220-6.webp') }}" alt="" />
                        </div>

                        <a class="prev left-0px" onclick="plusSlidess(-1)">❮</a>
                        <a class="next" onclick="plusSlidess(1)">❯</a>
                    </div>
                    <!-- <div style="text-align:center">
                <span class="dot" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
              </div> -->
                </div>
            </div>
        </div>
    </div>

    <script>
        let slideIndex = 1;
        showSlidess(slideIndex);

        function plusSlidess(n) {
            showSlidess((slideIndex += n));
        }

        function currentSlide(n) {
            showSlidess((slideIndex = n));
        }

        function showSlidess(n) {
            let i;
            let slides = document.getElementsByClassName("banner");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            // Hiển thị 2 slide cùng một lúc
            if (slideIndex % 2 === 0) {
                slides[slideIndex - 2].style.display = "block";
                slides[slideIndex - 1].style.display = "block";
            } else {
                slides[slideIndex - 1].style.display = "block";
                slides[slideIndex].style.display = "block";
            }

            // Thêm tự động chuyển slide
            setTimeout(function() {
                showSlidess((slideIndex += 2));
            }, 5000); // Điều chỉnh khoảng thời gian chuyển slide (5 giây)
        }
    </script>

    <script>
        document.querySelector('.pro-pic').addEventListener('click', function() {
            const logoutLink = document.getElementById('logout-link');
            if (logoutLink.style.display === 'none') {
                logoutLink.style.display = 'block';
            } else {
                logoutLink.style.display = 'none';
            }
        });
    </script>
    <script src="{{ asset('themes/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- sua -->
    <script src="{{ asset('themes/admin/js/app-style-switcher.js') }}"></script>
</body>


</html>
