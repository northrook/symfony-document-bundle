<?php

namespace Northrook\Symfony\Document;

final class DocumentParameters
{


    public static function getDotArray() : array {
        return [
            'meta.content.title'       => [ 'title', 'Example title' ],
            'meta.content.description' => [ 'description', 'Example description, lorem description' ],
            'meta.content.author'      => [ 'author', 'Example author' ],
            'meta.content.keywords'    => [ 'keywords', 'example, keywords, lorem, ipsum, dolor, sit' ],
            'meta.robots'              => [ 'robots', 'noindex, nofollow' ],
            'meta.robots.google'       => [ 'googlebot', 'index, follow'],
            'meta.robots.yandex'       => [ 'yandexbot', 'noindex, nofollow'],
            'meta.robots.bing'         => [ 'bingbot', 'noindex, nofollow'],
        ];
    }
}