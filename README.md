"# insertSQLDataPHP"

Clone this repo into your www folder under laragon. In the command prompt cd into the \laragon\www folder. Type git clone your-repo-url (Get your repo url from github after creating the repo). Then cd into the folder you have just cloned by typing cd labWeek3-yourgithubid. Once you are in the correct folder keep this command window open so you can type in your git commands as required.

# Part 1
From within Laragon, click on the cog icon in the top right-hand corner to open up the settings page. Click on the "Services and Ports" tab of the settings. Change the port for MySQL from 3306 to 3307. Click "X" in the top right hand corner to close the Settings. Now click on the Start All button and notice how the Database is listening on Port 3307. We need to do this because on the lab computers there is already a MySQL database Server listening on Port 3307. The Laragon MySQL database server is a separate instance of the MySQL Database Server which is listening on a separate port. In this way, we can run separate instances without a conflict.

Next, click on the Database button from the Laragon home screen to start the Database Client Application. There are a number of different SQL client apps including MySQL Workbench. The SQL client that comes with Laragon, HeidiSQL, is a popular application that is easy to use. Using the starter code in the repo, paste the SQL code from the CreateDatabase.sql script into the Query Window and press the "play" button this will execute the commands in the CreateDatabase.sql script and create a simple database called tennisclub which will include three tables, Members, |Courts and Bookings along with some test data. To verify the data, create a new SQL query window, type ***Select * from Member;*** and execute the query by pressing the "play" button. You should see a list of six members of the tennisclub.

Once the script has been executed and the database has been created, modify the credentials in the insertSQLData.php script so that the correct credentials are used to connect to the database. If you're not sure what credentials to use, refer to the slides for this week. Execute the PHP script in insertSQLData.php by visiting http://localhost/week4Lab-yourGithubID/insertSQLData.php. If the credentials are correct a new Member called John Doe should have been inserted as a Member of the tennisclub.

If you got this working then Commit your code with a good meaningful message and push your code into your repo.

# Part 2
Create a PHP file called Part2.php which contains all the code from insertSQLData.php. To add this file to your repo type *** git add . *** and then push your file by typing ***git commit -am 'added Part2.php*** 


