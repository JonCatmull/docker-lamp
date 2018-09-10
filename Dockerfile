FROM mattrayner/lamp:latest-1604-php7

COPY app/ /app
# COPY mysql/ /var/lib/mysql

# RUN echo 'we are running some # of cool things'

CMD ["/run.sh"]