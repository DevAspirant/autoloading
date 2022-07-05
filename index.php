<?php 
/* Autoloading 
 * اننا نعمل include or require اي استدعاء الملفات و اضافتها للتطبيق 
 * 
 */

//phpinfo();


define('APP_PATH',dirname(realpath(__FILE__))); // ثابت للحصول على مكان الملف  
define('DS',DIRECTORY_SEPARATOR); // عشان الشرطة في نظم التشغيل 
define('PS',PATH_SEPARATOR); // التفريق بين مكان المجلدات
define('CONTROLLERS_PATH',APP_PATH . DS . 'controllers'); // controllers folder path
define('MODELS_PATH',APP_PATH.DS.'models'); // models folder path

$path = get_include_path() . PS . CONTROLLERS_PATH . PS . MODELS_PATH;
set_include_path($path);
/* As PHP Standard and performance issue, they recommend to create your autoload function 
function __autoload($className){
    require strtolower($className) . '.class.php';
}*/
function myAutoLoader($className){
    require strtolower($className) . '.class.php';
}

spl_autoload_register('myAutoLoader');

$a = new A;
$a::newline();
$b = new B;
$a::newline();
$c = new C();
$a::newline();
$d = new D();
$a::newline();
$e = new E;
$a::newline();
$f = new F;
$a::newline();
echo '<b>Path :</b>' . get_include_path();
$a::newline();
echo '<b>directory path :</b> ' . dirname(realpath(__FILE__)); 
?>