<?php

?>
<div class="clear"></div>
<section class="banner" id="top" style="float:left;width:90%;margin-left: 5%;padding-top: 20px;padding-bottom: 20px">
    <div class="col-xs-12 col-md-8"  id="carousel-simple" style="width:100%;height:450px;padding-top: 20px">
        <div id="myCarousel" class="carousel slide border" data-ride="carousel" style="height: 365px;">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img style="height: 362px;" src="../Controller/img/2.jpg">
            </div>

            <div class="item">
              <img style="height: 362px;" src="../Controller/img/3.jpg">
            </div>

            <div class="item">
              <img style="height: 362px;" src="../Controller/img/3.jpg">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
   </div> 



    <div class=" col-xs-6 col-md-4" style="width:50%;height:365px;background: red;border-radius: 5px;border:2px solid black;font-size: 17px;margin-top: 20px">
           <div class="content-flight">
            <center style="color: #FEF14D; font-size: 26px; padding: 0px 0px 10px; font-family: GraublauWebb;">Tìm Vé Máy Bay </center>
            <div class="clearfix"></div>
        <form method="GET" class="search-form" action="./c_chuyenbay.php">
        <div class="pad3" style="margin-bottom: 80px">
            <!--line-->
            <div class="clear"></div>
            
            <div class="in">
                <div class="in-left" style="clear: both;">
                    <div class="input-group" style="border-right: 1px solid rgb(105, 105, 105); width: 226px; overflow: hidden; display: block; margin-bottom: 9px;">
                            <select name="sbdi" id="depAirport" data-mini="true" class="airport-input" placeholder="Điểm khởi hành">
                                <option value="">---Nội địa---</option>
                                <?php foreach ($sanbay as $sb): ?>
                                  <option value="<?php echo $sb['masb'] ?>"><?php echo $sb['tensb'] ?></option>
                                <?php endforeach ?>
                            </select>
                        
                        <div class="clear"></div>
                    </div>                      
                </div>
                <div class="in-right" style="clear: both"> 
                    <div class="input-group" style="border-right: 1px solid rgb(105, 105, 105); width: 226px; overflow: hidden; display: block; margin-bottom: 9px;">
                            <select name="sbden" id="arvAirport" data-mini="true" class="airport-input" placeholder="Điểm đến">
                                 <option value="">---Nội địa---</option>
                                <?php foreach ($sanbay as $sb): ?>
                                  <option value="<?php echo $sb['masb'] ?>"><?php echo $sb['tensb'] ?></option>
                                <?php endforeach ?>
                            </select>
                        
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
         
                <div class="in-left50 ">
                    
                    <div class="bgtext">
                        <fieldset>
                           <label for="datago">Ngày đi:</label>
                            <input id="datepicker" name="ngaydi" type="text" class="form-control date" id="datago" placeholder="Select date..." required="" style="font-size: 12px; border: 1px solid rgb(105, 105, 105); padding: 6px 2px 4px 5px; color: rgb(0, 0, 0); background: rgb(255, 255, 255) ;width: 104px; height: 22px;top: 178px; left: 780.5px; display: block;">
                        </fieldset>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="text-rightfff">
                    <div class="num">
                        <div class="numc">
<p style="float: left; text-align: right; width: 60px; margin-top: -5px;">Người lớn <br><span style="font-size: 10px;">&gt;=12 tuổi</span>  </p>
                        <div class="input-group2">
                            <select name="adultNo" id="adultNo" class="book-form-passengers" style="border: 1px solid rgb(105, 105, 105); width: 42px; padding: 2px 4px;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                               
                            </select>       
                            <div class="clear"></div>                   
                        </div>  
                        </div>  
                        <div class="numc">
<p style="float: left; text-align: right; width: 60px; margin-top: -5px;">Trẻ em <br><span style="font-size: 10px;">2-11 tuổi</span>  </p>
                        <div class="input-group2">
                            <select name="childNo" id="childNo" class="book-form-passengers" style="border: 1px solid rgb(105, 105, 105); width: 42px; padding: 2px 4px;">
                              <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
                            </select>                         
                        </div>
                        </div>
                        <div class="numc">
