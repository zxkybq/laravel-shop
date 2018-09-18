<?php

return [
    'alipay' => [
        'app_id'         => '2016092200570032',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmksh6NABQNh+qFBS/kCzdX2/YMU9gSt5cyyQHqJiFuS4qGW+W1Y2tuKYzapy8v610qtuMcpI7FmwLZRnrn/b9vxzN9FblEM2Ll96dpU1bUHdoYAnHhQQKfYrs0wu2kGWetnJiUdPwhe58vecCt4zUTKlmIPf5OxczfvY8csJ22si0gnWkKS+w62E5LqEWf2+sm8YM/Zg86QKFmgEGEw5lo30E1dA5K+66RhVPgnacs2DcisBM5cAHQlhJY5r5ilkiaAJv/U8xpu92JKSfFavF7ORSpCfjVQZB57IUoVepNg71rDiNb1EgPQM5DUBbepZLCe+MAhpzKp9xYPL2FQ0FwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAtsxOWSTi0s70qgluIBy9j+2ii+/tVwSSUEyxzNGrc8T43f/e1uh8LCKZD6/lTKY7J9gjoGSJ/qPa3A8QVvhEWtbSvZilRUH3tfl20TeqLdNrNWP7aIQ4t9854NOZKJFld4C2Rwb1vHu+/yE+BRw4mtce5BXu39b+rMWH6TwMFymmYjjocKGhfPZZzL2PkuHYLOVrVFq24XRRlCoW566Y2K9l8aWOD3Jh/lRARntVK3DKlK3fVYpUHDlK++H9KOz1+CM1EmASOoAMJpw2M8+AohTaQr30h0ZVCcpYf6lJhcgNyb/u365aYEwy0T+wjTHvc8NHI9Ot7mPjaVE3QkmyQwIDAQABAoIBADeW5fSiDQCCw1C6UW0ekF8mqxnXOtwNndkhmahp0rQAIJaSa1f7l1dsphNpMFgg7ThuuFbcfEKd3b6yLgvksBTX43qY4xmut//0/zccsHoDI0U3RItCOmVgUx+V+aumm669y7DJ4w0QrMK1f0DaljQwW0qNiPk1TnmIEI7THfIkynrXuyWIUkPwesqJX+xGxk/lkyfwR67uHzMu/aUfAGT78UUyfrJn5GUGy5LndBv819RHHBg6fjoMugbM3+PBxLNvJj+wRzqADeif8dD0CLwHwMOdJEy4h1CIIVrAwrTmc+kOi4kA94m8U7r1VndkXZVSliHvb7rxVyq+l78UYbECgYEA59/98fv/xUfHO6oOoNEc0p5XEr8ic7pjiVCpCUw0VMd2QB/QoDF8qX26Nm5QlqQ63NS0gUvPnNS2sOoW3MsGhZq+PBNGRXocDdObb2aabvPy0QTCKwvov5/JX5n+osAEwqHhqLwhrWQBMh8egmT6jkL/TDhZnJ6E9RDdxXOESfcCgYEAydElo+XNnNpi5jILNHVIIq47sCPvOxIHLC5BkA8tOmHinu7WtAB0Lo+3wQRxdKAeHdO3svo0gYdwq1bWHOP67wAq6uHIJT5Hx9pW4izuCluVwktyPo13YDjq4WEoE5lu0JHb5ySy+PEK4zaFjuVcSJVkCQrmsFp3jaxbeDVtJxUCgYEA2VR2foKFfnECagfAYjbdXwON9UI0lmfSt3dkmBRW0EeLrBqlvh/kCjCPgkjvO+J+UVEERlO6KfKtsTAXcabRXBRnzYL7UE9dUBBQFaADi48WvZZKL3KgGks3wWVi50Q2sf5stWxv3EZpYIMOY4Ul2oUtKFGAnG1vjQrb8h+NlI0CgYAPFg5NQSlslzqbYJRL2JSK2yFlGlqQvNlCaTbHcQr9eUG6hboQ/JOyw1WGHTHp+OonaqMpwuBX6mr2s+gPgs9IPGf45OXUOuKcwuqJv7gPmCcKvh8NJAAPdlHAhUW8qVSKTMz2a1zhlQsuTu4O74BFgL1Ym7MA7dJQCdlQlBXTvQKBgQCusFG/+H1zM+G6adFYg+jCnUKcYzk1Qetks1BycmM8XLjGk0ag5QUSK+8VZ0ZMb752coqyfHDCEbigYjAlw+phJ/wcTu2jB6e8ZqYqvQ29HXudcjTKxJs4HSUUz5gAnODN5P5TACg5ppXqq+451UJm8cZ3T+o0fUtW7PIDOtnmIA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];