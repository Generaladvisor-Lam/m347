## (aus irgendeinem Grund laufen shell scripts nicht)

```
docker run -d --name kn05 -v /c/kn05:/usr/kn05 nginx:latest
```

![](1local.JPG)

![](2docker.JPG)

![](3local.JPG)

![](4docker.JPG)

Ich kann hier beweisen, dass man files, die ich local erstelle, auch im container lesen kann.

# B

![](5.JPG)

# C

```
version: '3.8'

volumes:
  rheinmetall:
  tmpfs:

services:
  kn05c1:
    image: nginx:latest
    volumes:
      - type: volume
        source: rheinmetall
        target: /volume
      - type: bind
        source: /c/kn05
        target: /bind
      - type: tmpfs
        target: /tmpfs

  kn05c2:
    image: nginx:latest
    volumes:
      - rheinmetall:/volume
```

