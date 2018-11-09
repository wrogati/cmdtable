# Pre-requisites
Php Version > 7.0
Laravel > 5.4 

# Instructions

Register the CmdTableServiceProvider at file app.php in config folder:

Insert the line below:
/* Command Table Application Service Providers... */
Wrogati\CmdTable\CmdTableServiceProvider::class,

In the terminal run the command line:

composer require wrogati/cmd-table

# Verifying

In the terminal run the command line:

php artisan list

See the result, should be in the list the command "db:change"

# Usage

php artisan db:change <tablename> --op=<option>
  
# Usage Options Availables

d => drop table
t => truncate table
