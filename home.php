<style>
    body {
    background-color: #f7f6f6
}

.card {
    
    border: none;
    box-shadow: 5px 6px 6px 2px #e9ecef;
    border-radius: 4px;
}


.dots{

    height: 4px;
  width: 4px;
  margin-bottom: 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

.badge{

        padding: 7px;
        padding-right: 9px;
    padding-left: 16px;
    box-shadow: 5px 6px 6px 2px #e9ecef;
}

.user-img{

    margin-top: 4px;
}

.check-icon{

    font-size: 17px;
    color: #c3bfbf;
    top: 1px;
    position: relative;
    margin-left: 3px;
}

.form-check-input{
    margin-top: 6px;
    margin-left: -24px !important;
    cursor: pointer;
}


.form-check-input:focus{
    box-shadow: none;
}


.icons i{

    margin-left: 8px;
}
.reply{

    margin-left: 12px;
}

.reply small{

    color: #b7b4b4;

}


.reply small:hover{

    color: green;
    cursor: pointer;

}
</style>
<div class="row">
<section class="banner">
        <img id="anh" src="img/1.jpg" alt="">
    </section>

    <div class="spnb">
        <h2>MILK TEA - CBG</h2>
    </div>

    <div class="spnn">
        <h2>Sản Phẩm Nổi Bật</h2>
    </div>

    <section class="post">
        <?php 
        foreach ($spnew as $sp) {
            extract($sp);
            echo '        <section class="post-item">
            <img src="img/'.$anhsp.'" alt="">
            <section class="sub">
                <a href="#">'.$namesp.'</a>
                <section class="price">'.$giasp.'
                </section>
                <a href="index.php?act=sanphamct&&idsp='.$id.'" class="book">Đặt hàng</a>
            </section>
        </section>';
            # code...
        }
        ?>
</div>




