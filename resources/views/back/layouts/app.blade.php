<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href={{ asset("bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
    <!-- CSS Link -->
    <link rel="stylesheet" href={{ asset('css/back_nav.css') }}>
    {{-- Font Awesome Link --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

    <style>
         .first-service .icon {
        background-image: url({{ asset("images/service-icon-01.png") }});
        }

        .second-service .icon {
        background-image: url({{ asset("images/service-icon-02.png") }});
        }

        .third-service .icon {
        background-image: url({{ asset("images/service-icon-03.png") }});
        }

        .fourth-service .icon {
        background-image: url({{ asset("images/service-icon-04.png") }});
        }

        .icon {
        width: 50px;
        height: 50px;
        background-repeat: no-repeat;
        }
    </style>

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">CodingLab</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="{{ route('banner.index') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Banner</span>
                </a>
                <span class="tooltip">Banner</span>
            </li>
            <li>
                <a href="{{ route('services.index') }}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Services</span>
                </a>
                <span class="tooltip">Services</span>
            </li>
            <li>
                <a href="{{ route('clients.index') }}">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Client Testimonials</span>
                </a>
                <span class="tooltip">Client Testimonials</span>
            </li>
            <li>
                <a href="{{ route('users.index') }}">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <li>
                <a href="{{ route('newsletter.index') }}">
                    <i class='bx bx-news'></i>
                    <span class="links_name">Newsletter Subscribers</span>
                </a>
                <span class="tooltip">Newsletter Subscribers</span>
            </li>
            <li>
                <a href="{{ route('emails.index') }}">
                    <i class='bx bx-envelope'></i>
                    <span class="links_name">Email Templates</span>
                </a>
                <span class="tooltip">Email Templates</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">Return</div>
                        <div class="job">to Front</div>
                        {{-- <div class="name">Prem Shahi</div>
                        <div class="job">Web designer</div> --}}
                    </div>
                </div>
                
                <a href="/">
                    <i class='bx bx-log-out' id="log_out"></i>
                </a>
            </li>
        </ul>
    </div>
    
    <section class="home-section">
        @yield('content')
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>
