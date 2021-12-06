# In progress.
# loltracking -> League Of Legends Tracking Application

## What is loltracking?

This application uses Riot Games's API server to provide you to check any summoner's profile.

You can check Developer Portal of Riot Games below. 
[official site](https://developer.riotgames.com/).

## Installation
Get repo codes below.
`git clone git@github.com:tarkanaciksoz/loltracking.git` then `cd loltracking/`

run `composer install` to create a vendor file that contains php libraries.

## Setup Application

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Run Application

run `php spark serve`. That will start a host at http://localhost:8080 and you will be able to run the project for development.
