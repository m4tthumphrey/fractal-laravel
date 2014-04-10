<?php namespace m4tthumphrey\FractalLaravel;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
    protected static function getFacadeAccessor() { return 'fractal'; }
} 