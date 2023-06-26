# Bref Example Application

A small Slim PHP application that shows off how to use the Bref Serverless plugin.

## Requirements

* [An AWS Account](https://portal.aws.amazon.com/billing/signup)
* PHP 8.2
* [Composer](https://getcomposer.org/)
* [The Serverless Framework CLI](https://www.serverless.com/)

## Deploying the code

To deploy the code, you will need to make sure you have configured your `serverless` command line tool with proper authentication. Follow the [Installation instructions for Bref](https://bref.sh/docs/installation.html) to make sure the tools are installed properly.

1. Check out this repository
1. Run `composer install` to download dependencies
1. Adjust the `serverless.yaml` file if you want to:
    1. Change the name of the app as deployed
    1. Deploy to a different region
1. Run `serverless deploy` to deploy to AWS