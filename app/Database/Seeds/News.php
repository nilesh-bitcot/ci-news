<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
	public function run()
	{
		$data = [
            'title' => 'Test News',
            'slug'  => 'test-news',
			'body' 	=> '<p>hello testing news'
        ];

        // Simple Queries
        $this->db->query("INSERT INTO news (title, slug, body) VALUES(:title:, :slug:, :body:)", $data);

        // Using Query Builder
        $this->db->table('news')->insert($data);
	}
}
