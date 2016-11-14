<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute harus diterima.',
    'active_url'           => ':attribute bukan URL yang valid.',
    'after'                => ':attribute harus tanggal setelah :date.',
    'alpha'                => ':attribute hanya boleh mengandung huruf.',
    'alpha_dash'           => ':attribute hanya boleh mengandung huruf, nomor, dan strip.',
    'alpha_num'            => ':attribute hanya boleh mengandung huruff dan angka.',
    'array'                => ':attribute harus berupa array.',
    'before'               => ':attribute harus tanggal sebelum :date.',
    'between'              => [
        'numeric' => ':attribute harus diantara :min and :max.',
        'file'    => ':attribute harus diantara :min and :max kilobytes.',
        'string'  => ':attribute harus diantara :min and :max karakter.',
        'array'   => ':attribute harus memiliki antara :min and :max item.',
    ],
    'boolean'              => ':attribute harus bernilai true or false.',
    'confirmed'            => 'Konfirmasi :attribute tidak cocok.',
    'date'                 => ':attribute bukan tanggal yang valid.',
    'date_format'          => ':attribute tidak cocok dengan format :format.',
    'different'            => ':attribute dan :other harus berbeda.',
    'digits'               => ':attribute harus :digits digit.',
    'digits_between'       => ':attribute harus diantara :min dan :max digit.',
    'dimensions'           => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'             => ':attribute memiliki nilai yang duplikat.',
    'email'                => ':attribute harus berupa alamat email yang valid.',
    'exists'               => ':attribute yang dipilih tidak valid.',
    'file'                 => ':attribute harus berupa file.',
    'filled'               => 'Kolom :attribute harus diisi.',
    'image'                => ':attribute harus berupa gambar.',
    'in'                   => ':attribute yand dipilih tidak valid.',
    'in_array'             => 'Kolom :attribute tidak ada dalam :other.',
    'integer'              => ':attribute harus berupa integer.',
    'ip'                   => ':attribute harus berupa IP address yang valid.',
    'json'                 => ':attribute harus berupa string JSON yang valid.',
    'max'                  => [
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'file'    => ':attribute tidak boleh lebih besar dari :max kilobytes.',
        'string'  => ':attribute tidak boleh lebih besar dari :max karakter.',
        'array'   => ':attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes'                => ':attribute harus file dengan tipe: :values.',
    'min'                  => [
        'numeric' => ':attribute harus kurang dari :min.',
        'file'    => ':attribute harus kurang dari :min kilobytes.',
        'string'  => ':attribute harus kurang dari :min karakter.',
        'array'   => ':attribute harus memiliki paling tidak :min item.',
    ],
    'not_in'               => ':attribute yang dipilih tidak valid.',
    'numeric'              => ':attribute harus berupa nomor.',
    'present'              => 'Kolom :attribute harus ada.',
    'regex'                => 'Format :attribute tidak valid.',
    'required'             => 'Kolom :attribute dibutuhkan.',
    'required_if'          => 'Kolom :attribute dibutuhkan ketika :other bernilai :value.',
    'required_unless'      => 'Kolom :attribute dibutuhkan kecuali kalau :other dalam nilai :values.',
    'required_with'        => 'Kolom :attribute dibutuhkan ketika :values ada.',
    'required_with_all'    => 'Kolom :attribute dibutuhkan ketika :values ada.',
    'required_without'     => 'Kolom :attribute dibutuhkan ketika :values tidak ada.',
    'required_without_all' => 'Kolom :attribute dibutuhkan ketika tidak ada dari :values yang ada.',
    'same'                 => ':attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => ':attribute harus berukuran :size.',
        'file'    => ':attribute harus berukuran :size kilobytes.',
        'string'  => ':attribute harus berukuran :size characters.',
        'array'   => ':attribute harus memiliki :size item.',
    ],
    'string'               => ':attribute harus berupa string.',
    'timezone'             => ':attribute harus berupa zona yang valid.',
    'unique'               => ':attribute telah digunakan.',
    'url'                  => 'Format :attribute tidak valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
