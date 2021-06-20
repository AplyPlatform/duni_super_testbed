        <!-- Wrapper-->
        <div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax text-center" style="padding: 130px 0 220px" data-background="assets/images/bg_4.jpg" data-overlay="0.5" data-gradient="1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">                        	
                            <h1>신속하고 정밀한 방제 활동을 지원합니다.</h1>
                            <h5>드론 방제 신청하기</h5>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero end-->

            <!-- Contents -->
            <section class="module bg-gray p-t-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 m-auto">
                            <div class="space" data-mY="-60px"></div>                            
                            <!-- Form-->
                            <div class="container pt-60" id="dust_view">
				                <div class="row">
				                    <div class="col-md-12">
				                        <form role="form" method="post" id="dust">
				                            <div class="row">
				                                <div class="col-lg-6">
				                                    <div class="form-group">
				                                    	<input class="form-control" type="text" name="form_name" id="form_name" placeholder="이름" required="">
				                                        <input type="hidden" name="min_type" value="방제">
							                            <input type="hidden" name="form_kind" value="방제">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-lg-6">
				                                    <div class="form-group">
				                                        <input class="form-control" type="text" name="form_phone" id="form_phone" placeholder="전화번호(-없이 입력해주세요)" required="">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                 <div class="col-lg-6">
				                                    <div class="form-group">
				                                        <input class="form-control" type="text" name="form_loc" id="form_loc" placeholder="방제 위치(도/시까지 입력해주세요)" required="">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-lg-6">
				                                    <div class="form-group">
				                                        <input class="form-control" type="email" name="form_date" id="form_date" placeholder="예약일정(연/월/일 최소 2주 전 예약)" required="">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-md-12">
				                                    <div class="form-group">
				                                        <textarea class="form-control" name="form_message" placeholder="요청사항 자유롭게 작성해주세요." rows="6" required=""></textarea>
				                                    </div>
				                                </div>
				                                <div class="col-md-12">
				                                    <p><input type="checkbox" name="agree_1" id="agree_1" value="약관"><label class="lab_check" for="agree_1"><span class="checkbox"></span> 이용약관<a href="#" data-toggle="modal" data-target="#modal-2">(보기)</a> 및 개인정보 처리방침<a href="#" data-toggle="modal" data-target="#modal-3">(보기)</a> 동의 <span class="required">(필수)</span></label></p>
                                    	    		<p><input type="checkbox" name="agree_2" id="agree_2" value="제공"><label class="lab_check" for="agree_2"><span class="checkbox"></span> 서비스 매칭을 위해 개인정보 제3자 제공 동의 <span class="required">(필수)</span></label></p>
                                    	    		<hr class="m-b-30 m-t-30">
				                                    <div class="text-center">
				                                        <input class="btn btn-circle btn-brand" id="dust_send" type="submit" value="신청하기">
				                                    </div>
				                                    <input type="hidden" name="form_token" id="form_token">
				                                    <p class="text-center m-t-30">신청하시면 DUNI가 연락드리겠습니다.</p>
				                                </div>
				                            </div>
				                        </form>
				                    </div>
				                </div>
				            </div>
				            <!-- Form end-->           			
                        </div>
                    </div>
                </div>
            </section>
            <!-- end-->
            
            <!-- Process 안내-->
            <?php
            include 'sub_process.php';
            ?>
            <!-- end-->
            
            <!-- 서비스 소개 -->
            <section class="module">
                <div class="container">
                    <div class="row">
                    	<div class="col-md-12 text-center">
                    		<h1>DUNI는 고품질의 방제서비스를 목표로 합니다.</h1>
                    		<p class="lead">DUNI의 신속한 방제 서비스를 통해 일손부족을 해결하고 방제효과를 높여보세요.</p>
                    	</div>
                    	<div class="col-md-12">
                            <div class="space" data-MY="20px"></div>
                        </div>                        
                        <div class="col-md-4 pricing-wrapper p-b-40">
                            <div class="pricing-header">
                                <div class="pricing-title"></div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="assets/images/service2_1.jpg" alt="DU 드론 방제" />
                            </div>
                        </div>
                        <div class="col-md-4 pricing-wrapper pricing-popular">
                            <div class="pricing-header">
                                <div class="pricing-title"></div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="assets/images/service2_2.jpg" alt="DU 드론 방제" />
                            </div>
                        </div>
                        <div class="col-md-4 pricing-wrapper p-b-40">
                            <div class="pricing-header">
                                <div class="pricing-title"></div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="./assets/images/service2_3.jpg" alt="DU 드론 방제" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-MY="30px"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 서비스 소개 end-->

        </div>
        <!-- Wrapper end-->
