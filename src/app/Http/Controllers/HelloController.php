<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  public function index(Request $request, Response $response) 
  {
    $html = <<<EOF
    <!DOCTYPE html>
    <html lang="ja">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
    <p>$request</p>
    <p>$response</p>
    </body>
    </html>
    EOF;
    $response->setContent($html);
    echo $request->fullUrl();
    // クエリ情報含む
    echo $request->url();
    echo $request->path();
    return $response;
  }
}