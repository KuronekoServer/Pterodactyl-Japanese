<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'このサーバーのデフォルト割り当てを削除しようとしていますが、代わりに使用できる割り当てがありません。',
        'marked_as_failed' => 'このサーバーは以前のインストールに失敗したものとしてマークされています。この状態では現在のステータスを切り替えられません。',
        'bad_variable' => ':name 変数の検証でエラーが発生しました。',
        'daemon_exception' => 'デーモンとの通信中に例外が発生し、HTTP/:code のレスポンスコードが返されました。この例外は記録されています。(request id: :request_id)',
        'default_allocation_not_found' => '要求されたデフォルト割り当ては、このサーバーの割り当て一覧に見つかりませんでした。',
    ],
    'alerts' => [
        'startup_changed' => 'このサーバーの起動設定を更新しました。このサーバーの Nest または Egg が変更された場合、ただちに再インストールが実行されます。',
        'server_deleted' => 'サーバーをシステムから削除しました。',
        'server_created' => 'パネルにサーバーを作成しました。デーモンがこのサーバーのインストールを完了するまで数分お待ちください。',
        'build_updated' => 'このサーバーのビルド詳細を更新しました。一部の変更は反映に再起動が必要な場合があります。',
        'suspension_toggled' => 'サーバーの停止状態を :status に変更しました。',
        'rebuild_on_boot' => 'このサーバーは Docker Container の再構築が必要としてマークされました。次回サーバー起動時に実行されます。',
        'install_toggled' => 'このサーバーのインストール状態を切り替えました。',
        'server_reinstalled' => 'このサーバーは再インストールのキューに追加され、ただちに開始されます。',
        'details_updated' => 'サーバー詳細を更新しました。',
        'docker_image_updated' => 'このサーバーで使用するデフォルトの Docker Image を変更しました。変更を反映するには再起動が必要です。',
        'node_required' => 'このパネルにサーバーを追加する前に、少なくとも 1 つのノードを設定する必要があります。',
        'transfer_nodes_required' => 'サーバーを転送する前に、少なくとも 2 つのノードを設定する必要があります。',
        'transfer_started' => 'サーバー転送を開始しました。',
        'transfer_not_viable' => '選択したノードには、このサーバーを収容するために必要なディスク容量またはメモリがありません。',
    ],
];
