				

        <!-- Wrapper-->
        <div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax text-center" style="padding: 130px 0 220px" data-background="assets/images/bg_3.jpg" data-overlay="0.5" data-gradient="1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">                        	
                            <h3>전에 볼 수 없었던 웅장하고<br />규모감 있는 드론 영상을 간직하세요</h3>
                            <h5>드론 촬영 및 대여 신청하기</h5>
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
                            <ul class="nav nav-tabs nav-justified">
                            	<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab1"><h6>드론 촬영</h6></a></li>
                            	<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab2"><h6>드론 대여</h6></a></li>
                            </ul>
                            <div class="tab-content">                           
                            	<div class="tab-pane show active" id="tab1">
                            		<!-- Form 1-->                            		
                					<div class="container pt-60 tab-content" id="shoot_view">                				
                    					<div class="row">
                        					<div class="col-md-12">
                            					<form role="form" method="post" id="shoot">
                                					<div class="row">
                                						<div class="col-md-12">
                                        					<div class="form-group">
                                        						<div class="form-control" style="padding-bottom:.05rem;">
                                        							<div class="row">
                                           								<div class="col-lg-3 p-b-10">촬영 유형</div>
                                           								<div class="col-lg-3 p-b-10">
                                           									<input type="checkbox" name="min_type_1" id="min_type_1" value="개인"><label class="lab_check" for="min_type_1"><span class="checkbox"></span> 개인 촬영 및 영상</label>
                                           								</div>
                                           								<div class="col-lg-3 p-b-10">
                                           									<input type="checkbox" name="min_type_2" id="min_type_2" value="웨딩"><label class="lab_check" for="min_type_2"><span class="checkbox"></span> 웨딩 촬영 및 영상</label></div>
                                           								<div class="col-lg-3 p-b-10">
                                           									<input type="checkbox" name="min_type_3" id="min_type_3" value="기타"><label class="lab_check" for="min_type_3"><span class="checkbox"></span> 기타</label></div>
                                           							</div>
                                           							<input type="hidden" name="min_type" value="개인">
			                                           				<input type="hidden" name="form_kind" value="촬영">
                                           						</div>                                           						
                                            					<p class="help-block text-danger"></p>
                                        					</div>
                                    					</div>
                                	    				<div class="col-lg-6">
                                	    	    			<div class="form-group">
                                	    	       				<input class="form-control" type="text" name="form_name" id="form_name" placeholder="이름" required="">
                                	    	        			<p class="help-block text-danger"></p>
                                	    	    			</div>
                                	    				</div>
                                	    				<div class="col-lg-6">
                                	        				<div class="form-group">
                                	            				<input class="form-control" type="text" name="form_phone" id="form_phone" placeholder="전화번호(-없이 입력해주세요)" required="" pattern="\d+">
                                	            				<p class="help-block text-danger"></p>
                                	        				</div>
                                	    				</div>
                                	    				<div class="col-lg-6">
                                    	    				<div class="form-group">
                                    	        				<input class="form-control" type="text" name="form_loc" id="form_loc" placeholder="촬영 위치(도/시까지 입력해주세요)" required="">
                                    	        				<p class="help-block text-danger"></p>
                                    	    				</div>
                                   			 			</div>
                                	    				<div class="col-lg-6">
                                	        				<div class="form-group">
                                    	        				<input class="form-control" type="text" name="form_date" id="form_date" placeholder="예약일정(연/월/일 최소 2주 전 예약)" required="">
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
                                    	        				<input class="btn btn-circle btn-brand" id="shoot_send" type="submit" value="신청하기">
                                       						</div>
                                        					<input type="hidden" name="form_token" id="form_token">
                                        					<p class="text-center m-t-30">신청하시면 DUNI가 연락드리겠습니다.</p>
                                    					</div>
                                					</div>
                            					</form>
                        					</div>
                    					</div>
                    				</div>
                    				<!-- Form 1 end-->
                				</div>
                			
                				<div class="tab-pane" id="tab2">
                            		<!-- Form 2-->
                					<div class="container pt-60 tab-content" id="rent_view">                				
                    					<div class="row">
                        					<div class="col-md-12">
                            					<form role="form" method="post" id="rent">                            										                                    
                                					<div class="row">
                                    					<div class="col-lg-6">
                                    		    			<div class="form-group">
                                    		       				<input class="form-control" type="text" name="form_name" id="form_name2" placeholder="이름" required="">
                                    		       				<input type="hidden" name="min_type" value="대여">
			                                           			<input type="hidden" name="form_kind" value="대여">
                                    		        			<p class="help-block text-danger"></p>
                                    		    			</div>
                                    					</div>
                                    					<div class="col-lg-6">
                                    	    				<div class="form-group">
                                        	    				<input class="form-control" type="text" name="form_phone" id="form_phone2" placeholder="전화번호(-없이 입력해주세요)" required="" pattern="\d+">
                                        	    				<p class="help-block text-danger"></p>
                                        					</div>
                                    					</div>
                                    					<div class="col-lg-6">
                                        					<div class="form-group">
                                            					<input class="form-control" type="text" name="form_loc" placeholder="대여 위치(도/시까지 입력해주세요)" required="">
                                            					<p class="help-block text-danger"></p>
                                        					</div>
                                   		 				</div>
                                    					<div class="col-lg-6">
                                        					<div class="form-group">
                                        	    				<input class="form-control" type="text" name="form_date" placeholder="예약일정(연/월/일 최소 2주 전 예약)" required="">
                                        	    				<p class="help-block text-danger"></p>
                                        					</div>
                                    					</div>
                                    					<div class="col-md-12">
                                        					<div class="form-group">
                                            					<textarea class="form-control" name="form_message" placeholder="요청사항 자유롭게 작성해주세요." rows="6" required=""></textarea>
                                            				</div>
                                    					</div>
                                    					<div class="col-md-12">
                                    							<p><input type="checkbox" name="agree_3" id="agree_3" value="약관"><label class="lab_check" for="agree_3"><span class="checkbox"></span> 이용약관<a href="#" data-toggle="modal" data-target="#modal-2">(보기)</a> 및 개인정보 처리방침<a href="#" data-toggle="modal" data-target="#modal-3">(보기)</a> 동의 <span class="required">(필수)</span></label></p>
                                    	    				<p><input type="checkbox" name="agree_4" id="agree_4" value="제공"><label class="lab_check" for="agree_4"><span class="checkbox"></span> 서비스 매칭을 위해 개인정보 제3자 제공 동의 <span class="required">(필수)</span></label></p>
                                    	    				<hr class="m-b-30 m-t-30">
                                        					<div class="text-center">
                                            					<input class="btn btn-circle btn-brand" id="rent_send" type="submit" value="신청하기">
                                       						</div>
                                        					<input type="hidden" name="form_token">
                                        					<p class="text-center m-t-30">신청하시면 DUNI가 연락드리겠습니다.</p>
                                    					</div>
                                					</div>
                            					</form>
                        					</div>
                    					</div>
                    				</div>
                    				<!-- Form 2 end-->
                				</div>
            				</div>
            			
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
                            <h1>드론 웨딩, 여행 촬영 및 대여</h1>
                            <p class="lead">드론이 촬영한 영상과 사진으로 잊지못할 추억을 DU에서 만들어 드립니다.</p>
                        </div>
                        <div class="col-md-12">
                            <div class="space" data-MY="20px"></div>
                        </div>                        
                        <div class="col-md-4 pricing-wrapper p-b-40">
                            <div class="pricing-header">
                                <div class="pricing-title"></div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="assets/images/service3_3.jpg" alt="DU 드론 촬영 및 대여" />
                            </div>
                        </div>
                        <div class="col-md-4 pricing-wrapper pricing-popular">
                            <div class="pricing-header">
                                <div class="pricing-title"></div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="assets/images/service3_4.jpg" alt="DU 드론 촬영 및 대여" />
                            </div>
                        </div>
                        <div class="col-md-4 pricing-wrapper p-b-40">
                            <div class="pricing-header">
                                <div class="pricing-title"></div>
                            </div>
                            <div class="modal-video-container">
                            	<img src="./assets/images/service3_1.jpg" alt="DU 드론 촬영 및 대여" />
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