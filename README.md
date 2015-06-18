## Contents 
[Dependencies](#dep)
[Setting up a new project](#id1)  
[Setting up an existing project](#id2)  

------
<a id="dep"></a>
# Dependencies
Make sure you have git, node, yeoman and yeopress installed - use the instructions below this only has to be done once not per-project.

## installing git
if you go to terminal - quick way to do this is using <kbd>⌘</kbd> + <kbd>space</kbd> will open Spotlight then type terminal and hit enter type <code>git --version</code> and you should get something like 'git version 2.3.2' if not you need to install git.

you can download git for mac from here -> http://git-scm.com/download/mac run the installer should work. 

## installing node and yeoman
you need to install node first as yeoman is a node package

best way to install node is from the website : https://nodejs.org/download/

when node is installed open terminal

type: 
    <code>npm install -g yo</code>
into the terminal

this will install yeoman.

## installing YeoPress
type:
    <code>npm install -g yo generator-wordpress</code>
    
this should install the wordpress generator for yeoman

## activate New Terminal at Folder service
In System Preferences choose Keyboard and then Shortcuts. From the left side nav, choose Services. Then from the main area under Files and Folders, choose New Terminal at Folder. Now you can right mouse click or control click on a folder and choose Services > New Terminal at Folder. 

---------

<a id="id1"></a>
# Setting up a new project
So far you're gonna still have to make a new blank database, one day we'll automate this too. make a new database remeber the name and the username and password you use to connect to it -> this information stays on your machine because as you'll see later we don't put the wp-config into version control.


*** create virtual host ***  -- dont forget to also add to /etc/hosts// 
create a folder in your htdocs for the project. If you did that using mkdir from the command line then cd into the directory, if you used finder then you might have to take a short detour. CTRL click the folder and go to services at the bottom of the menu, choose 'New Terminal at Folder'.

so you should be in terminal with the current selected folder being the one you just made. If you type <code>ls</code> you should just get a new line

now type <code>yo wordpress</code>

you will be prompted for several things:

<code>wordpress URL</code>: this is the address of your localhost and folder you just created, so if the folder I just created in htdocs was 'foobar' then most likely the wordpress URL I want to put here will be <code>localhost/foobar</code>

<code>Table prefix:</code> up to you because we're not version controlling the database or the config file so it's not shared - when the site is deployed to production it will have its own prefix, it helps to choose something with an underscore at the end.

<code>Database host</code>: this is most likely localhost

<code>Database name</code>: the one you made earlier
<code>Database user</code>: the one you made earlier
<code>Database password</code>: the one you made earlier

<code>Use Git</code>: answer Y to this
<code>Would you like to install Wordpress as a submodule? </code>: answer Y to this
<code>Wordpress install directory</code>: just use <code>wordpress</code> for now probably it will change on deploy
<code>Wordpress content directory</code>: just use <code>content</code> for now for same reason

<code>Install a custom theme?</code>: answer Y to this
<code>Destination directory</code>: might be project specific, but if in doubt put 'catsage'
<code>Theme source type (git/tar)</code>: answer git to this
<code>Task runner (grunt/gulp)</code>: answer gulp to this
<code>GitHub username</code>: is <code>safetycat</code>
<code>GitHub repository name</code>: is <code>catsage</code>
<code>Repository branch</code>: is <code>master</code>

answer Y to <code>Does this all look correct? if it does.

... WAIT ...

if anything goes wrong in the next part probably best let me know, use https://safetycat.slack.com/messages/general/ to let me know, email me if you need a slack account.

now you need to open the text file .gitignore -> this might be harder for some people than others.. 

around line 12 you will see #ignore config followed by local-config.php on the line below this add <code>wp-config.php</code> and below this add <code>.htaccess</code> then save the file.

now you need to set up a git repo....

git remote add origin https://github.com/safetycat/dev2.git

git pull origin master

git push -u origin master

bower install

gulp

make changes to the wp-config...

---------

<a id="id2"></a>
# Setting up an existing project

