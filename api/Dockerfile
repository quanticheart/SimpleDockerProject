FROM node:14.17.5
WORKDIR /home/node/app
RUN ls -lsa && \
    npm install -g nodemon
CMD npm install && \
     npm start

# docker run -d -v $(pwd)/api/data:/home/node/app -p 9001:9001 --rm --name node-test node-image

