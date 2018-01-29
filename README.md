# project-gold
 _Codebase for project gold_
## Instructions
* Clone the project
* Generate application keys if not available in env file (`php artisan key:generate`)
* If cloning for the first time, create a .env file, copy the contents .env.example into the new .env file
and continue your configurations
* Create a new database if cloning for the first time and developing locally
* Run composer (and npm?) install
* Seed your database if seeds are available

 **Side note:** Don't forget to clear your cache or restart your server anytime you edit your .env file, 
so that your app will reflect your new changes
## Our Approaches
* The controllers apart from Auth, will be domain specific. So I have created a Modules sub-folder in the controllers folder
where other controller folders will reside e.g for every controller associated with user we have Controllers > Modules > User > 
UserController
* If a model has a controller, please try as much as possible to create the accompanying seed files(faker is integrated already) for the controller for pre-populating and 
testing purpose
* We will be using Form request for domain specific validations, the request files will reside in the Request sub-folder
* Don't forget to stage and commit auto-generated files like migrations, seeds, middlewares, controllers etc

 _This README is just for a kick start, it will be updated subsequently as we proceed and suggestions come in. We will be 
notified whenever it is updated. Please don't be afraid to unleash your creativity an prowess on this project_.
 
 **Got any suggestions or improvement to our approaches?** Let's discuss it on our slack channel.
 
#### Yours truely, [benmalcom](https://www.github.com/benmalcom)
