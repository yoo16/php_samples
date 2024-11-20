<?php
require_once 'Model.php';

class Topic extends Model
{
    public $title;
    public $content;
    public $datetime;
    public $file = 'topics.json';

}
