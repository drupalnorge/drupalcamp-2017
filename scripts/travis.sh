npm i phantomjs-prebuilt
./node_modules/.bin/phantomjs --webdriver=8643 &
composer install
php -d sendmail_path=`which true` ./vendor/bin/drush si drupalcamp_profile --locale=nb --db-url="mysql://$DB_USERNAME@127.0.0.1/$DATABASE" -y
./vendor/bin/drush cset system.site uuid 2fc27f02-a284-417f-9daa-abaf62cc3bba -y
./vendor/bin/drush cset language.entity.nb uuid ab5c3847-ae61-46ce-88bf-71f8647d585b -y
./vendor/bin/drush cim -y
# Do it twice because, I really dont know.
./vendor/bin/drush cim -y
./vendor/bin/drush rs 127.0.0.1:8888 &
./vendor/bin/wait-for-listen 8888
./vendor/bin/wait-for-listen 8643
