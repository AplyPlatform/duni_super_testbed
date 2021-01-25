        <!-- Wrapper-->
        <div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax text-center" style="padding: 130px 0 220px" data-background="assets/images/bg_6.jpg" data-overlay="0.5" data-gradient="1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">                        	
                            <h1>시설물을 손쉽게 점검해보세요.</h1>
                            <h5>시설물 모니터링 신청하기</h5>
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
                			<div class="container pt-60" id="mon_view">
                    			<div class="row">
                        			<div class="col-md-12">
                            			<form role="form" method="post" id="mon">
                                			<div class="row">
                                    			<div class="col-lg-6">
                                        			<div class="form-group">
                                           				<input class="form-control" type="text" name="form_name" id="form_name" placeholder="이름" required="">
                                           				<input type="hidden" name="min_type" value="모니터링">
			                                          	<input type="hidden" name="form_kind" value="모니터링">
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
                                            			<input class="form-control" type="text" name="form_loc" id="form_loc" placeholder="시설물 위치(도/시까지 입력해주세요)" required="">
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
                                            			<input class="btn btn-circle btn-brand" id="mon_send" type="submit" value="신청하기">
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
                        <div class="col-md-12 m-auto text-center">
                            <h1>시설물 모니터링 서비스 - 드로미 소개</h1>
                            <p class="lead">드론을 활용하여 농작물의 발육, 병충해 상태 및 시설을 모니터링 하는 서비스입니다.<br />
                            				일반 사용자가 손쉽게 드론을 조작하며 농작물과 시설을 모니터링 할 수 있는 다양한 방법을 제공해드립니다.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box text-center">
                                <div class="icon-box-icon"><span class="ti-desktop"></span></div>
                                <div class="icon-box-title text-left">
                                    <h6>시설 모니터링</h6>
                                </div>
                                <div class="icon-box-content text-left">
                                    <p>농업 시설의 파손, 부식, 노후 상태를 확인하기 위한 쉬우면서 직관적인 방법을 제공합니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box text-center">
                                <div class="icon-box-icon"><span class="ti-zoom-in"></span></div>
                                <div class="icon-box-title text-left">
                                    <h6>온습도, 영상 데이터 수집 및 분석</h6>
                                </div>
                                <div class="icon-box-content text-left">
                                    <p>드론과 각종 장비를 활용하여 논과 밭의 온습도 분포, 농작물의 상태정보를 제공합니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="space" data-MY="60px"></div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12 text-center"><h1>드로미 영상</h1></div>
                    	<div class="col-md-12">
                            <div class="space" data-MY="20px"></div>
                        </div>                        
                        <div class="col-md-4 pricing-wrapper p-b-40">
                            <div class="pricing-header">
                                <div class="pricing-title">제주도 이슬농원 시험 비행</div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="./assets/images/video-4.jpg" alt="제주도 이슬농원 시험 비행">
                            	<a class="play-button" href="https://www.youtube.com/watch?v=aOopQrH2c6g"></a>
                            </div>
                        </div>
                        <div class="col-md-4 pricing-wrapper pricing-popular">
                            <div class="pricing-header">
                                <div class="pricing-title">드로미 서비스 제주도 필드 테스트</div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="./assets/images/video-5.jpg" alt="드로미 서비스 인터뷰">
                            	<a class="play-button" href="https://www.youtube.com/watch?v=vxQuy2M3Pvc"></a>
                            </div>
                        </div>
                        <div class="col-md-4 pricing-wrapper p-b-40">
                            <div class="pricing-header">
                                <div class="pricing-title">드로미 AR 마킹 기능 소개</div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="./assets/images/video-6.jpg" alt="드로미 AR 마킹 기능 소개">
                            	<a class="play-button" href="https://www.youtube.com/watch?v=rZEpyJ2KH3E"></a>
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