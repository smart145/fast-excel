<?php

namespace Dramosv90\FastExcel\Tests;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dumb.
 */
class Dumb extends Model
{
    public $data;

    /**
     * Dumb constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
        parent::__construct();
        $this->data = $data;
    }
}
