#!/bin/bash
set -e

echo "🚀 Iniciando Laravel Application..."

# Simples sleep para aguardar MySQL
echo "⏳ Aguardando MySQL iniciar..."
sleep 10

echo "✅ Continuando inicialização..."

# Criar diretórios necessários e ajustar permissões
echo "🔒 Ajustando permissões..."
mkdir -p storage/framework/{sessions,views,cache} storage/logs bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Instalar dependências do Composer se necessário
if [ ! -d "vendor" ]; then
    echo "📦 Instalando dependências do Composer..."
    composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev || true
fi

# Executar migrations
echo "🗄️  Executando migrations..."
php artisan migrate --force 2>/dev/null || echo "⚠️  Migrations já aplicadas ou erro"

# Limpar caches
echo "🧹 Limpando caches..."
php artisan config:clear 2>/dev/null || true
php artisan cache:clear 2>/dev/null || true
php artisan view:clear 2>/dev/null || true
php artisan route:clear 2>/dev/null || true

# Garantir permissões novamente após comandos artisan
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

echo "✨ Laravel está pronto!"
echo "🌐 Acesse: http://localhost"

# Executar comando passado como argumento (php-fpm)
exec "$@"
