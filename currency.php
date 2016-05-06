<?php


	// Copyright (c) 2016 kmraen. All rights reserved.





	header('Content-Type: text/html; charset=utf-8');

	include("simple_html_dom.php");

	$html = file_get_html('http://community.fxkeb.com/fxportal/jsp/RS/DEPLOY_EXRATE/fxrate_all.html');


	$data_cnt = 0;

	

	$json = array();


	/* 살때 팔때 등 옵션 */
	// foreach ($html->find('.table_02') as $row => $value) {
	// 	$options[] = $value->plaintext;

	// 	$json['options'] = [$options];
	// 	// echo $options;
	// }


	/* 국가별 통화(currency) */
	// foreach ($html->find('.table_05') as $row => $value) {

	// 	// echo $value;
	// 	$currency[] = str_replace('&nbsp;', '', $value->plaintext);		
	// 	$json['currency'] = [$currency];		
		
	// }



	/* 환율데이터부분 */
	foreach ($html->find('.table_04') as $row){

		$data[] = $row->plaintext;	// save data info into the '$data' array.
		// echo $data_cnt/7;
		switch($data_cnt%7){

			case 0:
				if( floor($data_cnt/7) == 0){
					$json['USD']['buy_cash'][] = $data[$data_cnt];					
				}
				else if( floor($data_cnt/7) == 1){
					$json['JPY']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 2 ){
					$json['EUR']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 3 ){
					$json['CNY']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 4 ){
					$json['GBP']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 5 ){
					$json['CHF']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 6 ){
					$json['CAD']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 7 ){
					$json['AUD']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 8 ){
					$json['NZD']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 9 ){
					$json['HKD']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 10 ){
					$json['SEK']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 11 ){
					$json['DKK']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 12 ){
					$json['NOK']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 13 ){
					$json['SAR']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 14 ){
					$json['KWD']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 15 ){
					$json['BHD']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 16 ){
					$json['AED']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 17 ){
					$json['THB']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 18 ){
					$json['SGD']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 19 ){
					$json['IDR']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 20 ){
					$json['INR']['buy_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 21 ){
					$json['MYR']['buy_cash'][] = $data[$data_cnt];
				}
			break;
			//end of buy_cash
				

			case 1:
				if( (floor($data_cnt/7)) == 0){
					$json['USD']['sell_cash'][] = $data[$data_cnt];					
				}
				else if( floor($data_cnt/7) == 1){
					$json['JPY']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 2 ){
					$json['EUR']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 3 ){
					$json['CNY']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 4 ){
					$json['GBP']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 5 ){
					$json['CHF']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 6 ){
					$json['CAD']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 7 ){
					$json['AUD']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 8 ){
					$json['NZD']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 9 ){
					$json['HKD']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 10 ){
					$json['SEK']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 11 ){
					$json['DKK']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 12 ){
					$json['NOK']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 13 ){
					$json['SAR']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 14 ){
					$json['KWD']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 15 ){
					$json['BHD']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 16 ){
					$json['AED']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 17 ){
					$json['THB']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 18 ){
					$json['SGD']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 19 ){
					$json['IDR']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 20 ){
					$json['INR']['sell_cash'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 21 ){
					$json['MYR']['sell_cash'][] = $data[$data_cnt];
				}			
			break;
				//end of sell_cash


			case 2:

				if( (floor($data_cnt/7)) == 0){
					$json['USD']['send'][] = $data[$data_cnt];					
				}
				else if( floor($data_cnt/7) == 1){
					$json['JPY']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 2 ){
					$json['EUR']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 3 ){
					$json['CNY']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 4 ){
					$json['GBP']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 5 ){
					$json['CHF']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 6 ){
					$json['CAD']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 7 ){
					$json['AUD']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 8 ){
					$json['NZD']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 9 ){
					$json['HKD']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 10 ){
					$json['SEK']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 11 ){
					$json['DKK']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 12 ){
					$json['NOK']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 13 ){
					$json['SAR']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 14 ){
					$json['KWD']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 15 ){
					$json['BHD']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 16 ){
					$json['AED']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 17 ){
					$json['THB']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 18 ){
					$json['SGD']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 19 ){
					$json['IDR']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 20 ){
					$json['INR']['send'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 21 ){
					$json['MYR']['send'][] = $data[$data_cnt];
				}				
				break;
				//end of send


			case 3:
				if( (floor($data_cnt/7)) == 0){
					$json['USD']['receive'][] = $data[$data_cnt];					
				}
				else if( floor($data_cnt/7) == 1){
					$json['JPY']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 2 ){
					$json['EUR']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 3 ){
					$json['CNY']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 4 ){
					$json['GBP']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 5 ){
					$json['CHF']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 6 ){
					$json['CAD']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 7 ){
					$json['AUD']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 8 ){
					$json['NZD']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 9 ){
					$json['HKD']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 10 ){
					$json['SEK']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 11 ){
					$json['DKK']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 12 ){
					$json['NOK']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 13 ){
					$json['SAR']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 14 ){
					$json['KWD']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 15 ){
					$json['BHD']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 16 ){
					$json['AED']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 17 ){
					$json['THB']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 18 ){
					$json['SGD']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 19 ){
					$json['IDR']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 20 ){
					$json['INR']['receive'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 21 ){
					$json['MYR']['receive'][] = $data[$data_cnt];
				}
				break;
				//end of receive

			case 4:
				if( (floor($data_cnt/7)) == 0){
					$json['USD']['sell_check'][] = $data[$data_cnt];					
				}
				else if( floor($data_cnt/7) == 1){
					$json['JPY']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 2 ){
					$json['EUR']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 3 ){
					$json['CNY']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 4 ){
					$json['GBP']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 5 ){
					$json['CHF']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 6 ){
					$json['CAD']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 7 ){
					$json['AUD']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 8 ){
					$json['NZD']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 9 ){
					$json['HKD']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 10 ){
					$json['SEK']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 11 ){
					$json['DKK']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 12 ){
					$json['NOK']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 13 ){
					$json['SAR']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 14 ){
					$json['KWD']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 15 ){
					$json['BHD']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 16 ){
					$json['AED']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 17 ){
					$json['THB']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 18 ){
					$json['SGD']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 19 ){
					$json['IDR']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 20 ){
					$json['INR']['sell_check'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 21 ){
					$json['MYR']['sell_check'][] = $data[$data_cnt];
				}				
				break;
				//end of sell_check

			case 5:
				if( (floor($data_cnt/7)) == 0){
					$json['USD']['trade_rate'][] = $data[$data_cnt];					
				}
				else if( floor($data_cnt/7) == 1){
					$json['JPY']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 2 ){
					$json['EUR']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 3 ){
					$json['CNY']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 4 ){
					$json['GBP']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 5 ){
					$json['CHF']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 6 ){
					$json['CAD']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 7 ){
					$json['AUD']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 8 ){
					$json['NZD']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 9 ){
					$json['HKD']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 10 ){
					$json['SEK']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 11 ){
					$json['DKK']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 12 ){
					$json['NOK']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 13 ){
					$json['SAR']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 14 ){
					$json['KWD']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 15 ){
					$json['BHD']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 16 ){
					$json['AED']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 17 ){
					$json['THB']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 18 ){
					$json['SGD']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 19 ){
					$json['IDR']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 20 ){
					$json['INR']['trade_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 21 ){
					$json['MYR']['trade_rate'][] = $data[$data_cnt];
				}
				break;
				//end of trade_rate

			case 6:
				if( (floor($data_cnt/7)) == 0){
					$json['USD']['convert_USD_rate'][] = $data[$data_cnt];					
				}
				else if( floor($data_cnt/7) == 1){
					$json['JPY']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 2 ){
					$json['EUR']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 3 ){
					$json['CNY']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 4 ){
					$json['GBP']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 5 ){
					$json['CHF']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 6 ){
					$json['CAD']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 7 ){
					$json['AUD']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 8 ){
					$json['NZD']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 9 ){
					$json['HKD']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 10 ){
					$json['SEK']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 11 ){
					$json['DKK']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 12 ){
					$json['NOK']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 13 ){
					$json['SAR']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 14 ){
					$json['KWD']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 15 ){
					$json['BHD']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 16 ){
					$json['AED']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 17 ){
					$json['THB']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 18 ){
					$json['SGD']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 19 ){
					$json['IDR']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 20 ){
					$json['INR']['convert_USD_rate'][] = $data[$data_cnt];
				}
				else if( floor($data_cnt/7) == 21 ){
					$json['MYR']['convert_USD_rate'][] = $data[$data_cnt];
				}
				break;
				//end of convert_USD_rate

			default:
				break;
		}

		$data_cnt++;
		
	}

/*
	USD(미국)
	JPY(100)(일본)
	EUR(유럽연합)
	CNY(중국)
	GBP(영국)
	CHF(스위스)
	CAD(캐나다)
	AUD(호주)
	NZD(뉴질랜드)
	HKD(홍콩)
	SEK(스웨덴)
	DKK(덴마크)
	NOK(노르웨이)
	SAR(사우디)
	KWD(쿠웨이트)
	BHD(바레인)
	AED(아랍연방)
	THB(태국)
	SGD(싱카포르)
	IDR(100)(인도네시아)
	INR(인도)
	MYR(말레이지아)
*/	



	echo json_encode($json);

	
	$html->clear(); 
	unset($html);


?>