<p style="float: left; text-align: right; width: 60px; margin-top: -5px;">Em bé <br><span style="font-size: 10px;">&lt; 24 tháng</span>  </p>
                        <div class="input-group2">
                            <select name="infantNo" id="infantNo" class="book-form-passengers" style="border: 1px solid rgb(105, 105, 105); width: 42px; padding: 2px 4px;">
                              <option value="0">0</option><option value="1">1</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    
                    <div class="clear"></div>
                    
                     
                </div>
            <div class="clear"></div>
                    
            <div class="">
                
            </div>
            
            <div class="clear"></div>
            <div class="textx">
                <div class="text-leftx">
                    <div class="field right" style="margin-left: 60px">
                        <button type="submit" class="png-bg" id="btnSearchForFlights">
                        Tìm chuyến bay
                        </button>
                    </div>
                </div>
             
            </div>
            <div class="clear"></div>        
        </div>
        </form>
    </div>
     
    </div>
</section>



<div class="container">
                <div class="dividerHeading">
              <h4 style="text-align: center;font-size: 20px; color: red"><span>Tại sao chọn chúng tôi</span></h4>
          </div>
        <div class="row sub_content">
          <div class="rs_box">
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="serviceBox_1">
                <div class="icon_service">
                  <i class="fa fa-heart"></i>
                  <h3>Sự hài lòng</h3>
                </div>
                <div class="fr_content hidden-ms hidden-xs">
                  <p>Đội ngũ nhân viên tư vấn nhiệt tình, phản hồi nhanh chóng, tác phong chuyên nghiệp.<br> Hàng ngàn khách hàng hài lòng đang ủng hộ chúng tôi! Chúng tôi sẽ cố gắn tốt hơn.</p>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="serviceBox_1">
                <div class="icon_service">
                  <i class="fa fa-plane"></i>
                  <h3>Book vé giá rẻ</h3>
                </div>
                <div class="fr_content  hidden-ms hidden-xs">
                  <p>Chúng tôi cung cấp sự lựa chọn phong phú hơn nữa với dịch vụ hỗ trợ săn vé máy bay giá rẻ.<br> Chúng tôi luôn có giá ưu đãi với đội ngũ tư vấn chuyên nghiệp, tận tình cho nhu cầu đặt vé máy bay của bạn.</p>
                  
                </div>
              </div>
            </div>  
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="serviceBox_1">
                <div class="icon_service">
                  <i class="fa fa-user-md"></i>
                  <h3>vegiagoc.com</h3>
                </div>
                <div class="fr_content  hidden-ms hidden-xs">
                  <p>Hệ thống săn vé máy bay khuyến mãi Vietjet, Vietnam Airlines, Jetstar. Đặt vé online - Giao vé tận nhà, đội ngũ booker chuyên nghiệp tư vấn nhiệt tình. Cam kết dịch vụ làm hài lòng tất cả quý khách.</p>
                  
                </div>
              </div>
            </div>  
          </div>
        </div>
                <div class="row sub_content">
          <div class="rs_box">
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="serviceBox_1">
                <div class="icon_service">
                                    <i class="fa fa-shield"></i>
                  <h3>Đảm bảo về giá</h3>
                </div>
                <div class="fr_content  hidden-ms hidden-xs">
                  <p>Đại lý cấp 1 của Vietjet Air, Jetstar Pacific , Vietnam airlines và các hãng hàng không khác, Chúng tôi mang đến mức giá ưu đãi dành cho khách hàng. Tất cả giá hiển thị đều là giá cuối cùng. Không thu thêm bất kỳ phí nào.</p>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="serviceBox_1">
                <div class="icon_service">
                                    <i class="fa fa-ticket"></i>
                  <h3>Giá rẻ trong tầm tay</h3>
                </div>
                <div class="fr_content  hidden-ms hidden-xs">
                  <p>Chọn các điểm đến bạn yêu thích, thời gian bay và giá cao nhất bạn mong muốn chi trả, Chúng tôi sẽ thông báo cho bạn vé rẻ ngay khi chúng tôi tìm thấy chuyến bay thích hợp với yêu cầu của bạn.</p>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="serviceBox_1">
                <div class="icon_service">
                                    <i class="fa fa-suitcase"></i>
                  <h3>Hỗ trợ 24/7</h3>
                </div>
                <div class="fr_content  hidden-ms hidden-xs">
                  <p>Chúng tôi sẽ sẵn sàng cho bạn mọi câu hỏi. Đối với bất cứ điều gì bạn cần, đừng ngần ngại liên hệ với chúng tôi: 0912.228.997 - 0961.938.388 chúng tôi sẽ giúp bạn hoàn toàn như bạn yêu cầu</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>