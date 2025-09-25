@extends('Layout')
@section('title')
{{ trans('home.about') }}
@endsection
@section('content-layout')
<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="about.html">About Us</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- About Us Start Here -->
<div class="about-us pt-100 pt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sidebar-img mb-all-30">
                    <img src="{{asset('source/assets/frontend/img/blog/10.jpg')}}" alt="single-blog-img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-desc">
                    <h3 class="mb-10 about-title">Về chúng tôi</h3>
                    <p class="mb-20">Khởi nghiệp từ một cửa hàng kinh doanh máy tính nhỏ tại Nghệ An, đến nay neihT Computer đã được biết đến là đơn vị bán lẻ lớn, lâu đời và uy tín tại Việt Nam. neihT Computer kinh doanh các sản phẩm công nghệ thông tin, thiết bị giải trí game, thiết bị văn phòng và thiết bị hi-tech của nhiều nhãn hàng lớn như Dell, Asus, HP, MSI, Lenovo…</p>
                    <p class="mb-20">neihT Computer hướng đến mục tiêu không chỉ là nơi kinh doanh máy tính mà còn là nơi khách hàng có thể tìm thấy mọi tiện ích công nghệ hiện đại nhất và trải nghiệm dịch vụ tốt nhất.</p>
                    <p>Bằng những nỗ lực không mệt mỏi, neihT Computer tự hào là nhà bán lẻ thiết bị công nghệ cao được khách hàng và các đối tác tin tưởng và yêu mến. Đó là giải thưởng và niềm tự hào vô giá của chúng tôi.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- About Us End Here -->
<!-- About Us Team Start Here -->
<div class="about-team pt-100 pt-sm-60">
    <div class="container">
       <h3 class="mb-30 about-title">Khách hàng thân thiết</h3>
        <div class="row text-center">
            <!-- Single Team Start Here -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single-team mb-all-30">
                    <div class="team-img sidebar-img">
                        <img src="{{asset('source/assets/frontend/img/team/2.jpg')}}" alt="team-image">
                        <div class="team-link">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Ms.Ngoc Ha</h4>
                        <p>Graphic Design </p>
                    </div>
                </div>
            </div>
            <!-- Single Team End Here -->
             <!-- Single Team Start Here -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single-team mb-all-30">
                    <div class="team-img sidebar-img">
                        <img src="{{asset('source/assets/frontend/img/team/1.jpg')}}" alt="team-image">
                        <div class="team-link">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Mr.Trung Dung</h4>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <!-- Single Team End Here -->
             <!-- Single Team Start Here -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single-team mb-xxs-30">
                    <div class="team-img sidebar-img">
                        <img src="{{asset('source/assets/frontend/img/team/3.jpg')}}" alt="team-image">
                        <div class="team-link">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Mr.Minh Xuan</h4>
                        <p>Director of XP Media Company</p>
                    </div>
                </div>
            </div>
            <!-- Single Team End Here -->
             <!-- Single Team Start Here -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="single-team">
                    <div class="team-img sidebar-img">
                        <img src="{{asset('source/assets/frontend/img/team/4.jpg')}}" alt="team-image">
                        <div class="team-link">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>Ms.Kim Tuyet</h4>
                        <p>Consumers</p>
                    </div>
                </div>
            </div>
            <!-- Single Team End Here -->
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- About Us Team End Here -->
<!-- About Us Skills Start Here -->
<div class="about-skill ptb-100 ptb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
               <h3 class="about-title mb-20">Thành Tựu</h3>
                <div class="skill-progress mb-all-40">
                    <div class="progress">
                        <div class="skill-title">Tham quan và mua sắm tại showroom 96%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.2s" role="progressbar" style="width: 79%; visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="skill-title">Khách hàng doanh nghiệp chiếm 79%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.3s" role="progressbar" style="width: 96%; visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="skill-title">Thị trường Việt Nam chiếm 65%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.4s" role="progressbar" style="width: 65%; visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="skill-title">Khách hàng mua hàng qua website 75%</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.5s" role="progressbar" style="width: 75%; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="skill-title">Hơn 30 showroom trên khắp Việt Nam 30</div>
                        <div class="progress-bar wow fadeInLeft" data-wow-delay="0.6s" role="progressbar" style="width: 100%; visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ht-single-about">
                    <h3 class="about-title mb-20">Lĩnh vực kinh doanh</h3>
                    <div class="ht-about-work">
                        <span>1</span>
                        <div class="ht-work-text">
                            <p>Cung cấp đầy đủ các sản phẩm máy tính, thiết bị công nghệ thông tin & hi-end cho người dùng gia đình</p>
                        </div>
                    </div>
                    <div class="ht-about-work">
                        <span>2</span>
                        <div class="ht-work-text">
                            <p>Đối tác chiến lược: Asus, Dell, Acer, Hp, Lenovo, AMD, MSI, LG, Intel, Apple, Samsung, Microsoft, GigaByte, Logitech, NVIDIA, Kingston, KB Vision, Xiaomi, JBL, Bose, Sony, Microlab, Razer,…</p>
                        </div>
                    </div>
                    <div class="ht-about-work">
                        <span>3</span>
                        <div class="ht-work-text">
                            <p>Cung cấp giải pháp đặc biệt cho các doanh nghiệp như hội nghị video, màn hình kỹ thuật số, hệ thống quản lý thanh toán,…</p>
                        </div>
                    </div>
                    <div class="ht-about-work">
                        <span>4</span>
                        <div class="ht-work-text">
                            <p>Thêm sự lựa chọn, neihT Computer mở rộng ngành hàng như các thiết bị điện tử tiêu dùng, thiết bị gia dụng và thiết bị thông minh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- About Us Skills End Here -->
@endsection
