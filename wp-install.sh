URL_HOST="wp.lab" # lamp
DB_USER="adminer"
DB_PASS="Passw0rd"
ADMIN_PASSWORD="admin"

if test $# -eq 1
then
  version=$1
  blog_url="$URL_HOST/wordpress-$version"
  blog_title="WP $version"
  db_name="wordpress-$version"



  sudo -u www-data -- wp core download --path=$db_name --version=$version
  sudo -u www-data -- wp core config --path=$db_name --dbname=$db_name --dbuser=$DB_USER --dbpass=$DB_PASS

  sudo -u www-data -- wp db create --path=$db_name
  sudo -u www-data -- wp core install --path=$db_name --url=$blog_url --title="$blog_title" --admin_user=admin --admin_email=admin@localhost.org --admin_password=$ADMIN_PASSWORD
  #wp user create user user@localhost.org --user_pass=user --path=$db_name

else
  echo "Usage: $0 version-to-install"
fi
