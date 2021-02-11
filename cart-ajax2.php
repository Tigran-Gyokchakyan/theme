<?
/*
Template Name: Ajax-BackEnd
Template Post Type: page
*/
defined( 'ABSPATH' ) || exit;

if($_GET['do']=='addcart') {

$arrr=array('id','price','title','img'); //список исключений, чтобы было проще с выводом атрибутов
$arr=array_keys($_POST);
$art=array();
for($i=0;$i<count($_POST);$i++) {
    if(in_array($arr[$i],$arrr)) {
        $cn=false;
    } else {
        $connd .= '<div class="basket__modal-text">'.$arr[$i].': '.$_POST[$arr[$i]].'</div>';
    }
}

$content .= '<div class="basket__modal-item" data-cart="'.$_POST['id'].'" data-price="'.$_POST['price'].'">
<img class="basket__modal-img" src="'.$_POST['img'].'" alt="" />
<div class="basket__modal-info">
<a class="basket__modal-title">'.$_POST['title'].'</a>
'.$connd.'
</div>
<div class="basket__modal-colvo">
<button class="basket__modal-colvo-minus" data-b_id="'.$_POST['id'].'"><img src="../wp-content/themes/zapara/assets/dist/arrows_circle_minus.37a4439d.svg" alt="" /></button> <input value="1" type="number" class="basket__modal-colvo-num" />
<button class="basket__modal-colvo-plus" data-b_id="'.$_POST['id'].'"><img src="../wp-content/themes/zapara/assets/dist/arrows_circle_plus.b6315a93.svg" alt="" /></button>
</div>
<div class="basket__modal-price">'.$_POST['price'].'</div>
<button class="basket__modal-close" data-b_id="'.$_POST['id'].'"><img src="../wp-content/themes/zapara/assets/dist/arrows_circle_remove.2338694e.svg" alt="" /></button>
</div>';

echo stripslashes($content);

} elseif($_GET['do']=='update_cart') {

    //echo $_COOKIE['i_user'];    
    //echo $_POST['car'];
    $fp=fopen($_SERVER['DOCUMENT_ROOT'].'/cachecart/'.$_COOKIE['i_user'].'.txt', 'w');
    fwrite($fp, $_POST['car']);
    fclose($fp);

} elseif($_GET['do']=='open_cart') {

    if(file_exists($_SERVER['DOCUMENT_ROOT'].'/cachecart/'.$_COOKIE['i_user'].'.txt')) echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/cachecart/'.$_COOKIE['i_user'].'.txt');

} elseif($_GET['do']=='add_script') {
?>
<script>
function stripslashes(str) {
            str = str.replace(/\\'/g, '\'');
            str = str.replace(/\\"/g, '"');
            str = str.replace(/\\0/g, '\0');
            str = str.replace(/\\\\/g, '\\');
            return str;
         }
function update_cart() {
               $.ajax({
                  url: '<?echo get_site_url();?>/afgkloasopibnk231vd/?do=update_cart',
                  method: 'post',
                  dataType: 'html',
                  cache: false,
                  data: {car: $('.basket__modal-items').html()},
                  beforeSend: function() {

                  },
                  success: function(data){  
                     
                  },
                  error: function() {
                     alert('Ошибка запроса');
                  }
               });
            };

            function open_cart() {
               $.ajax({
                  url: '<?echo get_site_url();?>/afgkloasopibnk231vd/?do=open_cart',
                  method: 'post',
                  dataType: 'html',
                  cache: false,
                  data: {car: $('.basket__modal-items').html()},
                  beforeSend: function() {

                  },
                  success: function(data){  
                     $('.basket__modal-items').html(stripslashes(data));
                     $('.header__buttons-cart-numb').html($('.basket__modal-item').length);
                     
                     var summ=0;
                     $(".basket__modal-price").each(function(){
                        summ += parseInt($(this).text());
                     });
                     $('.basket__modal-all-price span').html(summ+' р.');
                  },
                  error: function() {
                     alert('Ошибка запроса');
                  }
               });
            };

            open_cart();

/** добавление в корзину */
function add_to_cart() {
               $.ajax({
                  url: '<?echo get_site_url();?>/afgkloasopibnk231vd/?do=addcart',
                  method: 'post',
                  dataType: 'html',
                  cache: false,
                  data: $(".popup.active form").serialize(),
                  success: function(data){  
                     $('.basket__modal-items').append(stripslashes(data));
                  },
                  error: function() {
                     alert('Ошибка запроса');
                  }
               });
            }
            /*добавление в корзину*/
            /*Расчёт суммы*/
            function calc_summ_cart(star_summ) {
               var summ = star_summ;
               $(".basket__inner .basket__modal-price").each(function(){
                  summ += Number.parseInt($(this).text());
               });
               $('.basket__modal-all-price span').html(summ+' р.');
            }
             /*Расчёт суммы*/
function popupback() {
        $("body").css({'overflow':"auto"});
        $('.popup.active').removeClass("active");
    }
    function add_cart() {
        var title=$('.popup.active').find('.popup__title').html();
                  var img=$('.popup.active').find('.popup__slide.active img').attr('src');
                  var price=$('.popup.active').find('.popup__price').html();
                  var id_c = $('.popup.active').attr('data-id');

                  $(".popup.active").find('.cart_attrs').append('<input type="hidden" name="id" value="'+id_c+'"><input type="hidden" name="price" value="'+price+'"><input type="hidden" name="title" value="'+title+'"><input type="hidden" name="img" value="'+img+'">');

               $(".basket").show(300);
               $("body").css({'overflow':'hidden'});
               
               if($(".basket__modal").find('[data-cart="'+id_c+'"]').length) {
                  /*Такой уже есть, проверим на параметры*/
                  
               } else {
                  /** Такого нет, нужно добавить в корзину */
                 add_to_cart();
               }

               $('.popup.active').toggleClass('active'); //В коцне, чтобы спарсить данные
               calc_summ_cart(parseInt(price));
               update_cart();
               return false;
    }

    $(function() { 
    $('.popup__slider-right').click(function() {
               var lemma=$('.popup.active').find('.popup__slide').length;
               var lemma_now=$(this).parent('.popup__slider').find('.popup__slide.active').attr('data-in');
               if(lemma_now<(lemma-2)) {
                  $('.popup.active').find('[data-in="'+parseInt(lemma_now)+'"]').removeClass('active');
                  $('.popup.active').find('[data-in="'+(parseInt(lemma_now)+parseInt(1))+'"]').addClass('active');
                  lemma_now++;
               }
               return false;
            });
            $('.popup__slider-left').click(function() {
               var lemma=$('.popup.active').find('.popup__slide').length;
               var lemma_now=$(this).parent('.popup__slider').find('.popup__slide.active').attr('data-in');
               if(lemma_now>0) {
                  $('.popup.active').find('[data-in="'+parseInt(lemma_now)+'"]').removeClass('active');
                  $('.popup.active').find('[data-in="'+(parseInt(lemma_now)-parseInt(1))+'"]').addClass('active');
                  lemma_now-1;
               }
               return false;
            });
            $('.popup__slide-prev').click(function() {
               $('.popup.active').find('[data-in]').removeClass('active');
               $('.popup.active').find('[data-in="'+parseInt($(this).attr('data-in'))+'"]').addClass('active');
            });
            $('select.popup__select').change(function(){
                  if($('.popup.active .cart_attrs [data-c="'+$(this).attr('name')+'"]').length) {
                     //если есть
                     $('.popup.active .cart_attrs [data-c="'+$(this).attr('name')+'"]').val($(this).attr('name')+'-'+$(this).val());
                  } else {
                     //если нет                        
                     $('.popup.active .cart_attrs').append('<input type="checkbox" name="attrs[]" data-c="'+$(this).attr('name')+'" value="'+$(this).attr('name')+'|'+$(this).val()+'">');
                  }
            });
});
</script>
<?
} elseif($_GET['do']=='prod_ajax') {

$product = wc_get_product( $_POST['id'] );
$post_thumbnail_id = $product->get_image_id();
$attachment_ids = $product->get_gallery_attachment_ids();


?>
<div class="popup" data-id="<?echo 'item_id_'.$product->get_id();?>"><form>
            <div class="popup-back" onclick="popupback();return false;">Назад</div>
            <div class="container">
                <div class="popup__inner">
                    <div class="popup__slider">
                        <button class="popup__slider-left" type="button">
                            <svg style="display: block;" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>Left</desc>
                                <polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline>
                                <svg style="display: block;" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>Right</desc>
                                    <polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline>
                                </svg>
                            </svg>
                        </button>
                        <button class="popup__slider-right" type="button">
                            <svg style="display: block;" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>Right</desc>
                                <polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline>
                            </svg>
						</button>
							<? 
							echo '<div class="popup__slide active" data-in="0"><img src="'.wp_get_attachment_url( $post_thumbnail_id ).'" alt="" /></div>';
							for($n=0;$n<count($attachment_ids);$n++) {
								echo '<div class="popup__slide" data-in="'.($n+1).'"><img src="'.wp_get_attachment_url($attachment_ids[$n]).'" alt="" /></div>';
							}
							?>
                        <div class="popup__slider-prev">
							<? 
								echo '<div class="popup__slide-prev active" data-in="0"><img src="'.wp_get_attachment_url( $post_thumbnail_id ).'" alt="" /></div>';
								for($m=0;$m<count($attachment_ids);$m++) {
									echo '<div class="popup__slide-prev" data-in="'.($m+1).'"><img src="'.wp_get_attachment_url($attachment_ids[$m]).'" alt="" /></div>';
								}
							?>
                        </div>
                    </div>
                    <div class="popup__text">
                        <div class="popup__title"><? echo get_the_title($product->get_id()); ?></div>
                        <!---<div class="popup__art">Арт: 002</div>---->
                        <div class="popup__price"><? echo $product->get_price(); ?> р.</div>
                        <? $product->list_attributes(); ?>
                        <button class="popup__btn" type="button" onclick="return add_cart();">В корзину</button>
                        <div class="popup__decription"><? echo preg_replace("#\r?\n#", "<br />", $product->post->post_content); ?></div>
					</div>
					<div style="display:none;" class="cart_attrs">
					</div>
                </div>
            </div>
			</form></div>
<?

} else {
    $to = 'mmantropov@mail.ru';
    $subject = 'Новый заказ на ZAPARA.STORE!';
        $message = '
        <html>
        <head>
        <title>Новый заказ на ZAPARA.STORE!</title>
        </head>
        <body>
            '.$_POST['tovars'].'
        </body>
        </html>
        ';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
    $headers .= 'From: ORDER <orders@kwork.ereports.host>' . "\r\n";

    if(mail($to, iconv("UTF-8", "windows-1251", $subject), iconv("UTF-8", "windows-1251", $message), $headers)) echo 'отлично, письмо отправили';
    else echo 'надо настраивать почту1';
}


?>