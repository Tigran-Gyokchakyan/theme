<?

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

echo $content;

} elseif($_GET['do']=='update_cart') {

    //echo $_COOKIE['i_user'];    
    //echo $_POST['car'];
    $fp=fopen($_SERVER['DOCUMENT_ROOT'].'/cachecart/'.$_COOKIE['i_user'].'.txt', 'w');
    fwrite($fp, $_POST['car']);
    fclose($fp);

} elseif($_GET['do']=='open_cart') {

    echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/cachecart/'.$_COOKIE['i_user'].'.txt');

} elseif($_GET['do']=='prod_ajax') {

echo wp_get_document_title();


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