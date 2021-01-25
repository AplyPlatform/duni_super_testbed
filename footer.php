			<!-- Footer-->
      <footer class="footer">
          <div class="footer-widgets">
              <div class="container">
                  <div class="row">
                      <div class="col-md-6">
                          <aside class="widget widget-text">
                              <div class="widget-title">
                                  <h6>About Us</h6>
                              </div>
                              <div class="textwidget">
                                  <p>
                                      서울특별시 강남구 테헤란로 2길 27, 패스트파이브 빌딩, 11층<br />
                                      사업자등록번호: 852-88-01183<br />
                                      통신판매업신고: 제2019-서울강남-01895호<br />
                                  </p>
                                  <p>DUNI는 통신판매중개자로서 거래당사자가 아니며 파트너사가 제공하는 서비스에 대한 계약 및 이행 사항과 분쟁에 책임지지 않습니다.</p>
                              </div>
                          </aside>
                      </div>
                      <div class="col-md-5 offset-md-1">
                          <aside class="widget widget-recent-entries">
                              <div class="widget-title">
                                  <h6>DUNI 고객센터</h6>
                              </div>
                              <ul>
                                  <li><a href="#" data-toggle="modal" data-target="#modal-2">이용약관</a></li>
                                  <li><a href="#" data-toggle="modal" data-target="#modal-3">개인정보 처리방침</a></li>
                                  <li><a href="index.php?page=contact">문의</a></li>
                              </ul>
                          </aside>
                          <aside class="widget textwidget">
                              <div class="widget-title">
                                  <h6>Social Network</h6>
                              </div>
                              <ul class="social-icons">
                                  <li><a href="https://instagram.com/duni_aply" target=_new><i class="fab fa-instagram"></i></a></li>
                                  <li><a href="https://facebook.com/duniplatform" target=_new><i class="fab fa-facebook-f"></i></a></li>
                              </ul>                                   
                          </aside>
                      </div>
                  </div>
              </div>
          </div>
          <div class="footer-bar">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="copyright">
                              <p>ⓒ <script>var cYear=(new Date()).getFullYear();document.write(cYear);</script> <a href="https://aply.biz" target=_new>APLY Inc.</a></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer end-->
      <!-- Modal -->
			<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					    <div class="modal-header">
					        <h5 class="modal-title">DUNI</h5>				               
					    </div>
					    <div class="modal-body">
					        <div id="contact-response"></div>
					    </div>
					    <div class="modal-footer">
					        <button class="btn btn-warning btn-sm btn-circle" type="button" id="askModalOKButton" data-dismiss="modal">확인</button>				               
					    </div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   			<div class="modal-dialog modal-lg" role="document">
<?
include "service_agreement.php";
?>       			
   			</div>
			</div>
		
			<!-- Modal 3 -->
			<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   			<div class="modal-dialog modal-lg" role="document">
<?
include "privacy_agreement.php";
?>       			
   			</div>
		</div>
      <!-- To top button--><a class="scroll-top" href="#top"><i class="fas fa-angle-up"></i></a>
          
      <!-- Scripts-->
      <script src="assets/js/custom/jquery-3.2.1.min.js"></script>
      <script src="assets/js/custom/popper.min.js"></script>
      <script src="assets/js/bootstrap/bootstrap.min.js"></script>        
      <script src="assets/js/custom/plugins.min.js"></script>
      <script src="assets/js/custom/custom.min.js"></script>
      
      <script src="assets/js/req.js"></script>
      <script src="assets/js/handler.js"></script>