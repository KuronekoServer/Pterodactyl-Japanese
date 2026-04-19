<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => '指定された FQDN または IP アドレスは有効な IP アドレスに解決できません。',
        'fqdn_required_for_ssl' => 'このノードで SSL を使用するには、公開 IP アドレスに解決される完全修飾ドメイン名が必要です。',
    ],
    'notices' => [
        'allocations_added' => 'このノードに割り当てを追加しました。',
        'node_deleted' => 'ノードをパネルから削除しました。',
        'location_required' => 'このパネルにノードを追加する前に、少なくとも 1 つのロケーションを設定する必要があります。',
        'node_created' => '新しいノードを作成しました。このマシンのデーモンは「Configuration」タブから自動設定できます。サーバーを追加する前に、まず少なくとも 1 つの IP アドレスとポートを割り当ててください。',
        'node_updated' => 'ノード情報を更新しました。デーモン設定を変更した場合、その変更を反映するには再起動が必要です。',
        'unallocated_deleted' => '<code>:ip</code> の未割り当てポートをすべて削除しました。',
    ],
];
