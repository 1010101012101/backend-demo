require 'sinatra'

set :port, 7000

get '/hi' do
  "Hello World!"
end