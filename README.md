#Getting Started
Using vagrant will allow us to work with each other in the same environment, so that's what we will use.
###Installation
Download and install from vagrant [downloads](https://www.vagrantup.com/downloads.html) page
###Setup
Create a folder and navigate to it (this will house your Vagrant file and another folder that your project will actually be in)

Run the following command
```
vagrant init ubuntu/trusty64
```
This creates a Vagrantfile that vagrant uses to initialize a virtualbox vm from

Open Vagrantfile in your favorite text editor

Look for the following line:
```ruby
  # config.vm.network "forwarded_port", guest: 80, host: 8080
```
This allows you to forward a port on the guest(vagrant) to a port of your choosing on the host(your computer)

Add the following line below
```ruby
  config.vm.network "forwarded_port", guest: 7000, host: 7000
```
###Vagrant up
Run
```bash
vagrant up --provider virtualbox
```
This creates, or boots, a virtualbox vm. It will take some time as it will need to download ubuntu.
###Access box
```bash
vagrant ssh
```
##Ubuntu setup
```
sudo apt-get update
sudo apt-get install -y build-essential checkinstall libreadline-gplv2-dev libncursesw5-dev libssl-dev libsqlite3-dev tk-dev libgdbm-dev libc6-dev libbz2-dev
sudo apt-get install -y python3 python3-pip nodejs php5 php5-mcrypt
exit
```
You are now ready for hack night(:

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
