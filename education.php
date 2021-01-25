        <!-- Wrapper-->
        <div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax text-center" style="padding: 130px 0 220px" data-background="assets/images/bg_7.jpg" data-overlay="0.5" data-gradient="1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">                        	
                            <h3>4차 산업혁명의 핵심 인재</h3>
                            <h3>드론 파일럿 또는 드론 개발자가 되어 보세요!</h3>
                            <h5>드론 관련 교육 및 체험 신청하기(수시접수 / 조율 후 일정 제공)</h5>
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
			                			<div class="container pt-60" id="edu_view">
			                    			<div class="row">
			                        			<div class="col-md-12">
			                            			<form role="form" method="post" id="edu">
			                                			<div class="row">
			                                    			<div class="col-lg-12">
			                                        			<div class="form-group">			                                        				
			                                        				<div class="form-control" style="padding-bottom:.05rem;">
			                                        					<div class="row">
			                                           						<div class="col-lg-2 p-b-10"><label class="lab_check" for="">유형</label></div>
				                                           					<div class="col-lg-3 p-b-10"><input type="checkbox" id="min_type_1" name="min_type_1" value="조종"><label class="lab_check" for="min_type_1"><span class="checkbox"></span> 드론 조종</label></div>
				                                           					<div class="col-lg-3 p-b-10"><input type="checkbox" id="min_type_2" name="min_type_2" value="코딩"><label class="lab_check" for="min_type_2"><span class="checkbox"></span> 드론 소프트웨어 코딩</label></div>
				                                           					<div class="col-lg-2 p-b-10"><input type="checkbox" id="min_type_3" name="min_type_3" value="제작"><label class="lab_check" for="min_type_3"><span class="checkbox"></span> 드론 제작</label></div>
				                                           					<div class="col-lg-2 p-b-10"><input type="checkbox" id="min_type_4" name="min_type_4" value="체험"><label class="lab_check" for="min_type_4"><span class="checkbox"></span> 드론 체험</label></div>
				                                           				</div>
				                                           			
			                                           					<input type="hidden" name="min_type" value="조종">
			                                           					<input type="hidden" name="form_kind" value="교육">
			                                           				</div>
			                                            			<p class="help-block text-danger"></p>
			                                        			</div>
			                                    			</div>
			                                    			<div class="col-lg-4">
			                                        			<div class="form-group">
			                                           			<input class="form-control" type="text" name="form_name" id="form_name" placeholder="이름" required="">
			                                            			<p class="help-block text-danger"></p>
			                                        			</div>
			                                    			</div>
			                                    			<div class="col-lg-4">
			                                        			<div class="form-group">
			                                            			<input class="form-control" type="text" name="form_phone" id="form_phone" placeholder="전화번호(-없이 입력해주세요)" required="" pattern="\d+">
			                                            			<p class="help-block text-danger"></p>
			                                        			</div>
			                                    			</div>
			                                    			<div class="col-lg-4">
			                                        			<div class="form-group">
			                                            			<input class="form-control" type="text" name="form_loc" id="form_loc" placeholder="교육받고 싶은 지역(도/시까지 입력해주세요)" required="">
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
			                                            			<input class="btn btn-circle btn-brand" id="edu_send" type="submit" value="신청하기">
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
                    		<h1>4차 산업혁명의 핵심인재로 성장하세요.</h1>
                    		<p class="lead">DUNI의 드론 전문 파트너들이 교육합니다.</p>
                    	</div>
                    	<div class="col-md-12">
                            <div class="space" data-MY="20px"></div>
                        </div>
                        <div class="col-md-3 pricing-wrapper p-b-20">
                            <div class="pricing-header">
                                <div class="pricing-title">드론 조종</div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="./assets/images/service4_1.jpg" alt="DUNI 드론 조종" />
                            </div>
                            <div class="pricing-title">입문, 레저, 전문, 자격증</div>
                        </div>                   
                        <div class="col-md-3 pricing-wrapper p-b-20">
                            <div class="pricing-header">
                                <div class="pricing-title">드론 소프트웨어 코딩</div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="assets/images/dromi_6.gif" alt="DUNI 드론 소프트웨어 코딩" />
                            </div>
                            <div class="pricing-title">아두이노, 라즈베리파이 등 활용</div>
                        </div>
                        <div class="col-md-3 pricing-wrapper p-b-20">
                            <div class="pricing-header">
                                <div class="pricing-title">드론 제작</div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="assets/images/service4_2.jpg" alt="DUNI 드론 제작" />
                            </div>
                            <div class="pricing-title">DIY, 3D 프린터 등 활용</div>
                        </div>
                        <div class="col-md-3 pricing-wrapper p-b-20">
                            <div class="pricing-header">
                                <div class="pricing-title">드론 체험</div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="assets/images/dromi_5.gif" alt="DUNI 드론 체험" />
                            </div>
                            <div class="pricing-title">드론 축구, 레이싱, VR 활용 비행 등</div>
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
