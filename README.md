# Dependencies
Make sure you have node, yeoman and yeopress installed - use the instructions below this only has to be done once not per-project.

## installing node and yeoman
you need to install node first as yeoman is a node package

best way to install node is from the website : https://nodejs.org/download/

when node is installed open terminal - quick way to do this is using <kbd>⌘</kbd> + <kbd>space</kbd> will open Spotlight then type terminal and hit enter

type: 
    <code>npm install -g yo</code>
into the terminal

this will install yeoman.

## installing YeoPress
type:
    <code>npm install -g yo generator-wordpress</code>
    
this should install the wordpress generator for yeoman

# Setting up a new project

So far you're gonna still have to make a new blank database, one day we'll automate this too. make a new database remeber the name and the username and password you use to connect to it -> this information stays on your machine because as you'll see later we don't put the wp-config into version control.

create a folder in your htdocs for the project. If you did that using mkdir from the command line then cd into the directory, if you used finder then click into the folder and select the option 'go to folder' from the go menu.



