## Laravel Short Link Generator

### Installation

#### To deploy the application, you'll need to have Composer and Laravel installed. Below are the steps to set up the environment:
   1. Install Composer if you haven't already. You can download it from [getcomposer.org](https://getcomposer.org/).
   2. Install Laravel 8: Use the following command to install Laravel 8:
        ```bash
        composer global require laravel/installer 
   3. Clone the Repository: Clone the repository to your local machine using the following command:
        ```bash
      git clone https://github.com/Scream123/PHP-Link-Shortener.git
   4. Navigate to Project Directory: Move into the project directory:
        ```bash
        cd PHP-Link-Shortener
   5. Install Dependencies: Run Composer to install project dependencies:
        ```bash
        composer install
   6. Start Local Server: Start your local server.
   7. Database Setup: Configure your database settings in the .env file. Example:
        ```bash
         DB_CONNECTION=mysql
         DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=link_shortener
         DB_USERNAME=root
         DB_PASSWORD=
   8. Run Migrations: Execute the following command to create the necessary database tables:
        ```bash
         php artisan migrate
#### Now your application should be set up and ready to use!

### Usage

1. Send a POST request to the following endpoint to generate a short link:
   1) Endpoint: http://your_local_domain/api/generate-short-link
   2) Request Body:
    ```bash
      [
      {
      "key": "url",
      "value": "https://hotline4.ua/ua/computer/"
      }
      ]

2. If the URL provided is valid, you will receive a response containing a shortened URL. For example:
    ```bash
    {
    "shortened_url": "http://from-eduki-tz/IxIDJJ"
    }

3. Copy the shortened URL provided in the response and paste it into the address bar of your web browser.
4. Press Enter. You should be redirected to the original website associated with the provided URL.

###This project by submitting pull requests with any enhancements or fixes. This project is open-source and available under the MIT License. https://github.com/Scream123/PHP-Link-Shortener.git


## Developed by Volodymyr Marakhovskyi ©





