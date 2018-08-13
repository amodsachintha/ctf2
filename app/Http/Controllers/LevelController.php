<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // RETURN VIEWS //

    private function level0()
    {
        return view('level0');
    }

    private function level1()
    {
        setcookie('flag', 'NDNkMzgxMGMwNjVmNGJmMzU1MGZhYzY0OGQ2MDVmY2I=', (86400 * 30), '/');
        return view('level1');
    }

    private function level2()
    {
        return view('level2');
    }

    private function level3()
    {
        return view('level3');
    }

    private function level4()
    {
        return view('level4');
    }

    // VALIDATION CODE //

    public function requestlevel0(Request $request)
    {
        return $this->level0();
    }

    public function requestlevel1(Request $request)
    {
        $flag = $request->get('flag');
        if ($flag == "fc8843ac8a5adfecbc64ae28e6a343b4") {
            session(['level1' => true]);
            return $this->level1();
        } else {
            return back()->withErrors(['err' => 'Flag incorrect!']);
        }
    }

    public function requestlevel2(Request $request)
    {
        $flag = $request->get('flag');
        if ($flag == "43d3810c065f4bf3550fac648d605fcb") {
            session(['level2' => true]);
            return $this->level2();

        } else {
            return back()->withErrors(['err' => 'Flag incorrect!']);
        }
    }

    public function requestlevel3(Request $request)
    {
        $flag = $request->get('flag');
        if ($flag == "methamphetamine") {
            session(['level3' => true]);
            return $this->level3();

        } else {
            return back()->withErrors(['err' => 'Flag incorrect!']);
        }
    }

    public function requestlevel4(Request $request)
    {
        $flag = $request->get('flag');
        if ($flag == "3b8c01e31ca528f12eabc86712b4e6f4") {
            session(['level4' => true]);
            return $this->level4();

        } else {
            return back()->withErrors(['err' => 'Flag incorrect!']);
        }
    }


}
