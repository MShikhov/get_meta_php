<?php
$html = file_get_contents('index.html');
class getMeta
{
    public static function stripTags($html, $tags)
    {
        $tags = explode(',', $tags);

        foreach ($tags as $tag) {

            $regexp = '#</?' . trim($tag) . '( .*?>|>)#siu';
            $html = preg_replace($regexp, '', $html);
        }

        return $html;
    }
}
echo $hhString = getMeta::stripTags($html, 'title, description', 'meta', 'keywords');
