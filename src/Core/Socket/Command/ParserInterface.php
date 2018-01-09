<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2017/12/25
 * Time: 上午11:26
 */

namespace EasySwoole\Core\Socket\Command;


interface ParserInterface
{
    public function decode($raw,array $args):?CommandBean;
    public function encode(?string $raw,array $args):?string ;
}