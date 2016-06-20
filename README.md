#Getting Started
Using vagrant will allow us to work with each other in the same environment, so that's what we will use. Getting Started is designed to help you get ready for hack night on the week of the 27th. This will be updated after hack night as a resource for future reference.

###Installation
Download and install vagrant from Vagrant [downloads](https://www.vagrantup.com/downloads.html) page
###Setup
Create a folder and navigate to it (this will house your Vagrantfile and another folder that your project will actually be in)

Run the following command
```
vagrant init ubuntu/trusty64
```
This creates a file called Vagrantfile that vagrant uses to initialize a virtualbox vm

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
###Start Vagrant box
Run
```
vagrant up --provider virtualbox
```
###Access box
```
vagrant ssh
```
##Ubuntu setup
```
sudo apt-get update
sudo apt-get install -y build-essential checkinstall libreadline-gplv2-dev libncursesw5-dev libssl-dev libsqlite3-dev tk-dev libgdbm-dev libc6-dev libbz2-dev
sudo apt-get install -y python3 python3-pip nodejs php5 php5-mcrypt
exit
```
###Shutdown vagrant box
```
vagrant halt
```
###Clone the repo
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

#[Node](https://nodejs.org/en/)
##[npm](https://www.npmjs.com/)
##[Express](http://expressjs.com/)

#[Php](https://secure.php.net/)
##[Composer](https://getcomposer.org/)
##[CodeIgniter](https://www.codeigniter.com/)

#[Python](https://www.python.org/)
##[pip](https://pypi.python.org/pypi/pip)
##[Flask](http://flask.pocoo.org/)

#[Ruby](https://www.ruby-lang.org/en/)
##[gem](https://rubygems.org/)
##[Sinatra](http://www.sinatrarb.com/)
