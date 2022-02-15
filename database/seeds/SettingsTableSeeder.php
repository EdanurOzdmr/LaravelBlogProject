<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            [
                [
                    'settings_description' => 'Başlık',
                    'settings_key' => 'title',
                    'settings_value' => 'Laravel ECMS',
                    'settings_type' => 'text',
                    'settings_must' => 0,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Açıklama',
                    'settings_key' => 'description',
                    'settings_value' => 'Laravel ECMS Learning Description',
                    'settings_type' => 'text',
                    'settings_must' => 1,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Logo',
                    'settings_key' => 'logo',
                    'settings_value' => 'logo.png',
                    'settings_type' => 'file',
                    'settings_must' => 2,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Icon',
                    'settings_key' => 'icon',
                    'settings_value' => 'icon.ico',
                    'settings_type' => 'file',
                    'settings_must' => 3,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Anahtar Kelimeler',
                    'settings_key' => 'keywords',
                    'settings_value' => 'laravel,ecms',
                    'settings_type' => 'text',
                    'settings_must' => 4,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Telefon Sabit',
                    'settings_key' => 'phone_sabit',
                    'settings_value' => '0850 XXX XX XX',
                    'settings_type' => 'text',
                    'settings_must' => 5,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Telefon GSM',
                    'settings_key' => 'phone_gsm',
                    'settings_value' => '0850 XXX XX XX',
                    'settings_type' => 'text',
                    'settings_must' => 6,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Mail',
                    'settings_key' => 'mail',
                    'settings_value' => '',
                    'settings_type' => 'text',
                    'settings_must' => 7,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'İlçe',
                    'settings_key' => 'ilce',
                    'settings_value' => 'Topkapı',
                    'settings_type' => 'text',
                    'settings_must' => 8,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'İl',
                    'settings_key' => 'il',
                    'settings_value' => 'İstanbul',
                    'settings_type' => 'text',
                    'settings_must' => 9,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Açık Adres',
                    'settings_key' => 'adres',
                    'settings_value' => 'Topkapı Sarayı Topkapı Caddesi',
                    'settings_type' => 'text',
                    'settings_must' => 10,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Footer Bilgi',
                    'settings_key' => 'footer',
                    'settings_value' => 'EÖ Yazılım',
                    'settings_type' => 'text',
                    'settings_must' => 10,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Home Title',
                    'settings_key' => 'home_title',
                    'settings_value' => 'Moderns Business Features',
                    'settings_type' => 'text',
                    'settings_must' => 10,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Home Detail',
                    'settings_key' => 'home_detail',
                    'settings_value' => '<p>Thes Modern Business template by Start Bootstrap includes:</p>\r\n\r\n<ul>\r\n	<li><strong>Bootstrap v4</strong></li>\r\n	<li>jQuery</li>\r\n	<li>Font Awesome</li>\r\n	<li>Working contact form with validation</li>\r\n	<li>Unstyled page elements for easy customization</li>\r\n</ul>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>\r\n\r\n<p>&nbsp;</p>',
                    'settings_type' => 'ckeditor',
                    'settings_must' => 10,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Home Image',
                    'settings_key' => 'home_image',
                    'settings_value' => '61ba714badb80.png',
                    'settings_type' => 'file',
                    'settings_must' => 10,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ],
                [
                    'settings_description' => 'Slogan',
                    'settings_key' => 'slogan',
                    'settings_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.\r\n',
                    'settings_type' => 'textarea',
                    'settings_must' => 10,
                    'settings_delete' => '0',
                    'settings_status' => '1'
                ]
            ]
        );
    }
}