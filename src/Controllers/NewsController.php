<?php
/**
 * library
 *
 * PHP version 5
 *
 * Copyright (C) Tony Yip 2015.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @category Guardian
 * @author   Tony Yip <tony@opensource.hk>
 * @license  http://opensource.org/licenses/GPL-3.0 GNU General Public License
 */

namespace Elearn\Library\Controllers;

use Illuminate\Routing\Controller;
use Elearn\Model\Library\News;

class NewsController extends Controller
{

    public function index()
    {
        $newses = News::select(['id', 'title', 'event_time', 'type', 'created_at'])
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
        return view('library::news.index', ['newses' => $newses]);
    }

    public function show($news)
    {
        $news = News::where(['id' => $news])
            ->first();

        if (null === $news) {
            return redirect()->route('library.news.index');
        }

        return view('library::news.show', ['news' => $news]);
    }

    public function edit($news)
    {
        return redirect()->route('library.news.show', ['news' => $news]);
    }

    public function create()
    {
        return redirect()->route('library.news.index');
    }
    
}