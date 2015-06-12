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

create a folder in your htdocs for the project. If you did that using mkdir from the command line then cd into the directory, if you used finder then you might have to take a short detour. CTRL click the folder and go to services at the bottom of the menu, if you see 'New Terminal at Folder' then you don't have to do the stuff in the paragraph below, just choose 'New Terminal at Folder' otherwise:

In System Preferences choose Keyboard and then Shortcuts. From the left side nav, choose Services. Then from the main area under Files and Folders, choose New Terminal at Folder. Now you can right mouse click or control click on a folder and choose Services > New Terminal at Folder. 

so you should be in terminal with the current selected folder being the one you just made. If you type <code>ls</code> you should just get a new line

now type <code>yo wordpress</code>

you will be prompted for several things:

wordpress URL: this is the address of your localhost and folder you just created, so if the folder I just created in htdocs was 'foobar' then most likely the wordpress URL I want to put here will be <code>localhost/foobar</code>

Table prefix: up to you because we're not version controlling the database or the config file so it's not shared - when the site is deployed to production it will have its own prefix, it helps to choose something with an underscore at the end.

Database host: this is most likely localhost

Database name: the one you made earlier
Database user: the one you made earlier
Database password: the one you made earlier

Use Git: answer Y to this
Would you like to install Wordpress as a submodule? : answer Y to this
Wordpress install directory: just use <code>wordpress</code> for now probably it will change on deploy
Wordpress content directory: just use <code>content</code> for now for same reason

Install a custom theme?: answer Y to this
Destination directory: might be project specific, but if in doubt put 'catsage'
Theme source type (git/tar): answer git to this
Task runner (grunt/gulp): answer gulp to this
GitHub username: is <code>safetycat</code>
GitHub repository name: is <code>catsage</code>
Repository branch: is <code>master</code>

answer Y to Does this all look correct? if it does.






