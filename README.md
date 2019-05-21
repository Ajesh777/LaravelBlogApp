# Bootcamp with Laravel: 
```
| Laravel | Blade | Blog | php | composer | laravelcollections | ckeditor |
| deploy | Hosting | CSS | SCSS | Filesystem | Node.js | artisan | sql |
| migrations | CRUD | Authentication | AccessControl | Best Practices |

```
## Follow the Instruction Below to learn & create your own Laravel Blog Site:

* 1: In Terminal cd into Project folder, then >```php artisan make:controller PagesController```
* 2: Create Index func @ ```/app/Http/Controllers/PagesController```, follow inst ```[1]```
* 3: Create Index Route @ ```/routes/web.php```, follow inst ```[2]```
* 4: Create Index Page @ ```/resources/views/pages/inde.blade.php```, follow inst ```[3]```
* 5: ```Similarly``` create the ```About```,```Services```& ```Blog``` Page
* 6: Create Layout directory @ ```/resources/views/layout```
* 7: Create app.blade.php @ ```/resources/views/layout/app.blade.php```, follow inst ```[4]```
* 8: ```Remove``` content from ```all```  @ ```resources/views/pages``` & ```extend``` app.blade.php, follow inst ```[5]```
* 9: Now @ terminal >```cd /project/laravel/blog``` into project folder & 
* 10: >```npm install```
* 11: >```npm run dev```
* 12: >```npm run watch```
* 13: Create _custom.scss @ ```/resources/sass/_custom.scss```
* 15: Create nav.blade.php @ ```/resources/views/layout/app.blade.php```, follow inst ```[6]```
* 14: Import Navbar  @ ```/resources/views/layout/app.blade.php```, follow inst ```[7]```
* 15: Create lsapp database @ ```/localhost/phpMyAdmin/database```
* 16: Now @ terminal: >```php artisan make:controller PostsController --resource```
* 17: >```php artisan make:model Post -m```
* 18: Create Feilds of db @ ```/database/migrations/..._post_table.php```, follow inst ```[8]```
* 19: Set the string length @ ```/app/providers/AppServiceProviders.php```, follow inst ```[9]```
* 20: Set the Database name, username, password @ ```.env```
* 21: >```php artisan migrate``` 
* 22: >```php artisan tinker```
* 23: >```App\Post::count()```
* 24: >```$post = new App\Post();```
* 25: >```$post->title = 'Post One';```
* 26: >```$post->body = 'This is Post One body';```
* 27: >```$post->save();```
* 28: ```Simalarly```, Add one more record 
* 29: >```quit```
* 30: Create CRUD func @ ```/app/Http/Controllers/PostsController.php```, follow inst ```[10]```
* 31: Create CRUD Route's @ ```/routes/web.php```, follow inst ```[11]```
* 32: To see the Route list ```>php artisan route:list```
* 33: Create Posts folder @ ```/resources/views/Posts```
* 34: Create index @ ```resources/views/Posts/index.blade.php```, follow inst ```[12]```
* 35: Import ```App\Post``` @ ```app/Http/Controllers/PostsController.php```, follow inst ```[13]```
* 36: Now fetch all Posts & crete links to each of the Posts @ ```resources/views/Posts/index.blade.php```, follow inst ```[14]```
* 37: Create show.blade.php @ ```resources/views/Posts/show.blade.php```, follow inst ```[15]```
* 38: Now @ terminal, >```composer require "laravelcollective/html":"^5.4.0"```
* 39: Now Add Package @ ```config/app.php```, follow inst ```[17]```
* 40: Create create-page @ ```resources/views/Posts/create.blade.php```, follow inst ```[16]```
* 41: Create messages.blade.php @ ```/resources/views/layout/app.blade.php```, follow inst ```[17]```
* 42: Now in terminal, >```composer require unisharp/laravel-ckeditor```
* 43: Now in app.php @ /config/app.php, follow inst [18]
* 44: Now in terminal publish the resources, >```php artisan vendor:publish --tag=ckeditor```
* 45: Now initate the ckeditor @ ```/resources/views/layout/app.blade.php```, follow inst ```[19]```
* 46: Add ckeditor @ ```resources/views/Posts/create.blade.php```, follow inst ```[20]```
* 47: Create edit-page @ ```resources/views/Posts/edit.blade.php```, follow inst ```[21]``
---Done with CRUD, Now will create User Authentications..
* 48: Go to terminal, >```php artisan make:auth```
* 49: >```php artisan make:migration add_user_id_to_posts```
* 50: Create user_id @ ```/database/...add_user_id_to_posts```, follow inst ```[22]```
* 51: In terminal, >```php artisan migrate```
* If you want to undo or rollback >php artisan migrate rollback
* 52: Go to ```/app/Http/Controllers/PostsController.php``` & follow inst ```[23]```
* 53: Now go to Post model @ ```app/Post.php```, & follow inst ```[24]```
* 54: Now go to User model @ ```app/User.php```, & follow inst ```[25]```
* 55: Now in Dashboard, link posts with user @ ```app/Http/DashboardController.php```, & follow inst ```[26]```
* 56: Now @ ```resources/views/dashboard.blade.php```, & follow inst ```[27]```
* 57: Now Creating Auth Pages @ ```/app/Http/Controllers/PostsController.php``` & follow inst ```[28]```
* 58: Now 4 File Upload @ ```resources/views/Posts/create.blade.php```, follow inst ```[29]```
* 59: Create ```migration``` for cover_image, go to terminal, >```php artisan make:migration add_cover_image_to_posts```
* 60: Go to migrations @ ```/database/migrations/...add_cover_image_to_posts``` & follow inst ```[30]```
* 61: In terminal, >```php artisan migrate```
* 62: Go to PostController @ ```/app/Http/Controllers/PostsController.php```, follow inst ```[31]```
* 63: In terminal, >```php artisan storage:link```
* 64: Now 4 Image View @ ```resources/views/Posts/index.blade.php```, follow inst ```[32]```
* 65: ```Similarly``` in show & edit
>Done--- Now Let us Push it to git
---
* 66: ```git status``` : Check the status of the git repo.
* 67: ```git add .``` : Add all the required changes to git repo.
* 68: ```git commit -m "final gatsby-site : Commit"``` - Save all changes with a message.
* 69: ```git remote add origin https://* github.com/Ajesh777/* gatsby-bootcamp.git``` : Connecting to your created repo @ github site, copy your link @ create repo, option.
* 70: ```git push -u origin master```: Now finally push all contents to this github repo.
>Done--- Now we are ready fo Deploying to Netlify
---
* 71: Go to the link ```https://www.sharedhostprovider.com/``` & sign up
* 72: Now go back hit ```create a new site```
* 73: Now select MySQL & set the sql database name & upload the local database exported
* 74: Now using a client upload all your files on the server
* 75: select all the contents of public folder & paste it on the root folder
* 76: Edit the link route @ index.php
* 77: Creat symlink.create.php file & link the Image storage folders
* 83: Finaly we have Deployed the Site with a shared hosting provider.
>Done---
---