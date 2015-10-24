<?php
/**
 * HHVM
 *
 * Copyright (C) Tony Yip 2015.
 *
 * @author   Tony Yip <tony@opensource.hk>
 * @license  http://opensource.org/licenses/GPL-3.0 GNU General Public License
 */

namespace Elearn\Library\Controllers;

use Elearn\Foundation\Controller\Controller;

class IntroController extends Controller
{

    public function aim()
    {
        return view('library::about.aim');
    }
}