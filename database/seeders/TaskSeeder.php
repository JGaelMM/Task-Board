<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = ['pendiente', 'en_proceso', 'revision', 'cerrado'];
        $priorities = ['alta', 'media', 'baja'];

        $titles = [
            'Configurar base de datos',
            'Diseñar interfaz de usuario',
            'Implementar autenticación',
            'Optimizar consultas',
            'Crear API REST',
            'Agregar validaciones',
            'Corregir bugs UI',
            'Refactorizar código',
            'Preparar deploy',
            'Documentar proyecto'
        ];

        foreach ($titles as $title) {
            Task::create([
                'title' => $title,
                'description' => 'Descripción de prueba para ' . $title,
                'priority' => $priorities[array_rand($priorities)],
                'status' => $statuses[array_rand($statuses)],
            ]);
        }
    }
}
