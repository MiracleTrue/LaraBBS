<?php
/**
 * Created by BocWeb.
 * Author: Miracle  QQ:120007700
 * Date  : 2018/5/17
 * Time  : 15:05
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}