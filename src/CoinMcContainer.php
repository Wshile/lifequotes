
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