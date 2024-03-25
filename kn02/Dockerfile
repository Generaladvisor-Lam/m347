# nutzt die offizielle nginx als basis
FROM nginx

# directory setzen
WORKDIR /usr/share/nginx/html

# copiert helloworld.html ins standardspeicherort fuer html-dateien in nginx
COPY helloworld.html .

# ermoeglicht das abhoeren der requests durch port 80
EXPOSE 80
