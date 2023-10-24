<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dzakwan Irfan Ramdhani',
            'username' => 'dzakonee',
            'email' => 'dzakone07@gmail.com',
            'password'=> bcrypt('123'),
        ]);

        User::create([
            'name' => 'Malika Azra Permata',
            'username'=> 'mailkaazra',
            'email' => 'malikaazra.com',
            'password'=> bcrypt('321'),
        ]);

        User::factory(1)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Post Satu',
        //     'slug' => 'post-satu',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Excerpt untuk Postingan Satu',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium maxime facere beatae in error facilis itaque enim perferendis ea quasi? Atque pariatur veniam ipsum doloremque laboriosam similique facilis magni assumenda suscipit vel accusamus, facere esse sequi, repellendus nisi molestiae ipsam perferendis. Laboriosam mollitia error aspernatur soluta maiores repellendus adipisci iusto.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sed culpa, omnis esse alias voluptates quaerat eos quia, minima dicta repudiandae ex nulla assumenda eius saepe, ullam commodi. Inventore, facilis tempore neque natus provident nisi facere eos placeat reiciendis dolores? Natus quo, assumenda ipsam, laudantium odio nisi laborum nam eius saepe, dolorem temporibus. Quod, numquam blanditiis. Recusandae fuga odit blanditiis dolores numquam ratione vero dolorem debitis, quos voluptatibus ipsa totam vel? Inventore quidem in eaque aperiam error. Autem ea dolore eligendi corrupti tempora non doloremque, nihil illum iure modi asperiores culpa alias officiis numquam quia, nam explicabo. Esse maiores cupiditate vel mollitia repellat velit quia praesentium quos repudiandae placeat nisi doloremque assumenda facilis accusantium modi dolore, eum recusandae dicta! Cumque accusantium corporis a eveniet ipsa quis voluptas iusto reprehenderit sed. Sunt atque temporibus, enim corporis voluptatem quaerat, praesentium veniam impedit dolore voluptatibus nemo. Quidem, recusandae. Magni odit nisi numquam. Reprehenderit.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Post Dua',
        //     'slug' => 'post-dua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Excerpt untuk Postingan Dua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium maxime facere beatae in error facilis itaque enim perferendis ea quasi? Atque pariatur veniam ipsum doloremque laboriosam similique facilis magni assumenda suscipit vel accusamus, facere esse sequi, repellendus nisi molestiae ipsam perferendis. Laboriosam mollitia error aspernatur soluta maiores repellendus adipisci iusto.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sed culpa, omnis esse alias voluptates quaerat eos quia, minima dicta repudiandae ex nulla assumenda eius saepe, ullam commodi. Inventore, facilis tempore neque natus provident nisi facere eos placeat reiciendis dolores? Natus quo, assumenda ipsam, laudantium odio nisi laborum nam eius saepe, dolorem temporibus. Quod, numquam blanditiis. Recusandae fuga odit blanditiis dolores numquam ratione vero dolorem debitis, quos voluptatibus ipsa totam vel? Inventore quidem in eaque aperiam error. Autem ea dolore eligendi corrupti tempora non doloremque, nihil illum iure modi asperiores culpa alias officiis numquam quia, nam explicabo. Esse maiores cupiditate vel mollitia repellat velit quia praesentium quos repudiandae placeat nisi doloremque assumenda facilis accusantium modi dolore, eum recusandae dicta! Cumque accusantium corporis a eveniet ipsa quis voluptas iusto reprehenderit sed. Sunt atque temporibus, enim corporis voluptatem quaerat, praesentium veniam impedit dolore voluptatibus nemo. Quidem, recusandae. Magni odit nisi numquam. Reprehenderit.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Post Tiga',
        //     'slug' => 'post-tiga',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'excerpt' => 'Excerpt untuk Postingan Tiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium maxime facere beatae in error facilis itaque enim perferendis ea quasi? Atque pariatur veniam ipsum doloremque laboriosam similique facilis magni assumenda suscipit vel accusamus, facere esse sequi, repellendus nisi molestiae ipsam perferendis. Laboriosam mollitia error aspernatur soluta maiores repellendus adipisci iusto.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sed culpa, omnis esse alias voluptates quaerat eos quia, minima dicta repudiandae ex nulla assumenda eius saepe, ullam commodi. Inventore, facilis tempore neque natus provident nisi facere eos placeat reiciendis dolores? Natus quo, assumenda ipsam, laudantium odio nisi laborum nam eius saepe, dolorem temporibus. Quod, numquam blanditiis. Recusandae fuga odit blanditiis dolores numquam ratione vero dolorem debitis, quos voluptatibus ipsa totam vel? Inventore quidem in eaque aperiam error. Autem ea dolore eligendi corrupti tempora non doloremque, nihil illum iure modi asperiores culpa alias officiis numquam quia, nam explicabo. Esse maiores cupiditate vel mollitia repellat velit quia praesentium quos repudiandae placeat nisi doloremque assumenda facilis accusantium modi dolore, eum recusandae dicta! Cumque accusantium corporis a eveniet ipsa quis voluptas iusto reprehenderit sed. Sunt atque temporibus, enim corporis voluptatem quaerat, praesentium veniam impedit dolore voluptatibus nemo. Quidem, recusandae. Magni odit nisi numquam. Reprehenderit.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Post Empat',
        //     'slug' => 'post-empat',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'excerpt' => 'Excerpt untuk Postingan Empat',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium maxime facere beatae in error facilis itaque enim perferendis ea quasi? Atque pariatur veniam ipsum doloremque laboriosam similique facilis magni assumenda suscipit vel accusamus, facere esse sequi, repellendus nisi molestiae ipsam perferendis. Laboriosam mollitia error aspernatur soluta maiores repellendus adipisci iusto.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sed culpa, omnis esse alias voluptates quaerat eos quia, minima dicta repudiandae ex nulla assumenda eius saepe, ullam commodi. Inventore, facilis tempore neque natus provident nisi facere eos placeat reiciendis dolores? Natus quo, assumenda ipsam, laudantium odio nisi laborum nam eius saepe, dolorem temporibus. Quod, numquam blanditiis. Recusandae fuga odit blanditiis dolores numquam ratione vero dolorem debitis, quos voluptatibus ipsa totam vel? Inventore quidem in eaque aperiam error. Autem ea dolore eligendi corrupti tempora non doloremque, nihil illum iure modi asperiores culpa alias officiis numquam quia, nam explicabo. Esse maiores cupiditate vel mollitia repellat velit quia praesentium quos repudiandae placeat nisi doloremque assumenda facilis accusantium modi dolore, eum recusandae dicta! Cumque accusantium corporis a eveniet ipsa quis voluptas iusto reprehenderit sed. Sunt atque temporibus, enim corporis voluptatem quaerat, praesentium veniam impedit dolore voluptatibus nemo. Quidem, recusandae. Magni odit nisi numquam. Reprehenderit.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Post Lima',
        //     'slug' => 'post-lima',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'excerpt' => 'Excerpt untuk Postingan Lima',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium maxime facere beatae in error facilis itaque enim perferendis ea quasi? Atque pariatur veniam ipsum doloremque laboriosam similique facilis magni assumenda suscipit vel accusamus, facere esse sequi, repellendus nisi molestiae ipsam perferendis. Laboriosam mollitia error aspernatur soluta maiores repellendus adipisci iusto.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sed culpa, omnis esse alias voluptates quaerat eos quia, minima dicta repudiandae ex nulla assumenda eius saepe, ullam commodi. Inventore, facilis tempore neque natus provident nisi facere eos placeat reiciendis dolores? Natus quo, assumenda ipsam, laudantium odio nisi laborum nam eius saepe, dolorem temporibus. Quod, numquam blanditiis. Recusandae fuga odit blanditiis dolores numquam ratione vero dolorem debitis, quos voluptatibus ipsa totam vel? Inventore quidem in eaque aperiam error. Autem ea dolore eligendi corrupti tempora non doloremque, nihil illum iure modi asperiores culpa alias officiis numquam quia, nam explicabo. Esse maiores cupiditate vel mollitia repellat velit quia praesentium quos repudiandae placeat nisi doloremque assumenda facilis accusantium modi dolore, eum recusandae dicta! Cumque accusantium corporis a eveniet ipsa quis voluptas iusto reprehenderit sed. Sunt atque temporibus, enim corporis voluptatem quaerat, praesentium veniam impedit dolore voluptatibus nemo. Quidem, recusandae. Magni odit nisi numquam. Reprehenderit.</p>',
        // ]);
    }
}
