Getting a local container running
```
docker run -it  \
--rm \
--name rr \
--expose 3000 \
--publish 3000:3000 \
--workdir /usr/src/app/ \
--volume `pwd`:"/usr/src/app/" \
elliotvheath/rails bash
```

for additional terminals
```
docker container exec -it rr bash
```