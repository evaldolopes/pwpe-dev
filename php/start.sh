#!/bin/bash
set +e  # Não para em erros

echo "🚀 Iniciando aplicação Laravel..."

# Ajustar permissões dos diretórios Laravel
echo "🔒 Ajustando permissões..."
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache 2>/dev/null || true
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache 2>/dev/null || true

# Aguarda o banco de dados estar pronto
echo "⏳ Aguardando MySQL..."
RETRIES=30
until mysql -hdb -uroot -proot -e "SELECT 1" > /dev/null 2>&1; do
  RETRIES=$((RETRIES-1))
  if [ $RETRIES -le 0 ]; then
    echo "⚠️  MySQL não respondeu a tempo, mas continuando..."
    break
  fi
  echo "   Banco ainda não está pronto... aguardando ($RETRIES tentativas restantes)..."
  sleep 2
done

if mysql -hdb -uroot -proot -e "SELECT 1" > /dev/null 2>&1; then
  echo "✅ MySQL pronto!"
  
  # Instala dependências do Composer se necessário
  if [ ! -d "vendor" ]; then
    echo "📦 Instalando dependências do Composer..."
    composer install --no-interaction --prefer-dist --optimize-autoloader || echo "⚠️  Composer install falhou"
  fi

  # Executa as migrations
  echo "🗄️  Executando migrations..."
  php artisan migrate --force 2>&1 || echo "⚠️  Migrations falharam (talvez já executadas)"

  # Limpa cache
  echo "🧹 Limpando cache..."
  php artisan config:clear 2>&1 || true
  php artisan route:clear 2>&1 || true
  php artisan view:clear 2>&1 || true
fi

echo "✨ Aplicação pronta!"

# Inicia PHP-FPM em foreground
echo "🔥 Iniciando PHP-FPM..."
exec php-fpm -F
