<?php 

if (!function_exists('clean')){
	function clean($str='', $mode){
        $modePossible = array('url', 'normal');
        $unwanted_array = array( 'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', );
        if(in_array($mode, $modePossible) && $mode == 'url'){ return strtr($str, array_merge($unwanted_array, array(' '=>''))); }
        else {
            $unwanted_chars = array('(', ')');
            $str = str_replace($unwanted_chars, "", strtr($str, $unwanted_array));
            $unwanted_chars = array('*', '/', '-', '+', ':', ';', '~', '{', '}', '°', '|', '/', '`', '#', '&', '²', '£', '¤', 'µ', '%', '§', '!', '?', '\\', '$', ' ');
            return (str_replace($unwanted_chars, "_", strtr($str, $unwanted_array)));
        }
    }
}

if (!function_exists('pictureOrMovie')){
	function pictureOrMovie($string, $class = ''){
        if(preg_match('#https?:\/\/(www.)?[a-z]*.[a-z]{2,3}\/(.*)#', $string, $matches)){
            $url = parse_url($string);
            $domaine = explode('.', $url['host'])[1];
            switch(explode('.', $url['host'])[1]){
                case 'dailymotion':
                    $codeVideo = array_reverse(explode('/', $url['path']))[0];
                    $retour['type'] = 'video';
                    $retour['contenu'] = '<iframe frameborder="0" src="//www.dailymotion.com/embed/video/'.$codeVideo.'" allowfullscreen=""></iframe>';
                    break;
                case 'youtube':
                    $codeVideo = array_reverse(explode('=', $url['query']))[0];
                    $retour['type'] = 'video';
                    $retour['contenu'] = '<iframe src="https://www.youtube.com/embed/'.$codeVideo.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                    break;
                default: 
                    return false;
            }
            return $retour;
        }else{
            $retour['type'] = 'image';
            $retour['contenu'] = '<img'.(strlen($class) > 0 ? " class='$class'":"").' src="'.base_url('assets/img/'.$string).'" />';
            return $retour;
        }

        return false;
    }
}