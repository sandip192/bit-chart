<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
public function ajax_get_chart(Request $request){


	$data = array("start" => $request->start_date, "end" => $request->end_date, "index" => "[USD]");
	$body = json_encode($data);

	$url = "https://api.coindesk.com/v1/bpi/historical/close.json?start=".$request->start_date."&end=".$request->end_date."&index=[USD]";

	$headers = array(
	    'Accept: application/json',
	    'Content-Type: application/json',

	    );
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    	curl_setopt($ch, CURLOPT_TIMEOUT, 30);

	  	$result = curl_exec($ch);
	  	curl_close($ch);

		echo $result;
		exit;


}
}
