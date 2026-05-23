<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Acesso somente leitura ao banco do WHMCS.
 *
 * Mantém a integração isolada do resto da aplicação para que as queries
 * possam ser ajustadas conforme a versão/estrutura real do WHMCS instalado
 * sem afetar o restante do sistema.
 */
class WhmcsService
{
    /**
     * Lista produtos publicados no WHMCS, opcionalmente filtrando por grupo.
     *
     * Quando a conexão não está configurada (ambiente de desenvolvimento sem
     * acesso ao WHMCS) retorna uma coleção vazia para o site continuar
     * funcionando com os preços estáticos definidos no Blade.
     */
    public function products(?int $groupId = null): Collection
    {
        try {
            $query = DB::connection('whmcs')
                ->table('tblproducts')
                ->where('hidden', 0)
                ->orderBy('order');

            if ($groupId !== null) {
                $query->where('gid', $groupId);
            }

            return $query->get();
        } catch (Throwable) {
            return collect();
        }
    }

    /**
     * Retorna ciclos de preço (mensal, anual, etc.) de um produto.
     */
    public function pricing(int $productId, string $currency = 'BRL'): ?object
    {
        try {
            return DB::connection('whmcs')
                ->table('tblpricing')
                ->where('type', 'product')
                ->where('relid', $productId)
                ->whereIn('currency', [$currency])
                ->first();
        } catch (Throwable) {
            return null;
        }
    }

    /**
     * Verifica se a conexão com o WHMCS está disponível.
     */
    public function isAvailable(): bool
    {
        try {
            DB::connection('whmcs')->getPdo();
            return true;
        } catch (Throwable) {
            return false;
        }
    }
}
