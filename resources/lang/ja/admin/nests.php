<?php

return [
    'notices' => [
        'created' => '新しい Nest :name を作成しました。',
        'deleted' => '要求された Nest をパネルから削除しました。',
        'updated' => 'Nest の設定オプションを更新しました。',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'この Egg と関連する変数をインポートしました。',
            'updated_via_import' => 'この Egg は指定されたファイルを使用して更新されました。',
            'deleted' => '要求された Egg をパネルから削除しました。',
            'updated' => 'Egg の設定を更新しました。',
            'script_updated' => 'Egg のインストールスクリプトを更新しました。今後サーバーのインストール時に実行されます。',
            'egg_created' => '新しい Egg を作成しました。この新しい Egg を反映するには、実行中のデーモンを再起動してください。',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '変数 ":variable" を削除しました。再構築後、この変数はサーバーで利用できなくなります。',
            'variable_updated' => '変数 ":variable" を更新しました。変更を反映するには、この変数を使用しているサーバーを再構築してください。',
            'variable_created' => '新しい変数を作成し、この Egg に割り当てました。',
        ],
    ],
];
