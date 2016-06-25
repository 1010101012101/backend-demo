#Getting Started
Using vagrant will allow us to work with each other in the same environment, so that's what we will use. Getting Started is designed to help you get ready for hack night on the week of the 27th. This will be updated after hack night as a resource for future reference. This does take a quite a while (especially with slower internet), which is why I'd like for it to be taken care of beforehand. I will go through and explain this process at hack night, although it may be pretty straightforward for you.

###Installation
Download and install vagrant from Vagrant [downloads](https://www.vagrantup.com/downloads.html) page

Download and install Virtualbox AND Virtualbox Extensions from the Virtualbox [downloads](https://www.virtualbox.org/wiki/Downloads) page (Virtualbox must be installed before Virtualbox Extensions can be)
###Setup
Create a folder and navigate to it (this will house your Vagrantfile and another folder that your project will actually be in)

Run the following command
```
vagrant init ubuntu/trusty64
```

Open Vagrantfile in your favorite text editor

Look for the following line:
```ruby
  # config.vm.network "forwarded_port", guest: 80, host: 8080
```
This allows you to forward a port on the guest(vagrant) to a port of your choosing on the host(your computer)

Add the following line below (make sure you have 2 spaces as your indentation)
```ruby
  config.vm.network "forwarded_port", guest: 7000, host: 7000
```

###Start vm
Run
```bash
vagrant up --provider virtualbox
```
This creates, or boots, a virtualbox vm. It will take some time as it will need to download ubuntu.

###Access vm
```bash
vagrant ssh
```

##Ubuntu setup
```
sudo apt-get update
sudo apt-get install -y build-essential checkinstall libreadline-gplv2-dev libncursesw5-dev libssl-dev libsqlite3-dev tk-dev libgdbm-dev libc6-dev libbz2-dev git
sudo apt-get install -y python3 python3-pip nodejs php5 php5-mcrypt
exit
```

###Shutdown vagrant box
```
vagrant halt
```

###Clone this repo
```
git clone https://github.com/byudevelopers/backend-demo.git
```
Or if you prefer ssh:
```
git clone git@github.com:byudevelopers/backend-demo.git
```

You are now ready for hack night(:
If you get stuck anywhere, do not hesitate to ask me in slack, or create an issue in this repo.

#[Vagrant](https://www.vagrantup.com/)
Vagrant creates a desktop environment that can be shared with team members so you are testing within the same environment. 

I like it because it's something that I can completely mess up to figure out what I'm doing, then destroy it and spin up a new vm when I have a better idea of what's going on. Another benifit for me is that I can actually use the same environment that I'll be deploying to. This way I know it will work when I put it into production. That being said, I have never really dived into all that you can do with vagrant. I've also tried to use Docker and failed miserably at figuring it out. 

##Crash course on vagrant
```
vagrant up
```

Starts the vagrant box/vm

```
vagrant ssh
```

Opens an ssh tunnel into your

```
vagrant reload
```

Reloads your vm with any changes made to your Vagrantfile

```
vagrant halt
```

Shuts down your box

```
vagrant destroy
```

Shuts down and deletes your vm

The Vagrantfile is what vagrant uses to initialize a virtualbox (or other vm provider) vm. There are other tools you can use to extend the use of Vagrantfile, through [provisioning](https://www.vagrantup.com/docs/provisioning/), but we will not be going into that (mostly because I've never had a use for it and don't know a whole lot about it). Take a look at your Vagrantfile. It is actually really well commented and pretty much explains itself.

#Q&A
What is a package manager?

It is exactly what it says it is. Packages, or modules, are stored in a central location. The package manager stores (sometimes not) and allows users to download packages as needed.

What is a framework?

A framework is an abstraction that provides commonly used code to a developer (helps to reduce code duplication). Frameworks also control the application's flow and is generally extendable/overridable. It could also be considered a scaffold used to start a project from. A good way to conceptualize the idea is to think about making sugar cookies as a kid. Your mom would have some cookie cutters for you to pick from. You would then pick one and use it as the "framework" for cutting the remainder of your cookies, rather than getting a knife out and having to cut each edge precisely to get the design that you are looking for.

###Questions?

Ask them at hack night or in the issues of this repository.

#[Node](https://nodejs.org/en/)
Node is Javascript on the server side, which is pretty cool! It leverages Chrome's V8 Javascript engine.  It is event driven, asynchronous, super fast, scalable, single threaded, cross-platform, and open source. It can be used to build web applications, desktop applications, and CLI tool. To start a Node app just type `node <filename>.js` -or- `nodejs <filename>.js` depending on how you installed it.

What is it good for?
* I/O Bound Applications
* Data Streaming Applications
* Data Intensive Real time Applications (DIRT)
* JSON APIs
* Single Page Applications (ajax)
* Static file servers
* CLI Tools
* Distributed Systems
* ...

What is it not good for?
* CPU intensive Applications
* Basic CRUD/HTML apps (Well, its just not better than anything else)
* Teams that do not have JS experience

Sources (in no particular order): 
* <http://www.tutorialspoint.com/nodejs/nodejs_introduction.htm> 
* <http://stackoverflow.com/questions/4531649/what-exactly-is-node-js-used-for> 
* <https://www.toptal.com/nodejs/why-the-hell-would-i-use-node-js> 
* <https://medium.com/@ivanguardado/node-js-the-bad-parts-b4b9d23ef7e2#.ec6wr6god> 
* <https://www.sitepoint.com/node-js-is-the-new-black/> 
* <http://stackoverflow.com/questions/1884724/what-is-node-js>

##[npm](https://www.npmjs.com/)
npm is Node's package and dependency manager.

npm uses a file called package.json to keep track of what packages and dependencies are needed to run a node application. A package.json looks like this:

```json
{
  "name": "node",
  "version": "0.0.0",
  "description": "",
  "main": "app.js",
  "scripts": {
    "test": "echo \"Error: no test specified\" && exit 1"
  },
  "author": "",
  "license": "BSD-2-Clause",
  "dependencies": {
  }
}
```

You do not need to type this in yourself, npm will auto-generate it by running:
```
npm init
```

npm then prompts you to answer a few questions (you can just keep pushing enter unless you care), and then you are good to go. Just type in `npm install <package-name>` to get the module.

There are a 2 important flags for `npm install`

```
npm install --save
```

This will save the package as a dependency for the project you are working on

```
npm install --save-dev
```

This will save the package as a devDependency for the project you are working on. devDependencies are only needed in development, ie. minifier

If you do not use these flags, the package is globally available. [Learn more about these flags](https://docs.npmjs.com/cli/install)

##[Express](http://expressjs.com/)
The most popular NodeJs lightweight, modular web application framework. It is extended with the use of modules and is generally used for secure/rapid development. [Learn more](https://stackoverflow.com/questions/12616153/what-is-express-js)

#[Php](https://secure.php.net/)
##[Composer](https://getcomposer.org/)
##[CodeIgniter](https://www.codeigniter.com/)

#[Python](https://www.python.org/)
##[pip](https://pypi.python.org/pypi/pip)
##[Flask](http://flask.pocoo.org/)

#[Ruby](https://www.ruby-lang.org/en/)
##[gem](https://rubygems.org/)
##[Sinatra](http://www.sinatrarb.com/)

