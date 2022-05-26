Getting a local container running
```
docker run -it --rm \
--publish 3000:3000 \
--workdir /usr/src/app/ \
--volume `pwd`:"/usr/src/app/" \
elliotvheath/rails bash
```