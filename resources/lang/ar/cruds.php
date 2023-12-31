<?php

return [
    'userManagement' => [
        'title'          => 'ادارة المستخدمين',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'الصلاحيات',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'الامتيازات',
        'title_singular' => 'الامتيازات',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'الصلاحيات',
            'permissions_helper' => '',
            'created_at'         => 'تاريخ النشر',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'phone'                       => 'رقم الهاتف ',
            'username'                       => 'اسم المستخدم',
            'id_helper'                => '',
            'name'                     => 'الاسم',
            'name_helper'              => '',
            'email'                    => 'البريد الالكتروني',
            'email_helper'             => '',
            'email_verified_at'        => 'البريد الالكتروني تاكد في',
            'email_verified_at_helper' => '',
            'password'                 => 'كلمة السر',
            'password_helper'          => '',
            'roles'                    => 'الامتيازات',
            'roles_helper'             => '',
            'permissions'                    => 'الصلاحيات',
            'permissions_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'انشئ في',
            'created_at_helper'        => '',
            'updated_at'               => 'اخر تعديل',
            'updated_at_helper'        => '',
            'deleted_at'               => 'تم الحذف في ',
            'deleted_at_helper'        => '',
        ],
    ],
];
