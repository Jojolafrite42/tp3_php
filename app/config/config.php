<?php
return array(
		"siteUrl"=>"http://127.0.0.1/tp3_jp/",
		"database"=>[
				"type"=>"mysql",
				"dbName"=>"",
				"serverName"=>"127.0.0.1",
				"port"=>"3306",
				"user"=>"root",
				"password"=>"",
				"options"=>[],
				"cache"=>false
		],
		"sessionName"=>"tp3_jp",
		"namespaces"=>[],
		"templateEngine"=>'Ubiquity\\views\\engine\\Twig',
		"templateEngineOptions"=>array("cache"=>false),
		"test"=>false,
		"debug"=>false,
		"di"=>["jquery"=>function($controller){
							$jquery=new \Ajax\php\ubiquity\JsUtils(["defer"=>true],$controller);
							$jquery->semantic(new \Ajax\Semantic());
							return $jquery;
						}],
		"cache"=>["directory"=>"cache/","system"=>"Ubiquity\\cache\\system\\ArrayCache","params"=>[]],
		"mvcNS"=>["models"=>"models","controllers"=>"controllers","rest"=>""],
		"isRest"=>function(){
			return \Ubiquity\utils\http\URequest::getUrlParts()[0]==="rest";
		}
);
