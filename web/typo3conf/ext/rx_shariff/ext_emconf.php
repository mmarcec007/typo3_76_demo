<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "rx_shariff".
 *
 * Auto generated | Identifier: 0552f6e804453f904946c11a4ddf71d3
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Heise Shariff',
	'description' => 'Shariff implementation for TYPO3 CMS including the backend module, a viewhelper and a plugin.',
	'category' => 'plugin',
	'version' => '10.0.0',
	'state' => 'stable',
	'uploadfolder' => false,
	'author' => 'Markus Klein',
	'author_email' => 'support@reelworx.at',
	'author_company' => 'Reelworx GmbH',
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.6.0-7.1.99',
			'typo3' => '6.2.9-8.7.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'createDirs' => NULL,
	'clearcacheonload' => false,
	'_md5_values_when_last_written' => 'a:244:{s:13:".editorconfig";s:4:"31b6";s:10:".gitignore";s:4:"c9d4";s:8:"Classes/";s:4:"d41d";s:17:"Classes/Cache.php";s:4:"e6d7";s:19:"Classes/Controller/";s:4:"d41d";s:40:"Classes/Controller/ShariffController.php";s:4:"ec9b";s:19:"Classes/Shariff.php";s:4:"aa79";s:19:"Classes/ViewHelper/";s:4:"d41d";s:40:"Classes/ViewHelper/ShariffViewHelper.php";s:4:"06ae";s:14:"Configuration/";s:4:"d41d";s:24:"Configuration/FlexForms/";s:4:"d41d";s:44:"Configuration/FlexForms/flexform_shariff.xml";s:4:"7348";s:18:"Configuration/TCA/";s:4:"d41d";s:28:"Configuration/TCA/Overrides/";s:4:"d41d";s:44:"Configuration/TCA/Overrides/sys_template.php";s:4:"5320";s:42:"Configuration/TCA/Overrides/tt_content.php";s:4:"0c0f";s:25:"Configuration/TypoScript/";s:4:"d41d";s:36:"Configuration/TypoScript/PluginOnly/";s:4:"d41d";s:44:"Configuration/TypoScript/PluginOnly/setup.ts";s:4:"14fe";s:36:"Configuration/TypoScript/WithJQuery/";s:4:"d41d";s:45:"Configuration/TypoScript/WithJQuery/setup.txt";s:4:"4f96";s:50:"Configuration/TypoScript/WithJQueryAndFontawesome/";s:4:"d41d";s:59:"Configuration/TypoScript/WithJQueryAndFontawesome/setup.txt";s:4:"4ac9";s:39:"Configuration/TypoScript/WithoutJQuery/";s:4:"d41d";s:48:"Configuration/TypoScript/WithoutJQuery/setup.txt";s:4:"e3f4";s:53:"Configuration/TypoScript/WithoutJQueryAndFontawesome/";s:4:"d41d";s:62:"Configuration/TypoScript/WithoutJQueryAndFontawesome/setup.txt";s:4:"4ea2";s:14:"Documentation/";s:4:"d41d";s:24:"Documentation/Changelog/";s:4:"d41d";s:33:"Documentation/Changelog/Index.rst";s:4:"6e38";s:27:"Documentation/Contributing/";s:4:"d41d";s:36:"Documentation/Contributing/Index.rst";s:4:"8403";s:22:"Documentation/General/";s:4:"d41d";s:31:"Documentation/General/Index.rst";s:4:"8226";s:33:"Documentation/General/shariff.jpg";s:4:"a438";s:26:"Documentation/Includes.txt";s:4:"012f";s:23:"Documentation/Index.rst";s:4:"56c1";s:27:"Documentation/Installation/";s:4:"d41d";s:36:"Documentation/Installation/Index.rst";s:4:"eac2";s:26:"Documentation/Settings.cfg";s:4:"28c8";s:26:"Documentation/Settings.yml";s:4:"e36f";s:20:"Documentation/_make/";s:4:"d41d";s:32:"Documentation/_make/Defaults.cfg";s:4:"8d87";s:28:"Documentation/_make/Makefile";s:4:"85a8";s:33:"Documentation/_make/Overrides.cfg";s:4:"4c17";s:30:"Documentation/_make/README.rst";s:4:"4b3e";s:35:"Documentation/_make/_not_versioned/";s:4:"d41d";s:45:"Documentation/_make/_not_versioned/.gitignore";s:4:"bfd9";s:26:"Documentation/_make/build/";s:4:"d41d";s:36:"Documentation/_make/build/.gitignore";s:4:"bfd9";s:36:"Documentation/_make/buildsettings.sh";s:4:"a35f";s:27:"Documentation/_make/conf.py";s:4:"1816";s:28:"Documentation/_make/serve.py";s:4:"bf89";s:7:"GPL.txt";s:4:"9eef";s:11:"LICENSE.txt";s:4:"6fba";s:9:"README.md";s:4:"3c22";s:10:"Resources/";s:4:"d41d";s:18:"Resources/Private/";s:4:"d41d";s:27:"Resources/Private/.htaccess";s:4:"588c";s:22:"Resources/Private/Eid/";s:4:"d41d";s:33:"Resources/Private/Eid/Shariff.php";s:4:"2e85";s:27:"Resources/Private/Language/";s:4:"d41d";s:46:"Resources/Private/Language/de.locallang_be.xlf";s:4:"44e1";s:43:"Resources/Private/Language/locallang_be.xlf";s:4:"d040";s:26:"Resources/Private/Shariff/";s:4:"d41d";s:30:"Resources/Private/Shariff/src/";s:4:"d41d";s:41:"Resources/Private/Shariff/src/Backend.php";s:4:"f375";s:38:"Resources/Private/Shariff/src/Backend/";s:4:"d41d";s:49:"Resources/Private/Shariff/src/Backend/AddThis.php";s:4:"9271";s:56:"Resources/Private/Shariff/src/Backend/BackendManager.php";s:4:"2998";s:50:"Resources/Private/Shariff/src/Backend/Facebook.php";s:4:"df8e";s:48:"Resources/Private/Shariff/src/Backend/Flattr.php";s:4:"7e8c";s:52:"Resources/Private/Shariff/src/Backend/GooglePlus.php";s:4:"8a72";s:50:"Resources/Private/Shariff/src/Backend/LinkedIn.php";s:4:"8de0";s:51:"Resources/Private/Shariff/src/Backend/Pinterest.php";s:4:"fa24";s:48:"Resources/Private/Shariff/src/Backend/Reddit.php";s:4:"0385";s:49:"Resources/Private/Shariff/src/Backend/Request.php";s:4:"1f68";s:56:"Resources/Private/Shariff/src/Backend/ServiceFactory.php";s:4:"4fb0";s:58:"Resources/Private/Shariff/src/Backend/ServiceInterface.php";s:4:"2002";s:53:"Resources/Private/Shariff/src/Backend/StumbleUpon.php";s:4:"e456";s:46:"Resources/Private/Shariff/src/Backend/Xing.php";s:4:"328d";s:48:"Resources/Private/Shariff/src/CacheInterface.php";s:4:"4d9d";s:33:"Resources/Private/Shariff/vendor/";s:4:"d41d";s:45:"Resources/Private/Shariff/vendor/autoload.php";s:4:"08c2";s:42:"Resources/Private/Shariff/vendor/composer/";s:4:"d41d";s:57:"Resources/Private/Shariff/vendor/composer/ClassLoader.php";s:4:"292c";s:49:"Resources/Private/Shariff/vendor/composer/LICENSE";s:4:"955d";s:63:"Resources/Private/Shariff/vendor/composer/autoload_classmap.php";s:4:"ea73";s:60:"Resources/Private/Shariff/vendor/composer/autoload_files.php";s:4:"ba81";s:65:"Resources/Private/Shariff/vendor/composer/autoload_namespaces.php";s:4:"35e1";s:59:"Resources/Private/Shariff/vendor/composer/autoload_psr4.php";s:4:"b176";s:59:"Resources/Private/Shariff/vendor/composer/autoload_real.php";s:4:"25f4";s:61:"Resources/Private/Shariff/vendor/composer/autoload_static.php";s:4:"441f";s:56:"Resources/Private/Shariff/vendor/composer/installed.json";s:4:"db54";s:44:"Resources/Private/Shariff/vendor/guzzlehttp/";s:4:"d41d";s:51:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/";s:4:"d41d";s:62:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/.travis.yml";s:4:"53bd";s:63:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/CHANGELOG.md";s:4:"14d6";s:58:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/LICENSE";s:4:"5114";s:60:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/README.md";s:4:"6e23";s:63:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/UPGRADING.md";s:4:"ead9";s:64:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/composer.json";s:4:"75f5";s:55:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/";s:4:"d41d";s:65:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Client.php";s:4:"4f11";s:74:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/ClientInterface.php";s:4:"59a3";s:62:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Cookie/";s:4:"d41d";s:75:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Cookie/CookieJar.php";s:4:"8af3";s:84:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php";s:4:"0cd2";s:79:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php";s:4:"ecdc";s:82:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php";s:4:"3ecf";s:75:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Cookie/SetCookie.php";s:4:"683c";s:65:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Exception/";s:4:"d41d";s:89:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Exception/BadResponseException.php";s:4:"5d50";s:84:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Exception/ClientException.php";s:4:"d1c7";s:85:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Exception/ConnectException.php";s:4:"4c3a";s:84:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Exception/GuzzleException.php";s:4:"be57";s:85:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php";s:4:"96e3";s:82:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Exception/SeekException.php";s:4:"d332";s:84:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Exception/ServerException.php";s:4:"36ec";s:94:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php";s:4:"9952";s:86:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Exception/TransferException.php";s:4:"6792";s:63:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Handler/";s:4:"d41d";s:78:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php";s:4:"7451";s:87:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php";s:4:"b4db";s:78:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Handler/CurlHandler.php";s:4:"18c8";s:83:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php";s:4:"dc20";s:77:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Handler/EasyHandle.php";s:4:"02ee";s:78:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Handler/MockHandler.php";s:4:"1e98";s:72:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php";s:4:"0ead";s:80:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Handler/StreamHandler.php";s:4:"4db3";s:71:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/HandlerStack.php";s:4:"ccd0";s:75:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/MessageFormatter.php";s:4:"ddc3";s:69:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Middleware.php";s:4:"d410";s:63:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/Pool.php";s:4:"0526";s:80:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php";s:4:"fee2";s:77:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/RedirectMiddleware.php";s:4:"8970";s:73:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/RequestOptions.php";s:4:"b448";s:74:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/RetryMiddleware.php";s:4:"2267";s:72:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/TransferStats.php";s:4:"f94b";s:70:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/UriTemplate.php";s:4:"8e71";s:68:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/functions.php";s:4:"0f28";s:76:"Resources/Private/Shariff/vendor/guzzlehttp/guzzle/src/functions_include.php";s:4:"5f6e";s:53:"Resources/Private/Shariff/vendor/guzzlehttp/promises/";s:4:"d41d";s:65:"Resources/Private/Shariff/vendor/guzzlehttp/promises/CHANGELOG.md";s:4:"17cf";s:60:"Resources/Private/Shariff/vendor/guzzlehttp/promises/LICENSE";s:4:"ea21";s:61:"Resources/Private/Shariff/vendor/guzzlehttp/promises/Makefile";s:4:"1232";s:62:"Resources/Private/Shariff/vendor/guzzlehttp/promises/README.md";s:4:"1eaa";s:66:"Resources/Private/Shariff/vendor/guzzlehttp/promises/composer.json";s:4:"5ba9";s:57:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/";s:4:"d41d";s:79:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/AggregateException.php";s:4:"babe";s:82:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/CancellationException.php";s:4:"a9a2";s:70:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/Coroutine.php";s:4:"e851";s:72:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/EachPromise.php";s:4:"df67";s:77:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/FulfilledPromise.php";s:4:"d600";s:68:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/Promise.php";s:4:"c04d";s:77:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/PromiseInterface.php";s:4:"d89b";s:78:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/PromisorInterface.php";s:4:"a9d3";s:76:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/RejectedPromise.php";s:4:"0dec";s:79:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/RejectionException.php";s:4:"dcf7";s:70:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/TaskQueue.php";s:4:"f689";s:79:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/TaskQueueInterface.php";s:4:"93f2";s:70:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/functions.php";s:4:"2ff3";s:78:"Resources/Private/Shariff/vendor/guzzlehttp/promises/src/functions_include.php";s:4:"f5cb";s:49:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/";s:4:"d41d";s:59:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/.gitignore";s:4:"98d0";s:60:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/.travis.yml";s:4:"8c36";s:61:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/CHANGELOG.md";s:4:"f601";s:56:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/LICENSE";s:4:"582d";s:57:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/Makefile";s:4:"0281";s:58:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/README.md";s:4:"0b16";s:62:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/composer.json";s:4:"1584";s:65:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/phpunit.xml.dist";s:4:"b9ae";s:53:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/";s:4:"d41d";s:69:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/AppendStream.php";s:4:"c3a6";s:69:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/BufferStream.php";s:4:"ca89";s:70:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/CachingStream.php";s:4:"9044";s:71:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/DroppingStream.php";s:4:"adac";s:65:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/FnStream.php";s:4:"8c73";s:70:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/InflateStream.php";s:4:"3b09";s:71:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/LazyOpenStream.php";s:4:"2648";s:68:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/LimitStream.php";s:4:"9574";s:69:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/MessageTrait.php";s:4:"a6b8";s:72:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/MultipartStream.php";s:4:"a62b";s:69:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/NoSeekStream.php";s:4:"a071";s:67:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/PumpStream.php";s:4:"55ac";s:64:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/Request.php";s:4:"607d";s:65:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/Response.php";s:4:"e0eb";s:70:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/ServerRequest.php";s:4:"3b3a";s:63:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/Stream.php";s:4:"c5bf";s:77:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/StreamDecoratorTrait.php";s:4:"d4b4";s:70:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/StreamWrapper.php";s:4:"cf8a";s:69:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/UploadedFile.php";s:4:"a36b";s:60:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/Uri.php";s:4:"01c9";s:66:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/functions.php";s:4:"7eb2";s:74:"Resources/Private/Shariff/vendor/guzzlehttp/psr7/src/functions_include.php";s:4:"8471";s:37:"Resources/Private/Shariff/vendor/psr/";s:4:"d41d";s:50:"Resources/Private/Shariff/vendor/psr/http-message/";s:4:"d41d";s:62:"Resources/Private/Shariff/vendor/psr/http-message/CHANGELOG.md";s:4:"c5bb";s:57:"Resources/Private/Shariff/vendor/psr/http-message/LICENSE";s:4:"1b0b";s:59:"Resources/Private/Shariff/vendor/psr/http-message/README.md";s:4:"515a";s:63:"Resources/Private/Shariff/vendor/psr/http-message/composer.json";s:4:"1cbe";s:54:"Resources/Private/Shariff/vendor/psr/http-message/src/";s:4:"d41d";s:74:"Resources/Private/Shariff/vendor/psr/http-message/src/MessageInterface.php";s:4:"5b86";s:74:"Resources/Private/Shariff/vendor/psr/http-message/src/RequestInterface.php";s:4:"9f96";s:75:"Resources/Private/Shariff/vendor/psr/http-message/src/ResponseInterface.php";s:4:"3a90";s:80:"Resources/Private/Shariff/vendor/psr/http-message/src/ServerRequestInterface.php";s:4:"8694";s:73:"Resources/Private/Shariff/vendor/psr/http-message/src/StreamInterface.php";s:4:"dde8";s:79:"Resources/Private/Shariff/vendor/psr/http-message/src/UploadedFileInterface.php";s:4:"bf30";s:70:"Resources/Private/Shariff/vendor/psr/http-message/src/UriInterface.php";s:4:"77f0";s:41:"Resources/Private/Shariff/vendor/psr/log/";s:4:"d41d";s:51:"Resources/Private/Shariff/vendor/psr/log/.gitignore";s:4:"e8a3";s:48:"Resources/Private/Shariff/vendor/psr/log/LICENSE";s:4:"1a74";s:45:"Resources/Private/Shariff/vendor/psr/log/Psr/";s:4:"d41d";s:49:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/";s:4:"d41d";s:67:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/AbstractLogger.php";s:4:"26eb";s:77:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/InvalidArgumentException.php";s:4:"7d2f";s:61:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/LogLevel.php";s:4:"cc22";s:73:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/LoggerAwareInterface.php";s:4:"cfac";s:69:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/LoggerAwareTrait.php";s:4:"221f";s:68:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/LoggerInterface.php";s:4:"1ae0";s:64:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/LoggerTrait.php";s:4:"d115";s:63:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/NullLogger.php";s:4:"d66f";s:54:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/Test/";s:4:"d41d";s:77:"Resources/Private/Shariff/vendor/psr/log/Psr/Log/Test/LoggerInterfaceTest.php";s:4:"660a";s:50:"Resources/Private/Shariff/vendor/psr/log/README.md";s:4:"144a";s:54:"Resources/Private/Shariff/vendor/psr/log/composer.json";s:4:"6e87";s:28:"Resources/Private/Templates/";s:4:"d41d";s:36:"Resources/Private/Templates/Shariff/";s:4:"d41d";s:46:"Resources/Private/Templates/Shariff/Index.html";s:4:"47c2";s:17:"Resources/Public/";s:4:"d41d";s:21:"Resources/Public/Css/";s:4:"d41d";s:41:"Resources/Public/Css/shariff.complete.css";s:4:"035d";s:36:"Resources/Public/Css/shariff.min.css";s:4:"80ac";s:23:"Resources/Public/Icons/";s:4:"d41d";s:33:"Resources/Public/Icons/plugin.png";s:4:"839e";s:28:"Resources/Public/JavaScript/";s:4:"d41d";s:47:"Resources/Public/JavaScript/shariff.complete.js";s:4:"750b";s:42:"Resources/Public/JavaScript/shariff.min.js";s:4:"c54e";s:13:"composer.json";s:4:"19dc";s:26:"dynamicReturnTypeMeta.json";s:4:"d8af";s:21:"ext_conf_template.txt";s:4:"28ea";s:12:"ext_icon.png";s:4:"fe33";s:17:"ext_localconf.php";s:4:"951a";s:24:"ext_typoscript_setup.txt";s:4:"8f83";}',
);

?>