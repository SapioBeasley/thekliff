<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
	public function index(Request $request = null)
	{
		// $products = $request->session()->get('orderDetails')['products'];
		$orderAmount = $request->session()->get('orderDetails')['orderAmount'];

		$countries = $this->getCountries();
		$states = $this->getStates();

		return view('shop.checkout')->with([
			'orderAmount' => $orderAmount,
			'countries' => $countries,
			'states' => $states
		]);
	}

	public function purchaseOrder(Request $request)
	{
		dd($request->all());
	}

	public function getStates() {
		$states = [
			'Alabama',
			'Alaska',
			'Arizona',
			'Arkansas',
			'California',
			'Colorado',
			'Connecticut',
			'Delaware',
			'Florida',
			'Georgia',
			'Hawaii',
			'Idaho',
			'Illinois Indiana',
			'Iowa',
			'Kansas',
			'Kentucky',
			'Louisiana',
			'Maine',
			'Maryland',
			'Massachusetts',
			'Michigan',
			'Minnesota',
			'Mississippi',
			'Missouri',
			'Montana Nebraska',
			'Nevada',
			'New Hampshire',
			'New Jersey',
			'New Mexico',
			'New York',
			'North Carolina',
			'North Dakota',
			'Ohio',
			'Oklahoma',
			'Oregon',
			'Pennsylvania Rhode Island',
			'South Carolina',
			'South Dakota',
			'Tennessee',
			'Texas',
			'Utah',
			'Vermont',
			'Virginia',
			'Washington',
			'West Virginia',
			'Wisconsin',
			'Wyoming',
		];

		return $states;
	}

	public function getCountries() {
		$countries = [
			'United States',
			'Afghanistan',
			'Albania',
			'Algeria',
			'Andorra',
			'Angola',
			'Antigua and Barbuda',
			'Argentina',
			'Armenia',
			'Aruba',
			'Australia',
			'Austria',
			'Azerbaijan',
		// Bahamas, The
		// Bahrain
		// Bangladesh
		// Barbados
		// Belarus
		// Belgium
		// Belize
		// Benin
		// Bhutan
		// Bolivia
		// Bosnia and Herzegovina
		// Botswana
		// Brazil
		// Brunei
		// Bulgaria
		// Burkina Faso
		// Burma
		// Burundi
		// Cambodia
		// Cameroon
		// Canada
		// Cape Verde
		// Central African Republic
		// Chad
		// Chile
		// China
		// Colombia
		// Comoros
		// Congo, Democratic Republic of the
		// Congo, Republic of the
		// Costa Rica
		// Cote d'Ivoire
		// Croatia
		// Cuba
		// Curacao
		// Cyprus
		// Czech Republic

		// Top of Page



		// D

		// Denmark
		// Djibouti
		// Dominica
		// Dominican Republic

		// Top of Page



		// E

		// East Timor (see Timor-Leste)
		// Ecuador
		// Egypt
		// El Salvador
		// Equatorial Guinea
		// Eritrea
		// Estonia
		// Ethiopia

		// Fiji
		// Finland
		// France

		// Gabon
		// Gambia, The
		// Georgia
		// Germany
		// Ghana
		// Greece
		// Grenada
		// Guatemala
		// Guinea
		// Guinea-Bissau
		// Guyana

		// Haiti
		// Holy See
		// Honduras
		// Hong Kong
		// Hungary

		// Top of Page

		// I

		// Iceland
		// India
		// Indonesia
		// Iran
		// Iraq
		// Ireland
		// Israel
		// Italy

		// Top of Page

		// J

		// Jamaica
		// Japan
		// Jordan

		// Top of Page

		// K

		// Kazakhstan
		// Kenya
		// Kiribati
		// Korea, North
		// Korea, South
		// Kosovo
		// Kuwait
		// Kyrgyzstan

		// Top of Page

		// L

		// Laos
		// Latvia
		// Lebanon
		// Lesotho
		// Liberia
		// Libya
		// Liechtenstein
		// Lithuania
		// Luxembourg

		// Top of Page

		// M



		// Macau
		// Macedonia
		// Madagascar
		// Malawi
		// Malaysia
		// Maldives
		// Mali
		// Malta
		// Marshall Islands
		// Mauritania
		// Mauritius
		// Mexico
		// Micronesia
		// Moldova
		// Monaco
		// Mongolia
		// Montenegro
		// Morocco
		// Mozambique

		// Top of Page

		// N
		// Namibia
		// Nauru
		// Nepal
		// Netherlands
		// Netherlands Antilles
		// New Zealand
		// Nicaragua
		// Niger
		// Nigeria
		// North Korea
		// Norway
		// Oman

		// Pakistan
		// Palau
		// Palestinian Territories
		// Panama
		// Papua New Guinea
		// Paraguay
		// Peru
		// Philippines
		// Poland
		// Portugal
		// Qatar



		// Top of Page

		// R
		// Romania
		// Russia
		// Rwanda

		// Top of Page

		// S
		// Saint Kitts and Nevis
		// Saint Lucia
		// Saint Vincent and the Grenadines
		// Samoa
		// San Marino
		// Sao Tome and Principe
		// Saudi Arabia
		// Senegal
		// Serbia
		// Seychelles
		// Sierra Leone
		// Singapore
		// Sint Maarten
		// Slovakia
		// Slovenia
		// Solomon Islands
		// Somalia
		// South Africa
		// South Korea
		// South Sudan
		// Spain
		// Sri Lanka
		// Sudan
		// Suriname
		// Swaziland
		// Sweden
		// Switzerland
		// Syria


		// Taiwan
		// Tajikistan
		// Tanzania
		// Thailand
		// Timor-Leste
		// Togo
		// Tonga
		// Trinidad and Tobago
		// Tunisia
		// Turkey
		// Turkmenistan
		// Tuvalu
		// Uganda
		// Ukraine
		// United Arab Emirates
		// United Kingdom
		// Uruguay
		// Uzbekistan
		// Vanuatu
		// Venezuela
		// Vietnam

		// Top of Page

		// Y
		// Yemen

		// Top of Page

		// Z
		// Zambia
		// Zimbabwe
		];

		return $countries;
	}
}
