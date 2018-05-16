<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;

class DogService{
	//Endpoint to receive a random dog image
	const RANDOM_ENDPOINT = 'https://dog.ceo/api/breeds/image/random';
	const RANDOM_NUM_ENDPOINT ='https://dog.ceo/api/breeds/image/random/20';
	const BREED_LIST_ENDPOINT = 'https://dog.ceo/api/breeds/list';
	/**
     * Guzzle client.
     *
     * @var GuzzleHttp\Client
    */
	protected $client;

	public function __construct()
	{
		$this->client = new Client;
	}

	public function random(){
		try{
			$response = json_decode(
				$this->client->get(self::RANDOM_ENDPOINT)->getBody()
			);

			//return the image url
			return $response->message;
		}catch(Exception $e){
			//Error message for the user if anything goes wrong
			return 'An unexpected error occurred.Please try again later';
		}
	}

	public function randomIndex(){
		try{
			$response = json_decode(
				$this->client->get(self::BREED_LIST_ENDPOINT)->getBody()
			);

			//return the image url
			return $response->message;
		}catch(Exception $e){
			//Error message for the user if anything goes wrong
			return 'An unexpected error occurred.Please try again later';
		}
	}

	public function breedList(){
		try{
			$response = json_decode(
				$this->client->get(self::BREED_LIST_ENDPOINT)->getBody()
			);

			//return the image url
			return $response->message;
		}catch(Exception $e){
			//Error message for the user if anything goes wrong
			return 'An unexpected error occurred.Please try again later';
		}
	}

}