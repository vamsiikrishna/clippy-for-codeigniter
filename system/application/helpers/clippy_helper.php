<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** CodeIgniter helper for copying text to the clipboard 
copied from  https://github.com/mojombo/clippy 
even github uses the same thing 
Note : change the value of $clippy_url to the path of the clippy.swf  ( must be on same domain )
**/

if ( ! function_exists('clipit'))
{

    function clipit($var = 'Copy me please')
{
$clippy_url = '/resources/flash/clippy.swf';
$clippy = <<< EOD
   <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
            width="110"
            height="14"
            id="clippy" >
    <param name="movie" value="$clippy_url"/>
    <param name="allowScriptAccess" value="always" />
    <param name="quality" value="high" />
    <param name="scale" value="noscale" />
    <param NAME="FlashVars" value="text=$var">
    <param name="bgcolor" value="#FFFFFF">
    <embed src="$clippy_url"
           width="110"
           height="14"
           name="clippy"
           quality="high"
           allowScriptAccess="always"
           type="application/x-shockwave-flash"
           pluginspage="http://www.macromedia.com/go/getflashplayer"
           FlashVars="text=$var"
           bgcolor="#FFFFFF"
    />
    </object>
EOD;
return $clippy;
}
}
