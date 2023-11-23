<style>
    /* body {
  font-family: 'open sans';
  overflow-x: hidden; } */

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }
   
.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
.bl{
    margin-top: 30px;
    font-size: 20px;
    padding: 0 50px;
}
</style>
<?php 
extract($onesp);
?>
<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="img/<?=$anhsp ?>" /></div>
						</div>
						
					</div>
					<div class="details col-md-6" style="margin-left: 20px;">
						<h3 class="product-title"><?=$namesp ?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">Lượt mua : 41</span>
						</div>
						<p class="product-description"><?=$motasp ?></p>
						<h4 class="price">Số tiền: <span><?=$giasp ?></span></h4>
						<p class="vote"><strong></strong>  <strong></strong></p>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">Mô tả:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">Mua ngay</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <div class="bl">
    <h3>Bình luận</h3>
  </div>
    <div class="container mt-5" style="padding: 50px;">
    

    <div class="row  d-flex justify-content-center">

        <div class="col-md-8">




            <div class="card p-3">

                <div class="d-flex justify-content-between align-items-center">

              <div class="user d-flex flex-row align-items-center">

                <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
                <span><small class="font-weight-bold text-primary">Hoàng khánh duy</small> <small class="font-weight-bold"></small></span>
                  
              </div>


              <small>2 ngay trước</small>

              </div>


              <div class="action d-flex justify-content-between mt-2 align-items-center">

                <div class="reply px-4">
                    <small>Đồ uống rất ngon </small>
                    <span class="dots"></span>
                    <small></small>
                    <span class="dots"></span>
                    <small></small>
                   
                </div>

                <div class="icons align-items-center">

                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-check-circle-o check-icon"></i>
                    
                </div>
                  
              </div>


                
            </div>







            <div class="card p-3 mt-2">

                <div class="d-flex justify-content-between align-items-center">

              <div class="user d-flex flex-row align-items-center">

                <img src="https://i.imgur.com/C4egmYM.jpg" width="30" class="user-img rounded-circle mr-2">
                <span><small class="font-weight-bold text-primary">Kiều Văn Quyết</small> <small class="font-weight-bold"></small></span>
                  
              </div>


              <small>3 ngày trước</small>

              </div>


              <div class="action d-flex justify-content-between mt-2 align-items-center">

                <div class="reply px-4">
                    <small>Giao hàng nhanh ngon và đẹp mắt</small>
                    <span class="dots"></span>
                    <small></small>
                    <span class="dots"></span>
                    <small></small>
                   
                </div>

                <div class="icons align-items-center">
                    <i class="fa fa-check-circle-o check-icon text-primary"></i>
                    
                </div>
                  
              </div>


                
            </div>










            <div class="card p-3 mt-2">

                <div class="d-flex justify-content-between align-items-center">

              <div class="user d-flex flex-row align-items-center">

                <img src="https://i.imgur.com/0LKZQYM.jpg" width="30" class="user-img rounded-circle mr-2">
                <span><small class="font-weight-bold text-primary">Nguyễn Văn Minh</small> <small class="font-weight-bold"> </small></span>
                  
              </div>


              <small>3 tuần trước</small>

              </div>


              <div class="action d-flex justify-content-between mt-2 align-items-center">

                <div class="reply px-4">
                    <small>Đồ uống ngon</small>
                    <span class="dots"></span>
                    <small></small>
                    <span class="dots"></span>
                    <small></small>
                   
                </div>

                <div class="icons align-items-center">
                    <i class="fa fa-user-plus text-muted"></i>
                    <i class="fa fa-star-o text-muted"></i>
                    <i class="fa fa-check-circle-o check-icon text-primary"></i>
                    
                </div>
                  
              </div>


                
            </div>






            <div class="card p-3 mt-2">

                <div class="d-flex justify-content-between align-items-center">

              <div class="user d-flex flex-row align-items-center">

                <img src="https://i.imgur.com/ZSkeqnd.jpg" width="30" class="user-img rounded-circle mr-2">
                <span><small class="font-weight-bold text-primary">Khuất  Ngọc Mai</small> <small class="font-weight-bold text-primary"></small> <small class="font-weight-bold text-primary"></small> <small class="font-weight-bold"> </small></span>
                  
              </div>


              <small>3 phút trước</small>

              </div>


              <div class="action d-flex justify-content-between mt-2 align-items-center">

                <div class="reply px-4">
                    <small>Rất ngon ạ</small>
                    <span class="dots"></span>
                    <small></small>
                    <span class="dots"></span>
                    <small></small>
                   
                </div>

                <div class="icons align-items-center">
                   
                    <i class="fa fa-check-circle-o check-icon text-primary"></i>
                    
                </div>
                  
              </div>


                
            </div>


            
        </div>
        
    </div>
    
</div>