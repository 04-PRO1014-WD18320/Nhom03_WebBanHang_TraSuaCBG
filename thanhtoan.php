<style>
body{ 
    margin-top:40px; 
}
.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    /* z-order: 0; */

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn
{
        border-radius: 0px;
}
.btn-circle {
       width: 56px;
    height: 56px;
    text-align: center;
    padding: 12px 0;
    font-size: 20px;
    line-height: 1.428571429;
    border-radius: 35px;
    margin-top: -14px;
    border: solid 3px #ccc !important;
    opacity:1 !important;
     -webkit-box-shadow:inset 0px 0px 0px 3px #fff !important; 
     -moz-box-shadow:inset 0px 0px 0px 3px #fff !important;
    -o-box-shadow:inset 0px 0px 0px 3px #fff !important;
   -ms-box-shadow:inset 0px 0px 0px 3px #fff !important; 
   box-shadow:inset 0px 0px 0px 3px #fff !important;
      /* backgournd-color:#428bca; */
}
.d-flex {
    display: flex;
    gap: 20px;
}
.mt-5 h1{
    margin-bottom: 50px;
}


</style>
<script>
$(document).ready(function () {

var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

allWells.hide();

navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
        $item = $(this);
    if (!$item.hasClass('disabled')) {        
        //navListItems.removeClass('btn-primary').addClass('btn-default');
        if($item.attr('id')!=$(navListItems[1]).attr('id'))
        {
            $(navListItems[1]).removeClass('btn-primary').addClass('btn-success');
        }
        //$('#item3').addClass('btn-success');
        $item.addClass('btn-primary');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
    }
});

allNextBtn.click(function(){
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url'], input[type='password'], input[type='email']"),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i<curInputs.length; i++){
        if (!curInputs[i].validity.valid){
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
    }

    if (isValid)
        nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-primary').trigger('click');
});
</script>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <div class="container" style="display: flex;justify-content: space-between;">

<!-- THÔNG TIN SẢN PHẨM THANH TOÁN -->
<?php  
extract($onesp);
?>
 <div class="height d-flex justify-content-center align-items-center">
    
    <div class="card p-6">
        
        <div class="d-flex justify-content-between align-items-center ">
            <div class="mt-2">
                
            </div>
            <div class="image">
                <img src="img/<?=$anhsp ?>" width="150">
            </div>
            <div class="mt-5">
                    <h1 class="main-heading mt-0"><?=$namesp ?></h1>
                    <h4 style="font-weight: 700" class="text-uppercase">Giá:<?=$giasp ?>đ</h4>
                </div>
            <!-- <div class="mt-2">
                <h4 style="color: red;font-weight: 700" class="text-uppercase"><?=$giasp ?>$</h4>
            </div> -->
        </div>
        
        
        
        <!-- <p><?=$motasp ?></p> -->
        
    </div>
    
</div>
<!-- END PRODUCT INFOR -->
<form role="form" method="post" action="index.php?act=dathangthanhcong&&idsp=<?=$id ?>">




    <div class="row setup-content" id="ProfileSetup-step">
        <div class="col-xs-12">
            <div class="col-md-12">
                 <br/>
                <div class="form-horizontal">
                    <form  role="form">
                        <fieldset>
                      
                         
                          <br/>
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="card-number">Tên khách hàng</label>
                            <div class="col-sm-9">
                             <input maxlength="100" type="text" required="required" class="form-control" placeholder=" Name" name="ten" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="card-number">Số điện thoại</label>
                            <div class="col-sm-9">
                             <input maxlength="100" type="text" required="required" class="form-control" placeholder="Số điện thoại" name="sdt" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="card-number">Địa chỉ</label>
                            <div class="col-sm-9">
                             <input maxlength="100" type="text" required="required" class="form-control" placeholder=" Địa chỉ" name="diachi"/>
                            </div>
                          </div>
                          
                        </fieldset>
                    </form>
                </div>
                
                <input type="submit" class="btn btn-primary nextBtn btn-lg pull-right" name="thanhtoan" value="Thanh toán">
            </div>
        </div>
    </div>
    
</form>

</div>