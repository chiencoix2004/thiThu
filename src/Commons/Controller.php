<?php
namespace Coongchjen\ThiThu\Commons;
use eftec\bladeone\BladeOne;


class Controller {
    public function renderView($view,$data =[]) {
        $templatePath = __DIR__ . '/../views';
        $compiledPath = __DIR__ . '/../views/cache';
        $blade = new BladeOne($templatePath,$compiledPath);
        echo $blade->run($view, $data);

    }
}