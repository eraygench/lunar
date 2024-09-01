<?php

return [

    'label' => 'Kadro',

    'plural_label' => 'Kadro',

    'table' => [
        'firstname' => [
            'label' => 'Ad',
        ],
        'lastname' => [
            'label' => 'Soyad',
        ],
        'email' => [
            'label' => 'E-posta',
        ],
        'admin' => [
            'badge' => 'Yönetici',
        ],
    ],

    'form' => [
        'firstname' => [
            'label' => 'Ad',
        ],
        'lastname' => [
            'label' => 'Soyad',
        ],
        'email' => [
            'label' => 'E-posta',
        ],
        'password' => [
            'label' => 'Şifre',
            'hint' => 'Şifreyi sıfırla',
        ],
        'admin' => [
            'label' => 'Yönetici',
            'helper' => 'Süper yönetici rolleri panelden değiştirilemez.',
        ],
        'roles' => [
            'label' => 'Roller',
            'helper' => ':roles tam erişime sahiptir',
        ],
        'permissions' => [
            'label' => 'İzinler',
        ],
        'role' => [
            'label' => 'Rol Adı',
        ],
    ],

    'action' => [
        'acl' => [
            'label' => 'Erişim Kontrolü',
        ],
        'add-role' => [
            'label' => 'Rol Ekle',
        ],
        'delete-role' => [
            'label' => 'Rol Sil',
            'heading' => 'Rolü sil: :role',
        ],
    ],

    'acl' => [
        'title' => 'Erişim Kontrolü',
        'tooltip' => [
            'roles-included' => 'İzin aşağıdaki rollere dahildir',
        ],
        'notification' => [
            'updated' => 'Güncellendi',
            'error' => 'Hata',
            'no-role' => 'Rol kayıtlı değil',
            'no-permission' => 'İzin kayıtlı değil',
            'no-role-permission' => 'Rol ve İzin kayıtlı değil',
        ],
    ],

];
