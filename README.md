# BUILD IMAGE
```docker build -t demo .```

# RUN Image
```docker run -dp 8080:8080 demo```

# List Process
```docker ps```

# Access Container
```docker exec -it xxxx sh```

# Kill Process
```docker kill xxxx```

# tag image
```docker tag demo hamimsazadah/demo```
# push image
```docker push hamimsazadah/demo```