<footer class="footer">
         <div class="container mb-4">
            <div class="row">
               <div class="col-md-12 mb-4">
                  <div class="d-flex justify-content-center align-items-center mb-1">
                     <img class="img-fluid " width="150" src="{{URL::to('/')}}/public/images/settings/{{get_setting('logo')}}" alt="LOGO">
                  </div>
               </div>
            </div>
         </div>
         <div class="bg-dark">
            <div class="container py-3">
               <div class="row justify-content-center align-items-center">
                  <div class="col-6">
                     <ul class="navbar-nav footer-link flex-wrap gap-3 ms-auto mb-2 d-flex flex-row top-headers mb-lg-0">
                        <li class="nav-item">
                           <a class="nav-link text-white active " aria-current="page" href="{{route('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link  text-white" href="{{route('about')}}">About Nyra</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link  text-white" href="{{route('contact')}}">Contact</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <div class="info-1">
                        <div class="Socail-link justify-content-end  d-flex gap-3">
                           <a class="nav-link" href="{{get_setting('facebook')}}">
                           <i class="bi text-white bi-facebook "></i>
                           </a>
                           <a href="{{get_setting('instagram')}}" class="nav-link">
                           <i class="bi text-white bi-instagram "></i>
                           </a>
                           <a href="{{get_setting('twitter')}}" class="nav-link">
                           <i class="bi text-white bi-twitter "></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <p class="text-white text-center mt-3 mb-0">Copyright by <b>Nyra</b>. All rights reserved.</p>
                     <p style="font-size: 12px;" class="text-white text-center mt-0 ">Designed & Developed by <a href="https://gswebtech.com/" class="text-decoration-none" target="blank">  <b>GS Web Technologies</b></b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      
      <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script>
         const swiper = new Swiper('.swiper', {
         
           // Optional parameters
         
           direction: 'horizontal',
         
           // loop: true,
         
           // slidesPerView: 2,
         
           spaceBetween: 24,
         
           breakpoints: {
         
             '768': {
         
               slidesPerView: 1,
         
               spaceBetween: 24,
         
             },
         
             '990': {
         
               slidesPerView: 1,
         
               spaceBetween: 24,
         
             },
         
             '1280': {
         
               slidesPerView: 2,
         
               spaceBetween: 24,
         
             },
         
           },
         
         
         
           // If we need pagination
         
           pagination: {
         
             el: '.swiper-pagination',
         
           },
         
         
         
           // Navigation arrows
         
           navigation: {
         
             nextEl: '.swiper-button-next',
         
             prevEl: '.swiper-button-prev',
         
           },
         
         
         
           // And if we need scrollbar
         
           scrollbar: {
         
             el: '.swiper-scrollbar',
         
           },
         
         });
         
      </script>
      	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
	<script src="./script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
	<script>

		TweenLite.set(".pageBg", { xPercent: -50, yPercent: -50 });
		TweenLite.set(".pageWrapper", { left: "50%", perspective: 1000 });
		TweenLite.set(".page", { transformStyle: "preserve-3d" });
		TweenLite.set(".back", { rotationY: -180 });
		TweenLite.set([".back", ".front"], { backfaceVisibility: "hidden" });


		$(".page").click(
			function () {
				if (pageLocation[this.id] === undefined || pageLocation[this.id] == "right") {
					zi = ($(".left").length) + 1;
					TweenMax.to($(this), 1, { force3D: true, rotationY: -180, transformOrigin: "-1px top", className: '+=left', z: zi, zIndex: zi });
					TweenLite.set($(this), { className: '-=right' });
					pageLocation[this.id] = "left";
				} else {
					zi = ($(".right").length) + 1;
					TweenMax.to($(this), 1, {
						force3D: true, rotationY: 0, transformOrigin: "left top", className: '+=right', z: zi, zIndex: zi
					});
					TweenLite.set($(this), { className: '-=left' });
					pageLocation[this.id] = "right";
				}
			}
		);

		$(".front").hover(
			function () {
				TweenLite.to($(this).find(".pageFoldRight"), 0.3, { width: "50px", height: "50px", backgroundImage: "linear-gradient(45deg,  #fefefe 0%,#f2f2f2 49%,#ffffff 50%,#ffffff 100%)" });
			},
			function () {
				TweenLite.to($(this).find(".pageFoldRight"), 0.3, { width: "0px", height: "0px" });
			}
		);

		$(".back").hover(
			function () {
				TweenLite.to($(this).find(".pageFoldLeft"), 0.3, { width: "50px", height: "50px", backgroundImage: "linear-gradient(135deg,  #ffffff 0%,#ffffff 50%,#f2f2f2 51%,#fefefe 100%)" });
			},
			function () {
				TweenLite.to($(this).find(".pageFoldLeft"), 0.3, { width: "0px", height: "0px" });
			}
		)

		var pageLocation = [],
			lastPage = null;
		zi = 0;

	</script>

   </body>
</html>