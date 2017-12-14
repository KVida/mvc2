<?php
class CoreAdmin
{
	public $view = '';
    public function __construct()
    {
        require_once '../lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem('../admin/theme/html');
        $twig = new Twig_Environment($loader, array(
            'cache'       => 'cache',
            'auto_reload' => true
        ));
        $this->view = $twig;
    }
    
    public static function translit($text)
    {
        $ru = explode('-', "А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я");
        $en = explode('-', "A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch---Y-y---E-e-YU-yu-YA-ya");
        $res = str_replace($ru, $en, $text);
        $res = preg_replace("/[\s]+/ui", '-', $res);
        $res = preg_replace('/[^\p{L}\p{Nd}\d-]/ui', '', $res);
        $res = strtolower($res);
        return $res;
    }
	public function validAdmin($nameInput, $valueInput) 
    {
        switch ($nameInput) {
            case 'stock':
            case 'sale_price':
            case 'price':
                if (preg_match_all('/^[0-9]*$/', trim($valueInput))) {
                    $res = true;
                } else {
                    $res = false;
                }
                break;
            case 'name': 
            case 'nameVariant':
            case 'text':
            case 'title':
                if (preg_match_all('/^[а-яёa-z0-9]+[а-яёa-z0-9-_\s]*$/iu', trim($valueInput))) {
                    $res = true;
                } else {
                    $res = false;
                }
                break;
            case 'sku':
                if (preg_match_all('/^[a-z0-9]+$/iu', trim($valueInput))) {
                    $res = true;
                } else {
                    $res = false;
                }
                break;
            case 'url':
                if (substr(trim($valueInput), -1) == '/') {
                    $res = true;
                } else {
                    $res = false;
                }
                break;
        }
        return $res;
    }
}