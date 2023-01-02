<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Complaint;
use App\Models\ComplaintCategory;
use App\Models\Post;
use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(3)->create();
        // Post::factory(20)->create();
        $users = [[
            'name' => 'admin',
            'username' => 'admin',
            'email_verified_at' => now(),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'rw' => '01',
            'rt' => '01',
            'is_admin' => 1,
        ], [
            'name' => 'masyarakat',
            'username' => 'masyarakat',
            'email_verified_at' => now(),
            'email' => 'masyarakat@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'rw' => '01',
            'rt' => '02',
            'is_admin' => 0,
        ]];

        $categories = [[
            'name' => 'Kerja Bakti',
            'slug' => 'kerja-bakti',
        ], [
            'name' => 'Rapat',
            'slug' => 'rapat',
        ], [
            'name' => 'Acara',
            'slug' => 'acara',
        ]];

        $posts = [[
            'title' => "Judul pertama",
            'slug' => "judul-pertama",
            'excerpt' => "Lorem ipsum pertama",
            'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
            'category_id' => 1,
            'user_id' => 1,
        ], [
            'title' => "Judul kedua",
            'slug' => "judul-kedua",
            'excerpt' => "Lorem ipsum kedua",
            'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
            'category_id' => 2,
            'user_id' => 1,
        ], [
            'title' => "Judul ketiga",
            'slug' => "judul-ketiga",
            'excerpt' => "Lorem ipsum ketiga",
            'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
            'category_id' => 3,
            'user_id' => 1,
        ]];

        $complaintCategories = [[
            'name' => 'Kerja Bakti',
            'slug' => 'kerja-bakti',
        ], [
            'name' => 'Rapat',
            'slug' => 'rapat',
        ], [
            'name' => 'Acara',
            'slug' => 'acara',
        ]];

        $complaints = [[
            'title' => "Judul complaint pertama",
            'slug' => "judul-complaint-pertama",
            'excerpt' => "Lorem ipsum pertama",
            'complaint_category_id' => 1,
            'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
            'user_id' => 1,
        ], [
            'title' => "Judul complaint kedua",
            'slug' => "judul-complaint-kedua",
            'excerpt' => "Lorem ipsum kedua",
            'complaint_category_id' => 2,
            'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
            'user_id' => 1,
        ], [
            'title' => "Judul complaint ketiga",
            'slug' => "judul-complaint-ketiga",
            'excerpt' => "Lorem ipsum ketiga",
            'complaint_category_id' => 3,
            'body' => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque, a reprehenderit, cupiditate molestias eum voluptatibus sequi esse tempora, expedita aliquid dolor quo! Assumenda laborum dolorem voluptatum natus ratione optio dicta, aspernatur a harum eum blanditiis iusto maxime temporibus perspiciatis possimus? Sunt asperiores commodi soluta tenetur blanditiis possimus fugit itaque enim nemo sint, facilis repudiandae cupiditate quas impedit quis quasi quibusdam libero! Sunt laborum, placeat possimus rem rerum labore voluptatum sed consequatur atque dicta libero excepturi distinctio eos? Praesentium odit, accusamus laborum at suscipit similique cum reiciendis incidunt esse vero aut eveniet, rem accusantium molestias blanditiis repudiandae? Ipsa maiores soluta magnam.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos quo omnis adipisci nisi amet assumenda quos veniam ipsam repellendus possimus porro, vitae magnam explicabo excepturi officia animi sunt tenetur harum vel iusto molestiae beatae. Iusto culpa minima quisquam qui maiores nihil quam quia velit quidem reiciendis enim itaque sit nam provident cumque voluptates voluptate aliquid repellat, et est accusamus tempora earum ratione cupiditate. Quo esse adipisci voluptates delectus animi sint dolore numquam velit quisquam qui, quod, explicabo sapiente nobis vero eos labore voluptas neque. Similique iste unde placeat, odio, at, minus corporis soluta quidem facere quas provident vitae architecto!</p>",
            'user_id' => 1,
        ]];

        foreach ($users as $user) {
            User::create($user);
        }
        foreach ($categories as $category) {
            Category::create($category);
        }
        foreach ($posts as $post) {
            Post::create($post);
        }
        foreach ($complaintCategories as $complaintCategory) {
            ComplaintCategory::create($complaintCategory);
        }
        foreach ($complaints as $complaint) {
            Complaint::create($complaint);
        }
    }
}
