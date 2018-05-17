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