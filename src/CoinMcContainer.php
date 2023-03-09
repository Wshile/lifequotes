
<?php

namespace Andskur\CoinMc;

use GuzzleHttp\Client;

/**
* Laravel container for CoinMarketCap API
*/
class CoinMcContainer
{
	/**
	 * @var  string
	 */
	const API_URL = 'https://api.coinmarketcap.com/v1/';

	/**
	 * Make GET Api call to coinmarketcap.com
	 * @param  string $endpoint Endpoint of Api request
	 * @param  array  $params   Array of Get http parameters
	 * @return json           	Return Json object
	 */
	private function makeRequest ($endpoint, $params = array())
	{
		$client = new Client();

		$url = self::API_URL . $endpoint;

		if ($params) {
			$query = '?' . http_build_query($params);
			$url .= $query;
		}

		$request = $client->request('GET', $url);
		$response = $request->getBody();
		$json = json_decode($response->getContents());
		return $json;
	}

	/**
	 * Get CoinMarketCap tickers sorting by 24h volume
	 * @param  string $limit    	Only returns the top limit results
	 * @param  string $currency 	Currency for convert (default - USD)