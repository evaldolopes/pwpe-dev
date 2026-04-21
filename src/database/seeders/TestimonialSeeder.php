<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name'    => 'Carlos Henrique',
                'role'    => 'Empresário • E-commerce',
                'city'    => 'Recife/PE',
                'service' => 'Hospedagem',
                'content' => 'Meu site ficou muito mais rápido e estável.',
                'order'   => 1,
            ],
            [
                'name'    => 'Juliana Alves',
                'role'    => 'Consultora • Serviços',
                'city'    => 'Jaboatão/PE',
                'service' => 'Criação de Site',
                'content' => 'Comecei a gerar contatos com meu site.',
                'order'   => 2,
            ],
            [
                'name'    => 'André Souza',
                'role'    => 'Dev • Projetos Web',
                'city'    => 'Olinda/PE',
                'service' => 'Hospedagem + Suporte',
                'content' => 'Ambiente estável e fácil de gerenciar.',
                'order'   => 3,
            ],
            [
                'name'    => 'Marcos Silva',
                'role'    => 'Varejista • Loja Online',
                'city'    => 'Paulista/PE',
                'service' => 'Hospedagem',
                'content' => 'Minha loja virtual parou de cair e as vendas melhoraram.',
                'order'   => 4,
            ],
            [
                'name'    => 'Fernanda Costa',
                'role'    => 'Criadora de Conteúdo • Blog',
                'city'    => 'Recife/PE',
                'service' => 'Hospedagem',
                'content' => 'Agora meu blog carrega rápido e sem travamentos.',
                'order'   => 5,
            ],
            [
                'name'    => 'Rafael Gomes',
                'role'    => 'Empresário • Pequenos Negócios',
                'city'    => 'Camaragibe/PE',
                'service' => 'Migração + Hospedagem',
                'content' => 'Migraram tudo pra mim sem dor de cabeça.',
                'order'   => 6,
            ],
            [
                'name'    => 'Patrícia Lima',
                'role'    => 'Autônoma • Estética',
                'city'    => 'Olinda/PE',
                'service' => 'Criação de Site',
                'content' => 'Meu site ficou profissional e passa mais confiança.',
                'order'   => 7,
            ],
            [
                'name'    => 'Lucas Andrade',
                'role'    => 'Freelancer • Marketing Digital',
                'city'    => 'Recife/PE',
                'service' => 'Suporte Técnico',
                'content' => 'Suporte rápido que realmente resolve quando preciso.',
                'order'   => 8,
            ],
        ];

        foreach ($testimonials as $data) {
            Testimonial::firstOrCreate(['name' => $data['name'], 'city' => $data['city']], $data);
        }
    }
}
