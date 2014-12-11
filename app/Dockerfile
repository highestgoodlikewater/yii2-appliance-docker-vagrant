FROM octohost/php5

RUN ["apt-get", "install", "php5-redis"]
RUN ["apt-get", "install", "php5-mcrypt"]

ADD ./bin/ /usr/sbin/
ADD . /srv/www/

VOLUME ["/var/log/nginx", "/etc/nginx/sites-templates"]
EXPOSE 80
WORKDIR /etc/nginx

RUN ["chmod", "-R", "777", "/srv/www/frontend/web/assets"]
RUN ["chmod", "-R", "777", "/srv/www/backend/web/assets"]
RUN ["chmod", "-R", "777", "/srv/www/frontend/runtime"]
RUN ["chmod", "-R", "777", "/srv/www/backend/runtime"]

RUN ["chmod", "+x", "/usr/sbin/entrypoint.sh"]
RUN ["chmod", "+x", "/usr/sbin/render-templates.sh"]
RUN ["chmod", "+x", "/usr/sbin/substitute-env-vars.sh"]

ENTRYPOINT ["/usr/sbin/entrypoint.sh"]
