How to install Codeigniter in your windows system some steps are mention below:
Step1: Download the zip file from this link https://api.github.com/repos/bcit-ci/CodeIgniter/zipball/3.1.11
Step2: Then unzip the files and put them to your web server folder 'htdocs folder'
 where you want to. Let's create a new folder CI and paste the whole zip files in this folder.

Step3: Then open the localhost/CI/application/config/config.php file with any text editor and 
set your base URL. let's assume that your base URL is set like this:

$config[‘base_url’] = “http://localhost/CI/";
Step4: Now If you want to use a database, open the path application/config/database.
php file with any text editor and set your database settings and change some variables according to your project.

$db[‘default’][‘hostname’] = “localhost”;
$db[‘default’][‘username’] = “root”;
$db[‘default’][‘password’] = “”;
$db[‘default’][‘database’] = “musa”;
$db[‘default’][‘dbdriver’] = “mysqli”;

Step5: Now you can run installed Codeigniter framework by following below URLs

Please notice that your project folder name is listed below. 
So if your project folder name is CI, you can also change your URL as per your project directory
 name when you run it as soon as you check. If the following link is below, you can do so.

1- import database
2- go run server
3 go to login page admin localhost:8080/login
2-go to dashboard
  u- client 
  go to customerPage;
  