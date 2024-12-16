<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    /**
     * Custom validation messages in Indonesian
     *
     * Here we define custom validation messages in Indonesian
     */
    public array $messages = [
        'nama_user' => [
            'required'   => 'Nama lengkap harus diisi.',
            'min_length' => 'Nama lengkap minimal terdiri dari 3 karakter.',
            'max_length' => 'Nama lengkap maksimal terdiri dari 255 karakter.'
        ],
        'username' => [
            'required'   => 'Username harus diisi.',
            'is_unique'  => 'Username sudah terdaftar, silakan pilih username lain.',
            'min_length' => 'Username minimal terdiri dari 5 karakter.'
        ],
        'password' => [
            'required'   => 'Password harus diisi.',
            'min_length' => 'Password minimal terdiri dari 6 karakter.'
        ],
        'password2' => [
            'matches'    => 'Password konfirmasi tidak cocok dengan password.'
        ],
        'status_user' => [
            'required'   => 'Status pengguna harus dipilih.'
        ]
    ];
}
