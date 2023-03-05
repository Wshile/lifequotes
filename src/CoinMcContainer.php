
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