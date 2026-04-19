FROM node:20-alpine

# Dependências mínimas para builds nativos (ex.: sharp, canvas)
RUN apk add --no-cache python3 make g++

WORKDIR /var/www/html

EXPOSE 5173

# npm install é executado via command no docker-compose para
# garantir que o package.json já esteja disponível via volume.
CMD ["sh", "-c", "npm install && npm run dev"]
