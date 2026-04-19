<?php

namespace Pterodactyl\Http\Requests\Api\Client\Account;

use Illuminate\Validation\Rule;
use Pterodactyl\Traits\Helpers\AvailableLanguages;
use Pterodactyl\Http\Requests\Api\Client\ClientApiRequest;

class UpdateLanguageRequest extends ClientApiRequest
{
    use AvailableLanguages;

    public function rules(): array
    {
        return [
            'language' => ['required', 'string', Rule::in(array_keys($this->getAvailableLanguages()))],
        ];
    }
}