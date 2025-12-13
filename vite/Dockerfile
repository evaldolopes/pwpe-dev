FROM node:20

WORKDIR /var/www/html

# não instalar dependências aqui; use bind mount para usar package.json da /src
RUN npm i -g npm@latest

EXPOSE 5173
CMD ["npm", "run", "dev", "--", "--host"]
