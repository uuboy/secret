<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function encryptCreate()
    {
        return view('pages.encrypt_create');
    }

    public function decryptCreate()
    {
        return view('pages.decrypt_create');
    }


    // function imgBase64Encode($img = '', $imgHtmlCode = true)
    // {
    //     //如果是本地文件
    //     if(strpos($img,'http') === false && !file_exists($img)){
    //         return $img;
    //     }
    //     //获取文件内容
    //     $file_content = file_get_contents($img);
    //     if($file_content === false){
    //         return $img;
    //     }
    //     $imageInfo = getimagesize($img);
    //     $prefiex = '';
    //     if($imgHtmlCode){
    //         $prefiex = 'data:' . $imageInfo['mime'] . ';base64,';
    //     }
    //     $base64 = $prefiex.chunk_split(base64_encode($file_content));
    //     return $base64;
    // }

    function wordEncode(Request $request)
    {
        $text= encrypt($request->text);
        return view('pages.encrypt', compact('text'));
    }

    function wordDecode(Request $request)
    {
        try {
            $text = decrypt($request->text);
        } catch (DecryptException $e) {
            $text = '这是一个错误的密文';
        }
        return view('pages.decrypt', compact('text'));
    }


}
