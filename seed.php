<?php

Categories::factory()->create([
            'id' => 1,
            'name' => 'Главная',
            'p_id' => 0,
        ]);
        Categories::factory()->create([
                'id' => 2,
                'name' => 'Компьютеры',
                'p_id' => 1,
        ]);
        Categories::factory()->create([
                'id' => 3,
                'name' => 'Телефоны',
                'p_id' => 1,
        ]);
        Categories::factory()->create([
                'id' => 4,
                'name' => 'Планшеты',
                'p_id' => 1,
        ]);
        Categories::factory()->create([
                'id' => 5,
                'name' => 'Ноутбуки',
                'p_id' => 2,
        ]);
        Categories::factory()->create([
                'id' => 6,
                'name' => 'ПК',
                'p_id' => 2,
        ]);
        Categories::factory()->create([
                'id' => 7,
                'name' => 'Lenovo',
                'p_id' => 5,
        ]);
        Categories::factory()->create([
                'id' => 8,
                'name' => 'Apple',
                'p_id' => 5,
        ]);
        Categories::factory()->create([
                'id' => 9,
                'name' => 'Asus',
                'p_id' => 5,
        ]);
        Categories::factory()->create([
                'id' => 10,
                'name' => 'Acer',
                'p_id' => 5,
        ]);
        Categories::factory()->create([
                'id' => 11,
                'name' => 'Apple',
                'p_id' => 3,
        ]);
        Categories::factory()->create([
                'id' => 12,
                'name' => 'Samsung',
                'p_id' => 3,
        ]);
        Categories::factory()->create([
                'id' => 13,
                'name' => 'Nokia',
                'p_id' => 3,
        ]);
        Categories::factory()->create([
                'id' => 14,
                'name' => 'Huawei',
                'p_id' => 3,
        ]);
        Categories::factory()->create([
                'id' => 15,
                'name' => 'Xiaomi',
                'p_id' => 3,
        ]);
        Categories::factory()->create([
                'id' => 16,
                'name' => 'Apple',
                'p_id' => 4,
        ]);
        Categories::factory()->create([
                'id' => 17,
                'name' => 'Xiaomi',
                'p_id' => 4,
        ]);
        Categories::factory()->create([
                'id' => 18,
                'name' => 'Apple',
                'p_id' => 6,
        ]);
