<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package julie-two
 */
add_filter( 'body_class', function( $classes ) {
	return array_merge( $classes, array( 'page-gioi-thieu' ) );
} );
get_header();
?>

<div class="container py-3">
  <!--<span class="page-header">GIỚI THIỆU</span>-->
  <br/>
  <div class="row py-5">
    <div class="col-sm-12 col-lg-12 col-md-12 " data-aos="fade-right">
      <hr><h3 class="" >VỀ CHÚNG TÔI</h3>
    </div>
  </div>
  <div class="row py-3">
      <div class="col-sm-12 col-md-12 col-lg-4 " data-aos="fade-right">
        <img src="<?php echo get_template_directory_uri();?>/img/slider11.jpg" alt="slider1" class="img-tieude" >
      </div>
      <div class="col-sm-12 col-md-12 col-lg-8 about-us" data-aos="fade-left">
        <h3><span>Tầm nhìn</span><span> sứ mệnh</span></h3>
        <p>Chúng tôi tự hào là đại lý PHAN KHANG HOME - NHÀ PHÂN PHỐI ĐỘC QUYỀN
            WATERTEC TẠI VIỆT NAM. WATERTEC là công ty Malaysia đầu tiên dẫn đầu trong  các phát minh và sản xuất van, vòi & phụ kiện nhựa ở Châu Á. Vòi nhựa của các phát minh và sản xuất van, vòi & phụ kiện nhựa ở Châu Á. Vòi nhựa của
            WATERTEC được làm bằng nhựa cao cấp đã qua xử lý với bảo hành lên đến 10  
            năm. <br>Sản lượng sản xuất hơn 6 triệu đơn vị hàng năm. Sản phẩm của WATERTEC hiện diện tại các nước ASEAN, Trung Đông và châu Phi. WATERTEC đang dẫn đầu thị trường van, vòi & phụ kiện nhựa ở Sri Lanka, Philippines, Việt Nam,  Bangladesh, Indonesia, Ấn Độ, Jordan, Lebanon, Qatar, 
            Ả Rập Saudi, Kenya và nhiều người khác. Hiện tại,  WATERTEC là nhà sản xuất van, vòi và phụ kiện nhựa lớn nhất trên thế giới. Công ty Phan Khang Home chỉ chuyên 
            cung cấp các trang thiết bị phòng tắm & nhà bếp đạt chất lượng cao.</p>
      </div>
  </div>
  <div class="row py-3">
      <div class="col-sm-12 col-md-12 col-lg-4 " data-aos="fade-right">
        <img src="<?php echo get_template_directory_uri();?>/img/about-us.jpg" alt="slider1" class="img-tieude" >
      </div>
      <div class="col-sm-12 col-md-12 col-lg-8 about-us" data-aos="fade-left">
        <h3>Lịch sử hình thành</h3>
        <p>Phang Khang Home  là một công ty trẻ về thời gian & đội ngũ, trở thành nhà 
          phân phối độc quyền  WaterTEC tại Việt Nam từ năm 2016 cam kết thực hiện 
          về phát triển doanh số, mạng lưới phân phối & tình trạng hàng nhái hàng giả.
          Phan Khang Home theo đuổi và phát huy nền tảng uy tính và chuyên nghiệp
          xác lập ban đầu từ khâu lựa chọn nhà cung ứng cho đến đại lý phân phối
        </p>
      </div>
  </div>
 
  <div class="row py-3">
    <div class="col-sm-12 col-lg-12 col-md-12 history"  data-aos="fade-top">
      <h3>Quy trình phát triển</h3>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 py-3 history" data-aos="fade-right" data-aos-delay="400">
      <h3 style="text-align:center">2016->2019</h3>
      <p class="">Xây dựng & và phát triển & chuẩn hóa phân khúc bán sỉ. Hướng dẫn khái niệm và triển khai khái niệm về KPI cho 
        thành viên và đại lý trên toàn quốc</p>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 py-3 history"data-aos="fade-right" data-aos-delay="600">
      <h3 style="text-align:center">2020->2023</h3>
      <p>Xây dựng & phát triển & chuẩn hóa phân khúc bán lẻ (2020), siêu thị (2022) và dự án - Mở kênh bán hàng trực tuyến tại Shopee, Lazada, Tiki. 
        Hướng dẫn khái niệm bổ sung (value add) cho thành viên đại lý</p>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 py-3 history" data-aos="fade-right" data-aos-delay="800">
      <h3 style="text-align:center">2023->2026</h3>
      <p>Xây dựng & và phát triển & chuẩn hóa lĩnh vực mới bổ trợ nghành kinh doanh hiện tại; đồng thời tạo đà cho thế hệ quản lý 9x và 2k theo mô hình của Phan Khang Home 
        (dân chủ & thử nghiệm dựa trên tiêu chí trung thực, chịu khó & thông minh)</p>
    </div>
  </div>
</div>
<br/>

<?php
// get_sidebar();
get_footer();
