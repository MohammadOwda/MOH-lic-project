<?php

if (!function_exists('dateFormatDataBase')) {
    function dateFormatDataBase($var)
    {
        if ($var != null && $var != '') {
            $date = str_replace('/', '-', $var);
            return date('Y-m-d', strtotime($date));
        }
    }
}

if (!function_exists('dateFormatDataBase_')) {
    function dateFormatDataBase_($var)
    {
        $arr = explode('/', $var);
        $date_str = $arr[2] . '-' . $arr[1] . '-' . $arr[0];
        return date('Y-m-d', strtotime($date_str));
    }
}

if (!function_exists('dateFormatSite')) {
    function dateFormatSite($var)
    {
        if ($var != null) {
            $date = str_replace('/', '-', $var);
            return date('d/m/Y', strtotime($date));
        }

    }
}

if (!function_exists('carbonDateFormatSite')) {
    function carbonDateFormatSite($var)
    {
        $carbon = Carbon\Carbon::createFromFormat('d-M-y', $var)
            ->toDateString();
        return dateFormatSite($carbon);
    }
}

if (!function_exists('checkScreenPrivs')) {
    function checkScreenPrivs($screen_code)
    {

        $status = false;
        if (isset(session('PRIVS')['menu'][0]['screen'])) {

            foreach (session('PRIVS')['menu'][0]['screen'] as $screen) {
                if ($screen['SCREEN_CODE'] == $screen_code) {
                    $status = true;
                    break;
                }
            }
        }
        return $status;
    }
}
if (!function_exists('checkBtnPrivs')) {
    function checkBtnPrivs($screen_code,$btn_code)
    {

        $status = false;
        if (isset(session('PRIVS')['menu'][0]['screen'])) {

            foreach (session('PRIVS')['menu'][0]['screen'] as $screen) {
                foreach($screen['button'] as $btn )
                if ($btn['BUTTON_CODE'] == $btn_code) {
                    $status = true;
                    break;
                }
            }
        }
        return $status;
    }
}

if (!function_exists('colorRandom')) {
  function colorRandom()
  {
    $arrX = array("success", "danger","warning", "info", "dark", "primary");
// get random index from array $arrX
    $randIndex = array_rand($arrX);
// output the value for the random index
    $color__ =   $arrX[$randIndex];
    return $color__;
  }
}




