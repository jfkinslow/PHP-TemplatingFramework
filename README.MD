# PHP Templating Framework #
---
## Created by: [Joshua Kinslow(@jfkinslow)](https://github.com/jfkinslow) ##
---
### Installation Instructions ###
To install this framework simply enter the directory in which you are serving php files from and enter:

	git clone https://github.com/jfkinslow/PHP-TemplatingFramework
---
### Adding a new page ###
To add a new page to the framework to route to simply create a new php file in which to place your html under the directory system/views/ code and then
add to the root index.php file: 
	
	else if ($page === "enter-page-here"){
		require_once("./system/views/enter-page-here.php");
	}
where "enter-page-here" is whatever you want to be appended after the index.php?page=