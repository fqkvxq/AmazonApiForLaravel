<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AmazonProduct;

class AmazonSearchApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			// 「デグー」のKWで検索=>JSON
			$ResponseJson = AmazonProduct::search('All','デグー',1);
			return $ResponseJson;
			// // 取得したjsonを文字列に変換
			// $JsonToString = file_get_contents($responseJson);
			// // UTF-8に変換
			// $EncodedJsonToString = mb_convert_encoding($JsonToString, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
			// // 連想配列に変換
			// $ArrayEncodedJsonToString = json_decode($EncodedJsonToString, true);
			// // Debug
			// var_dump($ArrayEncodedJsonToString);
	 		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
