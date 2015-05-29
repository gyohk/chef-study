#
# Cookbook Name:: composer
# Recipe:: default
#
# Copyright 2015, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

remote_file "/usr/local/bin/composer" do
  source "http://getcomposer.org/composer.phar"
  action :create_if_missing
  owner "root"
  group "root"
  mode 0755
end
