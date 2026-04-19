<?php

return [
    'daemon_connection_failed' => 'デーモンとの通信中に例外が発生し、HTTP/:code のレスポンスコードが返されました。この例外は記録されています。',
    'node' => [
        'servers_attached' => 'ノードを削除するには、関連付けられたサーバーが存在しない必要があります。',
        'daemon_off_config_updated' => 'デーモン設定は更新されましたが、Daemon 上の設定ファイルを自動更新する際にエラーが発生しました。変更を反映するには、デーモンの設定ファイル (config.yml) を手動で更新してください。',
    ],
    'allocations' => [
        'server_using' => '現在この割り当てにはサーバーが割り当てられています。割り当ては、どのサーバーにも割り当てられていない場合のみ削除できます。',
        'too_many_ports' => '1 つの範囲に 1000 を超えるポートを一度に追加することはサポートされていません。',
        'invalid_mapping' => ':port に指定されたマッピングは無効で、処理できませんでした。',
        'cidr_out_of_range' => 'CIDR 表記では /25 から /32 のマスクのみ使用できます。',
        'port_out_of_range' => '割り当てで使用するポートは 1024 より大きく、65535 以下である必要があります。',
    ],
    'nest' => [
        'delete_has_servers' => 'アクティブなサーバーが関連付けられている Nest は、パネルから削除できません。',
        'egg' => [
            'delete_has_servers' => 'アクティブなサーバーが関連付けられている Egg は、パネルから削除できません。',
            'invalid_copy_id' => 'スクリプトのコピー元として選択された Egg は存在しないか、自身をコピー元に指定しています。',
            'must_be_child' => 'この Egg の「Copy Settings From」指定は、選択した Nest の子オプションである必要があります。',
            'has_children' => 'この Egg は 1 つ以上の他の Egg の親です。この Egg を削除する前に、それらの Egg を削除してください。',
        ],
        'variables' => [
            'env_not_unique' => '環境変数 :name は、この Egg 内で一意である必要があります。',
            'reserved_name' => '環境変数 :name は保護されているため、変数へ割り当てできません。',
            'bad_validation_rule' => 'バリデーションルール ":rule" は、このアプリケーションでは有効ではありません。',
        ],
        'importer' => [
            'json_error' => 'JSON ファイルの解析中にエラーが発生しました: :error。',
            'file_error' => '指定された JSON ファイルは有効ではありません。',
            'invalid_json_provided' => '指定された JSON ファイルは認識可能な形式ではありません。',
        ],
    ],
    'subusers' => [
        'editing_self' => '自分自身のサブユーザーアカウントは編集できません。',
        'user_is_owner' => 'このサーバーの所有者をサブユーザーとして追加することはできません。',
        'subuser_exists' => 'そのメールアドレスのユーザーは、すでにこのサーバーのサブユーザーとして割り当てられています。',
    ],
    'databases' => [
        'delete_has_databases' => 'アクティブなデータベースが関連付けられているデータベースホストサーバーは削除できません。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '連結タスクの最大実行間隔は 15 分です。',
    ],
    'locations' => [
        'has_nodes' => 'アクティブなノードが関連付けられているロケーションは削除できません。',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">Node #:node</a> のキー失効に失敗しました。:error',
    ],
    'deployment' => [
        'no_viable_nodes' => '自動デプロイの要件を満たすノードが見つかりませんでした。',
        'no_viable_allocations' => '自動デプロイの要件を満たす割り当てが見つかりませんでした。',
    ],
    'api' => [
        'resource_not_found' => '要求されたリソースはこのサーバーに存在しません。',
    ],
];
