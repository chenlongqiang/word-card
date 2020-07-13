<?php
/**
 * Created by PhpStorm.
 * User: longqiang.chen
 * Date: 2020/7/13
 * Time: 17:25
 */

require './bootstrap.php';

class GenWorkCard {
    public function run($words = '') {
        // Creating the new document...

        $word_template = new \PhpOffice\PhpWord\TemplateProcessor('./template/word_card_template.docx');
        for ($i = 1; $i <= 8; $i ++) {
            $word = mb_substr($words, $i - 1, 1);
            $word_template->setValue('word_' . $i, $word);
        }
        $word_template->saveAs('./output/字卡_'.$words.'.docx');
    }
}

$words = '照婆甜梦老盒尺刀';
$words = '时正文具笔画长放';
$words = '用总尾巴玉尖竹苗';
(new GenWorkCard())->run($words);
