        <!-- Wrapper-->
        <div class="wrapper">
            <!-- Hero-->
            <section class="module-cover parallax text-center" data-background="assets/images/module-24.jpg" data-overlay="1" data-gradient="1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>두니 파트너 등록하기</h1>
                            <h5>당신의 능력을 원하는 많은 분들과 연결해드립니다.</h5>
                            <h5>두니 파트너 등록을 위해 아래 신청서를 작성해주세요.</h5>
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
				            <div class="container pt-60" id="partner_view">
				                <div class="row">
				                    <div class="col-md-12">
				                        <form role="form" method="post" id="partner" enctype="multipart/form-data">
				                            <div class="row">
				                                <div class="col-lg-6">
				                                    <div class="form-group">
				                                        <div class="form-control" style="padding-bottom:.05rem;">
				                                        	<div class="row">
                                           						<div class="col-lg-4 p-b-10">유형 선택</div>
                                           						<div class="col-lg-4 p-b-10"><input type="radio" name="p_type" id="p_type_1" value="개인" checked><label class="lab_check" for="p_type_1"><span class="checkbox"></span>  개인</label></div>
                                           						<div class="col-lg-4 p-b-10"><input type="radio" name="p_type" id="p_type_2" value="업체"><label class="lab_check" for="p_type_2"><span class="checkbox"></span>  업체</label></div>
                                           					</div>
				                                        </div>
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-lg-6">
				                                    <div class="form-group">
				                                        <div class="form-control" style="padding-bottom:.05rem;">
				                                           <div class="row">
                                           						<div class="col-lg-3 p-b-10">전문 분야 선택</div>
                                           						<div class="col-lg-3 p-b-10"><input type="checkbox" name="min_type_1" id="min_type_1" value="방제"><label class="lab_check" for="min_type_1"><span class="checkbox"></span> 방제</label></div>
                                           						<div class="col-lg-3 p-b-10"><input type="checkbox" name="min_type_2" id="min_type_2" value="촬영"><label class="lab_check" for="min_type_2"><span class="checkbox"></span> 촬영</label></div>
                                           						<div class="col-lg-3 p-b-10"><input type="checkbox" name="min_type_3" id="min_type_3" value="교육"><label class="lab_check" for="min_type_3"><span class="checkbox"></span> 교육</label></div>
                                           					</div>
				                                        </div>
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-lg-6">
				                                    <div class="form-group">
				                                        <input class="form-control" type="text" name="form_name" id="form_name" placeholder="이름 또는 업체명" required="">
				                                        <input type="hidden" name="min_type" value="모니터링">
							                        	<input type="hidden" name="form_kind" value="파트너">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-lg-6">
				                                    <div class="form-group">
				                                        <input class="form-control" type="text" name="form_phone" id="form_phone" placeholder="전화번호(-없이 입력해주세요)" required="">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-md-6">
				                                    <div class="form-group">
				                                        <input class="form-control" type="text" name="form_loc" id="form_loc" placeholder="주소(또는 서비스 가능지역)" required="">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-md-6">
				                                    <div class="form-group">
				                                        <input class="form-control" type="text" name="form_email" id="form_email" placeholder="이메일" required="">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-lg-6">
				                                    <div class="form-group">
				                                        <div class="form-control" style="padding-bottom:.05rem;">
				                                        	<div class="row">
                                           						<div class="col-lg-4 p-b-10">드론 사업자 등록 여부</div>
                                           						<div class="col-lg-4 p-b-10"><input type="radio" name="p_reg_biz" id="p_reg_biz_1" value="등록"><label class="lab_check" for="p_reg_biz_1"><span class="checkbox"></span> 등록</label></div>
                                           						<div class="col-lg-4 p-b-10"><input type="radio" name="p_reg_biz" id="p_reg_biz_2" value="미등록"><label class="lab_check" for="p_reg_biz_2"><span class="checkbox"></span>  미등록</label></div>
                                           					</div>
				                                        </div>
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-lg-6">
				                                    <div class="form-group">
				                                        <div class="form-control" style="padding-bottom:.05rem;">
				                                        	<div class="row">
                                           						<div class="col-lg-4 p-b-10">비행장치 신고 여부</div>
                                           						<div class="col-lg-4 p-b-10"><input type="radio" name="p_reg_mac" id="p_reg_mac_1" value="신고"><label class="lab_check" for="p_reg_mac_1"><span class="checkbox"></span> 신고</label></div>
                                           						<div class="col-lg-4 p-b-10"><input type="radio" name="p_reg_mac" id="p_reg_mac_2" value="미신고"><label class="lab_check" for="p_reg_mac_2"><span class="checkbox"></span>  미신고</label></div>
                                           					</div>
				                                        </div>
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-lg-6">
				                                    <div class="form-group">
				                                        <div class="form-control" style="padding-bottom:.05rem;">
				                                        	<div class="row">
                                           						<div class="col-lg-4 p-b-10">영업배상 책임보험 가입 여부</div>
                                           						<div class="col-lg-4 p-b-10"><input type="radio" name="p_reg_ins" id="p_reg_ins_1" value="가입"><label class="lab_check" for="p_reg_ins_1"><span class="checkbox"></span> 가입</label></div>
                                           						<div class="col-lg-4 p-b-10"><input type="radio" name="p_reg_ins" id="p_reg_ins_2" value="미가입"><label class="lab_check" for="p_reg_ins_2"><span class="checkbox"></span>  미가입</label></div>
                                           					</div>
				                                        </div>
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>				                                
				                                <div class="col-md-12">
				                                    <div class="form-group">
				                                        <label for="fileupload1">드론 사업자 등록증 사본 (추후에 제출하셔도 됩니다)</label>
				                                        <input type="file" name="fileupload1">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-md-12">
				                                    <div class="form-group">
				                                        <label for="fileupload2">비행장치 신고서 사본 (추후에 제출하셔도 됩니다)</label>
				                                        <input type="file" name="fileupload2">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-md-12">
				                                    <div class="form-group">
				                                        <label for="fileupload3">영업배상 책임보험 가입증서 사본 (추후에 제출하셔도 됩니다)</label>
				                                        <input type="file" name="fileupload3">
				                                        <p class="help-block text-danger"></p>
				                                    </div>
				                                </div>
				                                <div class="col-md-12">
				                                    <div class="form-group">
				                                        <textarea class="form-control" name="form_message" placeholder="문의사항 자유롭게 작성해주세요." rows="6" required=""></textarea>
				                                    </div>
				                                </div>
				                                <div class="col-md-12">
				                                    <p><input type="checkbox" name="agree_1" id="agree_1" value="약관"><label class="lab_check" for="agree_1"><span class="checkbox"></span> 이용약관<a href="#" data-toggle="modal" data-target="#modal-2">(보기)</a> 및 개인정보 처리방침<a href="#" data-toggle="modal" data-target="#modal-3">(보기)</a> 동의 <span class="required">(필수)</span></label></p>
                                    	    		<p><input type="checkbox" name="agree_2" id="agree_2" value="제공"><label class="lab_check" for="agree_2"><span class="checkbox"></span> 서비스 매칭을 위해 개인정보 제3자 제공 동의 <span class="required">(필수)</span></label></p>
                                    	    		<hr class="m-b-30 m-t-30">
				                                    <div class="text-center">
				                                        <input class="btn btn-circle btn-brand" id="partner_send" type="submit" value="등록하기">
				                                    </div>
				                                    <input type="hidden" name="form_token" id="form_token">
				                                    <input type="hidden" name="form_sns_token" id="form_sns_token">
				                                    <input type="hidden" name="form_sns_kind" id="form_sns_kind">
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

        </div>
        <!-- Wrapper end-->