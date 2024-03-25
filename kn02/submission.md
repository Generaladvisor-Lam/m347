# A

## Dockerfile
```
# nutzt die offizielle nginx als basis
FROM nginx

# copiert helloworld.html ins standardspeicherort fuer html-dateien in nginx
COPY helloworld.html /usr/share/nginx/html/

# ermoeglicht das abhoeren der requests durch port 80
EXPOSE 80
```

## commands
docker build -t kn02a
docker tag kn02a masa07/m347:kn02a
docker push masa07/m347:kn02a
docker run -d -p 8080:80 --name kn02 kn02a
