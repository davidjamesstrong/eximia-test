# EXIMIA Developer Challenge

This repository is for a developer challenge I have been asked to complete by EXIMIA. I have been given 1-2 hours to complete this project but I believe it will take me longer because I have not been involved with Laravel for the past 8 months and I will also need to investigate working with mailgun API as this is also new to me.

## Background
A client has asked us to build a registration form for their newsletter. They have asked for it to record visitor details needed in order to sign them up to a newsletter

They would like them to be saved into a database but did not elaborate on the fields needed. However, they did say the data should be secure and encrypted.

## Requirments
* Install Laravel 5.7
* Require Guzzle
* Mailgun API account

## UX

* As a User I want to register to a newsletter
* As a User I want to verify my e-mail address
* As an Admin I want to view all registered & verified users

## What I propose to do

* Create a basic install of Laravel.
* Setup SQL lite (for testing proposes).
* Create a database table for Subscribers.
* Build and validate a form on the homepage first name, last name and e-mail address.
* Store details in the database.
* E-mail the user to verity their subscription.
* Verify their subscription in the database.
* Create Administrator authentication.
* Build a dashboard to work with subscribers data.
