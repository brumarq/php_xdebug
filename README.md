# PHP_xDebug  
This template will enable you to start creating a REST API using PHP with xDebug enabled by default on IntelliJ and PhpStorm.  

IT already contains the configuration necessary to be able to run xDebug. Xdebug is a PHP extension which provides debugging and profiling capabilities. I believe this is important to have when working on a big PHP project.

# Requirements
- Docker Desktop
- IntelliJ (with the PHP plugin) or PHPStorm

# Installing

```sh
# Clone the repository, or download it using the zip functionality on GitHub.

git clone https://github.com/brumarq/php_xdebug.git

```

# Getting Started

### Open the folder using IntelliJ or PhpStorm.
1. **File** -> **Open..**
2. Choose the project folder.

### Building and Running the Docker images.
1. Make sure **Docker Desktop** is **running**.
2. Open the **terminal**, and navigate to the **project's folder**.
3. Run the following commands:

    ```sh
    docker compose build

    docker compose up

    ```
### Enable listener for debugging,
1. Enable listener for PHP Debugging

    ![alt text](https://github.com/brumarq/brumarq.github.io/blob/images/assets/php_xdebug/activate_listener.PNG?raw=true)  
    Feel free to also check ``` Break at first line in PHP scripts ``` below. This will run the debugger right at the first line of code.  
    You can also put a breakpoint in ``` index.php ```  
   
2. Make request to the API such as ``` http://localhost/user/getUsers ``` using your browser or any other tool.

4. The following window should appear: 
 
    ![alt text](https://github.com/brumarq/brumarq.github.io/blob/images/assets/php_xdebug/incoming_connection.PNG?raw=true)  
    Click on **ACCEPT**
4. The debugger should start

Hopefully this will help you with future projects!
