# PHP Utilities
## Utilities: Simple classes to make your life easier

# Features 
- CPF validation
- RG validation
- CNPJ validation
- Tools for using some JavaScript events directly in PHP
- Class to speed up the display of dates
- Class to decrease the code when connecting to the SQL database through the PDO

# Classes

### Validate
~~~php
	$valid = new Validate;

	// CPF Validation
	$valid->valid_cpf('123.456.789-02'); // Return false

	//CNPJ validation
	$valid->valid_cnpj('18.855.844/0001-80'); // Return true

	// RG validation
	$valid->valid_rg('21.854.930-1'); // Return true
	
	// CPF validation with static method
	Validate::valid_cpf('123.456.789-09'); // Return false

~~~

### Tools
~~~php
	$tool = new Tools;
	$tool->alert('Lorem ipsum'); // Create a javascript alert with the string
	
	$tool->redirect('https://github.com'); // Redirects the user to the address contained in the string

	$tool->open('https://github.com'); // Opens a new window at the indicated address
	
	// You can use the methods of the Tools class without instantiating the class
	Tools::alert("Hello World!");
~~~

### Data
~~~php
	$data = new Data(); // If no parameters are passed to the constructor, the default time zone will be 'America / Sao_Paulo'. Pass the desired PHP-compatible time zone into the builder
	echo $data->show('d/m/Y'); // Returns the current date 20/01/2021
	
	echo Data::show('d/m/Y'); // If it is not necessary to change the default time zone, you can call the show method as static
~~~

### Connect 
~~~php
	$con = new Connect('host','database','root',''); // Pass the host, database, user and password, respectively, as a constructor parameter
	$sql = $con->pdo->prepare("SELECT * FROM table");
	$sql->execute();
~~~
