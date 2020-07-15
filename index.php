<?php
define('API_KEY','1391837426:AAE4ZEYykDYYJewzLXbGn2Y8J1vub9EJyr4'); 
$admin> = "1080227488"; //admin id
$mybot = "TurdiOtaChoyxonasiBot";

   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => '',
   ]);
} 

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
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
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$text = $message->text;
$status = $statjson['result']['status'];
$silent = file_get_contents("data/$chat_id/silent.txt");
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$rtid = $update->message->reply_to_message->from->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$rt = $update->message->reply_to_message;
$super_silent = explode("\n", $silent);
$re_name = $update->message->reply_to_message->from->first_name;
$mtext = $message->text;
$tx = $message->text;
$text = $message->text;
$type = $message->chat->type;
$uid= $message->from->id;
$namegroup = $update->message->chat->title;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$from_id = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");

$soat1 = date('H:i:s',strtotime('2 hour')); 
$sana1 = date('d-M Y',strtotime('2 hour'));
$sana2 = date('z',strtotime('2 hour'));
$gmt = date('O',strtotime('2 hour'));
$oynomi = date('F',strtotime('2 hour'));
$buoy = date('t',strtotime('2 hour'));

$namegroup = $update->message->chat->title;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$tedadmsg = $update->message->message_id;


$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="TurdiOtaChoyxonasiBot"; //bot useri
$soat = date('H:i', strtotime('2 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$text = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
mkdir("stat");

$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$is_bot = $message->new_chat_member->is_bot;

$text1 = $update->message->text;
$chat_id = $update->message->chat->id;
if(isset($text1)){
$calc = urlencode($text1);
$url = file_get_contents("http://api.mathjs.org/v1/?expr=$calc");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$url",
'parse_mode'=>"html",
]);
}




$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Taomlar"]]
]
]);




$pismo = "Salom • $first_name • Xush Kelibsiz Bu Bot Orqali Qashqadaryo Hududida Choyxona Taomlarini Buyurtma Berishingiz Mumkin Pastdagi " Taomlar " Tugmasi Orqali Taomlarimiz bilan tanishib chiqing";

if((mb_stripos($tx,"/start")!==false) or ($tx == "/start")) {
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"$pismo",
    'reply_markup'=>$key
    ]);
}

if($text == "Taomlar"){
    bot('sendPhoto',[
        'chat_id'=>$cid,
        'photo'=>"https://t.me/TaomlarYetkazamiz/2",
        'caption'=>"🥗ТУРДИ ОТА ЧОЙХОНАСИ🥗 
Доставка хизматини такдим этади

🍝 МЕНЮ🍝

1.Кизилча-80.000
2.Шервоз-95.000
3.Мангал карейка-80.000
4.Манти-2500(дона)
5.Чебурек-3000(дона)
6.Гречка-10.000(порц)
7.Товук чхамбл-14.000(порц)
8.Пирожок-85.000
9.Барбекю-8000(дона)
10.Табака-40.000
11.Шашлик кускавой-28.000
12.Шашлик гиждувон-25.000
13.Шашлик жигар-16.000
14.Сомса-2000/3500(дона)
15.Димлама-
Мурожат учун:+99897 585 72 72(жамшид)
+99897 589 55 57(санжар)
Карши шахар ичида даставка бор 🚔 
Сизга хизмат курсатишдан мамнунмиз хурмат б.н Чойхона мамурияти",
        ]);
}


if($text == '/code' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'document'=>new CURLFile(__FILE__),
'caption'=>"@$mybot <b>code</b>", 
'parse_mode'=>"html",
]);
} 

